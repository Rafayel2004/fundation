<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function admin() {
        $data = DB::table("home")->get();
        return view('admin/index',["data" => $data]);
    }
    public function news () {
        $news = DB::table("news")->get();
        return view('admin/news', ["news" => $news]);
    }
    public function donate () {
        $orders = DB::table("orders")->get();
        return view('admin/donate/index', ["orders" => $orders]);
    }
    public function report () {
       $reports = DB::table("reports")->get();
        return view('admin/report/index', ["reports" => $reports]);
    }
}

