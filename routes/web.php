<?php

use Illuminate\Support\Facades\Route;
Route::get("/", function () {
    return view("welcome");
});

Route::get("/category", function () {
    return view("category");
});

Route::get("/filter", function () {
    return view("filter");
});

Route::get("/detail", function () {
    return view("detail");
});
Route::get("/country", function () {
    return view("country");
});
