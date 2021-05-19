<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    //

    public function hasOne(){
        $user = User::with('phone')->get();
        return response()->json($user);
    }

    public function hasOneReverse(){
        $phone = Phone::with([
            'user' => function($query){
               $query->select('id' ,'name' , 'email');  
            }
        ])->get();
        return response()->json($phone);
    }
     
    public function hasMany(){
         $hospitals = Hospital::with([
                'doctor' => function($query){
                      $query->select('name' , 'phone' , 'hospital_id');
                }  
         ])->get();
         //return response()->json($hospital);
         return view('hasmany' , compact('hospitals'));
    }
    public function hasManyReverse(){
        $doctor = Doctor::with('hospital')->get();
        return response()->json($doctor);
    }
}
