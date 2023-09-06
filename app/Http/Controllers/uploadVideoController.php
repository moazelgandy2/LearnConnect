<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadVideoController extends Controller
{
    public function index(){
        return view('admin.uploadVideo');
    }
}
