<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class SearchFamilyController extends Controller
{
    //
    public function manualSearch(){
        return Inertia::render('Hospital/ManualSearch');
    }
    public function smartSearch(){
        return Inertia::render('Hospital/SmartSearch');
    }
    public function showFamily(){
        // dd('Here');
        return Inertia::render('Hospital/ShowFamily');
    }
}
