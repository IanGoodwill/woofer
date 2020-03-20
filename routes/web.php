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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('profile/{profileId}/follow', 'FollowerController@followProfile')->name('profile.follow');

Route::get('/{profileId}/unfollow', 'FollowerController@unFollowProfile')->name('profile.unfollow');

Route::get('profile/{id}', 'ProfileController@showPost');

Route::get('post/{id}', 'PostController@showProfile');

Route::get('posts/{post}/profiles/{profile}/comments/{comment}', function ($postId, $profileId, $commentId) {} ); 

Route::resource( 'posts', 'PostController' );

Route::resource( 'profiles', 'ProfileController' );

Route::resource( 'comments', 'CommentController' );
