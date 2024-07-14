<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/kontakt', function () {
    return view('contact.index');
});

Route::get('/polityka-prywatnosci', function () {
    return view('privacy_policy.index'); // Zmieniono na 'privacy_policy'
});

Route::get('/uslugi', function () {
    return view('services.index');
});

Route::get('/o-nas', function () {
    return view('about_us.index'); // Zmieniono na 'about_us'
});
