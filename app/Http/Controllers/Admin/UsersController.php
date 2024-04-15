<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'DS user';
    }

    /**
     * Show the form for creating a new resource. get
     */
    public function create()
    {
        return 'Create new user';
    }

    /**
     * Store a newly created resource in storage. post
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource. get
     */
    public function show(string $id)
    {
        return 'show user\'s id: ' .$id;
    }

    /**
     * Show the form for editing the specified resource. get
     */
    public function edit(string $id)
    {
        return 'edit user\'id : '. $id;
    }

    /**
     * Update the specified resource in storage. post
     */
    public function update(Request $request, string $id) 
    {
        //
    }

    /**
     * Remove the specified resource from storage. delete
     */
    public function destroy(string $id)
    {
        //
    }
}
