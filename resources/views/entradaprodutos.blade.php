@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    


    <BODY>              




    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <HEAD>   
        <title>Entrada de Produtos</title>
        </HEAD>
        <!-- Styles -->
     
    </head>
    

<form name="form" method=POST action = "/entradaprodutos" class="container" >
<h2>Entrada de Produtos</h2>

      <input type="hidden" name="_token" value="{{ csrf_token() }} ">
 
      <div class="form-group">
        <input type="text" id="codProduto" name="codProduto" class="form-control" placeholder="Código">
      </div>

      <div class="form-group">
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
      </div>

      <div class="form-group">
        <input type="integer" id="quantidadeComprada" name="quantidadeComprada" class="form-control" placeholder="Quantidade">
      </div>




    <button type=submit class="btn btn-default">Enviar</button>
    <button type=reset class="btn btn-default">Limpar</button>
</form>


</BODY>
</HTML>
@endsection