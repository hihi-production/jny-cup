<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Champion;
use Illuminate\Http\Request;

class SwimmingChampionController extends Controller
{
    public function index()
    {
        $results = Champion::where('competition_name', 'swimming')->get();

        return view('pages.dashboard.result.swimming.index', compact('results'));
    }

    public function create()
    {
        return view('pages.dashboard.result.swimming.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'swimming',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::create($field);

        return redirect()->route('swimming.champion.index')->with([
            'message' => 'Swimming Champions created successfully.',
            'status'  => 'success',
        ]);
    }

    public function edit($id)
    {
        $result = Champion::findOrFail($id);

        return view('pages.dashboard.result.swimming.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'team' => 'required',
        ]);

        $field = [
            'competition_name' => 'swimming',
            'team' => $request->team,
            'place' => $request->place,
        ];

        Champion::findOrFail($id)->update($field);

        return redirect()->route('swimming.champion.index')->with([
            'message' => 'Swimming Champions updated successfully.',
            'status'  => 'success',
        ]);
    }
}
