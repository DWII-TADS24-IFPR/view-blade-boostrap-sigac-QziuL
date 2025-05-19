<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @vite(['resources/js/app.js'])
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title', 'Dashboard - SIGAC Admin')</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            body {
                overflow-x: hidden;
            }

            .sidebar {
                width: 250px;
                height: 100vh;
                position: fixed;
                left: 0;
                top: 0;
                background-color: #343a40;
                color: white;
                padding: 1rem;
            }
            .sidebar a {
                color: white;
                text-decoration: none;
                display: block;
                padding: 0.5rem 0;
            }
            .sidebar a:hover {
                background-color: #495057;
                border-radius: 5px;
            }
            .main-content {
                margin-left: 220px;
                padding: 2rem;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <div class="sidebar">
            <h4><a href="{{ route('home') }}">SIGAC</a></h4>
            <a href="{{route('aluno.index')}}">Aluno</a>
            <a href="#">Categorias</a>
            <a href="#">Comprovantes</a>
            <a href="#">Cursos</a>
            <a href="#">Declarações</a>
            <a href="#">Documentos</a>
            <a href="#">Niveis</a>
            <a href="#">Turmas</a>
        </div>

        <div class="main-content">
            @yield('content')
        </div>

        <footer>
            <div class="">
                <p class="text-center">SIGAC - Sistema de Gerenciamento de Atividades Complementares</p>
                <p class="text-center">Todos os direitos reservados &copy; {{ date('Y') }}</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    </body>
</html>
