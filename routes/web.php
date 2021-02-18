<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/app1', function () {
    return view('layouts.app1');
});
Route::get('/app2', function () {
    return view('layouts.app2');
});
/* Route::get('/app3', function () {
    return view('layouts.app3');
}); */