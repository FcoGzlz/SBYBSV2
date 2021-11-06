<?php

use App\Http\Controllers\UAdminitradorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/solicitudes_clientes', [App\Http\Controllers\UAdminitradorController::class, 'SolicitudesClientes'])->name('solicitudesClientes');

Route::match(['get', 'post'], '/definir_prioridad', [App\Http\Controllers\UAdminitradorController::class,'definirPrioridad'])->name('definirPrioridad');
    Route::match(['get', 'post'], '/ingresar_solicitud', [App\Http\Controllers\UAdminitradorController::class,'ingresarSolicitud'])->name('ingresarSolicitud');
    Route::get('/solicitudes_ingresadas',[ App\Http\Controllers\UAdminitradorController::class,'solicitudesIngresadas'])->name('solicitudesIngresadas');
    Route::get('/nueva-solicitud', [App\Http\Controllers\UAdminitradorController::class,'nuevaSolicitud'])->name('nuevaSolicitud');
    Route::POST('/agregar-solicitud', [App\Http\Controllers\UAdminitradorController::class,'agregarSolicitud'])->name('agregarSolicitud');
    Route::POST('/detalle-solicitud', [App\Http\Controllers\UAdminitradorController::class,'detalleSolicitud'])->name('detalleSolicitud');
    Route::POST('/editar-solicitud', [App\Http\Controllers\UAdminitradorController::class,'editarSolicitud'])->name('editarSolicitud');
    Route::any('/guardar-solicitud', [App\Http\Controllers\UAdminitradorController::class,'guardarSolicitud'])->name('guardarSolicitud');
    Route::POST('/eliminar-solicitud', [App\Http\Controllers\UAdminitradorController::class,'eliminarSolicitud'])->name('eliminarSolicitud');


    Route::get('/solicitudes-pendientes', [App\Http\Controllers\UAdminitradorController::class,'solicitudesPendientes'])->name('solicitudesPendientes');
    Route::match(['get', 'post'],'/detalle-solicitud', [App\Http\Controllers\UAdminitradorController::class,'detalleSolicitud'])->name('detalle');
    Route::POST('/agregar-detalle', [App\Http\Controllers\UAdminitradorController::class,'agregarDetalle'])->name('agregarDetalle');
    Route::POST('/guardar-detalle', [App\Http\Controllers\UAdminitradorController::class,'guardarDetalle'])->name('guardarDetalle');
    Route::get('/finalizar-solicitud', [App\Http\Controllers\UAdminitradorController::class,'finalizarSolicitud'])->name('finalizarSolicitud');
    Route::get('/solicitudes-finalizadas', [App\Http\Controllers\UAdminitradorController::class,'solicitudesFinalizadas'])->name('solicitudesFinalizadas');
    Route::POST('/resumen-solicitud', [App\Http\Controllers\UAdminitradorController::class,'resumenSolicitud'])->name('resumen');
