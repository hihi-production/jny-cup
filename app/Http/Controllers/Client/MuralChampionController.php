<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class MuralChampionController extends Controller
{
    public function index()
    {
        $results = Champion::where('competition_name', 'mural')->get();

        return view('pages.dashboard.result.mural.index', compact('results'));
    }

    public function create()
    {
        return view('pages.dashboard.result.mural.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'mural',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::create($field);

        return redirect()->route('mural.champion.index')->with([
            'message' => 'Mural Champions created successfully.',
            'status'  => 'success',
        ]);
    }

    public function edit($id)
    {
        $result = Champion::findOrFail($id);

        return view('pages.dashboard.result.mural.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'mural',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::findOrFail($id)->update($field);

        return redirect()->route('mural.champion.index')->with([
            'message' => 'Mural Champions updated successfully.',
            'status'  => 'success',
        ]);
    }
}
