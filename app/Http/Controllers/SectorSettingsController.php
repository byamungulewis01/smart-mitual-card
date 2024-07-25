<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class SectorSettingsController extends Controller
{
    //
    public function index(){
        return Inertia::render('Sector/Settings');

    }
}
