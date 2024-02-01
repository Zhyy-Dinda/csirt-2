<?php

namespace App\Http\Controllers;

use App\Models\panduan;
use Illuminate\Http\Request;

class PanduanController extends Controller
{
    public function index(){

        $data = panduan::latest()->simplepaginate(5);
        return view('navbar.panduan', compact('data'));
    }
}
