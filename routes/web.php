<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FixedIncomesController;
use App\Http\Controllers\IndexerController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request) {
    return $request->expectsJson() ? response()->json(['description' => 'API Laravel Invest']) :  redirect('login');

});

Route::middleware(['auth', 'verified'])->group( function(){

    Route::resource('dashboard', DashboardController::class);
    Route::resource('fixed_incomes', FixedIncomesController::class);
    Route::resource('product_type', ProductTypeController::class)->except(['create','show','edit']);
    Route::resource('indexers', IndexerController::class)->except(['create','show','edit']);

    Route::prefix('profile')->name('profile.')->group(function (){
        {
            Route::get('/', [ProfileController::class, 'edit'])->name('edit');
            Route::patch('/', [ProfileController::class, 'update'])->name('update');
            Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
        }
    });
    Route::get('logs', [LogViewerController::class, 'index']);

});

require __DIR__.'/auth.php';
