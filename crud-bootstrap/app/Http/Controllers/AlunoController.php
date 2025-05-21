<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\User;
use App\Repositories\AlunoRepository;
use App\Repositories\CursoRepository;
use App\Repositories\TurmaRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function PHPUnit\Framework\isEmpty;

class AlunoController extends Controller
{
    private AlunoRepository $repository;
    private CursoRepository $cursoRepository;
    private TurmaRepository $turmaRepository;

    private array $regrasValidacao = [
        'nome'      => 'required|min:4|max:255',
        'email'     => 'required|email|max:255',
        'cpf'       => 'required|min:11|max:11',
        'senha'     => 'required|min:6|max:100',
        'turma'     => 'required',
        'curso'     => 'required',
    ];

    private array $mensagemErro = [
        'nome.required' => 'O campo nome é obrigatório.',
        'email.required' => 'O campo email é obrigatório.',
        'cpf.required' => 'O campo cpf é obrigatório.',
        'senha.required' => 'O campo senha é obrigatório',
    ];

    public function __construct()
    {
        $this->repository = new AlunoRepository();
        $this->cursoRepository = new CursoRepository();
        $this->turmaRepository = new TurmaRepository();
    }

    public function index(): View
    {
        // Se não tiver dados registrados, exibir na View dados nulos
        $alunos = $this->repository->selectAll();
        return view('aluno.index', compact('alunos'));
    }

    public function create(): View
    {
        $cursos = $this->cursoRepository->selectAll();
        $turmas = $this->turmaRepository->selectAll();
        return view('aluno.create', compact('cursos', 'turmas'));
    }

    public function store(Request $request): View
    {
        $request->validate($this->regrasValidacao, $this->mensagemErro);

        $aluno = new Aluno();
        $aluno->setNome(mb_strtoupper($request->get('nome'), 'UTF-8'));
        $aluno->setEmail($request->get('email'));
        $aluno->setCpf($request->get('cpf'));
        $aluno->setSenha(bcrypt($request->get('senha')));
        $aluno->setTurmaId(intval($request->get('turma')));
        $aluno->setCursoId(intval($request->get('curso')));
        $this->repository->save($aluno);

        return view('layouts.app')->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function show(string $id): View
    {
        $aluno = $this->find($id);
        return ($aluno)
            ?  view('aluno.show')->with('aluno', $aluno)
            :  view('aluno.index')->with('error', 'Aluno inexistente.');
    }

    public function edit(string $id): View
    {
        $aluno = $this->find($id);
        return ($aluno)
            ? view('aluno.edit')->with('aluno', $aluno)
            : view('aluno.index')->with('error', 'Aluno inexistente.');
    }

    public function update(Request $request, string $id): View
    {
        $request->validate($this->regrasValidacao, $this->mensagemErro);

        $aluno = $this->find($id);
        if (isset($aluno)) {
            $aluno->update($request->all());
            return view('aluno.show', compact('aluno'))->with('success', 'Aluno atualizado com sucesso!');
        }
        return view('aluno.edit')->with('error', 'Aluno inexistente.');
    }

    public function destroy(string $id): View
    {
        return ($this->find($id)->softDeletes())
            ? view('aluno.index')->with('success', 'Aluno removido com sucesso!')
            : view('aluno.index')->with('error', 'Falha ao deletar.');
    }

    private function find(int $id): object | null
    {
        return $this->repository->findById($id);
    }
}
