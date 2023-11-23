<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\GradeLevel;
use Illuminate\Http\Request;
use DB;

class GradeLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:gradelevel-list|gradelevel-create|gradelevel-edit|gradelevel-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:gradelevel-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:gradelevel-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:gradelevel-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gradelevels = GradeLevel::latest()->paginate(5);
        return view('gradelevel.index', compact('gradelevels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gradelevel.create');
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
            'gradelevel' => 'required',
        ]);

        $gradelevel = new GradeLevel();
        $gradelevel->code = $request->gradelevel;
        $gradelevel->description = $request->filled("description") ? $request->description : "";
        $gradelevel->created_by = Auth::user()->id;
        $gradelevel->updated_by = Auth::user()->id;
        $gradelevel->save();

        return redirect()->route('gradelevel.index')
            ->with('success', 'Grade Level created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GradeLevel  $gradelevel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gradelevel = GradeLevel::find($id);
        return view('gradelevel.show', compact('gradelevel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GradeLevel  $gradelevel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gradelevel = GradeLevel::find($id);

        return view('gradelevel.edit', compact('gradelevel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GradeLevel  $gradelevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'gradelevel' => 'required',
        ]);

        $gradelevel = GradeLevel::find($id);
        $gradelevel->code = $request->input('gradelevel');
        $gradelevel->description = $request->input('description') ? $request->description : "";
        $gradelevel->save();

        return redirect()->route('gradelevel.index')
            ->with('success', 'Grade Level updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GradeLevel  $gradelevel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("grade_levels")->where('id', $id)->delete();
        return redirect()->route('gradelevel.index')
            ->with('success', 'Grade Level deleted successfully');
    }
}
