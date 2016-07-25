<?php

namespace App\Http\Controllers;

use App\Entities\Sala;
use Illuminate\Http\Request;

use App\Http\Requests;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Sala::all(), 200);
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
        $sala = new Sala([
            'nome' => $request->get('nome'),
            'capacidade' => $request->get('capacidade')
        ]);

        if ($sala->save())
                return response($sala, 201);

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
        $sala = Sala::find($id);
        return response($sala, $sala == null ? 400 : 200);
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
        $sala = Sala::find($id);
        if ($sala == null) {
            return response(null, 400);
        }
        $sala->update([
            'nome' => $request->get('nome'),
            'capacidade' => $request->get('capacidade')
        ]);

        return response($sala, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sala = Sala::find($id);
        if ($sala == null) {
            return response(null, 400);
        }

        $sala->delete();
        return response('Deletado.', 200);
    }
}
