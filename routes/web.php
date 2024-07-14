<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MessageController;



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

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Połączenie z bazą danych działa!';
    } catch (\Exception $e) {
        return 'Błąd połączenia: ' . $e->getMessage();
    }
});



Route::post('/submit-contact-form', [MessageController::class, 'submitContactForm']);