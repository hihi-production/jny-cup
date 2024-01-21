<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\BasketballSchedule;
use Illuminate\Http\Request;

class BasketballController extends Controller
{
    public function index()
    {
        $day1 = BasketballSchedule::where('day', 'day_1')->get();
        $day2 = BasketballSchedule::where('day', 'day_2')->get();
        $day3 = BasketballSchedule::where('day', 'day_3')->get();
        $semifinals = BasketballSchedule::where('phase', 'semifinal')->get();
        $finals = BasketballSchedule::where('phase', 'final')->get();

        return view('pages.client.basket.day1', compact('semifinals', 'finals', 'day1', 'day2', 'day3'));
    }

    public function list()
    {
        $schedules = BasketballSchedule::all();

        return view('pages.dashboard.basketball.index', compact('schedules'));
    }

    public function create()
    {
        return view('pages.dashboard.basketball.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'team_a' => 'required',
            'team_b' => 'required',
        ]);

        $field = [
            'team_a' => $request->team_a,
            'team_b' => $request->team_b,
            'phase' => $request->phase,
            'category' => $request->category,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'venue' => 'mpsh',
            'day' => $request->day,
            'score_a' => 0,
            'score_b' => 0,
        ];

        BasketballSchedule::create($field);

        return redirect()->route('basketball.index')->with([
            'message' => 'Basketball Schedule created successfully.',
            'status'  => 'success',
        ]);
    }

    public function edit($id)
    {
        $schedule = BasketballSchedule::findOrFail($id);

        return view('pages.dashboard.basketball.edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'team_a' => 'required',
            'team_b' => 'required',
        ]);

        $field = [
            'team_a' => $request->team_a,
            'team_b' => $request->team_b,
            'phase' => $request->phase,
            'category' => $request->category,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'venue' => 'mpsh',
            'day' => $request->day,
            'score_a' => $request->score_a,
            'score_b' => $request->score_b,
        ];

        BasketballSchedule::findOrFail($id)->update($field);

        return redirect()->route('basketball.index')->with([
            'message' => 'Basketball Schedule updated successfully.',
            'status'  => 'success',
        ]);
    }
}
