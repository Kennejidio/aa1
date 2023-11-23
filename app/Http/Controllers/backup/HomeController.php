<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        return view('home')->with(compact('user'));
    }
    // public function about(){

    //     // $student = Student::find(1);

    //     //$user = User::find($student->user_id);

    //     // dd($student->age, $student->toArray());
    //     // dd($student, $student->user->email);


    //     return view('about');
    // }


}
