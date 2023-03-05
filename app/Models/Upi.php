<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upi extends Model
{
      use HasFactory;
    protected $table = 'upis';
    protected $fillable = [
        'upi_number',
        'complite',
        'total_income',
    ];
}
