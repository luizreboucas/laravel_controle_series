<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        return view('series.index', [
            'series' => $series
        ]);
    }

    public function create()
    {
        return view('series.criar');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());
        return redirect()->route("series.index");
    }
}
