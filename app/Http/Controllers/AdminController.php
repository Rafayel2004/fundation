<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function admin() {
        return view('admin/index');
    }
    public function about () {
        return view('admin/about');
    }
    public function news () {
        $news = DB::table("news")->get();
        return view('admin/news', ["news" => $news]);
    }
}

