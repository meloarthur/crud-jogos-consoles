<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('site.home');
    }

    public function jogos() {
        return view('site.jogos');
    }

    public function consoles() {
        return view('site.consoles');
    }
}
