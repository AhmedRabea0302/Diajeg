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

// Admin panel Routes
Route::group(['namespace' => 'Admin', 'midlleware' => 'auth'], function() {
    Route::get('/admin', 'HomeController@index')->name('admin');
    Route::get('/headpart', 'HeadController@index')->name('head-part');
    Route::post('/updateheading', 'HeadController@updateHead')->name('update-heading');

    // Principles Route
    Route::get('/principle', 'PrincipleController@index')->name('principle');
    Route::post('/principle', 'PrincipleController@updatePrinciple')->name('update-principle');

    // Product Route
    Route::get('/product', 'ProductController@index')->name('product');
    Route::post('/product', 'ProductController@updateProduct')->name('update-product');

    // Images Route
    Route::get('/image', 'ImageController@index')->name('image');
    Route::post('/image', 'ImageController@updateImage')->name('update-image');
    Route::get('/deleteimage', 'ImageController@deleteImage')->name('delete-image');

    // Advantages Route
    Route::get('/advantages', 'AdvantageController@index')->name('advantages');
    Route::post('/advantages', 'AdvantageController@updateAdvantage')->name('advantages');
    Route::get('/add-advantage', 'AdvantageController@getAddAdvantage')->name('add-advantage');
    Route::post('/add-advantage', 'AdvantageController@postAddAdvantage')->name('post-add-advantage');

    Route::get('/update-advantage/{id}', 'AdvantageController@getUpdateAdvantage')->name('update-adv');
    Route::post('/update-advantage/{id}', 'AdvantageController@postUpdateAdvantage')->name('post-update-adv');


    Route::get('/deleteadvantage', 'AdvantageController@deleteAdvantage')->name('delete-adv');


    // Messages
    Route::get('/messages', 'MessageController@index')->name('messages');

});


// Site Routes

Route::group(['namespace' => 'Site'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/send-message', 'HomeController@sendMessage')->name('send-message');
});

// Route::get('/profile', function() {
//     return 'Abwaha';
// });
Auth::routes();

