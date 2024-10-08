<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutualPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'family_header_id',
        'year',
        'amount',
    ];
}
