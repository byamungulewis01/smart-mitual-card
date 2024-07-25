<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/get-cardnumber', function (Request $request) {

    $cardNumber = $request->input('card_number');

    // Log the card number for now, you can process it as needed
    Log::info('Received card number: ' . $cardNumber);

    return response()->json(['success' => true, 'card_number' => $cardNumber]);
});
