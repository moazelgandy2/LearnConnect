<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class updateProfileController extends Controller
{
    public function index()
    {
        $user = Users::all();
        return view('student.profile', ['user', $user]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $user->update($request->all());

        return redirect()
            ->route('profile')
            ->with('success', 'Profile updated successfully.');
    }
}
