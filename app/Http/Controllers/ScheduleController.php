<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $schedules = Schedule::latest()->get();

        return view('pages.dashboard.schedule.index', compact('schedules'));
    }

    public function create(){
        return view('pages.dashboard.schedule.create');
    }

    public function store(Request $request){

        $request->validate([
            'Date' => 'required|date',
            'Events' => 'required|min:3',
            'Details' => 'nullable|min:3',
            'Time' => 'required',
        ]);

        $field = [
            'Date' => $request->Date,
            'Events' => $request->Events,
            'Details' => $request->Details,
            'Time' => $request->Time,
        ];

        Schedule::create($field);
        return redirect()->route('schedule.index');
    }
}
