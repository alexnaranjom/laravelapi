<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/ping', fn () => ['pong' => true]);
Route::get('/probe', fn () => ['contacts' => \App\Models\Contact::count()]);
Route::apiResource('contacts', ContactController::class);
