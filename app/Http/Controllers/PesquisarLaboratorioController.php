<?php

namespace App\Http\Controllers;


class PesquisarLaboratorioController extends Controller
{
    public function getPesquisa(){
        return view('pesquisarlaboratorio');
       }      
}