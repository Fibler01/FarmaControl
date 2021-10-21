<?php

namespace App\Http\Controllers;


class ProdutoController extends Controller
{
    public function getProduto(){
        return view('cadastroprodutos');
    } 
    public function cadastraProduto(){
        $link=mysqli_connect("localhost",'root','coxinha123');
        $banco=mysqli_select_db($link, "laravel");

        $codProduto = @$_POST['codProduto'];
        $pimba = @$_POST['laboratorio'];
        $laboratorio = mysqli_query($link, "SELECT l.codLab FROM laboratorio l WHERE l.nome='$pimba'");//->current_field;
        $row = $laboratorio->fetch_row();
        $nome=@$_POST['nome'];     
        $tarja=@$_POST['tarja'];
        $preco=@$_POST['preco']; 
        $codBarras=@$_POST['codBarras'];     
        $formaApresentacao=@$_POST['formaApresentacao']; 
        $quantidadeEstoque=@$_POST['quantidadeEstoque'];         

        $check = mysqli_query($link, "SELECT * from produto WHERE codProduto = '$codProduto'");   //CHECANDO SE O ID JA EXISTE 

        if ((mysqli_num_rows($check) > 0)==TRUE) {
            echo "<p align='center'><font color='red'><b>Código de produto já está cadastrado!</b></font></p>";   
        }
        else if($row!= NULL){
            $insert = mysqli_query($link, "INSERT INTO produto (codProduto,laboratorio_codlab,nome,tarja,preco,codBarras,quantidadeEstoque,formaApresentacao) 
            values('$codProduto','$row[0]','$nome','$tarja','$preco','$codBarras','$quantidadeEstoque', '$formaApresentacao')");
        }
        
        return view('cadastroprodutos');
    }         
}