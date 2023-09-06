<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivationCodes;
use Illuminate\Support\Str;
use Carbon\Carbon; // Import the Carbon library


class creatCodeController extends Controller
{
    public function index(){
        $countGenerated = ActivationCodes::where('status', 'Valid')->count();
        $countGenerated_in = ActivationCodes::where('status', 'invalid')->count();
        $codes = ActivationCodes::all();
        return view('admin.codes', compact('codes', 'countGenerated','countGenerated_in'));
    }

    public function generateCodes(Request $request)
    {
        $this->validate($request, [
            'number_of_codes' => 'required|integer|min:1',
        ]);

        $numberOfCodes = $request->input('number_of_codes');
        $codes = [];
        $now = Carbon::now(); // Get the current timestamp

        for ($i = 0; $i < $numberOfCodes; $i++) {
            $code = strtoupper(Str::random(8)); // Generates a random 6-character code
            $codes[] = [
                'code' => $code,
                'created_by' => auth()->user()->email, // Assuming you're using authentication
                'created_at' => $now, // Set the created_at timestamp

            ];
        }

        ActivationCodes::insert($codes);

        return redirect()
            ->route('codes')
            ->with('success', "$numberOfCodes codes generated and stored.");
    }
}
