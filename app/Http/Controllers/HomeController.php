<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function produtosusuarios()
    {
        $produtos = Produto::all();
        $usuarios = Usuario::all();

        $contprod = Produto::count();
        $contusu = Usuario::count();
        
        if($contusu != 0 && $contprod != 0)
        {
            $qtd = $contprod/$contusu;
        }

        foreach($produtos as $produtos)
        {
            do
            {
                $selecionado = rand(0,($contusu+1));
                $us = Usuario::Find($selecionado);
            }
            while($us==null);

            $produtos->id_atual= $selecionado;
            $produtos->save();
        }

        $prod = Produto::all();

        return view('produtosusuarios', compact('prod', 'usuarios'));
    }
}
