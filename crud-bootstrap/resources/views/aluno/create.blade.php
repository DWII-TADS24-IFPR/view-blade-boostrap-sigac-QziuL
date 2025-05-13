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
                    <button class="btn btn-primary" type="submit">Criar</button>
                </form>
                <a href="{{route('aluno.index')}}"><button class="btn btn-danger mt-2">Cancelar</button></a>
            </div>
        </div>
    </div>
@endsection
