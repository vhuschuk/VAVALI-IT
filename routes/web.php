<?php

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

Route::get('/', 'PostsController@index')->name('home');

Route:: get ('/register', 'RegostrationController@creat');
Route:: post ('/register', 'RegostrationController@store');


Route:: get ('/login', 'SessionsController@creat');

Route:: get ('/index', 'Journalmain@index');


// pages
Route:: get ('/about','Page@about');
Route:: get ('/subscribe', 'Subscribe@insertform');
Route::post('create','Subscribe@insert');
Route:: get ('/authors', 'Page@authors');

Route:: get ('/maineditor', function () {
    return view ('pages.maineditor');
});
Route:: get ('/records',  'Archive@archive');
Route:: get ('/archive_page',  'Archive@index');
Route:: get ('/reviewers', 'Page@reviewers');

Route:: get ('/search', function () {
    return view ('pages.search');
});

//admin 
Route:: post ('/edit', 'Journalmain@edit');

//Route::delete('/{i}', 'Journalmain@destroy')->name('journal.delete');