<?php

use Illuminate\Support\Facades\Route;
use Illuminate\app\http\controller\HomeController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/home' , function () {
    return view ('home');
});
route::get('/contact' , function () {
    return view ('contact');
});
 