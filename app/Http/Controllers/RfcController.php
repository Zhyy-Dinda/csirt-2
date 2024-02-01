<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RfcController extends Controller
{
    public function index(){
        return view('navbar.rfc');
    }
}
