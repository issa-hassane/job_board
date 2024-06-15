<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function (){
    return view('jobs', ['jobs'=>[
        [
            'id'=> 1,
            'title'=>'Software dev',
            'salary'=>"$4000"
        ],
        [
            'id'=> 2,
            'title'=>'ML dev',
            'salary'=>"$5000"
        ]
    ]]);
        
});
Route::get('/contact',function (){
    return view('contact');
});
Route::get('/jobs/{id}',function ($id){
   $jobs = [
        [
            'id'=> 1,
            'title'=>'Software dev',
            'salary'=>"$4000"
        ],
        [
            'id'=> 2,
            'title'=>'ML dev',
            'salary'=>"$5000"
        ]
    ];
    $job = Arr::first($jobs,fn($job) => $job['id'] == $id);
    // dd($job);
    return view('job',['job' => $job]);
});