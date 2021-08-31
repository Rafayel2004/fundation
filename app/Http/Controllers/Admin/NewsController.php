<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table("news")->get();
        return view('admin/news', ["news" => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
        return view("admin/add-and-edit",["type" => "store"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        print_r("something");
        $rules = [
            'image' => 'required',
            'ContentArm' => 'required',
            'ContentRu' => 'required',
            'ContentEng' => 'required'
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $request->validate($rules, $customMessages);
        $image = $request->file("image");
        $fileName = $image->getClientOriginalName();
        if(!Storage::exists("public/photos/$fileName")){
            $image->storeAs("/public/photos/", $fileName);
        }
        Db::table("news")->insert([
            "image" => $fileName,
            "content_en" => $request->input("ContentEng"),
            "content_ru" => $request->input("ContentRu"),
            "content_hy" => $request->input("ContentArm"),
            "created_at" => Carbon::now()->format("Y-m-d")
        ]);
        $news = DB::table("news")->get();
        return redirect()->to("admin/news")->with(["news" => $news]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentNews = DB::table("news")->where("id", '=', $id)->first();
        return view("admin/show",["news" => $currentNews]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentNews = DB::table("news")->where("id", '=', $id)->first();
        return view("admin/add-and-edit", ["currentNews" => $currentNews],["type" => "update"]);
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
//        print_r($id);
        $rules = [
            'ContentArm' => 'required',
            'ContentRu' => 'required',
            'ContentEng' => 'required'
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
            $image = DB::table("news")->select("image")->where("id", "=", $id)->first()->image;
        }

        DB::table("news")->where("id", '=', $id)->update([
            'image' => $image,
            "content_en" => $request->input("ContentEng"),
            "content_ru" => $request->input("ContentRu"),
            "content_hy" => $request->input("ContentArm"),
            "updated_at" => now()
        ]);
        $news = DB::table("news")->get();
        return redirect()->to("admin/news")->with(["news" => $news]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        print_r($id);
        DB::table("news")->where("id", "=", $id)->delete();
        $news = DB::table("news")->get();
        return redirect("admin/news")->with(["news" => $news]);
    }
}
