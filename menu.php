<!DOCTYPE html>
<html>
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
  <!--Responsive navbar-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<link href="css/menu.css" rel="stylesheet">

  <link rel="shortcut icon" href="img/logo.ico"/>
  <title>Menu</title>
  <?php require_once "navbar.php" ?>

  <style type="text/css">
    .container{
      
      align-content: center;
    }
    .nav-link{
      color: black;
    }
    
     body{
        background-image: url('img/backgrounds/back4.jpg');
       

        /* Defina uma altura para a visão que o usuário terá da imagem */
        min-height: 550px;
 
/* defina o background como fixo e posicione a imagem */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

  </style>
</head>
<body>
    
    <!--Nav responsivo-->

 <nav class="navbar-nav " style="background-color: rgba(0, 0, 0, .85);"> 
     <div class="nav-wrapper">
       <a href="index" class="brand-logo"><img src="img/logo.png" width="40"></a>
         <a href="#" data-activates="menu-mobile" class="button-collapse">
             <img src="img/menubranco.png" width="40">
         </a>
         <div class="containera" style="height: 50px">
         <ul class="left hide-on-med-and-down">
             <li><a href="index">HOME</a></li>
             <li><a href="menu">MENU</a></li>
             <li><a href="https://docierconfeitaria.com.br/index#contato">CONTATOS</a></li>
             <li><a href="sistema/index">LOGIN</a></li>
         </ul></div>
         <ul class="side-nav" id="menu-mobile" style="background-color: black;">
             <li><a href="index" style="color: white;"><i class="fas fa-home" style="color: white;"></i>HOME</a></li>
             <li><a href="menu" style="color: white;"><i class="fas fa-clipboard-list" style="color: white;"></i>MENU</a></li>
             <li><a href="https://docierconfeitaria.com.br/index#contato" style="color: white;"><i class="fas fa-phone-volume" style="color: white;"></i>CONTATOS</a></li>
             <li><a href="sistema/index" style="color: white;"><i class="fas fa-user-secret" style="color: white;"></i>LOGIN</a></li>
         </ul>
     </div>
 </nav>
  

<div class="container">
<div class="jumbotron">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="bolos-tab" data-toggle="tab" href="#bolos" role="tab" aria-controls="bolos" aria-selected="true">Bolos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="bombons-tab" data-toggle="tab" href="#bombons" role="tab" aria-controls="bombons" aria-selected="false">Bombons</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="brigadeiros-tab" data-toggle="tab" href="#brigadeiros" role="tab" aria-controls="brigadeiros" aria-selected="false">Brigadeiros</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="docediv-tab" data-toggle="tab" href="#docediv" role="tab" aria-controls="docediv" aria-selected="false">Doces Diversos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="festacaixa-tab" data-toggle="tab" href="#festacaixa" role="tab" aria-controls="festacaixa" aria-selected="true">Festa na Caixa</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="salgados-tab" data-toggle="tab" href="#salgados" role="tab" aria-controls="salgados" aria-selected="true">Salgados</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <!--Salgados-->
  <div class="tab-pane fade" id="salgados" role="tabpanel" aria-labelledby="salgados-tab">
    
    

</br>
<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card">
      <img src="img/salgados/tortafrango.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Empadão</h5>
        <p class="card-text">
          Empadão de frango com catupiry
          <table class="table" style="text-align: center;">
             <thead>
    <tr>
      
      <th scope="col">Tamanho</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>500g</td>  
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 114";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
     
      
    </tr>
    <tr>
     <td>800g</td>  
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 115";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
 
  


</div>
</div>






  <!--Festa na caixa-->
  
  <div class="tab-pane fade" id="festacaixa" role="tabpanel" aria-labelledby="festacaixa-tab">
    
    
</br>
<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card">
      <img src="img/festacaixa/caixamae2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Festa na caixa 1</h5>
        <p class="card-text">
          <b>Conteúdo:</b></br>
          Bolo vulcão </br>
      Caixa com 10 brigadeiros</br>
      Duas cocas</br>
      Uma torta de 500g ou 4 coxinhas com catupiry</br>
      Molho cheddar</br>
      Utensílios (guardanapo, canudos e garfo e faca descartáveis)</br>
      <!--<b>Tudo dentro de uma linda caixa de MDF devorada</b></br>-->
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 112";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
 
  


</div></div>






  <!--Bolos-->
  <div class="tab-pane fade show active" id="bolos" role="tabpanel" aria-labelledby="bolos-tab">

</br>

<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-3">
    <div class="card">
      <img src="img/bolos/chocolate.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Chocolate</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Rendimento</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>12 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 9";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>24 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 10";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>36 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 11";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bolos/prestigio.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Prestígio</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Rendimento</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>12 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 13";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>24 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 14";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>36 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 15";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bolos/morango.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Morango</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Rendimento</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>12 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 26";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>24 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 27";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>36 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 28";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bolos/abacaxicoco.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Abacaxi com Côco</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Rendimento</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>12 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 29";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>24 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 30";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>36 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 31";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bolos/laka.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Chocolate Branco</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Rendimento</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>12 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 35";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>24 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 36";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>36 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 37";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bolos/nozescoco.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nozes com Côco</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Rendimento</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>12 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 32";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>24 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 33";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>36 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 34";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bolos/ninhonutella.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ninho com Nutella</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Rendimento</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>12 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 38";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>24 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 39";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>36 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 40";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bolos/kinder.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kinder</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Rendimento</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>12 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 41";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>24 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 42";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>36 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 43";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bolos/raffaello.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Raffaello</h5>
        <p class="card-text">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Rendimento</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>12 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 44";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>24 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 45";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>36 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 46";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bolos/ferrero.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ferrero Rocher</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Rendimento</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>12 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 47";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>24 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 48";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>36 pessoas</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 49";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
</div>





  </div>

  <!--Bombons-->
  <div class="tab-pane fade" id="bombons" role="tabpanel" aria-labelledby="bombons-tab">
    </br>
<h5 style="text-align: center">Valores referente ao cento</h5>
<h6 style="text-align: center">Temos na opção fechado e aberto</h6>
</br>
<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-3">
    <div class="card">
      <img src="img/bombons/coco.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Côco</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 50";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0] * 100;

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bombons/amendoim.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Amendoim</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 64";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0] * 100;

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bombons/brigadeiro.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Brigadeiro</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 52";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0] * 100;

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bombons/maracuja.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Maracujá</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 54";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0] * 100;

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
   <div class="card">
      <img src="img/bombons/bombomlimao.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Limão</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 56";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0] * 100;

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bombons/morango.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Morango</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 58";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0] * 100;

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/bombons/uva.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Uva</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 60";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0] * 100;

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
    <div class="col mb-4">
    <div class="card">
      <img src="img/bombons/nozes.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nozes</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 62";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0] * 100;

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
    <div class="col mb-4">
    <div class="card">
      <img src="img/bombons/chocolatecastanha.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Chocolate com Castanha</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 66";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0] * 100;

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
</div>


  </div>

  <!--Brigadeiros-->
  <div class="tab-pane fade" id="brigadeiros" role="tabpanel" aria-labelledby="brigadeiros-tab">
  </br>
    <div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-3">
    <div class="card">
      <img src="img/brigadeiros/brigadeiro.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Brigadeiro</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 50</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 25</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 15</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/beijinho.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Beijinho</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 50</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 25</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 15</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/cajuzinho.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cajuzinho</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 50</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 25</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 15</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/moranguinho.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Moranguinho</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 50</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 25</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 15</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/doisamores.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dois Amores</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 50</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 25</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 15</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
   <div class="card">
      <img src="img/brigadeiros/ninhonutella.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ninho com Nutella</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 80</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 40</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/negresco.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Negresco</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 80</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 40</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/ovomaltine.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ovomaltine</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 80</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 40</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/pacoca.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Paçoca</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 80</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 40</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/brigadeirocastanha.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Brigadeiro com castanha</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 80</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 40</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/churros.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Churros</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 80</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 40</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/romeuejulieta.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Romeu e Julieta</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 80</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 40</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/limaosiciliano.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Limão-siciliano</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 80</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 40</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/cafe.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Café</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 80</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 40</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/olhodesogra.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Olho de sogra</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 80</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 40</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/brigadeiros/ninhouva.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ninho com uva</h5>
        <p class="card-text">
          <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Unidades</th>
      <th scope="col">Valor</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>100 unidades</td>
      <td>R$ 100</td>
      
    </tr>
    <tr>
      
      <td>50 unidades</td>
      <td>R$ 50</td>
      
    </tr>
    <tr>
      
      <td>25 unidades</td>
      <td>R$ 25</td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  </div>
</div>

<!--Doces diversos-->
  <div class="tab-pane fade" id="docediv" role="tabpanel" aria-labelledby="docediv-tab">
    
    
</br>
<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-3">
    <div class="card">
      <img src="img/docediv/conetrufado.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cone Trufado</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 18";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/docediv/palha-italiana.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Palha Italiana</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 19";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/docediv/alfajor.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Alfajor</h5>
        <p class="card-text">
          <table class="table" style="text-align: center;">
  <tbody>
    <tr>
     
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 20";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
     
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/docediv/caixinha.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Caixinha de doces</h5>
        <p class="card-text">
          <table class="table">
  
  <tbody>
    <tr>
     
      <td>Caixa com 6 unidades</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 23";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>Caixa com 10 unidades</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 24";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
    <tr>
      
      <td>Caixa com 20 unidades</td>
      <td>R$ <?php 
  require_once "sistema/classes/conexao.php";
  $c= new conectar();
  $conexao=$c->conexao();
  $sql="SELECT preco FROM produtos WHERE id_produto = 25";
  $result=mysqli_query($conexao,$sql);

  while($mostrar=mysqli_fetch_row($result))
    echo $mostrar[0];

 ?></td>
      
    </tr>
  </tbody>
</table>
        </p>
      </div>
    </div>
  </div>

</div>



  </div>

</div>

</div>

</div>

</div>




<!--<div class="container" style="background-color: rgba(10,23,55,0.5);">

  </div>-->
<footer style="background-color: rgba(0, 0, 0, .85);text-align: center;">
  <font size="1" style="color: white;">@2021 por Confeitaria Docier</font>
</footer>



<!--Responsive-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
 $(function(){
     $(".button-collapse").sideNav();
 });
</script>
<!--Tabulação do menu-->
<script type="text/javascript">
  $('#myTab a').on('click', function (event) {
  event.preventDefault()
  $(this).tab('show')
})
  
</script>
</body>
</html>