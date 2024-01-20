<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketballSchedule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'team_a',
        'team_b',
        'phase',
        'category',
        'start_time',
        'end_time',
        'venue',
        'day',
        'score_a',
        'score_b',
    ];
}
