<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/get-cardnumber', function (Request $request) {


    // Log the card number for now, you can process it as needed
    $UIDresult = $request->input('UIDresult');
    Log::info('Received card number: ' . $UIDresult);

    // Process the UIDresult as needed
    // For example, look up the UID in the database and return some information

    return response()->json([
        'status' => 'success',
        'message' => 'Card number received: ' . $UIDresult,
        'uid' => $UIDresult
    ]);
});
