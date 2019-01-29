<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Resume;

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
        $user->resumes()->save($resume);
        return redirect('home');
    }

    public function updateResume(Request $request,$id){
        $user = Auth::user();
        $resume = new Resume;
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
        // $resume->save();
        $user->resumes()->save($resume);
        return redirect('home');
        // return $user;
    }
    public function updateUser(Request $request, $id){
        $name = $request->input('uname');
        $uid = $request->input('uid');
        $uemail = $request->input('uemail');
        $users = Auth::user()::find($id);
        $users->name = $name;
        $users->id = $uid;
        $users->email = $uemail;
        $users->save();

       echo "<script type='text/javascript'>alert('Update Successfully!!!');</script>";
       return redirect('home');

    }

    // public function admin(){
    //     return view('admin');
    // }
}
