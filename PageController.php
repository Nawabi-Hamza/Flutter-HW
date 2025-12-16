<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return "<h1>Welcome to Home Page</h1>";
    }

    public function contact()
    {
        return "<h1>This is Contact Page</h1>";
    }

    public function services()
    {

        $services = ['Delivery','Shop','Online Payment'];
        return view('serivces',['data'=>$services]);
    }
}
