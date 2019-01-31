<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Auth;
use App\User;
use App\Product;
class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admins.admin');
    }

    public function view(){
        $user = User::all();
        return view('admins.seeUser',['user' => $user]);
    }

    public function addForm(){
        //$user = Auth::user();
        return view('admins.addProduct');
    }

    public function addNewProduct(Request $request){
        $product = new Product;
        $imgcover = $request->file('image');
        $extension = $imgcover->getClientOriginalExtension();
        Storage::disk('publics')->put($imgcover->getFilename() . '.' . $extension, File::get($imgcover));
        $product->product_name = $request->input('pname');
        $product->product_description = $request->input('pdes');
        $product->product_price = $request->input('pp');
        $product->mime = $imgcover->getClientMimeType();
        $product->ori_image = $imgcover->getClientOriginalName();
        $product->image = $imgcover->getFilename() . '.' . $extension;
        $product->save();
        echo "<script type='text/javascript'>
       alert('The product was added Successfully!!!');
       window.location.href = '".route('admin')."';
       </script>";

    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $image_path = public_path() . "/products/$product->image";
        File::delete($image_path);
        $product->delete();
        echo "<script type='text/javascript'>
       alert('The product was deleted Successfully!!!');
       window.location.href = '".route('admin')."';
       </script>";
    }

    public function updateProduct(Request $request,$id){
        $product = Product::find($id);
         if(empty($request->file('image'))){
            $product->product_name = $request->input('pname');
            $product->product_description = $request->input('pdes');
            $product->product_price = $request->input('pp');
            $product->image = $request->input('image');
            $product->save();
            echo "<script type='text/javascript'>
            alert('The product was updated Successfully!!!');
            window.location.href = '".route('admin')."';
            </script>";


         }
         else{
            $image_path = public_path() . "/products/$product->image";
            File::delete($image_path);
            $imgcover = $request->file('image');
            $extension = $imgcover->getClientOriginalExtension();
            Storage::disk('publics')->put($imgcover->getFilename() . '.' . $extension, File::get($imgcover));
            $product->product_name = $request->input('pname');
            $product->product_description = $request->input('pdes');
            $product->product_price = $request->input('pp');
            $product->mime = $imgcover->getClientMimeType();
            $product->ori_image = $imgcover->getClientOriginalName();
            $product->image = $imgcover->getFilename() . '.' . $extension;
            $product->save();
            echo "<script type='text/javascript'>
            alert('The product was added Successfully!!!');
            window.location.href = '".route('admin')."';
            </script>";


         }


    }
}
