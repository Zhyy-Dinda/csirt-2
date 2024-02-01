<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
       $data = beranda::latest()->get();
       return view('app', compact('data'));
    }
}
