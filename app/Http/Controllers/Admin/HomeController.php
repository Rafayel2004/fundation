<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table("home")->get();
        return view('admin/index',["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table("home")->first();
        return view("admin.home.show",["data" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = DB::table("home")->first();
       return view("admin.home.edit", ["data" => $data],["type" => "update"]);
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
            'ContentArm' => 'required',
            'ContentRu' => 'required',
            'ContentEng' => 'required',
            'AboutHy' => 'required',
            'AboutRu' => 'required',
            'AboutEn' => 'required',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $request->validate($rules, $customMessages);
        if($request->hasFile("image")){
            $file = $request->file("image");
            $image = $file->getClientOriginalName();
            if(!Storage::exists("public/photos/$image")){
                $image->storeAs("/public/photos/", $image);
            }
        } else {
            $image = DB::table("home")->select("image")->where("id", "=", $id)->first()->image;
        }
        DB::table("home")->where("id", '=', $id)->update([
            'image' => $image,
            "goal_content_en" => $request->input("ContentEng"),
            "goal_content_ru" => $request->input("ContentRu"),
            "goal_content_hy" => $request->input("ContentArm"),
            "about_hy" => $request->input("AboutHy"),
            "about_en" => $request->input("AboutEn"),
            "about_ru" => $request->input("AboutRu"),
            "updated_at" => now()
        ]);
        $data = DB::table("home")->get();
        return redirect()->to("admin/home")->with(["data" => $data]);


        print_r($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("home")->where("id", "=", $id)->delete();
        $data = DB::table("home")->get();
        return redirect("admin/home")->with(["data" => $data]);
    }
}
