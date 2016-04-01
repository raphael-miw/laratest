<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::pattern("id","[0-9]+");

Route::get("post/{id}",["as" => "post",function($id) {
    return "je suis la PAGE $id, mon url est : ".route("post",array("id"=>$id),false);
}]);// -> where("id","[0-9]");

Route::group(array('before' => 'auth'), function()
{
    Route::get("/private",function() {
        return "je suis la PAGE private";
    });

});

Route::group(array('prefix' => 'admin'), function()
{
    Route::get('user', "UserController@displayAction");
});


Route::auth();

Route::get('/home', 'HomeController@index');
