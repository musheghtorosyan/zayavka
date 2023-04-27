<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Laravel\Socialite\Facades\Socialite;
 
Route::get('lang/{locale}', 'App\Http\Controllers\LocalizationController@changeLang')->name('lang');

Route::get('/', function () {
    return redirect(route('home',['locale' => app()->getLocale()]));
})->name('main');

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|hy|ru']], function () {
    Route::get('/', 'App\Http\Controllers\MainController@index')->name('home');
    Route::get('/home', 'App\Http\Controllers\MainController@index')->name('home');
    Route::get('/about_us', 'App\Http\Controllers\MainController@aboutus')->name('about_us');
    Route::get('/faq', 'App\Http\Controllers\MainController@faq')->name('faq');
    Route::get('/privacy_policy', 'App\Http\Controllers\MainController@privacy_policy')->name('privacy_policy');
    Route::get('/contacts', 'App\Http\Controllers\MainController@contacts')->name('contacts');
    Route::get('/catalogue', 'App\Http\Controllers\MainController@catalogue')->name('catalogue');
    Route::get('/catalogue_single/{id}', 'App\Http\Controllers\MainController@catalogue_single')->name('catalogue_single');

    Route::get('/companies', 'App\Http\Controllers\MainController@companies')->name('companies');
    Route::get('/company_single/{id}', 'App\Http\Controllers\MainController@company_single')->name('company_single');

    Route::get('/products', 'App\Http\Controllers\MainController@products')->name('products');
    Route::get('/product_single/{id}', 'App\Http\Controllers\MainController@product_single')->name('product_single');

    Route::get('/stock', 'App\Http\Controllers\MainController@stock')->name('stock');
    Route::get('/stock_single/{id}', 'App\Http\Controllers\MainController@stock_single')->name('stock_single');

    Route::get('/sign_in', 'App\Http\Controllers\MainController@sign_in')->name('sign_in');
    Route::get('/sign_up', 'App\Http\Controllers\MainController@sign_up')->name('sign_up');
    Route::get('/profile_profile', 'App\Http\Controllers\MainController@profile_profile')->name('profile_profile');
    Route::get('/profile_console', 'App\Http\Controllers\MainController@profile_console')->name('profile_console');
    Route::get('/profile_orders', 'App\Http\Controllers\MainController@profile_orders')->name('profile_orders');
    Route::get('/card', 'App\Http\Controllers\MainController@card')->name('card');
    Route::get('/checkout', 'App\Http\Controllers\MainController@checkout')->name('checkout');
    Route::get('/favourite', 'App\Http\Controllers\MainController@favourite')->name('favourite');
    Route::get('/sign_in_forgot_password', 'App\Http\Controllers\MainController@sign_in_forgot_password')->name('sign_in_forgot_password');
    Route::get('/slider', 'App\Http\Controllers\MainController@slider')->name('slider');
    Route::post('/log', 'App\Http\Controllers\SignController@log')->name('log');
    Route::post('/reg', 'App\Http\Controllers\SignController@reg')->name('reg');
    Route::get('/logout', 'App\Http\Controllers\SignController@logout')->name('logout');   
});

Route::get('/params/{key}/{value}', 'App\Http\Controllers\SessionController@sessions')->name('sessions');
Route::post('/subscribeajax', 'App\Http\Controllers\MainController@subscribeajax')->name('subscribeajax');
Route::post('/favajax', 'App\Http\Controllers\MainController@favajax')->name('favajax');
Route::post('/basketajax', 'App\Http\Controllers\MainController@basketajax')->name('basketajax');
Route::post('/basketajax2', 'App\Http\Controllers\MainController@basketajax2')->name('basketajax2');
Route::post('/ajaxcontact', 'App\Http\Controllers\MainController@ajaxcontact')->name('ajaxcontact');
Route::get('/facebook', 'App\Http\Controllers\SocialController@facebook')->name('facebook');
Route::get('/facebook_callback', 'App\Http\Controllers\SocialController@facebook_callback')->name('facebook_callback');
Route::get('/google', 'App\Http\Controllers\SocialController@google')->name('google');
Route::get('/google_callback', 'App\Http\Controllers\SocialController@google_callback')->name('google_callback');
Route::get('/idram', 'App\Http\Controllers\PayController@idram')->name('idram');
Route::get('/pay', 'App\Http\Controllers\PayController@pay')->name('pay');
Route::get('/payresult', 'App\Http\Controllers\PayController@payresult')->name('payresult');
Route::get('/drop_card', 'App\Http\Controllers\MainController@drop_card')->name('drop_card');
Route::get('/rebasket', 'App\Http\Controllers\MainController@rebasket')->name('rebasket');
Route::post('/gettotal', 'App\Http\Controllers\MainController@gettotal')->name('gettotal');
Route::get('/delrow', 'App\Http\Controllers\MainController@delrow')->name('delrow');