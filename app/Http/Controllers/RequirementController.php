<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Requirement;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:requirement-list|requirement-create|requirement-edit|requirement-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:requirement-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:requirement-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:requirement-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requirements = Requirement::latest()->paginate(5);
        return view('requirements.index', compact('requirements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requirements.create');
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
            'requirement' => 'required',
            'description' => 'required',
        ]);

        $requirement = new Requirement();
        $requirement->requirement = $request->requirement;
        $requirement->description = $request->description;
        $requirement->created_by = Auth::user()->id;
        $requirement->updated_by = Auth::user()->id;
        $requirement->save();

        return redirect()->route('requirements.index')
            ->with('success', 'Requirement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requirements  $requirement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requirement = Requirement::find($id);
        return view('requirements.show', compact('requirement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requirement = Requirement::find($id);

        return view('requirements.edit', compact('requirement'));
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
            'requirement' => 'required',
            'description' => 'required',
        ]);

        $requirement = Requirement::find($id);
        $requirement->requirement = $request->input('requirement');
        $requirement->description = $request->input('description');
        $requirement->save();

        return redirect()->route('requirements.index')
            ->with('success', 'Requirement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("requirements")->where('id', $id)->delete();
        return redirect()->route('requirements.index')
            ->with('success', 'Requirements deleted successfully');
    }
}
