<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['greetings'=>'hello']);
});

Route::get('/jobs', function (){
    return view('jobs');
        
});
Route::get('/contact',function (){
    return view('contact');
});