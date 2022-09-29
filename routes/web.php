<?php


use App\Models\Post;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\ChangePasswordController;


Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home",
        "active" => "Home"
    ]);
});

Route::get('/tentangPKKMB', function () {
    return view('tentang',[
        "title" => "tentang",
        "active" => "tentang"
    ]);
});

Route::get('/presensi', function () {
    return view('presensi',[
        "title" => "Presensi",
        "active" => "Presensi"
    ]);
})->middleware('auth');

Route::get('/tugas', function () {
    return view('tugas',[
        "title" => "Tugas",
        "active" => "Tugas"
    ]);
})->middleware('auth');

Route::get('/pedomanPKKMB', function () {
    return view('pedoman',[
        "title" => "pedoman",
        "active" => "pedoman"
    ]);
});

Route::get('/zoomlink', function () {
    return view('link',[
        "title" => "link",
        "active" => "link"
    ]);
})->middleware('auth');

Route::get('/twibbon', function () {
    return view('twibbon',[
        "title" => "twibbon",
        "active" => "twibbon"
    ]);
})->middleware('auth');

Route::get('/panitia', function () {
    return view('panitia',[
        "title" => "panitia",
        "active" => "panitia"
    ]);
});

Route::get('/login', function () {
    return view('login',[
        "title" => "login",
        "active" => "login"
    ]);
});

Route::get('/register', function () {
    return view('register',[
        "title" => "register",
        "active" => "register"
    ]);
});

route::get('/profile', function(){
    return view('profile',[
        "title" => "dashboard",
        "active" => "dashboard"
    ]);
});



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('dashboard/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('dashboard/register', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('password/change-password', [ChangePasswordController::class, 'index'])->middleware('auth');
Route::post('change-password', [ChangePasswordController::class, 'changePassword'])->name('change.password'); 
