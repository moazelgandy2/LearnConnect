<?php

namespace App\Http\Controllers;

use App\Models\ActivationCodes;
use Illuminate\Http\Request; // Import the correct Request class
use Illuminate\Support\Str; // Import the Str class

class ActivationCodesController extends Controller
{
    public function activate($id)
    {
        $code = ActivationCodes::find($id);
        if ($code) {
            $code->status = 'Valid';
            $code->activated_by= 'NULL';
            $code->save();

            return redirect()->back()->with('success', 'Code activated successfully.');
        }

        return redirect()->back()->with('error', 'Code not found.');
    }

    public function deactivate($id)
    {
        $code = ActivationCodes::find($id);
        if($code->code ==='master'){
            return redirect()->back()->with('success', 'Code can\'nt be deactivated.');
        }else{

            if ($code) {
                $code->status = 'Invalid';
                $code->save();

                return redirect()->back()->with('success', 'Code deactivated successfully.');
            }
        }

        return redirect()->back()->with('error', 'Code not found.');
    }

}
