<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managers = Manager::all();

        return view('dashboard.pages.managers.index', compact('managers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.managers.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:managers',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Manager::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('managers.index')->with('success', 'Manager created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manager $manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manager $manager)
    {

        return view('dashboard.pages.managers.edit', compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manager $manager)
    {

        Manager::find($manager->id)->update([
            'name' => $request->name,
            'email' => $request->email,

        ]);

        return redirect()->route('managers.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manager $manager)
    {
        $manager->delete();

        return redirect()->route('managers.index');
    }
}
