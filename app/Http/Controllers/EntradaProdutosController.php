<?php

namespace App\Http\Controllers;


class EntradaProdutosController extends Controller
{
    public function getEntradaProdutos(){
        return view('entradaprodutos');
    } 
    public function EntradaProdutos(){
        $link=mysqli_connect("localhost",'root','coxinha123');
        $banco=mysqli_select_db($link, "laravel");

        $codProduto = @$_POST['codProduto']; 
        $nome=@$_POST['nome'];     
        $quantidadeComprada=@$_POST['quantidadeComprada'];  
               

        $check = mysqli_query($link, "SELECT * from produto WHERE codProduto = '$codProduto'");   //CHECANDO SE O ID JA EXISTE 
        if (!empty($_POST['codProduto'])) {
                $quantidadeEstoque = mysqli_query($link, "SELECT quantidadeEstoque from produto WHERE codProduto = '$codProduto'");
                $row=$quantidadeEstoque->fetch_row();
                $quantidade= $row[0]+(int)$quantidadeComprada;
    
                $update = mysqli_query($link, "UPDATE produto SET quantidadeEstoque='$quantidade' WHERE codProduto='$codProduto';");
        }
        else if (!empty($_POST['nome'])) {
            $quantidadeEstoque = mysqli_query($link, "SELECT quantidadeEstoque from produto WHERE nome = '$nome'");
            $row=$quantidadeEstoque->fetch_row();
                $quantidade= $row[0]+(int)$quantidadeComprada;

            $update = mysqli_query($link, "UPDATE produto SET quantidadeEstoque='$quantidade' WHERE nome='$nome';");
    }
  
        
        
        return view('entradaprodutos');
    }         
}