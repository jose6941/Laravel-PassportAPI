<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class ClienteController extends Controller
{
    public $repository;
    public function __construct(Autor $autor)
    {
        $this->repository = $autor;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = $this->repository->all();
        //dd($registros);
        return view('autor.index',[
            'registros'=> $registros
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd(acessando o controller cliente controller - create);
        return view('autor.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registros = $this->repository->find($id);
        return view('autor.edit',[
            'registro'=> $registros
        ]);    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
