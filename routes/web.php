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
use App\Payment;
use Illuminate\Http\Request;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

// no need auth

// required auth
Route::group(['middleware' => 'auth'], function() {
    
});

Route::get('viewInfo/{id}', 'HomeController@viewBiodata');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');



Route::get('viewResumeInfo/{id}','HomeController@viewResumeInfo');

Route::get('editInfo/{id}','HomeController@updateBiodata');

Route::get('addResumeInfo/{id}', 'HomeController@addResumeInfo');

Route::get('updateResumeInfo/{id}','HomeController@updateResumeInfo');

Route::get('styleSwitcher/{id}','HomeController@styleS');

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

Route::get('viewCart/{id}','HomeController@viewCart');

Route::get('purchase/{id}',function($id){
    $user = Auth::user();
    $cart = Cart::find($id);
    return view('users.purchaseConfirmation',['cart' => $cart]);
});

Route::post('purchase/{id}',function(Request $request,$id){
    $payment = New Payment;
    $payment->cart_id = $request->input('cartId');
    $payment->u_id = $request->input('userId');
    $payment->p_id = $request->input('productId');
    $payment->quantity = $request->input('qty');
    $payment->tot_price = $request->input('price');
    $payment->save();
    echo "<script type='text/javascript'>
    alert('Product was purchased successfully...');
    window.location.href = '" . route('home') . "';
    </script>
    ";
});

Route::get('viewPurchaseList/{id}','HomeController@purchaseList');

Route::get('viewPro',function(){
    $product = Product::all();
    return view('users.viewProducts', ['product' => $product]);
});




