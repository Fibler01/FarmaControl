<?php

namespace App\Http\Controllers;


class FornecedorController extends Controller
{
    public function getFornecedor(){
        return view('fornecedor');
    }  
    public function cadastraFornecedor(){
        $link=mysqli_connect("localhost",'root','coxinha123');
        $banco=mysqli_select_db($link, "laravel");

        $codFornecedor = @$_POST['codFornecedor'];
        $nome=@$_POST['nome'];          
        $cnpj=@$_POST['cnpj']; 
        $endereco = @$_POST['endereco'];
        $cep=@$_POST['cep'];         
        $telefone=@$_POST['telefone']; 

        $insert = mysqli_query($link, "INSERT INTO fornecedor(codFornecedor,nome,cnpj,endereco,cep,telefone) 
        values('$codFornecedor','$nome','$cnpj','$endereco','$cep','$telefone')");

        return view('fornecedor');
    }    
}