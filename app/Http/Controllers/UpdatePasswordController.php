<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('password.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update([
                'password' => bcrypt($request->password),
            ]);
            return back()->with('message', 'Your password success updated');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Your current password doesnt match with our record',
        ]);
    }
}
