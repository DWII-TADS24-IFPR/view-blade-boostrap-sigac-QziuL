<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    private $regrasValidacao = [
        'nome'      => 'required|min:4|max:255',
        'email'     => 'required|email|max:255',
        'cpf'       => 'required|min:11|max:11',
        'senha'     => 'required|min:6|max:100',
        'user_id'   => 'required',
        'turma_id'  => 'required',
        'curso_id'  => 'required',
    ];

    private $mensagemErro = [
        'nome.required' => 'O campo nome é obrigatório.',
        'email.required' => 'O campo email é obrigatório.',
        'cpf.required' => 'O campo cpf é obrigatório.',
        'senha.required' => 'O campo senha é obrigatório',
    ];

    public function index()
    {
        return view('aluno.aluno');
    }

    public function create()
    {
        return view('aluno.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->regrasValidacao,
                          $this->mensagemErro
        );


        $aluno = new Aluno(
            $request->nome,
            $request->email,
            $request->cpf,
            $request->senha,
            $request->user_id,
            $request->turma_id,
            $request->curso_id
        );

        $aluno->save();
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
