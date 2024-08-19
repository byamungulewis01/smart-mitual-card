<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\HospitalCard;
use Illuminate\Http\Request;
use App\Http\Resources\SearchResource;

class CardController extends Controller
{
    //
    public function index()
    {
        $cards = HospitalCard::withTrashed()->orderByDesc('id')->paginate(10);
        return Inertia::render('Cards/Index', ['cards' => SearchResource::collection($cards)]);
    }
    public function destroy($id)
    {
        try {
            HospitalCard::findOrFail($id)->delete();
            return back()->with('message', 'Card disabled successfully');
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('warning', 'Something went wrong, please try again');
        }
    }
}
