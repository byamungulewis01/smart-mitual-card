<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\FamilyHeader;
use Illuminate\Http\Request;

class FamilyHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Sector/FamilyHeader/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Sector/FamilyHeader/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FamilyHeader $familyHeader)
    {
        return Inertia::render('Sector/FamilyHeader/Show');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FamilyHeader $familyHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FamilyHeader $familyHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FamilyHeader $familyHeader)
    {
        //
    }
}
