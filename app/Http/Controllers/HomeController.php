<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Auth;
use App\Resume;
use App\Product;
use App\Cart;
use App\Payment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request){
        $user = Auth::user();
        $resume = new Resume;
        if ($user->resume()->count() === 0) {
            $imgcover = $request->file('img');
            $extension = $imgcover->getClientOriginalExtension();
            Storage::disk('public')->put($imgcover->getFilename() . '.' . $extension, File::get($imgcover));
            $resume->description = $request->input('description');
            $resume->phone = $request->input('pnum');
            $resume->fax = $request->input('fnum');
            $resume->education_year = $request->input('eyear');
            $resume->education_level = $request->input('elevel');
            $resume->programming_skill = $request->input('pskill');
            $resume->other_skill = $request->input('oskill');
            $resume->achievement_year = $request->input('ayear');
            $resume->achievement = $request->input('aa');
            $resume->reference_name = $request->input('rname');
            $resume->reference_email = $request->input('remail');
            $resume->reference_phone = $request->input('rphone');
            $resume->mime = $imgcover->getClientMimeType();
            $resume->ori_image = $imgcover->getClientOriginalName();
            $resume->image = $imgcover->getFilename() . '.' . $extension;
            $user->resume()->save($resume);
            echo "<script type='text/javascript'>
            alert('An information of your resume was added sucessfully');
            window.location.href = '".route('home')."';
            </script>";
        }
           // return redirect('home');
        // }
        else{
            echo "<script type='text/javascript'>
            alert('Resume information is already exists!!!');
            window.location.href = '".route('home')."';
            </script>";
        }
    }

    public function updateResume(Request $request){
        $user = Auth::user();
        $resume = $user->resume;

        if(empty($request->file('img'))){

        //$resume->id = $request->input('rid');
        $resume->description = $request->input('description');
        $resume->phone = $request->input('pnum');
        $resume->fax = $request->input('fnum');
        $resume->education_year = $request->input('eyear');
        $resume->education_level = $request->input('elevel');
        $resume->programming_skill = $request->input('pskill');
        $resume->other_skill = $request->input('oskill');
        $resume->achievement_year = $request->input('ayear');
        $resume->achievement = $request->input('aa');
        $resume->reference_name = $request->input('rname');
        $resume->reference_email = $request->input('remail');
        $resume->reference_phone = $request->input('rphone');
        $resume->image = $request->input('img');
        // $resume->save();
        $resume->save();
       // return redirect('home');
        // echo 'Save';
        echo "<script type = 'text/javascript'>
            alert('An information of your resume was updated successfully');
            window.location.href = '".route('home')."';
        </script>";
        }
        else{
            $image_path = public_path() . "/uploads/$resume->image";
            File::delete($image_path);
            $imgcover = $request->file('img');
            $extension = $imgcover->getClientOriginalExtension();
            Storage::disk('public')->put($imgcover->getFilename() . '.' . $extension, File::get($imgcover));
            $resume->description = $request->input('description');
            $resume->phone = $request->input('pnum');
            $resume->fax = $request->input('fnum');
            $resume->education_year = $request->input('eyear');
            $resume->education_level = $request->input('elevel');
            $resume->programming_skill = $request->input('pskill');
            $resume->other_skill = $request->input('oskill');
            $resume->achievement_year = $request->input('ayear');
            $resume->achievement = $request->input('aa');
            $resume->reference_name = $request->input('rname');
            $resume->reference_email = $request->input('remail');
            $resume->reference_phone = $request->input('rphone');
            $resume->mime = $imgcover->getClientMimeType();
            $resume->ori_image = $imgcover->getClientOriginalName();
            $resume->image = $imgcover->getFilename() . '.' . $extension;
            $resume->save();
            echo "<script type = 'text/javascript'>
            alert('An information of your resume was updated successfully');
            window.location.href = '" . route('home') . "';
        </script>";

        }
        // echo 'Save successfully';
        // return redirect('home');
        // return $user;
    }
    public function updateUser(Request $request){
        $name = $request->input('uname');
        $uid = $request->input('uid');
        $uemail = $request->input('uemail');
        $users = Auth::user();
        $users->name = $name;
       // $users->id = $uid;
        $users->email = $uemail;
        $users->save();

       echo "<script type='text/javascript'>
       alert('Your personal information was updated Successfully!!!');
       window.location.href = '".route('home')."';
       </script>";
       //return redirect('home');

    }

    public function viewProduct(){
        $product = Product::all();
        return view('users.viewProduct',['product'=>$product]);
    }
    // public function admin(){
    //     return view('admin');
    // }
    
    public function viewBiodata(){
        $user = Auth::user();
        return view('users.userInfo', ['user' => $user]);
    }

    public function updateBiodata(){
        $user = Auth::user();
        return view('users.editInfo',['user' => $user]);
    }

    public function addResumeInfo(){
        $user = Auth::user();
    return view('users.addResumeInfo', ['user' => $user]);
    }

    public function updateResumeInfo(){
        $user = Auth::user();
        $resume = $user->resume;
        return view('users.updateResumeInfo',['resume' => $resume, 'user' => $user]);
    }

    public function viewResumeInfo(){
        $user = Auth::user();
        $resume = $user->resume;
        return view('users.userResumeInfo',['user'=>$user,'resume'=>$resume]);
    }

    public function styleS(){
        $user = Auth::user();
        $resume = $user->resume;
        return view('users.styleSwitcher', ['resume' => $resume, 'user' => $user]);
    }

    public function viewCart(){
        $user = Auth::user();
        $carts= Cart::with('product')->get();
        //$p = $cart->product->image;
        //$product = Product::all();
        return view('users.viewCart',['carts'=>$carts]);
    }

    public function purchaseList(){
        $payment = Payment::all();
    // $carts = Cart::all();
    return view('users.purchaseProductList',['payment'=>$payment]);
    }
}
