<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
    {
        $data = DB::table("home")->first();
        return view('home',["data" => $data]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function about()
    {
        $members = DB::table('about')->get();
        return view('about',["members" => $members]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function report()
    {
        $reports = DB::table("reports")->get();
        return view('report', ["reports" => $reports]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function donate()
    {
        $orders = DB::table("orders")->where("secret", "=", true)->where("merchant_order_id", "!=", null)->get();
        return view('donate-new',["orders" => $orders]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function news()
    {
        $news = DB::table("news")->paginate(3);
        return view('news',["news" => $news]);
    }

    public function thankYou(Request $request)
    {
//        dd($request);
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => config('app.API_ORDER_STATUS'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'userName' => config('app.API_USERNAME'),
                    'password' => config('app.API_PASSWORD'),
                    'orderId' => $request->orderId),
            ));

            $response = curl_exec($curl);
            Log::info('order status response coming from api, thank you page =>>>>>>>>' . $response);
            Log::info('thankYou request all  =>>>>>>>>' . json_encode($request->all()));
            $response = json_decode($response);
//            \Stripe::setApiKey(env('STRIPE_SECRET'));
            if ($response && $response->orderStatus == 2) {
                // if success then  updating merchant_id field(just not to add additional column in db, this one already exist :))
                $order = Order::where('unique_bank_order_id', $request->orderId)->where('merchant_order_id', null)->first();
                Log::info('order  =>>>>>>>>' . json_encode($order));
                if ($order) {
                    $order->update(['merchant_order_id' => 'paid']);
                    Log::info('order updated after success');
                    return view('thank-you');
                } else {
                  return view("errors.404");
                }
            }
//            dd($response);
        } catch (\Exception $e) {
            Log::info('thank you page exception  =>>>>>>>>' . json_encode($e->getMessage()));
        }


        Log::info('order not found');
        return view('errors.404');
    }
    public function more(Request $request) {
        $news = DB::table("news")->where("id", "=", $request->route("id"))->first();
        return view("more", ["news" => $news]);
    }
}
