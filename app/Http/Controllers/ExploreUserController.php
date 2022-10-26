<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ExploreUserController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('users.index', [
            'users' => User::paginate(4),
        ]);
    }
}
