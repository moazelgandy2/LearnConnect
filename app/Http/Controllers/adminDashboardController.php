<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    public function index(Request $request)
    {

        $countActive = User::where('role', 'user')->count();
        $videosCount = session('videosCount');

        return view('admin.index', compact('countActive'),['videosCount' => $videosCount]);

    }

}
