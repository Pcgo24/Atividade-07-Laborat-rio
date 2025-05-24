<?php

namespace App\Http\Controllers;

use App\Models\Exame;
use Illuminate\Http\Request;

class ExameController extends Controller
{
    public function create()
    {
        return view('exames.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente' => 'required|string|max:100',
            'exame_id' => 'required|alpha_num|unique:exames,exame_id',
            'tipo' => 'required|in:Sequenciamento,PCR,Microarray',
            'data_coleta' => 'required|date|before_or_equal:today',
            'laudo' => 'nullable|string|max:500',
        ], [
            'paciente.required' => 'O campo Paciente é obrigatório.',
            'paciente.max' => 'O nome do paciente deve ter no máximo 100 caracteres.',
            'exame_id.required' => 'O Número do Exame é obrigatório.',
            'exame_id.alpha_num' => 'O Número do Exame deve ser alfanumérico.',
            'exame_id.unique' => 'Este Número de Exame já está cadastrado.',
            'tipo.required' => 'O Tipo de Exame é obrigatório.',
            'tipo.in' => 'O Tipo de Exame deve ser Sequenciamento, PCR ou Microarray.',
            'data_coleta.required' => 'A Data de Coleta é obrigatória.',
            'data_coleta.date' => 'A Data de Coleta deve ser uma data válida.',
            'data_coleta.before_or_equal' => 'A Data de Coleta não pode ser no futuro.',
            'laudo.max' => 'O Laudo pode ter no máximo 500 caracteres.',
        ]);

        Exame::create($request->all());

        return redirect('/exames')->with('success', 'Exame cadastrado com sucesso!');
    }

    public function index()
    {
        $exames = Exame::all();
        return view('exames.index', compact('exames'));
    }


}
