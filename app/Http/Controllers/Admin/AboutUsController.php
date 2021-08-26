<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = DB::table("about")->paginate(7);
        return view("admin.aboutUs.index", ["members" => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.aboutUs.add-and-edit",["type" => "store"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'fullNameEn' => 'required',
            'professionEn' => 'required',
            'fullNameRu' => 'required',
            'professionRu' => 'required',
            'fullNameHy' => 'required',
            'professionHy' => 'required'
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $request->validate($rules, $customMessages);
        $image = $request->file("image");
        $fileName = time() .  "_" . $image->getClientOriginalName();
        Db::table("about")->insert([
            'image' => $fileName,
            'full_name_en' => $request->input("fullNameEn"),
            'profession_en' => $request->input("professionEn"),
            'full_name_ru' => $request->input("fullNameRu"),
            'profession_ru' => $request->input("professionRu"),
            'full_name_hy' => $request->input("fullNameHy"),
            'profession_hy' => $request->input("professionHy")
        ]);
        $image->storeAs("/public/image/", $fileName);
        $members = DB::table("about")->get();
        return redirect()->to("admin/about")->with(["member" => $members]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = DB::table("about")->where("id", "=", $id)->first();
        return view("admin.aboutUs.show", ["member" => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = DB::table("about")->where("id", "=", $id)->first();
        return view("admin.aboutUs.add-and-edit",["member" => $member],["type" => "update"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'fullNameEn' => 'required',
            'professionEn' => 'required',
            'fullNameRu' => 'required',
            'professionRu' => 'required',
            'fullNameHy' => 'required',
            'professionHy' => 'required'
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $request->validate($rules, $customMessages);
        if($request->hasFile("image")){
            $file = $request->file("image");
            $image = time() .  "_" . $file->getClientOriginalName();
            $file->storeAs("/public/image/", $image);
        } else {
            $image = DB::table("about")->select("image")->where("id", "=", $id)->first()->image;

        }

        DB::table("about")->where("id", '=', $id)->update([
            'image' => $image,
            'full_name_en' => $request->input("fullNameEn"),
            'profession_en' => $request->input("professionEn"),
            'full_name_ru' => $request->input("fullNameRu"),
            'profession_ru' => $request->input("professionRu"),
            'full_name_hy' => $request->input("fullNameHy"),
            'profession_hy' => $request->input("professionHy")
        ]);
        $members = DB::table("about")->get();
        return redirect()->to("admin/about")->with(["members" => $members]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("about")->where("id", "=", $id)->delete();
        $member = DB::table("about")->get();
        return redirect("admin/about")->with(["member" => $member]);
    }
}
