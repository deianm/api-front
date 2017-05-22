<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class LoginController extends Controller
{

    public function __construct()
    {

        session_start();

    }

    public function index() {

        return view('login.login');

    }

    public function login(Request $request) {

        $email = $request->email;
        $password = $request->password;

        $form = [
            'email' => $email,
            'password' => $password
        ];

        $verify = $this->send_request($form);
        $result = json_decode($verify, true);

        if ($result['data']['auth']['id'] == !null){
            $_SESSION['brand_id'] = $result['data']['auth']['id'];
            return response()->json($result, 200, [], JSON_PRETTY_PRINT);
        } else {
            return response()->json($result, 422, [], JSON_PRETTY_PRINT);
        }

    }

    public function send_request($form){

        $client = new Client();

        try {
            $response = $client->post('http://ec2-52-91-188-123.compute-1.amazonaws.com/auth/login', [
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

}
