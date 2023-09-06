<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class watchVideoController extends Controller
{
    public function index(Request $request)
    {
        $guid = $request->input('guid');
        $title = $request->input('title');
        return view('student.watch-video', ['url' => $guid,'name'=>$title]);
    }
}
