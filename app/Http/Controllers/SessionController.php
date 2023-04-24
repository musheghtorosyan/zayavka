<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
class SessionController extends Controller
{
    public function sessions($key, $value = ''){
        if($key=='itemsPerPage'){ Session::put("thisPage",1); }
        Session::put("$key","$value");
        return back();
    }
}