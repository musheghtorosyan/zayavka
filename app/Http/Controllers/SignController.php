<?php

namespace App\Http\Controllers;
use App\Models\Account;
use Illuminate\Http\Request;

class SignController extends Controller
{
    public function log(Request $request){
        $email = $request->input('email');
        $psw = $request->input('password');
        $psw = md5($psw);
        $count = Account::where('email',$email)->where('password',$psw)->where('active',1)->get()->count();
        if($count==1){
            $user = Account::where('email',$email)->where('password',$psw)->get()->first();
            if(setcookie('ardiuser',$user['id'],time()+60*60*24*30,'/')){
                setcookie('useremail',$user['email'],time()+60*60*24*30,'/');
                setcookie('userfullname',$user['name']." ".$user['surname'],time()+60*60*24*30,'/');
                return redirect(route('profile_console',['locale' => app()->getLocale()]));
            } else {
                return redirect(route('sign_in',['locale' => app()->getLocale()]))->withErrors(['msg' => 'The Message']);;
            }
            
        } else {
            return redirect(route('sign_in',['locale' => app()->getLocale()]))->withErrors(['msg' => 'The Message']);;
        }
    }

    public function reg(Request $request){


        $type = $request->input('type');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $psw = $request->input('psw');
        $repsw = $request->input('repsw');
        
        $v1 = 0;
        $v2 = 0;
        $v3 = 0;
        $v4 = 0;
        $v5 = 0;
        $v6 = 0;
        $cc = Account::where('email',$email)->get()->count();
        if(mb_strlen($name, "utf8")<2 || mb_strlen($name, "utf8")>21){ $v1 = 1; }
        if($type=="manager"){
            if(mb_strlen($surname, "utf8")<2 || mb_strlen($surname, "utf8")>21){ $v2 = 1; }
        } else {
            $surname = "";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL) || $cc>0){ $v3 = 1; }
        if(strlen($phone)<4 || strlen($phone)>16 || !is_numeric($phone)){ $v4 = 1; }
        if(mb_strlen($psw, "utf8")<8 || mb_strlen($psw, "utf8")>41 || $psw!=$repsw){ $v5 = 1; }
        
        // $grc = $request->input('g-recaptcha-response');
        // $secretKey = '6LcMqyojAAAAANOrZSyqYjVV5x8wACaikewCdyIi';
        // $userIP = $_SERVER['REMOTE_ADDR'];
        // $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$grc&remoteip=$userIP";
        // $response = \file_get_contents($url);
        // $response = json_decode($response);
        // if(!$response->success){
        //     $v6 = 1;
        // }


        $psw = md5($psw);
        if($v1+$v2+$v3+$v4+$v5==0){
            $account = new Account();
            $account->name = $name;
            $account->surname = $surname;
            $account->email = $email;
            $account->phone = $phone;
            $account->password = $psw;
            $account->type = $type;
            $account->save();

            $user = Account::where('email',$email)->where('password',$psw)->get()->first();
            setcookie('ardiuser',$user['id'],time()+60*60*24*30,'/');
            setcookie('useremail',$user['email'],time()+60*60*24*30,'/');
            setcookie('userfullname',$user['name']." ".$user['surname'],time()+60*60*24*30,'/');
            return redirect(route('profile_console',['locale' => app()->getLocale()]));
        } else {
            $msg = $v1."-".$v2."-".$v3."-".$v4."-".$v5."-".$v6;
            return redirect(route('sign_up',['locale' => app()->getLocale()]))->withErrors(['msg' => $msg])->withInput();;
        }
    }

    public function logout(){
            setcookie('ardiuser',1,time()-1,'/');
            setcookie('useremail',1,time()-1,'/');
            setcookie('userfullname',1,time()-1,'/');
            setcookie('ardiuser',1,time()-1,'./');
            setcookie('useremail',1,time()-1,'./');
            setcookie('userfullname',1,time()-1,'./');
            unset($_COOKIE['ardiuser']);
            unset($_COOKIE['useremail']);
            unset($_COOKIE['userfullname']);
            return redirect(route('sign_in',['locale' => app()->getLocale()]));
    }
}
