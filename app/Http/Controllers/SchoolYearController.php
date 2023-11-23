<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SchoolYear;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:schoolyear-list|schoolyear-create|schoolyear-edit|schoolyear-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:schoolyear-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:schoolyear-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:schoolyear-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schoolyears = SchoolYear::latest()->paginate(5);
        return view('schoolyear.index', compact('schoolyears'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schoolyear.create');
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
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $schoolyear = new SchoolYear();
        $schoolyear->start_date = $request->start_date;
        $schoolyear->end_date = $request->end_date;
        $schoolyear->description = $request->filled("description") ? $request->description : "";
        $schoolyear->created_by = Auth::user()->id;
        $schoolyear->updated_by = Auth::user()->id;
        $schoolyear->save();

        return redirect()->route('schoolyear.index')
            ->with('success', 'School Year created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolYear  $schoolYear
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schoolyear = SchoolYear::find($id);
        return view('schoolyear.show', compact('schoolyear'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolYear  $schoolYear
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schoolyear = SchoolYear::find($id);

        return view('schoolyear.edit', compact('schoolyear'));
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
        request()->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $schoolyear = SchoolYear::find($id);
        $schoolyear->start_date = $request->input('start_date');
        $schoolyear->end_date = $request->input('end_date');
        $schoolyear->description = $request->input('description') ? $request->description : "";
        $schoolyear->save();

        return redirect()->route('schoolyear.index')
            ->with('success', 'School Year updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolYear  $schoolYear
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("school_years")->where('id', $id)->delete();
        return redirect()->route('schoolyear.index')
            ->with('success', 'School Year deleted successfully');
    }
}
