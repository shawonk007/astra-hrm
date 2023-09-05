<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Http\Requests\StoreDesignationRequest;
use App\Http\Requests\UpdateDesignationRequest;
use Illuminate\View\View;

class DesignationController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): View {
        //
        return view('designations.index');
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
    public function store(StoreDesignationRequest $request) {
        //
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
    public function update(UpdateDesignationRequest $request, Designation $designation) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation) {
        //
    }
}
