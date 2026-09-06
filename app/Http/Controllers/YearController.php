<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $years = Year::all();

        return view('dashboard.pages.years', compact('years'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|numeric',
        ]);

        Year::create([
            'year' => $request->year,
        ]);

        $years = Year::all();

        return view('dashboard.pages.years', compact('years'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Year $year)
    {
        Year::where('id', $year->id)->delete();
        $years = Year::all();

        return view('dashboard.pages.years', compact('years'));

    }
}
