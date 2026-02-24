<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    //Controller to route and coordinate chirp related requests
    public function index()
    {
        return view('home');
    }
}
