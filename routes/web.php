<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\PartnerController as AdminPartnerController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;





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

Route::get('/', [WebController::class, 'index']);
Route::get('/blog', function () {
    return view('404');
});
Route::get('/tentang-kami', function () {
    return view('404');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/izin', function () {
    return view('izin');
});

Auth::routes();

Route::get('/admin/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin/blog/index', [AdminBlogController::class, 'index'])->name('admin.blog.index');
Route::get('/admin/blog/edit', [AdminBlogController::class, 'edit'])->name('admin.blog.edit');
Route::get('/admin/blog/create', [AdminBlogController::class, 'create'])->name('admin.blog.create');
Route::post('/admin/blog/create', [AdminBlogController::class, 'store'])->name('admin.blog.store');


Route::get('/admin/partner/index', [AdminPartnerController::class, 'index'])->name('admin.partner.index');
Route::get('/admin/partner/create', [AdminPartnerController::class, 'create'])->name('admin.partner.create');
Route::post('/admin/partner/create', [AdminPartnerController::class, 'store'])->name('admin.partner.store');

Route::get('/admin/project/index', [AdminProjectController::class, 'index'])->name('admin.project.index');
Route::get('/admin/project/create', [AdminProjectController::class, 'create'])->name('admin.project.create');
Route::post('/admin/project/create', [AdminProjectController::class, 'store'])->name('admin.project.store');







