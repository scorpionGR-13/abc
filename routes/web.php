<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Ventas;
use App\Http\Controllers\Detalle_Ventas;
use App\Http\Controllers\categorias;
use App\Http\Controllers\productos;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Usuarios;
use Illuminate\Support\Facades\Route;

Route::get('/crear-admin', [AuthController::class,'crearAdmin']);

Route::get('/', [AuthController::class,'index'])->name('login');
Route::post('/logear', [AuthController::class,'logear'])->name('logear');

Route::middleware("auth")->middleware('auth')->group(function(){
    Route::get('/home', [Dashboard::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Route::get('/home', [Dashboard::class,'index'])->name('home');

Route::prefix('ventas')->middleware('auth')->group(function(){
    Route::get('/nueva-venta', [Ventas::class,'index'])->name('ventas_nueva');
});
Route::prefix('detalle_ventas')->middleware('auth')->group(function(){
    Route::get('/detalle-venta', [Detalle_Ventas::class,'index'])->name('detalles_nueva');
});


Route::prefix('categorias')->middleware('auth')->group(function(){
    Route::get('/categoria', [categorias::class,'index'])->name('categori');
    Route::get('/create', [categorias::class,'create'])->name('categorias.create');
    Route::post('/store', [categorias::class,'store'])->name('categorias.store');

    Route::get('/show/{id}', [categorias::class,'show'])->name('categorias.show');
    Route::delete('/destroy/{id}', [categorias::class,'destroy'])->name('categorias.destroy');

    Route::get('/edit/{id}', [categorias::class,'edit'])->name('categorias.edit');
    Route::put('/update/{id}', [categorias::class,'update'])->name('categorias.update');
});


Route::prefix('productos')->middleware('auth')->group(function(){
    Route::get('/productos', [productos::class,'index'])->name('producto');
    Route::get('/create', [productos::class,'create'])->name('productos.create');
    Route::post('/store', [productos::class,'store'])->name('productos.store');
});


Route::prefix('clientes')->middleware('auth')->group(function(){
    Route::get('/clientes', [Clientes::class,'index'])->name('cliente');
    Route::get('/create', [Clientes::class,'create'])->name('clientes.create');
    Route::post('/store', [Clientes::class,'store'])->name('clientes.store');

    Route::get('/show/{id}', [Clientes::class,'show'])->name('clientes.show');
    Route::delete('/destroy/{id}', [Clientes::class,'destroy'])->name('clientes.destroy');

    Route::get('/edit/{id}', [Clientes::class,'edit'])->name('clientes.edit');
    Route::put('/update/{id}', [Clientes::class,'update'])->name('clientes.update');
});


Route::prefix('usuarios')->middleware('auth')->group(function(){
    Route::get('/usuarios', [Usuarios::class,'index'])->name('usuarios');
    Route::get('/create', [Usuarios::class,'create'])->name('usuarios.create');
    Route::post('/store', [Usuarios::class,'store'])->name('usuarios.store');

    Route::get('/edit/{id}', [Usuarios::class,'edit'])->name('usuarios.edit');
    Route::put('/update/{id}', [Usuarios::class,'update'])->name('usuarios.update');
    Route::get('/tbody', [Usuarios::class,'tbody'])->name('usuarios.tbody');
    Route::get('/cambiar-estado/{id}/{estado}', [Usuarios::class, 'estado'])->name('usuarios.estado');
    Route::get('/cambiar-password/{id}/{password}', [Usuarios::class, 'cambio_password'])->name('usuarios.password');
});

