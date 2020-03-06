<?php

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
    return view('main.index');
})->name('main.index');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::get('main/{id}', function ($id) {

    if ($id == 1) {
        $post = [
            'id' => $id,
            'title' => 'Welcome to LarS',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
        ];
    } else {
        $post = [
            'id' => 0,
            'title' => 'Error: Post Not Found',
            'content' => 'This post does not exist. Check your data.',
        ];
    }

    return view('main.post', ['post' => $post]);
    
})->name('main.post');

Route::group(['prefix' => 'admin'], function () {
    Route::get('create', function () {
        return view('admin.create');
    })->name('admin.create');

    Route::post('create', function () {
        return "return: post admin create";
    })->name('admin.create');

    Route::get('edit/{id}', function ($id) {
        if ($id == 1) {
            $post = [
                'title' => 'Welcome to LarS',
                'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
            ];
        } else {
            $post = [
                'title' => 'Error: Post Not Found',
                'content' => 'This post does not exist. Check your data.',
            ];
        }

        return view('admin.edit',['post' => $post]);
    })->name('admin.edit');

    Route::post('edit', function () {
        return "return: post admin update";
    })->name('admin.update');

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index'); 
});