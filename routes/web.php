<?php

use App\Models\visaView;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NINController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PassportController;






Auth::routes();

Route::get('/home', [App\Http\Controllers\PagesController::class, 'user'])->name('pages.user.userDashboard');

Route::middleware(['auth'])->group(function (){

    

    Route::get('/', function () 
    {
        return view('pages.user.userDashboard');
    });
    
    Route::get('user', [App\Http\Controllers\PagesController::class, 'user']);
    
    
    Route::get('/passport/create', [PassportController::class, 'createPass'])->name('passport.create');
    Route::post('/passport/store', [PassportController::class, 'storeGen'])->name('passport.store');
    Route::get('/passport/{id}', [PassportController::class, 'showPass'])->name('passport.show');
    Route::get('/passport/{id}/edit', [PassportController::class, 'edit'])->name('passport.edit');


    Route::get('/general/create', [GeneralController::class, 'createGen'])->name('general.create');
    Route::post('/general/store', [GeneralController::class, 'storeGen'])->name('general.store');
    Route::get('/general/{id}', [GeneralController::class, 'show'])->name('general.show');


    Route::resource('/nin', NINController::class);
    Route::resource('/visa', VisaController::class);

    Route::get('/visa/{user_id}', [VisaController::class, 'show']);


    

    
    
    
    
    
});

Route::middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/data', [App\Http\Controllers\Users::class, 'mydata']);
    Route::get('/passport', [PassportController::class, 'passport']);
    Route::get('/general', [GeneralController::class, 'general']);
    Route::get('/visa', [VisaController::class, 'visa']);
    Route::get('/nin', [NINController::class, 'nin']);
  
    Route::get('/admin', [App\Http\Controllers\Users::class, 'mydata']);
    
});
