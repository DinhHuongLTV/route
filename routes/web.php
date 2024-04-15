<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Api\ProductsController;

Route::middleware('checkpermission')->prefix('category')->group(function() {
    Route::get('/', [CategoryController::class, 'index'])->name('category.list');

    Route::get('detail/{id}', [CategoryController::class, 'getCategory'])->name('category.detail');
    Route::post('update/{id}', [CategoryController::class, 'update']);

    Route::get('add', [CategoryController::class, 'create'])->name('category.add');
    Route::post('add', [CategoryController::class, 'handleCreate']);

    Route::post('delelte/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});

Route::get('/', function () {
    return '<h1 style="text-align: center;">Trang chủ</h1>';
})->name('home');

// Route::prefix('admin')->group(function() {
//     Route::resource('users', UsersController::class);
// });

Route::prefix('api')->group(function() {
    Route::get('products', [ProductsController::class, 'index']);
});

Route::prefix('admin')->middleware('checkpermission')->group(function() {
    Route::get('/', function() {
        return 'dash board';
    });

    Route::resource('users', UsersController::class);

    Route::get('employee', function() {
        return 'employee';
    });

    Route::prefix('product')->group(function() {
        Route::get('show', function() {
            return 'tat ca san pham';
        });

        Route::get('edit/{id}', function($id) {
            return 'sua san pham id: ' . $id;
        });

        Route::get('delete', function() {
            return 'xoa san pham';
        });
    });
});