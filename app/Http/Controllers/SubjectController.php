<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Year;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::with('year')->get();
        $years = Year::all();

        return view('dashboard.pages.subjects', compact('subjects', 'years'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'year_id' => 'required',
        ]);

        Subject::create([
            'name' => $request->name,
            'year_id' => $request->year_id,
        ]);

        return redirect()->route('subjects.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        Subject::find($subject->id)->delete();

        return redirect()->route('subjects.index');

    }
}
