<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class BandChampionController extends Controller
{
    public function index()
    {
        $results = Champion::where('competition_name', 'band')->get();

        return view('pages.dashboard.result.band.index', compact('results'));
    }

    public function create()
    {
        return view('pages.dashboard.result.band.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'band',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::create($field);

        return redirect()->route('band.champion.index')->with([
            'message' => 'Band Champions created successfully.',
            'status'  => 'success',
        ]);
    }

    public function edit($id)
    {
        $result = Champion::findOrFail($id);

        return view('pages.dashboard.result.band.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'band',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::findOrFail($id)->update($field);

        return redirect()->route('band.champion.index')->with([
            'message' => 'Band Champions updated successfully.',
            'status'  => 'success',
        ]);
    }
}
