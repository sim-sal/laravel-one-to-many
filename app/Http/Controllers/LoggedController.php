<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;

class LoggedController extends Controller
{
    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('show', compact('project'));
    }

    public function create()
    {
        $types = Type::all();

        return view('create', compact('types'));
    }
    public function store(Request $request)
    {
        // $data = $request->validate(
        //     $this->getValidationRules(),
        //     $this->getValidationMessages()
        // );

        $data = $request->all();

        $project = Project::create($data);

        return redirect()->route('project.show', $project->id);
    }

    private function getValidationRules()
    {
        return [
            "name" => "required|min:5|max:64",
            "description" => "nullable|max:65536",
            "start_date" => "required",
            "end_date" => "required",
            "rating" => "required",
            "cost" => "required|min_digits:5|max_digits:6"
        ];
    }
    private function getValidationMessages()
    {
        return [
            "name.required" => "Inserisci il NOME del PROGETTO!",
            "name.min" => "Il nome del PROGETTO deve contenere almeno 5 caratteri!",
            "name.max" => "Il nome del PROGETTO non può contenere più di 64 caratteri!",
            "start_date.required" => "Inserisci la DATA del PROGETTO!",
            "start_date.date_format" => "ERRORE! Inserisci la DATA nel seguente formato: d-m-Y",
            "end_date.required" => "Inserisci la DATA del PROGETTO!",
            "end_date.date_format" => "ERRORE! Inserisci la DATA nel seguente formato: d-m-Y",
            "rating.required" => "Inserisci il RATING!",
            "cost.required" => "Inserisci il COSTO!",
            "cost.min_digits" => "Accettiamo solo PROGETTI dal COSTO minimo di 10000$!",
            "cost.max_digits" => "Il COSTO del progetto non può superare i 999999$!"
        ];
    }
}
