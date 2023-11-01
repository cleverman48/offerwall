<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;
use App\Models\Offer;
use Carbon\Carbon;


class EarnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        return view('earn', ['user_id' => $user_id]);
    }

    public function lootably_offers(Request $request)
    {
        $url = "https://api.lootably.com/api/v1/offers/get?apiKey=zwnhiw8degm4vsso16p4qnguwpgzxzbdnck37oht1&placementID=clhedla0e0oh101uy7xwj55vz";
        $response = Http::get($url);
        if ($response->successful()) {
            return $response->json(); // Convert the response to JSON

            // Process the data as needed
        } else {
            // Handle the unsuccessful response
            return $response->status();
            // Handle the error accordingly
        }

    }

    public function notik_offers(Request $request)
    {
        $url = "https://notik.me/api/v2/get-offers/all?api_key=tM9z2VjFRUGQ2iBdVZy43suBlzVl4a3t&pub_id=pO8AAu&app_id=ENRGtwfmUd";
        $response = Http::get($url);
        if ($response->successful()) {
            return $response->json(); // Convert the response to JSON

            // Process the data as needed
        } else {
            // Handle the unsuccessful response
            return $response->status();
            // Handle the error accordingly
        }

    }
    public function get_iframe(Request $request)
    {
        $user_id = Auth::user()->id;
        $lootably_url = "https://wall.lootably.com/?placementID=clhedla0e0oh101uy7xwj55vz&sid=" . $user_id;
        $notik_url = "https://notik.me/coins?api_key=tM9z2VjFRUGQ2iBdVZy43suBlzVl4a3t&pub_id=pO8AAu&app_id=ENRGtwfmUd&user_id=" . $user_id;
        $url = "";
        if ($request->partner == "lootably")
            $url = $lootably_url;
        else
            $url = $notik_url;
        $response = Http::get($url);
        if ($response->successful()) {
            return $response->body(); // Convert the response to JSON

            // Process the data as needed
        } else {
            // Handle the unsuccessful response
            return $response->status();
            // Handle the error accordingly
        }
    }
    public function set_lootably_offers(Request $request)
    {
        $user_id = $request->user_id;
        $amount = $request->amount;
        $payout = $request->payout;
        $offer_id = $request->offer_id;
        $offer_name = $request->offer_name;
        $txn_id = $request->txn_id;
        $status = $request->status;
        $multi_status = $request->multi_status;
        $hash = $request->hash;
        $conversion_ip = $request->ip;


        $offer = new Offer;
        $offer->user_id = $user_id;
        $offer->partner = "lootably";
        $offer->offer_name = $offer_name;
        $offer->offer_id = $offer_id;
        $offer->tx_id = $txn_id;
        $offer->ip = $conversion_ip;
        $offer->status = $status;
        $offer->multi_status = $multi_status;
        $offer->payout = $payout;
        $offer->currency_reward = $amount;
        $currentDate = Carbon::now();
        $offer->created_at = $currentDate;
        $offer->save();
        return 1;
    }
    public function set_notik_offers(Request $request)
    {
        $pub_id = $request->pub_id;
        $app_id = $request->app_id;
        $user_id = $request->user_id;
        $amount = $request->amount;
        $payout = $request->payout;
        $offer_id = $request->offer_id;
        $offer_name = $request->offer_name;
        $event_id = $request->event_id;
        $event_name = $request->event_name;
        $txn_id = $request->txn_id;
        $currency_name = $request->currency_name;
        $timestamp = $request->timestamp;
        $hash = $request->hash;
        $conversion_ip = $request->conversion_ip;


        $offer = new Offer;
        $offer->user_id = $user_id;
        $offer->partner = "notik";
        $offer->offer_name = $offer_name;
        $offer->offer_id = $offer_id;
        $offer->tx_id = $txn_id;
        $offer->ip = $conversion_ip;
        $offer->status = 0;
        $offer->multi_status = 0;
        $offer->payout = $payout;
        $offer->currency_reward = $amount;
        $currentDate = Carbon::now();
        $formattedDate = $currentDate->format('Y-m-d');
        $offer->created_at = $currentDate;
        $offer->save();
        return 1;
        /*Check if duplicate transaction*/
        $transactionExist = false; // Search in database if current txn_id exist. True if exist
        if ($transactionExist) {
            /*Duplicate transaction detected. Do not reward user but send us postback received positive response*/
            return 1;
        }

        /*Create validation hash and validate hashes*/
        $secretKey = "ENRGtwfmUd"; // This has to be your App's secret key that you can find in you App detail page
        /*Get the currently active http protocol*/
        $protocol = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") ? "https" : "http";
        /*Build the full callback URL*/
        /*Example: https://url.com?param1=foo&param2=bar&hash=3171f6b78e06cadcec4c9c3b15f8588400e8738*/
        $url = "$protocol://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        /*Get the callback URL without the "hash" query parameter*/
        /*Example: https://url.com?param1=foo&param2=bar*/
        $urlWithoutHash = substr($url, 0, -strlen("&hash=$hash"));
        /*Generate a hash from the complete callback URL without the "hash" query parameter*/
        $generatedHash = hash_hmac("sha1", $urlWithoutHash, $secretKey);

        /*Check if the generated hash is the same as the "hash" query parameter*/
        if ($generatedHash == $hash) {
            /*Validation successful. Queue your user credit functions and send us postback received positive response*/

            return 1;
        } else {
            /*Hash not equal. Send error response.
            Try to fix any errors found for hash validation.
            Contact us in case the postback is from our ip and need some assistance.*/
            return 0;
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}