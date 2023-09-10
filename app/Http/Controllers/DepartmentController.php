<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DepartmentController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): View {
        //
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View {
        //
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request): RedirectResponse {
        //
        Department::create($request->all());
        return back()->with('created', 'Deraptment created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department): View {
        //
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department): RedirectResponse {
        //
        $department->update($request->all());
        return back()->with('updated', 'Department uupdated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department): RedirectResponse {
        //
        $department->delete();
        return back()->with('deleted', 'Department deleted successfully!');
    }
}
