<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Repositories\CategoriaRepository;
use App\Repositories\CursoRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoriaController extends Controller
{
    private CategoriaRepository $repository;
    private CursoRepository $cursoRepository;

    private array $regrasValidacao = [
        'nome' => 'required|min:3|max:255',
        'curso_id' => 'required|integer|exists:cursos,id',
        'maximo_horas' => 'required|integer|min:1|max:999',
    ];

    // TODO - Error Messages
    private array $mensagemErro = [
        'nome.required' => 'o campo nome é obrigatorio',
        'curso_id.required' => 'o campo curso é obrigatorio',
        'maximo_horas.required' => 'o campo maximo horas é obrigatorio',
    ];

    public function __construct()
    {
        $this->repository = new CategoriaRepository();
        $this->cursoRepository = new CursoRepository();
    }


    public function index(): View
    {
        $categorias = $this->repository->selectAll();
        return view('categoria.index', compact('categorias'));
    }

    public function create(): View
    {
        $cursos = $this->cursoRepository->selectAll();
        return view('categoria.create', compact('cursos'));
    }

    public function store(Request $request): View
    {
        $request->validate($this->regrasValidacao, $this->mensagemErro);

        $categoria = new Categoria();
        $categoria->setNome(mb_strtoupper($request->get('nome'), 'UTF-8'));
        $categoria->setMaximoHoras($request->get('maximo_horas'));
        $categoria->setCursoId($request->get('curso_id'));
        $categoria->save();

        return $this->create()->with('sucess', 'Categoria cadastrada com sucesso!');

    }

    public function show(int $id): View | RedirectResponse
    {
        $categoria = $this->find($id);

        return (isset($categoria))
            ? view('categoria.show', compact('categoria'))
            : redirect()->back()->with('error', 'Categoria não encontrada.');
    }

    public function edit(int $id): View | RedirectResponse
    {
        $categoria = $this->find($id);

        return (isset($categoria))
            ? view('categoria.edit', compact('categoria'))
            : redirect()->back()->with('error', 'Categoria não encontrada.');
    }

    public function update(Request $request, int $id): View
    {
        $request->validate($this->regrasValidacao, $this->mensagemErro);

        $categoria = $this->find($id);

        if(isset($categoria)) {
            $categoria->setNome(mb_strtoupper($request->get('nome'), 'UTF-8'));
            $categoria->setMaximoHoras($request->get('maximo_horas'));
            $categoria->setCursoId($request->get('curso_id'));
            $categoria->save();

            return view('categoria.index')->with('sucess', 'Categoria atualizada com sucesso!');
        }

        return view('categoria.index')->with('error', 'Falha ao atualizar categoria.');
    }

    public function destroy(int $id): View
    {
        return ($this->repository->delete($id))
            ? view('categoria.index')->with('sucess', 'Categoria deletada com sucesso!')
            : view('categoria.index')->with('error', 'Falha ao deletar categoria.');
    }

    private function find(int $id) {
        return $this->repository->findById($id);
    }
}
