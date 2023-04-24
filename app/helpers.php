<?php

use Illuminate\Support\Facades\DB;

function getUserName($id){
    $req = DB::table('accounts')->where('id',$id)->first();
    if(DB::table('accounts')->where('id',$id)->count()==0){
        return "";
    } else {
        return $req->name." ".$req->surname;
    }
}
?>