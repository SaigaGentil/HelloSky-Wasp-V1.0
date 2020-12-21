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

Route::get('/phpinfo', function () {
    return phpinfo();
});

Auth::routes();

Route::post('/follow/{user}', [\App\Http\Controllers\FollowsController::class, 'store']);
//  Route::get('/p', 'PostsController::class');
Route::get('/p/create', [\App\Http\Controllers\PostsController::class, 'create']);
Route::get('/p/{post}', [\App\Http\Controllers\PostsController::class, 'show']);
Route::post('/p', [\App\Http\Controllers\PostsController::class, 'store']);

Route::get('/profile/{user}', [\App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [\App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [\App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


//CMS Stuff
//University work semester6 page
Route::get('/uws62020', function () {
    return view();
});

Route::get('/uws62020/cms/hosts', [\App\Http\Controllers\HostsController::class, 'index'])->name('host.show');
Route::get('/uws62020/cms/hosts/{user}/add', [\App\Http\Controllers\AddHostController::class, 'create'])->name('host.create');
Route::get('/uws62020/cms/hosts/{user}/{check}/edit', [\App\Http\Controllers\EditHostController::class, 'edit'])->name('host.edit');

//Admin routes
// Route::get('/admin/users', [\App\Http\Controllers\UsersController::class, 'show'])->name('user.show');
// Route::get('/admin/history', [\App\Http\Controllers\LoginHistoryController::class, 'show'])->name('loginHistory.show');
