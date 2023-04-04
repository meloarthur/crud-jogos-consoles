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
        $dados = Jogo::orderBy('id_jogos')->get();

        return json_decode($dados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            dd($request);
            Jogo::create([
                'nome' => $request->input('nome'),
                'descricao' => $request->input('descricao'),
                'imagem_capa' => $request->input('imagem-capa'),
                'fabricante' => $request->input('fabricante'),
                'ano_lancamento' => $request->input('ano-lancamento'),
                'faturamento' => $request->input('faturamento')
            ]);

            return redirect()
                ->route('site.jogos')
                ->with('msg', 'Jogo inserido com sucesso');

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao inserir jogo'], 400);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $dados = Jogo::find($request->id);

        if (!isset($dados)) {
            return response()->json(['erro' => 'Jogo não encontrado'], 404);
        }

        return response()->json($dados, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
        
            $jogo = Jogo::find($request->id);

            if (!isset($jogo)) {
                return response()->json(['erro' => 'Jogo solicitado não existe'], 404);
            }

            $jogo->update([
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'imagem_capa' => $request->imagem_capa,
                'fabricante' => $request->fabricante,
                'ano_lancamento' => $request->ano_lancamento,
                'faturamento' => $request->faturamento
            ]);

            return response()->json(['msg' => 'Jogo atualizado com sucesso!'], 200);

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao atualizar jogo'], 400);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
        
            $jogo = Jogo::find($request->id);

            if (!isset($jogo)) {
                return response()->json(['erro' => 'Jogo solicitado não existe'], 404);
            }
            
            $jogo->delete();

            return response()->json(['msg' => 'Jogo excluido com sucesso!'], 200);

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao excluir jogo'], 400);

        }
    }
}
