<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\SendEmailController;
use App\Models\Application;
use Illuminate\Support\Facades\Route;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApproveMail;

// processing on server
Route::post('/personal-info-store',[ApplicationController::class,'personal_info_store'])->name('personal_info.store');
Route::post('/admission-store', [ApplicationController::class, 'store_Admission'])->name('admission.store');
Route::post('/certif-store', [ApplicationController::class, 'certif_store'])->name('certif.store');
Route::post('/code-check', [ApplicationController::class, 'check_code']);

// displaying the view
Route::get('/admin', [AdminController::class, 'getData']);
Route::get('/certif-info', function(){
    return view('certif_info');
})->name('certif.info');
Route::get('/done', function(){
    return view('payment_status');
})->name('done');
Route::get('/personal-info', function(){
    return view('personal_info');
});
Route::get('/confirm', function(){
    return view('confirm');
})->name('confirm');
Route::get('/admin-login', function(){
    return view('admin.login');
});
Route::get('/login', function(){
    return view('login');
})->name('login');

// the ajax requests
Route::get('/ajax_regen_captcha', function() {
    return captcha_src();
});

Route::get('send', function(){

    Mail::to('bushur2000@gmail.com')->send(new ApproveMail());
    return response('sendin');
});
// other urls
Route::fallback(function(){
    return redirect()->route('login');
});


