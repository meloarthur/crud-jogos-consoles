<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    public function viewConsoles() {
        $consoles = $this->index();

        return view('site.consoles',[
            'consoles' => $consoles
        ]);
    }

    public function viewCadastroConsoles() {
        return view('site.cadastroConsoles');
    }

    public function viewAtualizarConsoles(Request $request) {
        $dados = $this->show($request->id);
        $console = json_decode($dados->content());
        
        return view('site.atualizarConsoles',[
            'console' => $console
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Console::orderBy('id_consoles')->get();

        return json_decode($dados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            Console::create([
                'nome' => $request->nome,
                'fabricante' => $request->fabricante
            ]);

            return redirect()
                ->route('site.consoles')
                ->with('msg', 'Console inserido com sucesso');

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['msg' => 'Erro ao inserir console'], 400);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $dados = Console::find($id);

        if (!isset($dados)) {
            return response()->json(['erro' => 'Console não encontrado'], 404);
        }

        return response()->json($dados, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
        
            $console = Console::find($request->id);

            if (!isset($console)) {
                return response()->json(['erro' => 'Console solicitado não existe'], 404);
            }

            $console->update([
                'nome' => $request->nome,
                'fabricante' => $request->fabricante
            ]);

            return redirect()
                ->route('site.consoles')
                ->with('msg', 'Console atualizado com sucesso');

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao atualizar console'], 400);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
        
            $console = Console::find($request->id);

            if (!isset($console)) {
                return response()->json(['erro' => 'Console solicitado não existe'], 404);
            }

            $console->delete();

            return redirect()
                ->route('site.consoles')
                ->with('msg', 'Console excluido com sucesso');

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao excluir console'], 400);

        }
    }
}
