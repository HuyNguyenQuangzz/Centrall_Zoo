<?php

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
//// Customer
//Route::group(['prefix' => 'CentrallZoo'], function (){
//   Route::get('',[
//       'uses' => 'CustomerControllerWithRepos@index',
//       'as' => 'customer.index'
//   ]);
////    Route::get('',[
////        'uses' => 'CustomerControllerWithRepos@signup',
////        'as' => 'customer.signup'
////    ]);
//});

// Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('', [
        'uses' => 'AdminControllerWithRepos@index',
        'as' => 'admin.index'
    ]);

    Route::get('show/{id}',[
        'uses' => 'AdminControllerWithRepos@show',
        'as' => 'admin.show'
    ]);

    Route::get('create',[
        'uses' => 'AdminControllerWithRepos@create',
        'as' => 'admin.create'
    ]);

    Route::post('create',[
        'uses' => 'AdminControllerWithRepos@store',
        'as' => 'admin.store'
    ]);

    Route::get('update/{id}',[
        'uses' => 'AdminControllerWithRepos@edit',
        'as' => 'admin.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'AdminControllerWithRepos@update',
        'as' => 'admin.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'AdminControllerWithRepos@confirm',
        'as' => 'admin.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'AdminControllerWithRepos@destroy',
        'as' => 'admin.destroy'
    ]);
});


// Category
Route::group(['prefix' => 'category'], function () {
    Route::get('', [
        'uses' => 'CategoryControllerWithRepos@index',
        'as' => 'category.index'
    ]);

    Route::get('show/{id}',[
        'uses' => 'CategoryControllerWithRepos@show',
        'as' => 'category.show'
    ]);

    Route::get('create',[
        'uses' => 'CategoryControllerWithRepos@create',
        'as' => 'category.create'
    ]);

    Route::post('create',[
        'uses' => 'CategoryControllerWithRepos@store',
        'as' => 'category.store'
    ]);

    Route::get('update/{id}',[
        'uses' => 'CategoryControllerWithRepos@edit',
        'as' => 'category.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'CategoryControllerWithRepos@update',
        'as' => 'category.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'CategoryControllerWithRepos@confirm',
        'as' => 'category.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'CategoryControllerWithRepos@destroy',
        'as' => 'category.destroy'
    ]);
});


// Animal (Product)
Route::group(['prefix' => 'animal'], function () {
    Route::get('', [
        'uses' => 'AnimalControllerWithRepos@index',
        'as' => 'animal.index'
    ]);

    Route::get('show/{id}',[
        'uses' => 'AnimalControllerWithRepos@show',
        'as' => 'animal.show'
    ]);

    Route::get('create',[
        'uses' => 'AnimalControllerWithRepos@create',
        'as' => 'animal.create'
    ]);

    Route::post('create',[
        'uses' => 'AnimalControllerWithRepos@store',
        'as' => 'animal.store'
    ]);

    Route::get('update/{id}',[
        'uses' => 'AnimalControllerWithRepos@edit',
        'as' => 'animal.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'AnimalControllerWithRepos@update',
        'as' => 'animal.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'AnimalControllerWithRepos@confirm',
        'as' => 'animal.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'AnimalControllerWithRepos@destroy',
        'as' => 'animal.destroy'
    ]);
});

// Customer
Route::group(['prefix' => 'CentrallZoo'], function (){
    Route::get('',[
        'uses' => 'CustomerControllerWithRepos@homepage',
        'as' => 'customer.customerView'
    ]);
});

Route::group(['prefix' => 'CustomerSignUp'], function (){
    Route::get('',[
        'uses' => 'SignUpController@index',
        'as' => 'customer.customerSignUp'
    ]);
});
Route::group(['prefix' => 'SingleProduct'], function (){
    Route::get('',[
        'uses' => 'SingleProductController@index',
        'as' => 'customer.singleProduct'
    ]);
});
// Customer
Route::group(['prefix' => 'customer'], function (){
    Route::get('', [
        'uses' => 'CustomerControllerWithRepos@index',
        'as' => 'customer.index'
    ]);
    Route::get('', [
        'uses' => 'CustomerControllerWithRepos@index',
        'as' => 'customer.index'
    ]);
    //Customer
    Route::get('show/{c_id}',[
        'uses' => 'CustomerControllerWithRepos@show',
        'as' => 'customer.showC'
    ]);

    Route::get('create',[
        'uses' => 'CustomerControllerWithRepos@create',
        'as' => 'customer.createC'
    ]);

    Route::post('create',[
        'uses' => 'CustomerControllerWithRepos@store',
        'as' => 'customer.storeC'
    ]);

    Route::get('update/{c_id}',[
        'uses' => 'CustomerControllerWithRepos@edit',
        'as' => 'customer.editC'
    ]);

    Route::post('update/{c_id}',[
        'uses' => 'CustomerControllerWithRepos@update',
        'as' => 'customer.updateC'
    ]);

    Route::get('delete/{c_id}', [
        'uses' => 'CustomerControllerWithRepos@confirm',
        'as' => 'customer.confirmC'
    ]);

    Route::post('delete/{c_id}',[
        'uses' => 'CustomerControllerWithRepos@destroy',
        'as' => 'customer.destroyC'
    ]);
});

// Foods Route
Route::group(['prefix' => 'foods'], function (){
    //index
    Route::get('',[
        'uses' => 'FoodControllerWithRepos@index',
        'as' => 'food.index'
    ]) ;
    // create
    Route::get('create',[
        'uses' => 'FoodControllerWithRepos@create',
        'as' => 'food.create'
    ]);

    Route::post('create',[
        'uses' => 'FoodControllerWithRepos@store',
        'as' => 'food.store'
    ]);
    // show
    Route::get('show/{f_id}',[
        'uses' => 'FoodControllerWithRepos@show',
        'as' => 'food.show'
    ]);
    //update
    Route::get('update/{f_id}',[
        'uses' => 'FoodControllerWithRepos@edit',
        'as' => 'food.edit'
    ]);

    Route::post('update/{f_id}',[
        'uses' => 'FoodControllerWithRepos@update',
        'as' => 'food.update'
    ]);
    //delete
    Route::get('delete/{f_id}',[
        'uses' => 'FoodControllerWithRepos@confirm',
        'as' => 'food.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'FoodControllerWithRepos@destroy',
        'as' => 'food.destroy'
    ]);
});

//ManualAuth
Route::group(['prefix' => 'auth'], function (){
    Route::get('login',[
        'uses' => 'ManualAuthController@ask',
        'as' => 'auth.ask'
    ]);

    Route::post('login',[
        'uses' => 'ManualAuthController@signin',
        'as' => 'auth.signin'
    ]);

    Route::get('logout',[
        'uses' => 'ManualAuthController@signout',
        'as' => 'auth.signout'
    ]);
});
