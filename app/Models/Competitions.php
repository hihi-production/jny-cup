<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competitions extends Model
{
    use HasFactory;

    protected $table = 'competitions'; //optional
    protected $fillable = [
        'Competition', 
        'Status',
        'Start_Date',
        'End_Date',
    ];
}
