<?php

namespace App\Http\Controllers;


class AlterarProdutosController extends Controller
{
    public function getAlterarProdutos(){
        return view('alterarprodutos');
    } 
    public function AlterarProdutos(){
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
  
        if($row!= NULL){


            $update = mysqli_query($link, "UPDATE produto SET laboratorio_codlab='$row[0]',nome='$nome',tarja='$tarja',preco='$preco',codBarras='$codBarras',quantidadeEstoque='$quantidadeEstoque',formaApresentacao='$formaApresentacao' 
            WHERE codProduto='$codProduto';");
        }
        
        return view('alterarprodutos');
    }         
}