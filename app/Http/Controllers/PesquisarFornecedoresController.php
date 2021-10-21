<?php

namespace App\Http\Controllers;


class PesquisarFornecedoresController extends Controller
{
    public function getPesquisa(){
        return view('pesquisarfornecedores');
       }      
}