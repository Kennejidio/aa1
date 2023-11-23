<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\Count;

class StaffController extends Controller
{
    public function dashboard(Request $request, $id)
    {
        $user = User::find($id);
        // dd($user);
        // if($user->hasRole('student')){ abort(404);}
        if ($user->hasRole('Admin') | $user->hasRole('staff')) {

        } else {
            abort(404);
        }
        if ($user->id != Auth::user()->id) {abort(401);}

        $students = Student::where('status', 'Enrolled')->count();
        $pendingStudents = Student::where('status', 'PENDING')->count();
        $staffs = Staff::where('type', 'Staff')->count();
        $faculties = Staff::where('type', 'Faculty')->count();
        return view('staff.dashboard')->with(compact('user', 'students', 'pendingStudents', 'staffs', 'faculties'));
    }

    public function settings()
    {
        return view('staff.settings');
    }
}
