<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Console::all();

        return response()->json($dados, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            Console::create([
                'nome' => $request->nome,
                'fabricante' => $request->fabricante,
            ]);

            return response()->json(['msg' => 'Console inserido com sucesso!'], 200);

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['msg' => 'Erro ao inserir console'], 400);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $dados = Console::find($request->id);

        if (!isset($dados)) {
            return response()->json(['msg' => 'Console não encontrado'], 404);
        }

        return response()->json($dados, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Console $console)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Console $console)
    {
        //
    }
}
