<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfNotAdmin;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\DashboardController;



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

Route::group(['middleware' => [RedirectIfNotAdmin::class]], function () {
    Route::get('/', [DashboardController::class , 'index'])->name('dashboard');
    Route::resource('tasks', TaskController::class);
    Route::get('/show-sorted-tasks', [TaskController::class, 'sorted'])->name('task.sorted');
    Route::post('/task/sortTasks', [TaskController::class, 'makeSorting'])->name('task.makeSorting');
    
});



require __DIR__ . '/admin_auth.php';
