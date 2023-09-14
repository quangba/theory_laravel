<?php

use App\Http\Controllers\Admin\DashboardController;
// use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/setting', function () {
//     $html = "<h1> SETTING </h1>";
//     return $html;
// });

// Route::get('/product', function () {
//     return "Phuong thuc GET";
//     // return "Phuong thuc POST";
// })->name('product');

/** post put */

// Route::post('/formTest', function () {
//     return "Phuong thuc POST";
// });

// Route::put('/formTest', function () {
//     return "Phuong thuc PUT";
// });

// Route::delete('/formTest', function () {
//     return "Phuong thuc DELETE";
// });

// Route::patch('/formTest', function () {
//     return "Phuong thuc PATCH";
// });

// Route::get('/formTest', function () {
//     return view('form');
// });

// Route::get('/formTest', function () {
//     return "FORM TEST";
// });

/** match get nhieu request voi nhieu phuong thuc */
// Route::match(['get', 'post'], 'formTest', function () {
//     return $_SERVER['REQUEST_METHOD'];
// });
// Route::get('/formTest', function () {
//     return view('form');
// });

// any chap nhan tat ca phuong thuc
// Route::any('formTest', function(Request $request) {
//     return $request->method();
// });

/**  Redirect */
// Route::redirect('formTest1', 'formTest');
// Route::redirect('aaaaaa', 'https://laravel.com/');
// Route::redirect('formTest1', 'formTest', 301);

/**  View chỉ hỗ trợ get */
//  Route::view('formTest1', 'formTest');


/** prefix group */
// Route::prefix('admin')on () {
//     Route::get('/setting', function () {
//         $html = "<h1> SETTING </h1>";
//         return $html;
//     });
//     Route::get('/formTest', function () {
//         return "Phuong thuc GET";
//     })->name('admin.setting');

//     Route::prefix('prd')->group(function() {
//         Route::get('/', function () {
//             return "danh sach sp";
//         });
//         Route::get('/add', function () {
//             return "them danh sach sp";
//         });
//         Route::get('edit', function () {
//             return "sua danh sach sp";
//         });
//     });
// });

/** tham so */
// Route::get('/admin/{name?}', function ($name = null) {
//     if ($name) {
//         echo 'Hello ' . $name . '!';
//     } else {
//         echo 'Hello World!';
//     }
// });

// Route::get('/admin/{name}-{weight}', function ($name, $weight) {
//     $content = "lay thong tin cua ADMIN: name is " . $name . '<br>'
//     . '<br>' . 'weight is ' . $weight;
//     return $content;
// })->where('weight', '[0-9]+')->where('name', '.+');

// Route::get('/admin/{name}-{age}', function ($name, $age) {
//     $content = "lay thong tin cua ADMIN: name is " . $name . '<br>' . 'age is ' . $age;
//     return $content;
// })->where('age', '[0-9]+')->where('name', '.+');


/** Controller/  */

// Route::prefix('category')->group(function(){
//     Route::get('/', [CategoryController::class, 'index'])->name('category.list');
//     Route::get('/edit/{id}', [CategoryController::class, 'getCategory'])->name('category.edit');
//     Route::post('/edit/{id}', [CategoryController::class, 'updateCategory']);
//     Route::get('/add', [CategoryController::class, 'addCategory'])->name('category.add');
//     Route::post('/add', [CategoryController::class, 'handleAddCategory']);
//     Route::delete('/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
// });

// Route::prefix('product')->group(function() {
//     Route::resource('photos', PhotoController::class);
// });

// Route::prefix('products')->group(function(){
//     Route::get('/', [ProductsController::class, 'index'])->name('product.list');
//     Route::get('/edit/{id}', [ProductsController::class, 'getProduct'])->name('product.edit');
//     Route::post('/edit/{id}', [ProductsController::class, 'updateProduct']);
//     Route::get('/add', [ProductsController::class, 'addProduct'])->name('product.add');
//     Route::post('/add', [ProductsController::class, 'handleAddProduct']);
//     Route::delete('/delete/{id}', [ProductsController::class, 'deleteProduct'])->name('product.delete');
// });

/** Middleware */
// Route::get('/', function () {
//     return '<h1>TRANG CHU</h1>';
// })->name('home');

// Route::middleware('auth.admin')->prefix('admin')->group(function() {
//     Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
//     Route::get('/', [DashboardController::class, 'index']);
// });

// Route::prefix('admin')->group(function() {
//     Route::resource('products', ProductsController::class);
//     Route::get('/', [DashboardController::class, 'index']);
// });

// Route::get('/login', function() {
//     return "LOGIN";
// })->name('login');



/** VIEW */
// Route::get('/', function () {
//     $title = "CGC3";
//     $content = "CGC3 learning LARAVEL ";
//     $data = [
//         'titleData' => $title,
//         'contentData' => $content,
//     ];
//     return view('home', $data); // load view home.
// })->name('home');

// // Route::get('/', [HomeController::class, 'index']);

// Route::get('/detail-sp/{id}', [HomeController::class, 'detail']);

// Route::get('/user', function() {
    // $title = "CGC3 LARAVEL";
    // $content = "Learning View";
    // $data = [
    //     "titleData" => $title,
    //     "contentData" => $content,
    // ];
//     return view('user.index', $data);
// });

// Route::get('/user', [UserController::class, 'index']);


// Laravel request là class được xây dựng sẵn nhằm cung cấp dữ liệu HTTP request và thao tác với các HTTP request đó

// Route::prefix('category')->group(function(){
//     Route::get('/', [CategoryController::class, 'index'])->name('category.list');
//     Route::get('/edit/{id}', [CategoryController::class, 'getCategory'])->name('category.edit');
//     Route::post('/edit/{id}', [CategoryController::class, 'updateCategory']);
//     Route::get('/add', [CategoryController::class, 'addCategory'])->name('category.add');
//     Route::post('/add', [CategoryController::class, 'handleAddCategory']);
//     Route::delete('/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
// });


// Route::prefix('user')->name('user.')->group(function(){
//     Route::get('/', [UserController::class, 'index'])->name('index');
//     Route::get('/add', [UserController::class, 'add'])->name('add');
//     Route::post('/add', [UserController::class, 'postAdd'])->name('post-add');

//     Route::get('/edit/{id}', [UserController::class, 'getEdit'])->name('edit');
//     Route::post('/edit/{id}', [UserController::class, 'postEdit'])->name('post-edit');

//     Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
// });

Route::prefix('user')->name('user.')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('index');

    Route::get('/add', [UserController::class, 'add'])->name('add');
    Route::post('/add', [UserController::class, 'postAdd'])->name('post-add');

    Route::get('edit/{id}', [UserController::class, 'getEdit'])->name('edit');
    Route::post('edit/{id}', [UserController::class, 'postEdit'])->name('post-edit');

    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
});

