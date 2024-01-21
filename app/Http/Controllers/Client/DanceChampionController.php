<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class DanceChampionController extends Controller
{
    public function index()
    {
        $results = Champion::where('competition_name', 'dance')->get();

        return view('pages.dashboard.result.dance.index', compact('results'));
    }

    public function create()
    {
        return view('pages.dashboard.result.dance.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'dance',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::create($field);

        return redirect()->route('dance.champion.index')->with([
            'message' => 'Dance Champions created successfully.',
            'status'  => 'success',
        ]);
    }

    public function edit($id)
    {
        $result = Champion::findOrFail($id);

        return view('pages.dashboard.result.dance.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'dance',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::findOrFail($id)->update($field);

        return redirect()->route('dance.champion.index')->with([
            'message' => 'Dance Champions updated successfully.',
            'status'  => 'success',
        ]);
    }
}
