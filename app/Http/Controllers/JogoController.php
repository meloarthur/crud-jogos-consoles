<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use App\Http\Controllers\JogoConsoleController;
use Ramsey\Uuid\Type\Integer;

class JogoController extends Controller
{
    public function viewJogos() {
        $jogos = $this->index();

        return view('site.jogos',[
            'jogos' => $jogos
        ]);
    }

    public function viewCadastroJogos() {
        $consoles = (new ConsoleController)->index();
        
        return view('site.cadastroJogos',[
            'consoles' => $consoles
        ]);
    }

    public function viewAtualizarJogos(Request $request) {
        $dados = $this->show($request->id);
        $jogo = json_decode($dados->content());
        
        return view('site.atualizarJogos',[
            'jogo' => $jogo
        ]);
    }

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

            Jogo::create([
                'nome' => $request->input('nome'),
                'descricao' => $request->input('descricao'),
                'imagem_capa' => $request->input('imagem-capa'),
                'fabricante' => $request->input('fabricante'),
                'ano_lancamento' => $request->input('ano-lancamento'),
                'faturamento' => $request->input('faturamento')
            ]);

            $dadoInserido = Jogo::latest('id_jogos')->first();
            $idConsole = (int)$request->console;

            $jogoConsole = new JogoConsoleController;
            $jogoConsole->store($dadoInserido->id_jogos, $request->input('consoles'));

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
    public function show(int $id)
    {
        $dados = Jogo::find($id);

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

            return redirect()
                ->route('site.jogos')
                ->with('msg', 'Jogo atualizado com sucesso');

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

            return redirect()
                ->route('site.jogos')
                ->with('msg', 'Jogo excluido com sucesso');

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao excluir jogo'], 400);

        }
    }
}
