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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

//Route::get('/', 'WelcomeController@index')->name('welcome'); // pagina principala, index page
Route::get('/', 'CategoryController@index')->name('category.index'); // pagina principala, index page
Route::get('/search', 'WelcomeController@search')->name('search'); // pagina principala, index page
// Route::get('/home', 'HomeController@index')->name('home');

// categories //
//insert
Route::get('/category/create', 'CategoryController@create')->name('category.create'); // get/display insert form pagina
Route::post('/category/insert', 'CategoryController@store')->name('category.insert'); // insert/post action, pagina
// update 
Route::get('/category/{cat}/edit', 'CategoryController@edit')->name('category.show');  // get/display update form pagina 
Route::post('/category/update', 'CategoryController@update')->name('category.update'); // update/post action, pagina
// delete
Route::get('/category/{cat_id}/remove', 'CategoryController@destroy'); // update/post action, pagina
// list categories
Route::get('/category', 'CategoryController@index')->name('category.index'); // arata lista de category pagina

// prroducts
Route::get('/category/{cat_id}/products', 'CategoryController@listShow')->name('category.listShow');
Route::get('/category/{cat_id}/products/create', 'ProductsController@create')->name('products.create');
Route::post('/category/products/insert', 'ProductsController@store')->name('products.store');
Route::get('/category/products/{prod_id}/remove', 'ProductsController@destroy');
// Route::get('/category/{cat_id}/products/{prod_id}/remove', 'ProductsController@destroy');
Route::get('/category/{cat_id}/products/{prod_id}/edit', 'ProductsController@edit')->name('products.show');
Route::put('/category/products/update', 'ProductsController@update')->name('products.update');
Route::get('/products/{prod_id}', 'ProductsController@details')->name('products.show');

// Display one product page example
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show'); // pagina de client/profil
Route::get('/profiles', 'ProfilesController@showDataRecords')->name('profile.showDataRecords');

Route::get('/posts/search', 'PostsController@search');

Route::resource('posts', 'PostsController');
// alternativ
// Route::post('/posts/{post_id}', 'PostsController@destroy')->name('profile.destroy');
// Route::post('/posts/{post_id}', 'PostsController@edit')->name('profile.edit');
// ...
// php artisan route:list
// |        | POST      | posts                                     | posts.store             | App\Http\Controllers\PostsController@store                             | web          |
// |        | GET|HEAD  | posts                                     | posts.index             | App\Http\Controllers\PostsController@index                             | web          |
// |        | GET|HEAD  | posts/create                              | posts.create            | App\Http\Controllers\PostsController@create                            | web          |
// |        | DELETE    | posts/{post}                              | posts.destroy           | App\Http\Controllers\PostsController@destroy                           | web          |
// |        | PUT|PATCH | posts/{post}                              | posts.update            | App\Http\Controllers\PostsController@update                            | web          |
// |        | GET|HEAD  | posts/{post}                              | posts.show              | App\Http\Controllers\PostsController@show                              | web          |
// |        | GET|HEAD  | posts/{post}/edit                         | posts.edit              | App\Http\Controllers\PostsController@edit                              | web          |

Route::post('/reply/store', 'CommentsController@replyStore')->name('comments.reply');

Route::post('/coments', 'CommentsController@store')->name('comments.store');
// Route::resource('comments', 'CommentsController');


