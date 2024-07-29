<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'family_header_id',
        'family_member_id',
        'card_number',
        'status',
        'user_id',
    ];
}
