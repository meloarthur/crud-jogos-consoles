<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Jogo::all();

        return response()->json($dados, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            Jogo::create([
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'imagem_capa' => $request->imagem_capa,
                'fabricante' => $request->fabricante,
                'console' => $request->console,
                'ano_lancamento' => $request->ano_lancamento
            ]);

            return response()->json(['msg' => 'Jogo inserido com sucesso!'], 200);

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['msg' => 'Erro ao inserir jogo'], 400);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $dados = Jogo::find($request->id);

        if (!isset($dados)) {
            return response()->json(['msg' => 'Jogo não encontrado'], 404);
        }

        return response()->json($dados, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
