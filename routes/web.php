<?php

use Illuminate\Support\Facades\App;
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

Route::get('/', function () {
    return view('welcome');
});

// PHPInfo route
Route::get('/phpinfo', function () {
    return phpinfo();
});

Auth::routes();

// post routes
Route::post('/follow/{user}', [\App\Http\Controllers\FollowsController::class, 'store']);
//  Route::get('/p', 'PostsController::class');
Route::get('/p/create', [\App\Http\Controllers\PostsController::class, 'create']);
Route::get('/p/{post}', [\App\Http\Controllers\PostsController::class, 'show']);
Route::post('/p', [\App\Http\Controllers\PostsController::class, 'store']);

// Profile routes
Route::get('/profile/{user}', [\App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [\App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [\App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


//CMS Stuff
// University work semester6 page
// Route::get('/uws62020', function () {
//     return view();
// });
Route::get('/uws62020/cms/hosts', [\App\Http\Controllers\HostsController::class, 'index'])->name('check.show');
Route::post('/uws62020/cms/hosts/insert', [\App\Http\Controllers\HostsController::class, 'store'])->name('check.insert');
Route::get('/uws62020/cms/hosts/{user}/add', [\App\Http\Controllers\HostsController::class, 'create'])->name('check.create');
Route::get('/uws62020/cms/hosts/{check}/edit', [\App\Http\Controllers\HostsController::class, 'edit'])->name('check.edit');
Route::patch('/uws62020/cms/hosts/{check}', [\App\Http\Controllers\HostsController::class, 'update'])->name('check.update');


//Admin routes
Route::get('/admin/users', [\App\Http\Controllers\AdminController::class, 'showUsers'])->name('user.show');
Route::get('/admin/login-history', [\App\Http\Controllers\AdminController::class, 'showLoginHistory'])->name('loginHistory.show');
