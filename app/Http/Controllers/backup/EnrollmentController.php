<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use App\Models\GradeLevel;
use App\Models\SchoolYear;
use App\Models\Section;
use App\Models\Student;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('permission:enrollment-list|enrollment-create|enrollment-edit|enrollment-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:enrollment-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:enrollment-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:enrollment-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $enrollments = Enrollment::latest()->paginate(5);
        $schoolyears = SchoolYear::all();
        $gradelevels = GradeLevel::all();
        $sections = Section::all();
        $students = Student::all();

        return view('enrollments.index', compact('enrollments'))->with(compact('schoolyears'))
        ->with(compact('gradelevels'))
        ->with(compact('sections'))
        ->with(compact('students'));
        // return view('enrollments.index', compact('enrollments'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schoolyears = SchoolYear::all();
        $gradelevels = GradeLevel::all();
        $sections = Section::all();
        $students = Student::all();

        return view('enrollments.create')->with(compact('schoolyears'))
            ->with(compact('gradelevels'))
            ->with(compact('sections'))
            ->with(compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        request()->validate([
            'student' => 'required',
            'gradelevel' => 'required',
            'section' => 'required',
            'status' => 'required',
            'schoolyear' => 'required',
        ]);

        $enrollment = new Enrollment();
        $enrollment->school_year_id = $request->schoolyear;
        $enrollment->grade_level_id = $request->gradelevel;
        $enrollment->section_id = $request->section;
        $enrollment->status = $request->status;
        $enrollment->student_id = $request->student;
        $enrollment->created_by = Auth::user()->id;
        $enrollment->updated_by = Auth::user()->id;
        $enrollment->save();

        $student = Student::find($request->student);
        $student->status = $enrollment->status;
        $student->save();

        return redirect()->route('enrollments.index')
            ->with('success', 'Enrolled successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolYear  $schoolYear
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $enrollment = Enrollment::find($id);
        return view('enrollments.show', compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolYear  $schoolYear
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enrollment = Enrollment::find($id);
        $schoolyears = SchoolYear::all();
        $gradelevels = GradeLevel::all();
        $sections = Section::all();
        $students = Student::all();

        return view('enrollments.edit', compact('enrollment'))
            ->with(compact('schoolyears'))
            ->with(compact('gradelevels'))
            ->with(compact('sections'))
            ->with(compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolYear  $schoolYear
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        // request()->validate([
        //     'student' => 'required',
        //     'gradelevel' => 'required',
        //     'section' => 'required',
        //     'status' => 'required',
        //     'schoolyear' => 'required',
        // ]);

        $enrollment = Enrollment::find($id);
        $enrollment->school_year_id = $request->schoolyear;
        $enrollment->grade_level_id = $request->gradelevel;
        $enrollment->section_id = $request->section;
        $enrollment->status = $request->status;
        $enrollment->save();

        return redirect()->route('enrollments.index')
            ->with('success', 'Enrollment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolYear  $schoolYear
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("enrollments")->where('id', $id)->delete();
        return redirect()->route('enrollments.index')
            ->with('success', 'Enrollment deleted successfully');
    }
}
