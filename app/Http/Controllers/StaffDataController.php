<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StaffDataController extends Controller
{
    public function index()
    {
        $staffs = Staff::latest()->paginate(5);
        return view('staffdata.index', compact('staffs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {
        $staff = Staff::find($id);
        return view('staffdata.show', compact('staff'));
    }

    public function create()
    {
        return view("staffdata.create");
    }

    protected function store(Request $request)
    {
       $validate = Validator::make($request->all(), [
            'type' => 'required',
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

        $staff = new Staff();
        $staff->type = $request->type;
        $staff->firstname = $request->firstname;
        $staff->middlename = $request->middlename;
        $staff->lastname = $request->lastname;
        $staff->extname = $request->extname;
        $staff->birthdate = $request->birthdate;
        $staff->sex = $request->sex;
        $staff->barangay = $request->barangay;
        $staff->municipal = $request->municipal;
        $staff->province = $request->province;
        $staff->zip = $request->zip;
        $staff->mother = $request->mother;
        $staff->father = $request->father;
        $staff->guardian = $request->guardian;
        $staff->contact = $request->contact;
        $staff->user_id = $user->id;
        $staff->created_by = $user->id;
        $staff->updated_by = $user->id;
        $staff->save();

        $role = Role::where('name', 'guest')->first();
        $user->assignRole([$role->id]);
        return redirect()->route('staffdata.index')
            ->with('success', 'Registration success, You can login.');
    }

    public function edit($id)
    {
        $staff = Staff::find($id);

        return view('staffdata.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'type' => 'required',
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
        $staff = Staff::find($id);
        $staff->type = $request->input('type');
        $staff->firstname = $request->input('firstname');
        $staff->middlename = $request->input('middlename');
        $staff->lastname = $request->input('lastname');
        $staff->extname = $request->input('extname');
        $staff->birthdate = $request->input('birthdate');
        $staff->sex = $request->input('sex');
        $staff->barangay = $request->input('barangay');
        $staff->municipal = $request->input('municipal');
        $staff->province = $request->input('province');
        $staff->zip = $request->input('zip');
        $staff->mother = $request->input('mother');
        $staff->father = $request->input('father');
        $staff->guardian = $request->input('guardian');
        $staff->contact = $request->input('contact');
        $staff->save();

        return redirect()->route('staffdata.index')
        ->with('success', 'Staff updated successfully');
    }
}

