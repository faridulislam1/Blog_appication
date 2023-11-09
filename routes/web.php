<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboradController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[BlogController::class,'index'])->name('/');
Route::get('/blog.details/{slug}',[BlogController::class,'blogDetails'])->name('blog.details');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[DashboradController::class,'index'])->name('dashboard');
//user module
    Route::get('/add-user',[UserController::class,'addUser'])->name('add.user');
    Route::get('/manage-user',[UserController::class,'manageUser'])->name('manage.user');
    Route::post('/new-user',[UserController::class,'saveUser'])->name('new.user');
    Route::get('/new-edit/{id}',[UserController::class,'editUser'])->name('user.edits');
    Route::post('/new-delete',[UserController::class,'deleteUser'])->name('user.delete');
    Route::post('/update-user',[UserController::class,'updateUser'])->name('update.user');

    //Role Module
    Route::get('/role',[RoleController::class,'role'])->name('role');
    Route::post('/permisssion/store',[RoleController::class,'permission_store'])->name('permission.store');
    Route::post('/add/role',[RoleController::class,'add_role'])->name('add.role');
    Route::get('/new-edit/{id}',[UserController::class,'editRole'])->name('role.edit');
    Route::post('/new-delete',[UserController::class,'deleteRole'])->name('role.delete');
    Route::post('/update-role',[UserController::class,'updateRole'])->name('update.role');


//Category module
    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add.category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage.category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new.category');
    Route::get('/category-edit/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
    Route::get('/category-status/{id}',[CategoryController::class,'categoryStatus'])->name('category.status');
    Route::post('/category-delete',[CategoryController::class,'categoryDelete'])->name('category.delete');
    Route::post('/update.category',[CategoryController::class,'updateCategory'])->name('update.category');

//Author Module
    Route::get('/add-author',[AuthorController::class,'addAuthor'])->name('add.author');
    Route::get('/manage-author',[AuthorController::class,'manageAuthor'])->name('manage.author');
    Route::post('/new-author',[AuthorController::class,'saveAuthor'])->name('new.author');
    Route::get('/author-status/{id}',[AuthorController::class,'statusAuthor'])->name('author.status');
    Route::get('/edit-author/{id}',[AuthorController::class,'editAuthor'])->name('author.edit');
    Route::post('/update-author',[AuthorController::class,'updateAuthor'])->name('update.Author');
    Route::post('/delete-status',[AuthorController::class,'deleteAuthor'])->name('author.delete');

    //Blog module
    Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add.blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage.blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new.blog');
    Route::get('/edit-status/{id}',[BlogController::class,'editBlog'])->name('blog.edit');
    Route::post('/update-blog',[BlogController::class,'updateBlog'])->name('update.blog');
    Route::post('/delete-blog',[BlogController::class,'deleteBlog'])->name('blog.delete');



});
