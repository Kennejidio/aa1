<?php

namespace App\Http\Controllers;

use App\Models\Student;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    public function dashboard(Request $request, $id)
    {
        if ($id != Auth::user()->id) {abort(401);}
        if (!Auth::user()->hasRole('student')) {abort(404,'Invalid Role');}
        $student = Student::where("user_id", "=", Auth::user()->id)->first();
        return view('students.dashboard')->with(compact('student'));
    }
}
