<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        return view('users.show', [
            'user' => $user,
            'statuses' => $user->statuses()->latest()->get(),
        ]);
    }
}
