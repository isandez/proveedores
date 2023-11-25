<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('Bienvenida.index');
});

Route::get('/proveedor', function () {
    return view('proveedor.index');
});

Route::get('/proveedor/create',[ProveedorController::class,'create']);

Route::resource('proveedor',ProveedorController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cliente', function () {
    return view('cliente.index');
});

Route::get('/cliente/create',[ClienteController::class,'create']);

Route::resource('cliente',ClienteController::class);
Auth::routes();





Route::get('/venta', function () {
    return view('venta.index');
});

Route::get('/venta/create',[VentaController::class,'create']);

Route::resource('venta',VentaController::class);
Auth::routes();

Route::get('/venta/{id}/pago', [VentaController::class, 'pago'])->name('venta.pago');

Route::get('/venta/{id}/imprimir', [VentaController::class, 'imprimir'])->name('venta.imprimir');

Route::middleware(['guest'])->group(function () {
    Route::view('/login', "Login.login")->name('login');
    Route::view('/Registrarse', "Login.register")->name('register');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/registro', [LoginController::class, 'register'])->name('registro');
});

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', "Pages.index")->name('dashboard');
    Route::view('/ventas', "Pages.venta.Interfaz-ventas")->name('ventas');
    Route::view('/clientes', "Pages.clientes")->name('clientes');
    Route::view('/estadisticas', "Pages.estadisticas")->name('estadisticas');
    Route::view('/proveedores', "Pages.proveedores")->name('proveedores');
    Route::view('/configuracion', "Pages.configuracion")->name('configuracion');
    Route::view('/soporte', "Pages.soporte")->name('soporte');
    Route::view('/editar-perfil', "Pages.editProfile")->name('editar-perfil');
    Route::post('/edit-profile', [ProfileController::class, 'updateProfile'])->name('Pages.edit-profile');
});