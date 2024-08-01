<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\FamilyHeader;
use Illuminate\Http\Request;
use App\Http\Resources\FamilyHeaderResource;

class SearchFamilyController extends Controller
{
    //
    public function manualSearch()
    {

        $collection = FamilyHeader::orderByDesc('id')->paginate(10);
        $families = FamilyHeaderResource::collection($collection);

        return Inertia::render('Hospital/ManualSearch', compact('families'));
    }
    public function smartSearch()
    {
        return Inertia::render('Hospital/SmartSearch');
    }
    public function showFamily()
    {
        // dd('Here');
        return Inertia::render('Hospital/ShowFamily');
    }
}
