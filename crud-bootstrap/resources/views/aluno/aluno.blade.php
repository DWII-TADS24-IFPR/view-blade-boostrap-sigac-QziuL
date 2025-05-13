@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="row">
        <div class="col-xl-2">
            <div class="card mb-4">
                Cadastrar Aluno
            </div>
            <div class="card mb-4">
                Visualizar Alunos
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <table class="table table-striped">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Turma</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            {{-- <th scope="row">Luiz Fernando Quinholi Mendes</th> --}}
                            <td>Luiz Fernando Quinholi Mendes</td>
                            <td>Análise e Desenvolvimento de Sistemas</td>
                            <td>TADS24</td>
                            <td>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                |
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Luiz Fernando Quinholi Mendes</td>
                            <td>Análise e Desenvolvimento de Sistemas</td>
                            <td>TADS24</td>
                            <td>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                |
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Luiz Fernando Quinholi Mendes</td>
                            <td>Análise e Desenvolvimento de Sistemas</td>
                            <td>TADS24</td>
                            <td>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                |
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
