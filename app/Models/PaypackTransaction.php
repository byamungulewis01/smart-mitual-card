<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaypackTransaction extends Model
{
    use HasFactory;
    protected $fillable = ['family_id', 'ref', 'amount', 'phone', 'status'];
}
