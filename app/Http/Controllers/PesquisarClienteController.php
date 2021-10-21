<?php

namespace App\Http\Controllers;


class PesquisarClienteController extends Controller
{
    public function getPesquisa(){
        return view('pesquisarcliente');
       } 
}