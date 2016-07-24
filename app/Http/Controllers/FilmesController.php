<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Entities\Filme;

class FilmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Filme::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filme = new Filme([
            'titulo_pt' => $request->get('titulo_pt'),
            'titulo_original' => $request->get('titulo_original'),
            'diretor' => $request->get('diretor'),
            'sinopse' => $request->get('sinopse'),
            'duracao' => $request->get('duracao'),
            'genero' => $request->get('genero'),
            'ano' => $request->get('ano'),
            'copias' => $request->get('copias'),
            'copias_disponiveis' => $request->get('copias_disponiveis')
        ]);

        if ($filme->save())
            return response($filme, 201);

        return response(null, 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filme = Filme::find($id);
        return response($filme, $filme == null ? 400 : 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filme = Filme::find($id);
        if ($filme == null) {
            return response(null, 400);
        }
        $filme->update([
            'titulo_pt' => $request->get('titulo_pt'),
            'titulo_original' => $request->get('titulo_original'),
            'diretor' => $request->get('diretor'),
            'sinopse' => $request->get('sinopse'),
            'duracao' => $request->get('duracao'),
            'genero' => $request->get('genero'),
            'ano' => $request->get('ano'),
            'copias' => $request->get('copias'),
            'copias_disponiveis' => $request->get('copias_disponiveis')
        ]);

        return response($filme, 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filme = Filme::find($id);
        if ($filme == null) {
            return response(null, 400);
        }

        $filme->delete();
        return response('Deletado.', 200);

    }
}
