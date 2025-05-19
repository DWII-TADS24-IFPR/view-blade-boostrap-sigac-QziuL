@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
    <div class="container-fluid px-4 row">
        <div class="col-xl vh-100">
            <div class="card p-4 border-light mb-3">
                <h4 class="text-center bg-black text-white rounded-top-5 p-2">Alunos Cadastrados</h4>
                @if($alunos->isEmpty())
                    <p class="text-center fs-5">Não há alunos cadastrados...</p>
                    <a class="text-center fs-5 link-underline-info" href="{{ route('aluno.create' )}}">
                        Cadastrar aluno
                    </a>
                @else
                    <table class="table table-striped">

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
                            @foreach($alunos as $aluno)
                                <td>{{$aluno->nome}}</td>
                                <td>{{$aluno->curso->nome}}</td>
                                <td>{{$aluno->turma->ano}}</td>
                            @endforeach
                        </tr>

                        {{--                        <tr>--}}
                        {{--                            --}}{{-- <th scope="row">Luiz Fernando Quinholi Mendes</th> --}}
                        {{--                            <td>Luiz Fernando Quinholi Mendes</td>--}}
                        {{--                            <td>Análise e Desenvolvimento de Sistemas</td>--}}
                        {{--                            <td>TADS24</td>--}}
                        {{--                            <td>--}}
                        {{--                                <i class="fa fa-pencil" aria-hidden="true"></i>--}}
                        {{--                                |--}}
                        {{--                                <i class="fa fa-trash" aria-hidden="true"></i>--}}
                        {{--                            </td>--}}
                        {{--                        </tr>--}}
                        {{--                    <tr>--}}
                        {{--                        <td>Luiz Fernando Quinholi Mendes</td>--}}
                        {{--                        <td>Análise e Desenvolvimento de Sistemas</td>--}}
                        {{--                        <td>TADS24</td>--}}
                        {{--                        <td>--}}
                        {{--                            <i class="fa fa-pencil" aria-hidden="true"></i>--}}
                        {{--                            |--}}
                        {{--                            <i class="fa fa-trash" aria-hidden="true"></i>--}}
                        {{--                        </td>--}}
                        {{--                    </tr>--}}
                        {{--                    <tr>--}}
                        {{--                        <td>Luiz Fernando Quinholi Mendes</td>--}}
                        {{--                        <td>Análise e Desenvolvimento de Sistemas</td>--}}
                        {{--                        <td>TADS24</td>--}}
                        {{--                        <td>--}}
                        {{--                            <i class="fa fa-pencil" aria-hidden="true"></i>--}}
                        {{--                            |--}}
                        {{--                            <i class="fa fa-trash" aria-hidden="true"></i>--}}
                        {{--                        </td>--}}
                        {{--                    </tr>--}}
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </div>
@endsection
