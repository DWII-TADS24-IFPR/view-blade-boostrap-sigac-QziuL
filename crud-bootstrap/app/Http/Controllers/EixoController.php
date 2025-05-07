<?php

namespace App\Http\Controllers;

use App\Models\Eixo;
use App\Repositories\EixoRepository;
use Illuminate\Http\Request;

class EixoController extends Controller
{
    protected EixoRepository $repository;

    public function __construct(){
        $this->repository = new EixoRepository();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): object
    {
        return $this->repository->selectAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {
        $obj = new Eixo();
        $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
        $this->repository->save($obj);
        return "<h1>Store - OK!</h1>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): object {
        return $this->repository->findById($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string {
        $obj = $this->repository->findById($id);
        if(isset($obj)) {
            $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
            $this->repository->save($obj);
            return "<h1>Update - OK!</h1>";
        }
        return "<h1>Update - Not found Eixo!</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        if($this->repository->delete($id))
            return "<h1>Delete - OK!</h1>";
        return "<h1>Delete - Not found Eixo!</h1>";
    }
}
