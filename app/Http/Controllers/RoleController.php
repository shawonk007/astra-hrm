<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\View\View;

class RoleController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): View {
        //
        return view('roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View {
        //
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role): View {
        //
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role) {
        //
    }
}
