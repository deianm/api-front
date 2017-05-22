<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Cookie;


class DashboardController extends Controller
{

    protected $brand_id;

    public function __construct()
    {

        session_start();

        if (isset($_SESSION['brand_id'])) {
            $this->brand_id = $_SESSION['brand_id'];
        }

    }

    /*
     * Views
     */

    public function index()
    {

        //Check for if brand_id exists else go back to login screen

        if (!isset($_SESSION['brand_id'])) {
            return redirect('login');
        }


        $brand_feed = DB::table('brand_feed')
            ->where('brand_id', '=', $this->brand_id)
            ->get();

        return view('dashboard.dashboard')->with('brand_feed', $brand_feed);

    }

    public function offers()
    {

        $current_offers_array = [];
        $i = 0;

        $current_offers = DB::table('brand_offers')
            ->where('brand_id', '=', $this->brand_id)
            ->where('expired', '=', '1')
            ->get();

        foreach ($current_offers as $offer){

            $start_date = date_create($offer->start_date);
            $expiration_date = date_create($offer->expiration_date);

            $days_count = date_diff($start_date, $expiration_date);
            $current_offers_array[$i]['id'] = $offer->id;
            $current_offers_array[$i]['brand_id'] = $offer->brand_id;
            $current_offers_array[$i]['hashtag'] = $offer->hashtag;
            $current_offers_array[$i]['offer_details'] = $offer->offer_details;
            $current_offers_array[$i]['days_left'] = $days_count->days;
            $current_offers_array[$i]['offer_cost'] = $offer->offer_cost;
            $current_offers_array[$i]['offer_posts'] = $offer->offer_posts;
            $current_offers_array[$i]['offer_likes'] = $offer->offer_likes;

            $i++;

        }

        $current_offers_object = (object) $current_offers_array;

        $expired_offers = DB::table('brand_offers')
            ->where('brand_id', '=', $this->brand_id)
            ->where('expired', '=', '0')
            ->get();

        return view('dashboard.offers')->with('current', $current_offers_object)->with('expired', $expired_offers);

    }

    public function stats()
    {

        if (!isset($_SESSION['brand_id'])) {

            return redirect('login');

        }

        return view('dashboard.stats');

    }

    public function users()
    {

        if (!isset($_SESSION['brand_id'])) {

            return redirect('login');

        }

        $new_users = DB::table('assigned_users')->where('assigned_brand_id', '!=', $this->brand_id)->get();

        //Display New Users for Brand
        /* TODO: Array
        $new_users = DB::table('advertising_users')
            ->leftJoin('assigned_users', 'advertising_users.instagram_id', '=', 'assigned_users.instagram_id')
            ->leftJoin('brand_status', 'advertising_users.instagram_id', '=', 'brand_status.instagram_id')
            ->where('assigned_users.assigned_brand_id', '!=', $this->brand_id)
            ->select('advertising_users.instagram_id',
                'advertising_users.user_name',
                'advertising_users.followers',
                'advertising_users.full_name',
                'advertising_users.profile_picture',
                'advertising_users.created_at',
                'advertising_users.joined_brand_date')
            ->where('status', '=', null)
            ->get();
        */
        //Display Pending Users Only

        /* TODO: Array
         */

        $pending_users = DB::table('brand_status')
            ->leftJoin('advertising_users', 'brand_status.instagram_id', '=', 'advertising_users.instagram_id')
            ->where('brand_status.status', '=', '2')
            ->where('brand_status.brand_id', '=', $this->brand_id)
            ->get();


        //Display Affiliated Users Only
        $brand_users = DB::table('assigned_users')->where('assigned_brand_id', '=', $this->brand_id)->get();

        return view('dashboard.users')
            ->with('users', $new_users)
            ->with('pending_users', $pending_users)
            ->with('brand_users', $brand_users);

    }

    public function notifications()
    {

        if (!isset($_SESSION['brand_id'])) {

            return redirect('login');

        }

        return view('dashboard.notifications');

    }

    /*
    * Actions
     * -Offers
     * -Users
    */

    public function create_offer(Request $request)
    {

        $url = 'http://ec2-52-91-188-123.compute-1.amazonaws.com/brand/create_offer';

        $brand_id = $this->brand_id;

        $data = [
            'brand_id' => $brand_id,
            'hashtag' => $request->hashtag,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'offer_details' => $request->offer_details
        ];

        $verify = $this->send_request_form($data, $url);

        $result = json_decode($verify, true);

        return response()->json($result, 200, [], JSON_PRETTY_PRINT);

    }

    public function cancel_offer(Request $request)
    {

        $url = 'http://ec2-52-91-188-123.compute-1.amazonaws.com/brand/cancel_offer';

        $id = $request->id;

        $data = [
            'id' => $id,
        ];

        $verify = $this->send_request_form($data, $url);

        $result = json_decode($verify, true);

        return response()->json($result, 200, [], JSON_PRETTY_PRINT);

    }

    public function request_join(Request $request)
    {

        $url = 'http://ec2-52-91-188-123.compute-1.amazonaws.com/brand/request_join';

        $brand_id = $this->brand_id;
        $instagram_id = $request->instagram_id;

        $data = [
            'instagram_id' => $instagram_id,
            'brand_id' => $brand_id
        ];

        $verify = $this->send_request_form($data, $url);

        $result = json_decode($verify, true);

        return response()->json($result, 200, [], JSON_PRETTY_PRINT);

    }

    public function cancel_join(Request $request)
    {

        $url = 'http://ec2-52-91-188-123.compute-1.amazonaws.com/brand/cancel_join';

        $brand_id = $this->brand_id;
        $id = $request->id;

        $data = [
            'id' => $id,
            'brand_id' => $brand_id
        ];

        $verify = $this->send_request_form($data, $url);

        $result = json_decode($verify, true);

        return response()->json($result, 200, [], JSON_PRETTY_PRINT);

    }

    public function send_request_form($form, $url)
    {

        $client = new Client();

        try {
            $response = $client->post($url, [
                'form_params' => $form
            ])->getBody()->getContents();

            return $response;

        } catch (RequestException $e) {

            if ($e->getResponse()->getStatusCode() == '400') {

                //return redirect('api/auth/login');
            }

        } catch (\Exception $e) {

            //Other Exceptions

        }

        //Got tired of my IDE yelling at me...
        return [];

    }

    public function send_request($url)
    {

        $client = new Client();

        try {
            $response = $client->get($url, [
                'connect_timeout' => 10
            ])->getBody();

            return json_decode($response);

        } catch (RequestException $e) {

            if ($e->getResponse()->getStatusCode() == '400') {

                //return redirect('api/auth/login');
            }

        } catch (\Exception $e) {

            //Other Exceptions

        }

        //Got tired of my IDE yelling at me...
        return [];

    }

}
