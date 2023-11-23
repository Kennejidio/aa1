<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentDataController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return view('studentdata.index', compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('studentdata.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view('studentdata.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

        $student = Student::find($id);
        $student->lrn = $request->input('lrn');
        $student->elementary = $request->input('elementary');
        $student->firstname = $request->input('firstname');
        $student->middlename = $request->input('middlename') ? $request->middlename : "";
        $student->lastname = $request->input('lastname');
        $student->extname = $request->input('extname') ? $request->extname : "";
        $student->birthdate = $request->input('birthdate');
        $student-> sex = $request->input('sex');
        $student->barangay = $request->input('barangay');
        $student->municipal = $request->input('municipal');
        $student->province = $request->input('province');
        $student->zip = $request->input('zip');
        $student->mother = $request->input('mother');
        $student->father = $request->input('father');
        $student->guardian = $request->input('guardian');
        $student->contact = $request->input('contact');
        $student->gradelevelcompleted = $request->input('gradelevelcompleted') ? $request->gradelevelcompleted : "";
        $student->lastschoolyearcompleted = $request->input('lastschoolyearcompleted') ? $request->lastschoolyearcompleted : "";
        $student->schoolname = $request->input('schoolname') ? $request->schoolname : "";
        $student->schooladdress = $request->input('schooladdress') ? $request->schooladdress : "";
        $student->schoolid = $request->input('schoolid') ? $request->schoolid : "";
        $student->save();

        return redirect()->route('studentdata.index')
            ->with('success', 'Student updated successfully');
    }
}
