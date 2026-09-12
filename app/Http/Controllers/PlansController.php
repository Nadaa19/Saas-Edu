<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use App\Models\Year;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::all();
        return view('dashboard.pages.plans.index-plan' , compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $years=Year::all();
       // return $years;
        return view('dashboard.pages.plans.add-plan',compact('years'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlanRequest $request)
    {
       $duration_days = $request->duration * 30 ;
        Plan::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'duration_in_days'=>$duration_days,
            'year_id'=>$request->year,

        ]);

        return to_route('plans.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plan = Plan::find($id);
        $years = Year::all();
        return view('dashboard.pages.plans.edit-plan', compact('plan','years'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlanRequest $request, string $id)
    {
         $duration_days = $request->duration * 30 ;
        Plan::find($id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'duration_in_days'=>$duration_days,
            'year_id'=>$request->year,

        ]);

        return to_route('plans.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Plan::find($id)->delete();
        return to_route('plans.index');


    }
}
