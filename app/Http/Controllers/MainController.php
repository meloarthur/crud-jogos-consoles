<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('site.home');
    }

    public function jogos() {
        $jogos = (new JogoController)->index();

        return view('site.jogos',[
            'jogos' => $jogos
        ]);
    }

    public function cadastroJogos() {
        return view('site.cadastroJogos');
    }

    public function consoles() {
        return view('site.consoles');
    }
}
