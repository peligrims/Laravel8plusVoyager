<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::group([],function() {	
	Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
	Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);	
	Route::auth();	
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
   // Route::post('login', ['uses' => 'VoyagerAuthController@postLogin', 'as' => 'postlogin']);
    Route::get('/pats',['uses'=>'PersonalAccountController@pats','as'=>'pats']);
    Route::get('/term_sheet/{term_sheet?}',['uses'=>'Term_sheetsViewController@execute','as'=>'term_sheetsview']);
    Route::get('/pala',['uses'=>'UserController@palaview','as'=>'palaView']);
    Route::match(['get','post'],'/palaadd',['uses'=>'UserController@palaadd','as'=>'palaadd']);
    
   
    
   /* Route::get('/pats',['uses'=>'PersonalAccountController@pats','as'=>'pats']);
    Route::get('/pala',['uses'=>'UserController@palaview','as'=>'palaView']);
    Route::get('/uploadfile',['uses'=>'FileController@index','as'=>'uploadfile']);	*/
});
