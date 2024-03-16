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



Route::get('/',function () {
    return view('welcome');
});

Auth::routes();

/***********************Admin Routes****************/

Route::group(['middleware'=>['auth','admin']], function(){
    Route::get('admin/dashboard',function(){ 
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

/**********************End Admin Routes****************/


/***********************Users Routes****************/

Route::group(['middleware'=>['auth','user']], function(){    
    Route::get('user/dashboard',function(){ 
        return view('user.dashboard');
    })->name('user.dashboard');
});

/**********************End Users Routes****************/


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');