<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Sessao;

use App\Http\Requests;

class SessoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Sessao::all(), 200);
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
        $sessao = new Sessao();
        $sessao->data_inicio = $request->get('data_inicio');
        $sessao->data_fim = $request->get('data_fim');
        $sessao->horario = $request->get('horario');
        $sessao->ativo = $request->get('ativo');
        $sessao->filme_id = $request->get('filme_id');
        $sessao->sala_id = $request->get('sala_id');

        if ($sessao->save())
            return response($sessao, 201);

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
        $sessao = Sessao::find($id);
        return response($sessao, $sessao == null ? 400 : 200);
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
        $sessao = Sessao::find($id);
        if ($sessao == null) {
            return response(null, 400);
        }
        $sessao->data_inicio = $request->get('data_inicio');
        $sessao->data_fim = $request->get('data_fim');
        $sessao->horario = $request->get('horario');
        $sessao->ativo = $request->get('ativo');
        $sessao->filme_id = $request->get('filme_id');
        $sessao->sala_id = $request->get('sala_id');
        if ($sessao->update()) {
            return response($sessao, 200);
        }

        return response(null, 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sessao = Sessao::find($id);
        if ($sessao == null) {
            return response(null, 400);
        }

        $sessao->delete();
        return response('Deletado.', 200);
    }
}
