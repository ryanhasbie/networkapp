<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function __invoke(User $user, $following) 
    {
        if ($following == 'following') {
            $follows = $user->follows;
        } 
        
        if ($following == 'follower') {
            $follows = $user->followers;
        } 
        
        if ($following !== 'follower' && $following !== 'following') {
            return redirect(route('profile', $user->username));
        }

        return view('users.following', [
            'user' => $user,
            'follows' => $user->follows 
        ]);
    }

    // public function following (User $user)
    // {
    //     return view ('users.following',[
    //         'user'      => $user,
    //         'following' => $user->follows,
    //     ]);
    // }

    // public function follower (User $user)
    // {
    //     return view ('users.following',[
    //         'user'      => $user,
    //         'following' => $user->followers,
    //     ]);
    // }
}
