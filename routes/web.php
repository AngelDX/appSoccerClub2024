<?php

use App\Livewire\IndexLivewire;
use App\Livewire\ManagerMain;
use App\Livewire\PostLivewire;
use App\Livewire\SquadLivewire;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/administradores',ManagerMain::class)->name('administradores');
});

Route::get('/',[IndexLivewire::class,'render'])->name('index');
Route::get('noticias',[PostLivewire::class,'render'])->name('noticias');
Route::get('plantel',[SquadLivewire::class,'render'])->name('plantel');
