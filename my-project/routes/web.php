<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
    '/',
    [PagesController::class, 'cargarChollos']
)->name('inicio');

Route::get('form/editar/{id}', [PagesController::class, 'editar'])->name('chollo_editar');
Route::put('form/editar/{id}', [PagesController::class, 'actualizar'])->name('form_post_editar');

Route::get('form/crear', function () {
    return view('form.crear');
})->name('chollo_crear');

Route::post('form/crear', [PagesController::class, 'crear'])->name('form_post_crear');

Route::get('nuevo', [PagesController::class, 'nuevo'])->name('chollo_nuevo');

Route::get('destacado', [PagesController::class, 'destacado'])->name('chollo_destacado');

Route::get('producto/{id}', [PagesController::class, 'cargarChollo'])->name('chollo_producto');

Route::get('borrar/{id}', [PagesController::class, 'eliminar'])->name('chollo_borrar');

