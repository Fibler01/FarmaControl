<?php

namespace App\Http\Controllers;


class ClienteController extends Controller
{
    public function getCliente(){
        return view('cliente');
    }
    public function cadastraCliente(){
        $link=mysqli_connect("localhost",'root','coxinha123');
        $banco=mysqli_select_db($link, "laravel");

        $codCliente = @$_POST['codCliente'];
        $nomeCliente=@$_POST['nomeCliente'];  
        $cpf=@$_POST['cpf'];               
        $celular=@$_POST['celular']; 

        $check = mysqli_query($link, "SELECT * from cliente WHERE codCliente = '$codCliente'");   //CHECANDO SE O ID JA EXISTE 

        if ((mysqli_num_rows($check) > 0)==TRUE) {
            echo "<p align='center'><font color='red'><b>Código de cliente já está cadastrado!</b></font></p>";   
        }
        else

        $insert = mysqli_query($link, "INSERT INTO cliente(codCliente,nome,cpf,telefone) 
        values('$codCliente','$nomeCliente','$cpf', '$celular')");
        
        return view('cliente');
    }       
}