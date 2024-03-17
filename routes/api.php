<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('mydata',function(){
    $user=\App\User::all();
    return $user;
});

Route::POST('insertdata', function(Request $request ){
    $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'role_id'=>$request->role_id,
            'password'=>Hash::make($request->password),
        ];
    
    $user=\App\User::create($data);

    return response()->json($user);
});



Route::POST('insertdata', function(Request $request){
    $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'role_id'=>$request->role_id,
            'password'=>Hash::make($request->password),
        ];
    
    $user=\App\User::create($data);

    return response()->json($user);
});

Route::get('getdata/{id}', function($id){
    
    $getData=\App\User::find($id);
    // $data=[
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'role_id'=>$request->role_id,
    //         'password'=>Hash::make($request->password),
    //     ];
    // $getData->update($data);
    // data($getData);
    return response()->json($getData);
});


Route::get('updatedata/{id}', function(Request $request,$id){
    
    $getData=\App\User::find($id);
    $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'role_id'=>$request->role_id,
            'password'=>Hash::make($request->password),
        ];
    $getData->update($data);
    // data($getData);
    return response()->json($getData);
});
