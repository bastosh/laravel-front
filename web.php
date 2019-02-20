<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/style', function () {
    return view('styleguide');
});
