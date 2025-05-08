<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\Web\PostWebController;
use App\Http\Controllers\Web\AuthWebController;

Route::get('/register', [AuthWebController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthWebController::class, 'register']);

Route::get('/login', [AuthWebController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthWebController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::resource('posts', PostWebController::class);
});
