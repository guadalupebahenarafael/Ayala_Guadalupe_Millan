<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

// Ruta para el formulario de registro
Route::get('/registro', [
    AuthController::class, 'registerform'
])->name('registro');

// Ruta para ejecutar el formulario
Route::post('/registro', [
    AuthController::class, 'register'
])->name('registro.store');

// Ruta para manejar la vista del inicio de sesión
Route::get('/acceso', [
    AuthController::class, 'loginForm'
])->name('acceso');

// Ruta para manejar los datos del inicio de sesión
Route::post('/acceso', [
    AuthController::class, 'login'
])->name('acceso.store');

// Ruta para cerrar sesión
Route::post('/cerrar', [
    AuthController::class, 'logout'
])->name('cerrar');

Route::middleware(['auth', 'admin'])->group(function () {
    // Ruta para el usuario administrador
    Route::get('/admin-dashboard',[
        AuthController::class, 'adminDashboard'
    ])->name('admin-dashboard');
});
