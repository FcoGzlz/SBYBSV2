<?php

use App\Http\Controllers\CCOntroller;
use App\Http\Controllers\UAdministradorController;
use App\Http\Controllers\UOperativoController;
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

Route::get('/solicitudes_clientes', [UAdministradorController::class, 'SolicitudesClientes'])->name('solicitudesClientes');

Route::match(['get', 'post'], '/definir_prioridad', [UAdministradorController::class,'definirPrioridad'])->name('definirPrioridad');
    Route::match(['get', 'post'], '/ingresar_solicitud', [UAdminitradorController::class,'ingresarSolicitud'])->name('ingresarSolicitud');
    Route::get('/solicitudes_ingresadas',[UAdministradorController::class,'solicitudesIngresadas'])->name('solicitudesIngresadas');
    Route::get('/nueva_solicitud', [UAdministradorController::class,'nuevaSolicitud'])->name('nuevaSolicitud');
    Route::POST('/agregar_solicitud', [UAdministradorController::class,'agregarSolicitud'])->name('agregarSolicitud');
    Route::POST('/detalle_solicitud', [UAdministradorController::class,'detalleSolicitud'])->name('detalleSolicitud');
    Route::GET('/editar_solicitud/{solicitud}', [UAdministradorController::class,'editarSolicitud']);
    Route::POST('/guardar_solicitud/{solicitud}', [UAdministradorController::class,'guardarSolicitud']);
    Route::POST('/eliminar_solicitud', [UAdministradorController::class,'eliminarSolicitud'])->name('eliminarSolicitud');
    Route::GET('/reporte', [UAdministradorController::class, 'reporte']);


    Route::get('/solicitudes_pendientes', [UOperativoController::class,'solicitudesPendientes'])->name('solicitudesPendientes');
    Route::match(['get', 'post'],'/detalle_solicitud/{solicitud}', [UOperativoController::class,'detalleSolicitud'])->name('detalle');
    Route::POST('/detalle_solicitud/{solicitud}/agregar_detalle', [UOperativoController::class,'agregarDetalle'])->name('agregarDetalle');
    Route::PATCH('/detalle_solicitud/{solicitud}/guardar_detalle/{detalle}', [UOperativoController::class,'guardarDetalle'])->name('guardarDetalle');
    Route::DELETE('/detalle_solicitud/{solicitud}/eliminar_detalle/{detalle}', [UOperativoController::class, 'eliminarDetalle']);
    Route::POST('/finalizar_solicitud/{solicitud}', [UOperativoController::class,'finalizarSolicitud'])->name('finalizarSolicitud');
    Route::get('/solicitudes_finalizadas', [UOperativoController::class,'solicitudesFinalizadas'])->name('solicitudesFinalizadas');
    Route::POST('/resumen_solicitud/{solicitud}', [UOperativoController::class,'resumenSolicitud'])->name('resumen');

    Route::get('/formulario_ingreso_solicitud', [CCOntroller::class, 'index']);
