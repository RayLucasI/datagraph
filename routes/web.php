<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
use App\Livewire\Todos;
use App\Livewire\ListaLibros;
use App\Livewire\CreatePost;


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


/** ruta original
 * 
 * Route::view('/', 'welcome');
 * 
 **/

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

// Estas tres rutas se despliegan en el componente "slot" de resources/views/components/layouts/app.blade.php
Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/lista', ListaLibros::class);
Route::get('/nuevo',CreatePost::class);
