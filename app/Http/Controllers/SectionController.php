<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\GradeLevel;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:section-list|section-create|section-edit|section-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:section-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:section-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:section-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::latest()->paginate(5);
        $gradelevels = GradeLevel::all();
        return view('section.index', compact('sections'))->with(compact('gradelevels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gradelevels = GradeLevel::all();
        return view('section.create')->with(compact('gradelevels'));
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
            'section' => 'required',
            'gradelevel' => 'required',
        ]);

        $section = new Section();
        $section->code = $request->section;
        $section->grade_level_id = $request->gradelevel;
        $section->description = $request->description;
        $section->created_by = Auth::user()->id;
        $section->updated_by = Auth::user()->id;
        $section->save();

        return redirect()->route('section.index')
            ->with('success', 'Section created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $section = Section::find($id);
        return view('section.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = Section::find($id);
        $gradelevels = GradeLevel::all();
        return view('section.edit', compact('section'))->with(compact('gradelevels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'section' => 'required',
            'gradelevel' => 'required',
        ]);

        $section = Section::find($id);
        $section->code = $request->input('section');
        $section->grade_level_id = $request->input('gradelevel');
        $section->description = $request->input('description');
        $section->save();

        return redirect()->route('section.index')
            ->with('success', 'Section updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("sections")->where('id', $id)->delete();
        return redirect()->route('section.index')
            ->with('success', 'Section deleted successfully');
    }
}
