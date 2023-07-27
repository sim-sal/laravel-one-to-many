<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Technologie;

class TechnologieController extends Controller
{
    public function show($id)
    {
        $technologie = Technologie::findOrFail($id);

        return view('technologie-show', compact('technologie'));
    }
}
