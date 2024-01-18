<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Quem vai receber a requisção
    public function index() {
        // Poderia verificar usuarios existe
        // Buscar dados de um usuário

       $nome = 'Juca';
       $idade = '25';

       $data = [
            'nome_apelido' => $nome,
            'idade' => $idade,
            'html' => '<b> Interpretado</b>'
       ];

       $qualquer_coisa = [
         'ingredientes' => [
                'farinha',
                'ovos',
                'farinha 2',
                'ovos 2'
                ]
         ];

       return view('bemvindo', $data, $qualquer_coisa);
    }

    public function sair() {
        // Poderia verificar usuarios existe
        // Buscar dados de um usuário

       return view('sair');
    }

    // Request chama uma requisição via get, navegador
    public function usuarios(Request $r) {

       $data = [
            'quantidade' => $r->qnt
       ];

       return view('usuarios', $data);
    }

    public function include1(){

        return view('include1');
    }

    public function include2(){

        return view('include2');
    }

    public function include3(){

        return view('include3');
    }

    public function componente(){

        return view('componente');
    }

    public function layout(){

        return view('site');
    }

    public function layout2(){

        return view('pagina2');
    }



}
