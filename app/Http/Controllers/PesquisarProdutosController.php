<?php

namespace App\Http\Controllers;


class PesquisarProdutosController extends Controller
{
    public function getPesquisa(){
        return view('pesquisarprodutos');
       }      
}