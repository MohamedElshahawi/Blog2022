<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


//Website Routes
Route::prefix('/')->middleware('checkMode')->group(function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // Your Route w rbena htb2a henaaa :D
    Route::get('/', [App\Http\Controllers\PublicController::class, 'viewPosts'])->name('welcome');
    Route::get('/post/{id}', [App\Http\Controllers\PublicController::class, 'singlePost'])->name('post');
    Route::post('/post/store/{id}', [App\Http\Controllers\PublicController::class, 'storeComment'])->name('post.store');
    Route::get('/contact', [App\Http\Controllers\PublicController::class, 'contactInfo'])->name('contact');

    Route::post('contact/sendemail', [App\Http\Controllers\SendEmailController::class, 'sendEmail'])->name('sendemail');
    // Route::post('contact/sendemail/send', [App\Http\Controllers\SendEmailController::class, 'send'])->name('sendemail');

    Route::get('welcome/search/', [App\Http\Controllers\PublicController::class , 'search'])->name('search');

    Route::get('/about', [App\Http\Controllers\PublicController::class, 'aboutInfo'])->name('about');
});
// route Manteinance Mode Page here !!
Route::get('/soon', function () {
    // return 'Soon';
    return view('maintenance');
});

//Admin Routes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route for Admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    //categories route
    Route::get('categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');
    Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create'])->name('categories.create');
    Route::post('/categories/create', [App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');
    Route::get('/categories/show/{id}', [App\Http\Controllers\CategoriesController::class, 'show'])->name('categories.show');
    Route::delete('/categories/destroy/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.destroy');



    //Routes for users
    Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
    Route::get('users/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');




    //routes for posts
    Route::get('posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
    Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/create', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/show/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
    Route::delete('/posts/destroy/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');

    //routes for comments 
    Route::get('comments', [App\Http\Controllers\CommentController::class, 'index'])->name('comments');
    Route::get('/comments/create/{id}', [App\Http\Controllers\CommentController::class, 'create'])->name('comments.create');
    Route::post('/comments/create/{id}', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
    Route::get('/comments/show/{id}', [App\Http\Controllers\CommentController::class, 'show'])->name('comments.show');
    Route::get('/comments/edit/{id}', [App\Http\Controllers\CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/update/{id}', [App\Http\Controllers\CommentController::class, 'update'])->name('comments.update');
    Route::delete('/comments/destroy/{id}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comments.destroy');


    // route for setting
    Route::get('setting', [App\Http\Controllers\SettingController::class, 'index'])->name('setting');

    Route::get('/setting/edit/{id}', [App\Http\Controllers\SettingController::class, 'edit'])->name('setting.edit');
    Route::put('/setting/update/{id}', [App\Http\Controllers\SettingController::class, 'update'])->name('setting.update');


    Route::get('/setting/contact', [App\Http\Controllers\SettingController::class, 'getContact'])->name('adContact');
    Route::put('/setting/contact/{id}', [App\Http\Controllers\SettingController::class, 'updateContact'])->name('contact.update');

    Route::get('/setting/about', [App\Http\Controllers\SettingController::class, 'getAbout'])->name('adAbout');
    Route::put('/setting/about/{id}', [App\Http\Controllers\SettingController::class, 'updateAbout'])->name('about.update');

});
