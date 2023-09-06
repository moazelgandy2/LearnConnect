<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ActivationCodes;
use Alert;


class ActivationController extends Controller
{
    public function processActivation(Request $request)
    {
        $activationCode = $request->input('activation_code');
        $user = Auth::user();

        $existingCode = ActivationCodes::where('code', $activationCode)
            ->where('status', 'valid')
            ->first();
        $masterCode = ActivationCodes::where('code',$activationCode)
        ->where('code','master')
        ->first();

        if($masterCode){
            $masterCode->activated_by ="NULL";
            $masterCode->save();
            $user->status = 'Active';
            $user->save();
            $alert = [
                'type' => 'success',
                'title' => 'Activation Successful',
                'message' => 'Your account has been activated.',
            ];
        }else{

            if ($existingCode) {
                $existingCode->status = 'invalid';
                $existingCode->activated_by =$user->email;
                $existingCode->save();
                $user->status = 'Active';
                $user->save();

                $alert = [
                    'type' => 'success',
                    'title' => 'Activation Successful',
                    'message' => 'Your account has been activated.',
                ];

            } else {
                $alert = [
                    'type' => 'error',
                    'title' => 'Invalid Activation Code',
                    'message' => 'The provided activation code is invalid.',
                ];
            }
        }

        return redirect()->back()->with('alert', $alert);
    }
}
