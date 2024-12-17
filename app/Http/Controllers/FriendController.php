<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function store(Request $request, User $user)
    {   
        // If boths user are friends
        if (!$request->user()->isRelated($user)) {
            $request->user()->from()->attach($user);
        }
        
        return back();
    }

    public function update(Request $request, User $user)
    {
        $request->user()->pendingTo()->updateExistingPivot( $user, ['accepted' => true]);

        return back();
    }
}
