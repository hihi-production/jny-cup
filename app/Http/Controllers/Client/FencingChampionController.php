<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class FencingChampionController extends Controller
{
    public function index()
    {
        $results = Champion::where('competition_name', 'fencing')->get();

        return view('pages.dashboard.result.fencing.index', compact('results'));
    }

    public function create()
    {
        return view('pages.dashboard.result.fencing.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'fencing',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::create($field);

        return redirect()->route('fencing.champion.index')->with([
            'message' => 'Fencing Champions created successfully.',
            'status'  => 'success',
        ]);
    }

    public function edit($id)
    {
        $result = Champion::findOrFail($id);

        return view('pages.dashboard.result.fencing.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'fencing',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::findOrFail($id)->update($field);

        return redirect()->route('fencing.champion.index')->with([
            'message' => 'Fencing Champions updated successfully.',
            'status'  => 'success',
        ]);
    }
}
