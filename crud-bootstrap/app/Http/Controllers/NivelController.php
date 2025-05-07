<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use App\Repositories\NivelRepository;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    protected NivelRepository $repository;

    public function __construct(){
        $this->repository = new NivelRepository();
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
        $obj = new Nivel();
        $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
        $this->repository->save($obj);
        return "<h1>Store - OK!</h1>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
    public function update(Request $request, string $id): string
    {
        $obj = $this->repository->findById($id);
        if(isset($obj)) {
            $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
            $this->repository->save($obj);
            return "<h1>Update - OK!</h1>";
        }
        return "<h1>Update - Not found Nivel!</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        if($this->repository->delete($id))
            return "<h1>Delete - OK!</h1>";
        return "<h1>Delete - Not found Nivel!</h1>";
    }
}
