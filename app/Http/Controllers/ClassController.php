<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:class-list|class-create|class-edit|class-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:class-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:class-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:class-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $classes = Classes::latest()->paginate(5);
        $schoolyears = SchoolYear::all();
        $subjects = Subject::all();
        $staffs = Staff::all();
        // $staffs = Staff::where('type', 'Faculty')->id();

        return view('classes.index', compact('classes'))->with(compact('schoolyears'))
        ->with(compact('subjects'))
        ->with(compact('staffs'));
    }

    public function create()
    {
        $schoolyears = SchoolYear::orderBy('id', 'desc')->first();
        $subjects = Subject::all();
        $staffs = DB::table('staff')
        ->where('type', 'Faculty')
        ->get();

        return view('classes.create')->with(compact('schoolyears'))
            ->with(compact('subjects'))
            ->with(compact('staffs'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'staff' => 'required',
            'subject' => 'required',
            'schoolyear' => 'required',
        ]);

        $class = new Classes();
        $class->school_year_id = $request->schoolyear;
        $class->subject_id = $request->subject;
        $class->staff_id = $request->staff;
        $class->created_by = Auth::user()->id;
        $class->updated_by = Auth::user()->id;
        $class->save();

        return redirect()->route('classes.index')
            ->with('success', 'Class Added successfully.');
    }

    public function show($id)
    {
        $class = Classes::find($id);
        return view('classes.show', compact('class'));
    }

    public function edit($id)
    {
        $class = Classes::find($id);
        $schoolyears = SchoolYear::all();
        $subjects = Subject::all();

        return view('classes.edit', compact('class'))
            ->with(compact('schoolyears'))
            ->with(compact('subjects'));
    }

    public function update(Request $request, $id)
    {
        $class = Classes::find($id);
        $class->school_year_id = $request->schoolyear;
        $class->subject_id = $request->subject;
        $class->save();

        return redirect()->route('classes.index')
            ->with('success', 'Class updated successfully');
    }

    public function destroy($id)
    {
        DB::table("classes")->where('id', $id)->delete();
        return redirect()->route('classes.index')
            ->with('success', 'Class deleted successfully');
    }
}
