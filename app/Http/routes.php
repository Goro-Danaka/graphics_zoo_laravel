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
use App\Model\Portfolio;

Route::get('/', [ 'as' => 'welcome.index', 'uses' => 'WelcomeController@index']);    
Route::get('/portfolio', [ 'as' => 'welcome.portfolio', 'uses' => 'WelcomeController@portfolio']);    
Route::get('/pricing', [ 'as' => 'welcome.pricing', 'uses' => 'WelcomeController@pricing']);    
Route::get('/faq', [ 'as' => 'welcome.faq', 'uses' => 'WelcomeController@faq']);    
Route::get('/blog', [ 'as' => 'welcome.blog', 'uses' => 'WelcomeController@blog']);    
Route::get('/aboutus', [ 'as' => 'welcome.aboutus', 'uses' => 'WelcomeController@aboutus']);    
Route::get('/logout', [ 'as' => 'welcome.logout', 'uses' => 'WelcomeController@logout']);    
Route::get('/login', [ 'as' => 'welcome.login', 'uses' => 'WelcomeController@login']);    
Route::get('/signup', [ 'as' => 'welcome.signup', 'uses' => 'WelcomeController@signup']);    
Route::get('/contactus', [ 'as' => 'welcome.contactus', 'uses' => 'WelcomeController@contactus']);    
Route::get('/termsAndConditions', [ 'as' => 'welcome.termsAndConditions', 'uses' => 'WelcomeController@termsAndConditions']);    
Route::get('/privacyPolicy', [ 'as' => 'welcome.privacyPolicy', 'uses' => 'WelcomeController@privacyPolicy']);    
Route::get('/posts', [ 'as' => 'welcome.posts', 'uses' => 'WelcomeController@posts']);    


Route::get('home', [ 'as' => 'home.index', 'uses' => 'HomeController@index']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
