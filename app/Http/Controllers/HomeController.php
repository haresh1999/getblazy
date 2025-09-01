<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShoppingRequest;
use App\Http\Requests\SubscribeRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function getBlazy()
    {
        $title = 'Buy from trusted sellers or grow your business with ease — all in one platform. Fast, secure, and built for both retailers and wholesalers.';

        $subTitle = 'The smarter way to shop and sell adult products';

        return view('home', compact('title', 'subTitle'));
    }

    public function miami()
    {
        $title = 'Miami Weed Delivery — Fast, Discreet, Reliable. Buy from trusted sellers or grow your business with ease — all in one platform.';

        $subTitle = 'Order premium flower, vapes, and edibles from trusted local retailers. Delivery in 90 minutes or less in active Miami zones.';

        return view('miami_weed_delivery', compact('title', 'subTitle'));
    }

    public function detroit()
    {
        $title = 'Detroit Weed Delivery — Fast, Discreet, Reliable. Buy from trusted sellers or grow your business with ease — all in one platform.';

        $subTitle = 'Order premium flower, vapes, and edibles from trusted local retailers. Delivery in 90 minutes or less in active Detroit zones.';

        return view('detroit_weed_delivery', compact('title', 'subTitle'));
    }

    public function chicago()
    {
        $title = 'Chicago Weed Delivery — Fast, Discreet, Reliable. Buy from trusted sellers or grow your business with ease — all in one platform.';

        $subTitle = 'Order premium flower, vapes, and edibles from trusted local retailers. Delivery in 90 minutes or less in active Chicago zones.';

        return view('chicago_weed_delivery', compact('title', 'subTitle'));
    }

    public function shopping(ShoppingRequest $request)
    {
        $input = $request->validated();

        Session::put('location', $input);

        $queryString = '?' . http_build_query($input);

        $redirect_to = env('SHOPPING_URL') . $queryString;

        return redirect()->to($redirect_to);
    }

    public function subscribe(SubscribeRequest $request)
    {
        $input = $request->validated();

        $data = [
            'secret' => config('services.general.google_recaptcha_secret_key'),
            'response' => $request->{'g-recaptcha-response'} ?? null,
            'remoteip' => $request->ip()
        ];

        // Initialize cURL
        $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

        // Execute POST request
        $result = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response
        $response = json_decode($result, true);

        // Check reCAPTCHA success
        if (empty($response['success']) || !$response['success']) {

            return redirect()
                ->back()
                ->with('response.error', 'Captcha verification failed. Please try again.');
        }

        DB::table('subscribers')->insert([
            'email' => $input['email'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()
            ->back()
            ->with('response.success', 'Thank you for subscribing! Our latest news and updates will be in your inbox shortly.');
    }
}
