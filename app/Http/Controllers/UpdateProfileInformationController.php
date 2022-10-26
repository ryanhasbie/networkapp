<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProfileInformationController extends Controller
{
    public function edit()
    {
        return view ('users.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['string', 'min:3', 'required'],
            'email' => ['email:dns', 'string', 'min:3', 'required'],
            'username' => ['required', 'alpha_num', 'unique:users,username,' . auth()->id()],
        ]);

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
        ]);

        return redirect(route('profile', auth()->user()->username))->with('message', 'Your profile is updated');
    }
}
