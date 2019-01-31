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
//use Auth;
use App\Resume;
use App\User;
use App\Product;
use App\Cart;
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('viewInfo/{id}',function(){
    $user = Auth::user();
    return view('users.userInfo',['user' => $user]);
});

Route::get('viewResumeInfo/{id}',function(){
    $user = Auth::user();
    $resume = $user->resume;
    return view('users.userResumeInfo',['user'=>$user,'resume'=>$resume]);
});

Route::get('editInfo/{id}',function(){
    $user = Auth::user();
    return view('users.editInfo',['user' => $user]);
});

Route::get('addResumeInfo/{id}', function () {
    $user = Auth::user();
    return view('users.addResumeInfo', ['user' => $user]);
});

Route::get('updateResumeInfo/{id}',function(){
    $user = Auth::user();
    $resume = $user->resume;
    return view('users.updateResumeInfo',['resume' => $resume, 'user' => $user]);
});

Route::get('styleSwitcher/{id}',function(){
    $user = Auth::user();
    $resume = $user->resume;
    return view('users.styleSwitcher', ['resume' => $resume, 'user' => $user]);
});

Route::get('delete', function () {
    $product = Product::all();
    return view('admins.deleteProduct', ['product' => $product]);
});

Route::get('delete/{id}', 'AdminController@deleteProduct');


Route::get('viewUser', 'AdminController@view');

Route::post('editInfo/{id}','HomeController@updateUser');

Route::post('addResumeInfo/{id}','HomeController@store');

Route::post('updateResumeInfo/{id}','HomeController@updateResume');

Route::get('addProduct','AdminController@addForm');

Route::post('addProduct','AdminController@addNewProduct');

//Route::get('addProduct','AdminContt=ro')

Route::get('updateProduct',function(){
    $product = Product::all();
    return view('admins.updateProductList',['product' => $product]);
});

Route::get('updateProductForm/{id}',function($id){
    $product = Product::find($id);
    return view('admins.updateProductForms',['product'=>$product]);
});

Route::post('updateProductForm/{id}','AdminController@updateProduct');

Route::get('deleteUser/{id}',function($id){
    $user = User::find($id);
    $user->delete();
    echo "<script type='text/javascript'>
    alert('User was deleted successfully...');
    window.location.href = '".route('admin')."';
    </script>
    ";
});

Route::get('userViewProduct','HomeController@viewProduct');

Route::get('addCart/{id}',function($id){
    $user = Auth::user();
    $product = Product::find($id);
    $product = $product->id;
    $user->product()->attach($product);
    echo "<script type='text/javascript'>
    alert('Product was added to cart successfully...');
    window.location.href = '".route('home')."';
    </script>
    ";

});

Route::get('viewCart/{id}',function(){
    $user = Auth::user();
    $carts= Cart::all();
    //$p = $cart->product->image;
    //$product = Product::all();
    return view('users.viewCart',['carts'=>$carts]);
});




