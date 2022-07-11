<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Visitor\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Visitor 
Route::get('/visitor-details',[VisitorController::class,'getVisitorDetails']);
// Contact
Route::post('/contact-details',[ContactController::class,'postContactDetails']);
