<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Subset;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:subject-list|subject-create|subject-edit|subject-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:subject-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:subject-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:subject-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::latest()->paginate(5);
        return view('subject.index', compact('subjects'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subject.create');
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
            'subject' => 'required',
        ]);

        $subject = new Subject();
        $subject->subject = $request->subject;
        $subject->description = $request->description;
        $subject->created_by = Auth::user()->id;
        $subject->updated_by = Auth::user()->id;
        $subject->save();

        return redirect()->route('subject.index')
            ->with('success', 'Subject created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::find($id);
        return view('subject.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = subject::find($id);

        return view('subject.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'subject' => 'required',
        ]);

        $subject = Subject::find($id);
        $subject->subject = $request->input('subject');
        $subject->description = $request->input('description');
        $subject->save();

        return redirect()->route('subject.index')
            ->with('success', 'School Year updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("school_years")->where('id', $id)->delete();
        return redirect()->route('subject.index')
            ->with('success', 'Subject deleted successfully');
    }
}
