<?php

namespace App\Http\Controllers;

use App\Http\Resources\FamilyHeaderResource;
use App\Models\FamilyHeader;
use App\Models\PaypackTransaction;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Paypack\Paypack;

class IremboController extends Controller
{
    //
    public function mutuelle()
    {
        return Inertia::render('Irembo/Index');
    }
    public function mutuelleSearch(Request $request)
    {
        $request->validate([
            'national_id' => 'required|numeric|digits:16|exists:family_headers,national_id',
            'amount' => 'required|numeric',
        ]);
        $family = FamilyHeader::where('national_id', $request->national_id)->first();

        $amount = $request->amount;
        return to_route('irembo.mutuelleShow', compact('family', 'amount'));
    }
    public function mutuelleShow(FamilyHeader $family)
    {
        $family = new FamilyHeaderResource($family);
        $amount = (int) request('amount');

        return Inertia::render('Irembo/Show', compact('family', 'amount'));
    }

    public function mutuelleChechout(Request $request)
    {
        try {
            $request->validate([
                'amount' => 'required|numeric',
                'phone' => 'required|numeric|digits:10',
            ]);
        
            $paypack = new Paypack();

            $paypack->config([
                'client_id' => env('PAYPACK_CLIENT_ID'),
                'client_secret' => env('PAYPACK_CLIENT_SECRET'),
            ]);

            $cashin = $paypack->Cashin([
                'phone' => $request->phone,
                'amount' => $request->amount,
            ]);

            PaypackTransaction::create([
                'family_id' => $request->family_id,
                'ref' => $cashin['ref'],
                'amount' => $request->amount,
                'phone' => $request->phone,
            ]);

            return to_route('irembo.mutuellePaySuccess');
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'some thing went wrong');
        }

    }

    public function mutuellePaySuccess()
    {
        return Inertia::render('Irembo/PaymentSuccess');
    }

}
