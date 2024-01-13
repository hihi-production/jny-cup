<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;

    protected $table = 'lombas'; // optional
    protected $fillable = [
        'name',
        'status',
        'start_date',
        'end_date',
    ];
}
