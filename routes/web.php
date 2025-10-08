<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']) 
    ->name('home');

Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'adminHome']) 
    ->name('homeAdmin')
    ->middleware('auth');

//auth
Route::get('/ingresar', [\App\Http\Controllers\AuthController::class, 'show'] )
     ->name('auth.login.show');

Route::post('/ingresar', [\App\Http\Controllers\AuthController::class, 'process'] )
    ->name('auth.login.process');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'] )
    ->name('auth.logout');

// BLOGS
Route::get('/blog', [\App\Http\Controllers\BlogsController::class, 'blog']) 
    ->name('blogs.blog');

Route::get('/blog/{id}', [\App\Http\Controllers\BlogsController::class, 'blogById']) 
    ->name('blogs.details');

Route::get('/productos', [\App\Http\Controllers\GamesController::class, 'allGames'])
    ->name('games.all');


Route::get('/{id}', [\App\Http\Controllers\GamesController::class, 'gameById'])
    ->name('games.details')
    ->whereNumber('id');

// ABM Productos

Route::get('/admin/adminJuegos', [\App\Http\Controllers\GamesController::class, 'adminJuegos'])
    ->name('adminJuegos')
    ->middleware('auth');

Route::get('/admin/adminJuegos/crear', [\App\Http\Controllers\GamesController::class, 'create'])
    ->name('games.create')
    ->middleware('auth');

Route::post('/admin/adminJuegos/crear', [\App\Http\Controllers\GamesController::class, 'store'])  
    ->name('games.store')
    ->middleware('auth');

Route::get('/admin/adminJuegos/{id}/eliminar', [\App\Http\Controllers\GamesController::class, 'delete']) 
    ->name('games.delete')
    ->middleware('auth');

Route::post('/admin/adminJuegos/{id}/eliminar', [\App\Http\Controllers\GamesController::class, 'destroy']) 
    ->name('games.destroy')
    ->middleware('auth');

Route::get('/admin/adminJuegos/{id}/editar', [\App\Http\Controllers\GamesController::class, 'edit'])
    ->name('games.edit')
    ->middleware('auth');

Route::post('/admin/adminJuegos/{id}/editar', [\App\Http\Controllers\GamesController::class, 'update'])
    ->name('games.update')
    ->middleware('auth');


// ADMIN BLOGS

Route::get('/admin/admingBlogs', [\App\Http\Controllers\BlogsController::class, 'adminBlogs'])
    ->name('blogs.adminBlogs')
    ->middleware('auth');
    
Route::get('/admin/admingBlogs/contenido/{id}', [\App\Http\Controllers\BlogsController::class, 'showContent'])
    ->name('blogs.blogContenido')
    ->middleware('auth');

Route::get('/admin/adminBlogs/crear', [\App\Http\Controllers\BlogsController::class, 'create'])
    ->name('blogs.create')
    ->middleware('auth');

Route::post('/admin/adminBlogs/crear', [\App\Http\Controllers\BlogsController::class, 'store'])  
    ->name('blogs.store')
    ->middleware('auth');

Route::get('/admin/adminBlogs/{id}/eliminar', [\App\Http\Controllers\BlogsController::class, 'delete']) 
    ->name('blogs.delete')
    ->middleware('auth');

Route::post('/admin/adminBlogs/{id}/eliminar', [\App\Http\Controllers\BlogsController::class, 'destroy']) 
    ->name('blogs.destroy')
    ->middleware('auth');

    
Route::get('/admin/adminBlogs/{id}/editar', [\App\Http\Controllers\BlogsController::class, 'edit']) 
    ->name('blogs.edit')
    ->middleware('auth');

Route::post('/admin/adminBlogs/{id}/editar', [\App\Http\Controllers\BlogsController::class, 'update']) 
    ->name('blogs.update')
    ->middleware('auth');


