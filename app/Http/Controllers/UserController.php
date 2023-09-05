<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): View {
        //
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View {
        //
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user) {
        //
    }
}
