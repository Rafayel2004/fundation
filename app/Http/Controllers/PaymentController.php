<?php

namespace App\Http\Controllers;

use App\Models\Order;
use http\Env\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        Log::info('request>> '.json_encode($request));
    }

    public function donate(Request $request)
    {
//        return response()->json($request);
        $rules = [
            "amount" => "required|numeric|min:2",
            'currency' => 'required|in:051,643,978,840',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email'
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.',
            'email' => "Please insert a valid email address",
            'min' => "The :attribute min is 1"
        ];
        $request->validate($rules, $customMessages);
//
      $lang = session()->get('locale');
        if ($lang == 'hy') {
            $lang = 'hy';
        }
        // TODO mobile not working
        Log::info('API_URL' . config('app.API_URL'));
        try {
            $order = Order::create([
                "firstname" => $request->firstname,
                "lastname" => $request->lastname,
                "email" => $request->email,
                "donate_monthly" => $request->monthly ? true : false,
                "amount" => $request->amount,
                "currency" => $request->currency,
                "secret" => $request->security ? true : false,
            ]);
            $url = config('app.url')."/" . session()->get('locale');
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL            => config('app.API_URL'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => '',
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => 'POST',
                CURLOPT_POSTFIELDS     => array('userName'    => config('app.API_USERNAME'),
                                                'password'    => config('app.API_PASSWORD'),
                                                'orderNumber' => $order->id * rand(100,500),
                                                'amount'      => $request->amount*100,
                                                'returnUrl'   => $url."/thank-you",
                                                'language'    => $lang,
                                                'currency'    => $request->currency),
            ));
            $response = curl_exec($curl);
            Log::info('response =>>>>>>>>' . $response);
            $response = json_decode($response);
            if ($response && $response->errorCode == 0) {
                curl_close($curl);
                $order->update(['unique_bank_order_id' => $response->orderId]);
                return response()->json($response);
            } else {
                $response = curl_error($curl);
                curl_close($curl);
                Log::info('curl error  =>>>>>>>>' . json_encode($response));
            }
            return response()->json("something went wrong", 500);
        } catch (\Exception $exception) {
            dd($exception);
            Log::info('$exception =>>>>>>>>' . $exception->getMessage());
            return response()->json("something went wrong", 500);
        }
    }
}
