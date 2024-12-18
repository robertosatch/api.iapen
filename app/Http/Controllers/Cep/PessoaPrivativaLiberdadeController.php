<?php

namespace App\Http\Controllers\Cep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PessoaPrivativaLiberdadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
            'id' => '1',
            'name' => 'Roberto Satch',
            'email' => 'robertosatch@gmail.com',
            'cpf' => '807.675.832.-72',
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            [
                'id' => '1',
                'nome' => 'criado',
                'email' => 'novo'
            ],
            $request->all(),
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
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
        return response()->json([$request->all(), $id], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->noContent();
    }
}
