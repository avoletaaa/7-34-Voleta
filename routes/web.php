<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view ('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "nama" => "Voleta Salsabilla Ahim",
        "email" => "ahimvoleta@gmail.com",
        "gambar" => "voleta.jpeg"
    ]);
});

Route::get('/gallery', function () {
    return view ('gallery',[
        "title" => "Gallery"
    ]);
});
Route::resource('/contacts', ContactController::class);



