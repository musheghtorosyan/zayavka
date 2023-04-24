<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function facebook(){

    }
    public function google(){
        return Socialite::driver('google')->redirect();
    }

    public function google_callback(){
        //$user = Socialite::driver('google')->user();
        dd("fdfdgfdg");
    }
}
