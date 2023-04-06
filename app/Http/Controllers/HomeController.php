<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $jogosConsoles = (new JogoConsoleController)->buscarJogosConsoles();
        
        return view('site.home',[
            'jogosConsoles' => $jogosConsoles
        ]);
    }
}
