<?php

use Illuminate\Http\Request;
use App\Registrations;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', function(Request $request){
    if(count(Registrations::where('email', '=', $request->email)->get()) > 0) abort(409);

    Registrations::create($request->all());
    return Registrations::all();
});