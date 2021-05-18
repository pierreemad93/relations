<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    //

    public function hasOne(){
        $user = User::with('phone')->get();
        return response()->json($user);
    }
}
