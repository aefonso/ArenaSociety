<?php
session_start();
if (!isset($_SESSION['autenticado'])) {
  session_destroy();
  header("location: index.php");
}else{
  if(!$_SESSION['autenticado']){
    session_destroy();
    header("location: index.php");
  }
}
?>
<?php 
  include 'calendario.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  
  <title>Painel do Administrador</title>
  <link rel="shortcut icon" href="img/favicon.ico"> 
  <meta http-equiv="Content-Language" content="pt-br">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
  <script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/functions.js"></script>
  <style>
  h3{
    font: 20px sans-serif;
      line-height: 1.8;
      color: #f5f6f7;

  }
  body {
    
      font: 20px sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #4289c0; /* azul claro */
      color: #ffffff;

  }
  .bg-4 { 
      background-color: #2f2f2f; /* cinza escuro */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #4289c0 !important;
      text-decoration: underline;
  }
  .calendario{
    margin-left: 350px;
  }
  
  </style>
</head>
<body ng-controller="MyCtrl">
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> 
          
       <a class="navbar-brand" href="administrador.php"><img src="img/logo.png" class="img-responsive img-circle margin" style="display:inline;margin-top: -20px; float: left;"  alt="Arena" width="50" height="50">Painel do Administrador</a>
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="usuarios.php">USUÁRIOS</a></li>
        <li><a href="financeiro.php">FINANCEIRO</a></li>
        <li><a href="up.php">UPLOAD DE IMAGEM</a></li>
        <li><a href="logout.php">SAIR
          <span class="glyphicon glyphicon-remove"></span>
        </a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Primeiro Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">AGENDA DE RESERVAS</h3>
  <div class="calendario">

  <?php   
    montaCalendario();
   ?>

   <div class="legends">

         <span class="legenda" style="color: black;"><span class="blue"></span> Reservas</span>
         <span class="legenda" style="color: black;"><span class="red"></span> Hoje</span>
     </div>
  </div>
  
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Copyright © 2017 | Arena Evolução<br/> 
  
</footer>

</body>
</html>
