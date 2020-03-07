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

//so you don't have to use the full path
use Illuminate\Http\Request as Request; 
use Illuminate\Validation\Factory as Validation; 
use Illuminate\Support\Facades\Request as FacadesRequest;

//Route::get('/', 'PostController@getIndex')->name('main.index');

Route::get('/', [
    'uses'  => 'PostController@getIndex',
    'as'    => 'main.index'
]);

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::get('post/{id}',[
    'uses'  => 'PostController@getPost',
    'as'    => 'main.post' 
]);

/*
//removing old route method and obsolete dummy data

Route::get('main/{id}', function ($id) {

    if ($id == 1) {
        $post = [
            'id' => $id,
            'title' => 'Welcome to LarS',
            'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
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
*/

Route::group(['prefix' => 'admin'], function () {

    //Admin index page
    Route::get('',[
        'uses'  => 'PostController@getAdminIndex',
        'as'    => 'admin.index'
    ]);

    //Page: create
    Route::get('create', [
        'uses'  => 'PostController@getAdminCreate',
        'as'    => 'admin.create'
    ]);

    //Create a new post
    Route::post('create', [
        'uses'  => 'PostController@postAdminCreate',
        'as'    => 'admin.create'
    ]);

    //fetch Page: edit post
    Route::get('edit/{id}', [
        'uses'  => 'PostController@getAdminEdit',
        'as'    => 'admin.edit'
    ]);

    //Update a Post
    Route::post('edit', [
        'uses'  => 'PostController@postAdminUpdate',
        'as'    => 'admin.update'
    ]);

    //removing old route method for group: admin
    /*
    Route::get('create', function () {
        return view('admin.create');
    })->name('admin.create');

    Route::post('create', function (Request $request, Validation $validator) {
        $isValid = $validator->make($request->all(), [
            'title' => 'min:5|max:140|required',
            'content' => 'min:140|required'
        ]);

        if ($isValid->fails()) {
            return redirect()->back()->withErrors($isValid);
        }

        return redirect()->route('admin.index')->with('success', 'Post, &quot;' . $request->input('title') . '&quot;, created');

    })->name('admin.create');

    Route::get('edit/{id}', function ($id) {
        if ($id == 1) {
            $post = [
                'title' => 'Welcome to LarS',
                'content' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            ];
        } else {
            $post = [
                'title' => 'Error: Post Not Found',
                'content' => 'This post does not exist. Check your data.',
            ];
        }

        return view('admin.edit',['post' => $post]);
    })->name('admin.edit');

    Route::post('edit', function (Request $request, Validation $validator) {
        $isValid = $validator->make($request->all(), [
            'title' => 'min:5|max:140|required',
            'content' => 'min:140|required'
        ]);

        if ($isValid->fails()) {
            return redirect()->back()->withErrors($isValid);
        }
        return redirect()->route('admin.index')->with('info', 'Post &quot;'.$request->input('title'). '&quot; edited Successfully' ); //$request->input('title') is the <input name="" value
    })->name('admin.update');

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index'); 
    */
});