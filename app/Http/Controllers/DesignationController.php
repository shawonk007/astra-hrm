<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Http\Requests\StoreDesignationRequest;
use App\Http\Requests\UpdateDesignationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DesignationController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): View {
        //
        $designations = Designation::all();
        return view('designations.index', compact('designations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View {
        //
        return view('designations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDesignationRequest $request): RedirectResponse {
        //
        Designation::create($request->all());
        return back()->with('created', 'Designation created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation):View {
        //
        return view('designations.edit', compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesignationRequest $request, Designation $designation): RedirectResponse {
        //
        $designation->update($request->all());
        return back()->with('updated', 'Designation updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation) {
        //
        $designation->delete();
        return back()->with('deleted', 'Designation deleted successfully!');
    }
}
