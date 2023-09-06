<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class studetnsController extends Controller
{
    public function index(){
        $roleName = 'user'; // Adjust the role name as needed
        $countActive = User::where('status', 'Active')
        ->where('role', $roleName)
        ->count();
        $countInActive = User::where('status', 'NotActive')
        ->where('role', $roleName)
        ->count();
        $users = User::where('role', $roleName)->get();

        return view('admin.students', compact('users','countActive','countInActive'));
    }
    public function activate($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->status = 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Account activated successfully.');
        }

        return redirect()->back()->with('error', 'Code not found.');
    }

    public function deactivate($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->status = 'NotActive';
            $user->save();

            return redirect()->back();
        }

        return redirect()->back();
    }
    public function editStudent($id)
    {
        $user = User::find($id);

        return view('admin.editStudent',['user'=>$user]);
    }

    public function saveStudent(Request $req, $id)
    {
        $user = User::find($id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->status = $req->status;
        $user->save();
        return  redirect('students');;
    }
    public function deleteStudent(Request $req, $id)
    {
        $user = User::find($id);

        $user->delete();
        return  redirect('students');
    }
}
