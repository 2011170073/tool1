<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get("/",[ProjectController::class,"project_view"])->name("projectview");
    Route::get("/create",[ProjectController::class,"project_create_view"])->name("projectcreateview");
    Route::post("/create/store",[ProjectController::class,"project_create_store"])->name("projectcreatestore");
    Route::delete("/delete/{big_goal}",[ProjectController::class,"project_delete"])->name("projectdelete");
    Route::delete("/delete2/{goal}",[ProjectController::class,"project_delete2"])->name("project_delete2");
    
    Route::get("/create2",[ProjectController::class,"project_create_view2"])->name("projectcreateview2");
    Route::post("/create2/store",[ProjectController::class,"project_create_store2"])->name("projectcreatestore2");
});

require __DIR__.'/auth.php';


