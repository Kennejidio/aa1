<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use App\Models\Enrollment;
use App\Models\GradeLevel;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class StudentAdmissionController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function store(Request $request)
    {
        // dd($request->all());

        // $request->validate([
        //     'firstname' => 'required',
        //     'middlename' => 'required',
        //     'lastname' => 'required',
        //     'birthdate' => 'required',
        //     'sex' => 'required',
        //     'barangay' => 'required',
        //     'municipal' => 'required',
        //     'province' => 'required',
        //     'zip' => 'required',
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);

        $validate = Validator::make($request->all(), [
            'elementary' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'birthdate' => 'required',
            'sex' => 'required',
            'barangay' => 'required',
            'municipal' => 'required',
            'province' => 'required',
            'zip' => 'required',
            'guardian' => 'required',
            'contact' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobilenumber' => ['required', 'string', 'min:11'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'elementary.required' => 'Last Elementary School is required.',
            'firstname.required' => 'Firstname required.',
            'lastname.required' => 'Lastname required.',
            'birthdate.required' => 'Birthdate required.',
            'sex.required' => 'Sex required.',
            'barangay.required' => 'barangay required.',
            'municipal.required' => 'municipal required.',
            'province.required' => 'province required.',
            'zip.required' => 'zip required.',

            'email.required' => 'email is required.',
            'mobilenumber.required' => 'mobile number is required.',

        ]);
        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate->errors());
        }

        $user = User::create([
            'name' => $request->firstname . " " . $request->lastname,
            'email' => $request->email,
            'mobilenumber' => $request->mobilenumber,
            'password' => Hash::make($request->password),
        ]);

        $student = new Student();
        $student->lrn = $request->lrn;
        $student->elementary = $request->elementary;
        $student->status = 'PENDING';
        $student->firstname = $request->firstname;
        $student->middlename = $request->middlename;
        $student->lastname = $request->lastname;
        $student->extname = $request->extname;
        $student->birthdate = $request->birthdate;
        $student->sex = $request->sex;
        $student->barangay = $request->barangay;
        $student->municipal = $request->municipal;
        $student->province = $request->province;
        $student->zip = $request->zip;
        $student->mother = $request->mother;
        $student->father = $request->father;
        $student->guardian = $request->guardian;
        $student->contact = $request->contact;
        $student->gradelevelcompleted = $request->filled("gradelevelcompleted") ? $request->gradelevelcompletedd : "";
        $student->lastschoolyearcompleted = $request->filled('lastschoolyearcompleted') ? $request->lastschoolyearcompleted: "";
        $student->schoolname = $request->filled('schoolname') ? $request->schoolname: "";
        $student->schooladdress = $request->filled('schooladdress') ? $request->schooladdress: "";
        $student->schoolid = $request->filled('schoolid') ? $request->schoolid: "";
        $student->user_id = $user->id;
        $student->created_by = $user->id;
        $student->updated_by = $user->id;
        $student->save();

        $role = Role::where('name', 'student')->first();
        $user->assignRole([$role->id]);
        return redirect()->route('login')
            ->with('success', 'Registration success, You can login.');
    }

    public function createNew()
    {
        $is_transferee = false;
        return view("students.new")->with(compact('is_transferee'));
    }

    public function createTransferee()
    {

        $is_transferee = true;
        return view("students.new")->with(compact('is_transferee'));
    }

}
