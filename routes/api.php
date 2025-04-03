<?php

use App\Http\Controllers\EmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/send-emails', [EmailController::class, 'sendEmails']);
