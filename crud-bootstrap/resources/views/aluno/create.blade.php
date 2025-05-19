@extends('layouts.app')

@section('title', 'Criar aluno')

@section('content')
    <div class="container-fluid px-4 mt-4 ">
        <div class="card">
            <div class="card-body">
                <h2>Cadastrar Aluno</h2>
                <form action="{{ route('aluno.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nome">Nome:</label>
                        <input class="form-control" type="text" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email:</label>
                        <input class="form-control" type="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="cpf">CPF:</label>
                        <input class="form-control" type="text" name="cpf" required>
                    </div>
                    <select class="form-select mb-1" aria-label="Selecione um curso">
                        <option value="0">Selecione um curso...</option>
                        @foreach($cursos as $curso)
                            <option value="{{$curso->id}}">{{ $curso->nome }}</option>
                        @endforeach
                    </select>
                    <select class="form-select mb-1" aria-label="Selecione uma turma">
                        <option value="0">Selecione uma turma...</option>
                        @foreach($turmas as $turma)
                            <option value="{{$turma->id}}">{{ $turma->ano }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary" type="submit">Criar</button>
                </form>

                <button class="btn btn-danger mt-2">
                    <a class="text-decoration-none text-white" href="{{route('aluno.index')}}">
                        Cancelar
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
