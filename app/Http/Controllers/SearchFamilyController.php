<?php

namespace App\Http\Controllers;

use App\Http\Resources\FamilyHeaderResource;
use App\Http\Resources\FamilyMemberResource;
use App\Models\FamilyHeader;
use App\Models\FamilyMember;
use Inertia\Inertia;

class SearchFamilyController extends Controller
{
    //
    public function manualSearch()
    {
        $family_number = request('family_number');

        $collection = FamilyHeader::when($family_number, function ($query) use ($family_number) {
            $query->where('national_id', 'like', '%' . $family_number . '%');
        })->paginate(10)->withQueryString();
        $families = FamilyHeaderResource::collection($collection);

        return Inertia::render('Hospital/ManualSearch', compact('families', 'family_number'));
    }
    public function smartSearch()
    {
        return Inertia::render('Hospital/SmartSearch');
    }
    public function showFamily(FamilyHeader $family)
    {
        $family = new FamilyHeaderResource($family);
        $collection = FamilyMember::where('family_header_id', $family->id)->get();
        $family_members = FamilyMemberResource::collection($collection);
        return Inertia::render('Hospital/ShowFamily', compact('family', 'family_members'));
    }
}
