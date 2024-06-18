<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;



Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    // dd($jobs);
    return view('jobs', ['jobs'=> Jobs::all()]);
        
});
Route::get('/contact',function (){
    return view('contact');
});
Route::get('/jobs/{id}',function ($id) {
   
    // dd($jobs);
    $job = Jobs::find($id);
    return view('job',['job' => $job]);
}); 