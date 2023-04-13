<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakaz extends Model
{
    use HasFactory;

    protected $table = 'zakazs';
    protected $fillable = [
        'name',
        'user_id',
        'phone',
        'amount',
        'sum',
        'text'
    ];
}
