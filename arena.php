<?php
    session_start();
    include "bd/conexaobd.php";
    $msg = "";
      if(isset($_SESSION['msg']))
      {
        $msg = $_SESSION['msg'];
      }
  ?>
<!DOCTYPE html>
<html>
<head>
  
  <title>Nossa Arena</title>
  <link rel="shortcut icon" href="img/favicon.ico"> 
  <meta http-equiv="Content-Language" content="pt-br">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
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
  .bg-2 { 
      background-color: #474e5d; /* azul escuro */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #474e5d; /* branco */
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
      padding-bottom: 15px;
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
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> 
          
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img-responsive img-circle margin" style="display:inline;margin-top: -20px; float: left;"  alt="Arena" width="50" height="50">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="arena.php">ARENA</a></li>
        <li><a href="reservas.php">RESERVAS</a></li>
        <li><a href="contato.php">ENTRE EM CONTATO</a></li>
        <li><a href="login.php">
          <span class="glyphicon glyphicon-user"></span>
        </a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Primeiro Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Visão geral dos serviços que nós oferecemos</h3>
  <h3>Vamos apresentar tudo que nós oferecemos na nossa Arena!</h3>
</div>

<!-- Segundo Container -->
<div class="container-fluid bg-2 text-center">
<h3 class="margin">Nossos Campos</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Campos com grama sintética, para melhor eficiência dos usuários.</p>
      <img src="img/cmp1.jpg" class="img-responsive margin " style="width:400px; height: 300px" alt="Campo">
    </div>
    <div class="col-sm-4"> 
      <p>Arenas bem iluminadas, para facilitar a visão dos jogadores.</p>
      <img src="img/cmp3.jpg" class="img-responsive margin " style="width:400px; height: 300px" alt="Campo">
    </div>
    <div class="col-sm-4"> 
      <p>Campos com boas dimensões, para que o jogador não se sinta sufocado.</p>
      <img src="img/cmp2.jpg" class="img-responsive margin " style="width:400px; height: 300px" alt="Campo">
    </div>
  <?php $sql =  "select * from fotos"; $sql = mysqli_query($conn, $sql); while($rows = mysqli_fetch_assoc($sql)) { ?>
    <div class="col-sm-4">
      <p><?php echo $rows['titulox'] ?></p>
      <img src="bd/uploads/<?php echo $rows['imagemx'] ?>" class="img-responsive margin " style="width:400px; height: 300px" alt="Campo">
    </div>
	<?php }?> 
  </div>
   
   
  
</div>
<!-- Terceiro Container (Fotos) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Outras Atrações</h3>
  <div class="row">
    <div class="col-sm-4">
      <p>Playground para as crianças se divertirem e aproveitar o tempo livre.</p>
      <img src="img/playgd.jpg" class="img-responsive margin " style="width:400px; height: 300px" alt="Playground">
    </div>
    <div class="col-sm-4"> 
      <p>Piscinas para os jogadores aproveitarem após as partidas.</p>
      <img src="img/piscina.jpg" class="img-responsive margin " style="width:400px; height: 300px" alt="Piscina">
    </div>
    <div class="col-sm-4"> 
      <p>Churrasqueira para você chamar sua galera e fazer um churrasco entre amigos.</p>
      <img src="img/churrasco.jpg" class="img-responsive margin " style="width:400px; height: 300px" alt="Churrasqueira">
    </div>
    
  </div>
  
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Copyright © 2017 | Arena Evolução<br/> 
  
</footer>

</body>
</html>
