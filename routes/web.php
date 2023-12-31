<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Componentes\Counter;
use App\Livewire\Componentes\Todos;

use App\Http\Controllers\Consultas\registroController;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/counter',Counter::class);

Route::get('/tareas',Todos::class);

Route::get('/data',[registroController::class,'dataQ']);
   
Route::get('/siae/{num_cta}',[registroController::class,'Siae']);

Route::get('/info', function(){ return view('phpinfo.infor');});