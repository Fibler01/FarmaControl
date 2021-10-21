<?php

namespace App\Http\Controllers;


class LaboratorioController extends Controller
{
    public function getLaboratorio(){
        return view('laboratorio');
    }
    public function cadastraLab(){
        $link=mysqli_connect("localhost",'root','coxinha123');
        $banco=mysqli_select_db($link, "laravel");

        $codLab = @$_POST['codLab'];
        $nome=@$_POST['nome'];          
        $cnpj=@$_POST['cnpj']; 
        $endereco = @$_POST['endereco'];
        $cep=@$_POST['cep'];         
        $telefone=@$_POST['telefone']; 

        $insert = mysqli_query($link, "INSERT INTO laboratorio(codLab,nome,cnpj,endereco,cep,telefone) 
        values('$codLab','$nome','$cnpj','$endereco','$cep','$telefone')");
        
        return view('laboratorio');
    }        
}