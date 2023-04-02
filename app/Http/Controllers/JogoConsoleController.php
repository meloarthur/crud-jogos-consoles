<?php

namespace App\Http\Controllers;

use App\Models\JogoConsole;
use Illuminate\Http\Request;

class JogoConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = JogoConsole::orderBy('id_jogos_consoles')->get();

        return response()->json($dados, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            JogoConsole::create([
                'id_jogos' => $request->id_jogos,
                'id_consoles' => $request->id_consoles
            ]);

            return response()->json(['msg' => 'Relação inserida com sucesso!'], 200);

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['msg' => 'Erro ao inserir relação'], 400);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $dados = JogoConsole::find($request->id);

        if (!isset($dados)) {
            return response()->json(['msg' => 'Relação não encontrada'], 404);
        }

        return response()->json($dados, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
        
            $jogoConsole = JogoConsole::find($request->id);

            if (!isset($jogoConsole)) {
                return response()->json(['erro' => 'Relação solicitada não existe'], 404);
            }

            $jogoConsole->update([
                'id_jogos' => $request->id_jogos,
                'id_consoles' => $request->id_consoles
            ]);

            return response()->json(['msg' => 'Relação atualizada com sucesso!'], 200);

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao atualizar relação'], 400);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
        
            $jogoConsole = JogoConsole::find($request->id);

            if (!isset($jogoConsole)) {
                return response()->json(['erro' => 'Relação solicitada não existe'], 404);
            }

            $jogoConsole->delete();

            return response()->json(['msg' => 'Relação excluida com sucesso!'], 200);

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao excluir relação'], 400);

        }
    }
}
