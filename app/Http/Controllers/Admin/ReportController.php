<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = DB::table("reports")->get();
        return view("admin.report.index", ["reports" => $reports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.report.add-and-edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'file' => 'required',
            'title_hy' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $request->validate($rules, $customMessages);
        $file = $request->file("file");
        $image = $file->getClientOriginalName();
        DB::table("reports")->insert([
            'file' => $image,
            "text_hy" => $request->input("title_hy"),
            "text_en" => $request->input("title_en"),
            "text_ru" => $request->input("title_ru"),
            "created_at" => Carbon::now()->format("Y-m-d")
        ]);
        return redirect()->to("admin/report");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = DB::table('reports')->where("id", "=", $id)->first();
        return view("admin.report.add-and-edit", ['report' => $report]);
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
            'title_hy' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $request->validate($rules, $customMessages);
        if($request->hasFile("file")){
            $file = $request->file("file");
            $fileName = $file->getClientOriginalName();
            if(!file_exists(public_path($fileName))){
                $file->move(public_path("/files"),  $fileName);
            }
        } else {
            $fileName = DB::table("reports")->where("id","=", $id)->first()->file;
        }
        $request->validate($rules, $customMessages);
        DB::table("reports")->where("id", "=", $id)->update([
            "file" => $fileName,
            "text_hy" => $request->input("title_hy"),
            "text_en" => $request->input("title_en"),
            "text_ru" => $request->input("title_ru")
        ]);
        return redirect()->to("admin/report");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("reports")->where("id", "=", $id)->delete();
        $reports = DB::table("reports")->get();
        return redirect("admin/report");
    }
}
