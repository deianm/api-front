<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class LogoutController extends Controller
{

    public function __construct()
    {

        session_start();

    }

    public function logout()
    {

        session_destroy();
        $this->send_request();
        return redirect('/');

    }

    public function send_request()
    {

        $client = new Client();

        try {
            $response = $client->post('http://ec2-52-91-188-123.compute-1.amazonaws.com/auth/logout', [

            ])->getBody();

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
