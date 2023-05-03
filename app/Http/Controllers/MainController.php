<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Review;
use App\Models\Account;
use App\Models\FAQ;
use App\Models\Contact;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Privacy;
use App\Models\Block;
use App\Models\Add;
use App\Models\Stock;
use App\Models\Term;
use App\Models\Contacttext;
use App\Models\Subscribe;
use App\Models\Homeslide;
use App\Models\Citie;
use App\Models\Categorie;
use App\Models\Subcategorie;
use App\Models\Exsubcategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index(){
        $l = app()->getLocale();
        $about = About::get()->first();
        $reviews = Review::get();
        $slides = Homeslide::get();
        $blocks = Block::where('type','home')->get();
        $ct = Contacttext::get()->first();
        $products = Product::orderBy('id','desc')->limit(3)->get();
        $reclame = Add::get();
        return view('index', compact('about','l','reviews','slides','ct','products','blocks','reclame'));
    }
    public function aboutus(){
        $l = app()->getLocale();
        $about = About::get()->first();
        $ct = Contacttext::get()->first();
        $reclame = Add::get();
        $blocks = Block::where('type','home')->get();
        return view('about_us', compact('about','l','ct','blocks','reclame'));
    }
    public function faq(){
        $l = app()->getLocale();
        $faq = FAQ::get();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        return view('faq', compact('faq','l','ct','reclame'));
    }
    public function privacy_policy(){
        $l = app()->getLocale();
        $p1 = Privacy::get()->first();
        $p2 = Payment::get()->first();
        $p3 = Term::get()->first();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        return view('privacy_policy', compact('p1','p2','p3','l','ct','reclame'));
    }
    public function contacts(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        return view('contacts', compact('l','ct','reclame'));
    }
    public function updates(){
        $l = app()->getLocale();
        $ct = Contacttext::get()->first();
        $reclame = Add::get();
        $blocks = Block::where('type','update')->get();
        return view('updates', compact('l','ct','blocks','reclame'));
    }
    public function video_pop_up(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        return view('video_pop_up', compact('l','ct','reclame'));
    }







    public function catalogue(){
        $l = app()->getLocale();
        $ct = Contacttext::get()->first();
        // $products = Product::get();
        if(Session::has('searchResult')){ $searchResult = Session::get("searchResult"); } else { $searchResult = ''; }
        if(Session::has('itemsPerPage')){ $itemsPerPage = intval(Session::get("itemsPerPage")); } else { $itemsPerPage = 15; }
        if(Session::has('thisPage')){ $thisPage = intval(Session::get("thisPage")); } else { $thisPage = 1; }
        $itemsSkip = ($thisPage-1)*$itemsPerPage;
        $reclame = Add::get();
        $suborders = Product::where('id','!=',"phantom");
        if($searchResult!=''){
            $suborders ->where(function ($q) {
                if(Session::has('searchResult')){ $searchResult = Session::get("searchResult"); } else { $searchResult = ''; }
                $cols = ['ru_title','ru_desc'];
                foreach($cols as $col => $val)
                {
                    $q->orWhere($val, 'LIKE', "%$searchResult%");
                }
            });
        }
        $products = $suborders->get()->skip($itemsSkip)->take($itemsPerPage);
        $allItems = $suborders->count();
        $pageCount = ceil($allItems / $itemsPerPage);
        
        return view('catalogue', compact('l','ct','products','itemsPerPage','pageCount','thisPage','searchResult','allItems','reclame'));
    }
    public function catalogue_single($lang,$id){
        if(Product::where('id',$id)->get()->count()==0){
            abort(404);
        }
        $products = Product::get();
        $product = Product::where('id',$id)->get()->first();
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        return view('catalogue_single', compact('l','ct','product','products','reclame'));
    }


    public function stock(){
        $l = app()->getLocale();
        $ct = Contacttext::get()->first();
        // $products = Product::get();
        if(Session::has('searchResult')){ $searchResult = Session::get("searchResult"); } else { $searchResult = ''; }
        if(Session::has('itemsPerPage')){ $itemsPerPage = intval(Session::get("itemsPerPage")); } else { $itemsPerPage = 15; }
        if(Session::has('thisPage')){ $thisPage = intval(Session::get("thisPage")); } else { $thisPage = 1; }
        $itemsSkip = ($thisPage-1)*$itemsPerPage;
        $reclame = Add::get();
        $suborders = Stock::where('id','!=',"phantom");
        if($searchResult!=''){
            $suborders ->where(function ($q) {
                if(Session::has('searchResult')){ $searchResult = Session::get("searchResult"); } else { $searchResult = ''; }
                $cols = ['ru_title','ru_desc'];
                foreach($cols as $col => $val)
                {
                    $q->orWhere($val, 'LIKE', "%$searchResult%");
                }
            });
        }
        $products = $suborders->get()->skip($itemsSkip)->take($itemsPerPage);
        $allItems = $suborders->count();
        $pageCount = ceil($allItems / $itemsPerPage);
        
        return view('stock', compact('l','ct','products','itemsPerPage','pageCount','thisPage','searchResult','allItems','reclame'));
    }
    public function stock_single($lang,$id){
        if(Stock::where('id',$id)->get()->count()==0){
            abort(404);
        }
        $products = Stock::get();
        $product = Stock::where('id',$id)->get()->first();
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        return view('stock_single', compact('l','ct','product','products','reclame'));
    }








    public function companies(){
        $l = app()->getLocale();
        $ct = Contacttext::get()->first();
        // $products = Product::get();
        if(Session::has('searchResult')){ $searchResult = Session::get("searchResult"); } else { $searchResult = ''; }
        if(Session::has('itemsPerPage')){ $itemsPerPage = intval(Session::get("itemsPerPage")); } else { $itemsPerPage = 15; }
        if(Session::has('thisPage')){ $thisPage = intval(Session::get("thisPage")); } else { $thisPage = 1; }
        $itemsSkip = ($thisPage-1)*$itemsPerPage;
        $suborders = Account::where('type',"=","company");
        if($searchResult!=''){
            $suborders ->where(function ($q) {
                if(Session::has('searchResult')){ $searchResult = Session::get("searchResult"); } else { $searchResult = ''; }
                $cols = ['ru_title','ru_desc'];
                foreach($cols as $col => $val)
                {
                    $q->orWhere($val, 'LIKE', "%$searchResult%");
                }
            });
        }
        $products = $suborders->get()->skip($itemsSkip)->take($itemsPerPage);
        $allItems = $suborders->count();
        $pageCount = ceil($allItems / $itemsPerPage);


        $sel1 = Citie::get();
        $sel2 = Categorie::get();
        $sel3 = Subcategorie::get();
        $sel4 = Exsubcategorie::get();
        $reclame = Add::get();
        // dd($products);
        return view('companies', compact('l','ct','products','itemsPerPage','pageCount','thisPage','searchResult','allItems','sel1','sel2','sel3','sel4','reclame'));
    }



    public function company_single($lang,$id){
        if(Product::where('id',$id)->get()->count()==0){
            abort(404);
        }
        $products = Product::get();
        $product = Product::where('id',$id)->get()->first();
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        return view('company_single', compact('l','ct','product','products','reclame'));
    }







    public function products(){
        $l = app()->getLocale();
        $ct = Contacttext::get()->first();
        // $products = Product::get();
        if(Session::has('searchResult')){ $searchResult = Session::get("searchResult"); } else { $searchResult = ''; }
        if(Session::has('itemsPerPage')){ $itemsPerPage = intval(Session::get("itemsPerPage")); } else { $itemsPerPage = 15; }
        if(Session::has('thisPage')){ $thisPage = intval(Session::get("thisPage")); } else { $thisPage = 1; }
        $itemsSkip = ($thisPage-1)*$itemsPerPage;
        $suborders = Product::where('id','!=',"phantom");
        if($searchResult!=''){
            $suborders ->where(function ($q) {
                if(Session::has('searchResult')){ $searchResult = Session::get("searchResult"); } else { $searchResult = ''; }
                $cols = ['ru_title','ru_desc'];
                foreach($cols as $col => $val)
                {
                    $q->orWhere($val, 'LIKE', "%$searchResult%");
                }
            });
        }
        $products = $suborders->get()->skip($itemsSkip)->take($itemsPerPage);
        $allItems = $suborders->count();
        $pageCount = ceil($allItems / $itemsPerPage);
        

        $sel1 = Citie::get();
        $sel2 = Categorie::get();
        $sel3 = Subcategorie::get();
        $sel4 = Exsubcategorie::get();

        $reclame = Add::get();

        return view('products', compact('l','ct','products','itemsPerPage','pageCount','thisPage','searchResult','allItems','sel1','sel2','sel3','sel4','reclame'));
    }
    public function product_single($lang,$id){
        if(Product::where('id',$id)->get()->count()==0){
            abort(404);
        }
        $products = Product::get();
        $product = Product::where('id',$id)->get()->first();
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        return view('product_single', compact('l','ct','product','products','reclame'));
    }










    public function sign_in(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        if(isset($_COOKIE['ardiuser'])){
            return redirect(route('profile_console',['locale' => app()->getLocale()]));
        } else {
            return view('sign_in', compact('l','ct','reclame'));
        }
    }
    public function sign_up(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        if(isset($_COOKIE['ardiuser'])){
            return redirect(route('profile_console',['locale' => app()->getLocale()]));
        } else {
            return view('sign_up', compact('l','ct','reclame'));
        }
    }
    public function profile_profile(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        if(!isset($_COOKIE['ardiuser'])){
            return redirect(route('sign_in',['locale' => app()->getLocale()]));
        } else {
            return view('profile_profile', compact('l','ct','reclame'));
        }
    }
    public function profile_console(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        if(!isset($_COOKIE['ardiuser'])){
            return redirect(route('sign_in',['locale' => app()->getLocale()]));
        } else {
            return view('profile_console', compact('l','ct','reclame'));
        }
    }
    public function profile_orders(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        if(!isset($_COOKIE['ardiuser'])){
            return redirect(route('sign_in',['locale' => app()->getLocale()]));
        } else {
            return view('profile_orders', compact('l','ct','reclame'));
        }
    }
    public function profile_address(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        $userinfo = Account::where('id',$_COOKIE['ardiuser'])->get()->first();
        if(!isset($_COOKIE['ardiuser'])){
            return redirect(route('sign_in',['locale' => app()->getLocale()]));
        } else {
            return view('profile_address', compact('l','ct','userinfo','reclame'));
        }
    }

    public function slider(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $slides = Homeslide::get();
        return view('partial.slide', compact('l','slides','reclame'));
    }

    
    public function favourite(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        $products = Product::orderBy('id','desc')->limit(3)->get();
        $allproducts = Product::orderBy('id','desc')->get();
        if(!isset($_COOKIE['ardiuser'])){
            return redirect(route('sign_in',['locale' => app()->getLocale()]));
        } else {
            return view('favourite', compact('l','ct','products','allproducts','reclame'));
        }
    }
    public function sign_in_forgot_password(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        if(isset($_COOKIE['ardiuser'])){
            return redirect(route('profile_console',['locale' => app()->getLocale()]));
        } else {
            return view('sign_in_forgot_password', compact('l','ct','reclame'));
        }
    }
    public function checkout(){
        $l = app()->getLocale();
        $reclame = Add::get();
        $ct = Contacttext::get()->first();
        if(!isset($_COOKIE['ardiuser'])){
            return redirect(route('sign_in',['locale' => app()->getLocale()]));
        } else {
            return view('checkout', compact('l','ct','reclame'));
        }
    }
    public function ajaxcontact(){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['mytext'];
        $subject = $_POST['subject'];
        $msg = "1";
        if($subject=="0"){
            $msg.="2";
        }
        if(mb_strlen($name,"utf8")<5){
            $msg.="3";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $msg.="4";
        }
        if(mb_strlen($message,"utf8")<5){
            $msg.="5";
        }
        if($msg=="1"){
            $contact = new Contact();
            $contact -> name = $name;
            $contact -> subject = $subject;
            $contact -> email = $email;
            $contact -> message = $message;
            $contact->save();
        }
        echo $msg;
    }
    public function favajax(){
        $id = $_POST['id'];
        $uid = $_POST['sid'];
        $pr = Product::where('id',$id)->get()->first();
        $fav0 = $pr['fav'];
        $fav = explode(',',$pr['fav']);
        $flag = false;
        $newfav = "";
        foreach($fav as $k => $v){
            if($v!=""){
                if($v==$uid){
                    $flag = true;
                } else{
                    $newfav .= $v.",";
                }
            } 
        }
        if($flag==false){
            $fav0.=$uid.",";
            $newfav = $fav0;
        }
        Product::where('id',$id)->update(['fav' => $newfav]);
    }
   



   
    public function subscribeajax(){
        $val = $_POST['val'];
        $c = Subscribe::where('email',$val)->get()->count();
        if(!filter_var($val,FILTER_VALIDATE_EMAIL)){
            echo 1;
        } else if($c==1){
           echo 0;
        } else {
            $sub = new Subscribe();
            $sub -> email = $val;
            $sub->save();
            echo 2;
        }
    }
}
