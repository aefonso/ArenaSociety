<!DOCTYPE html>
<html>
<head>

  <title>Arena Evolução</title>
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
      background-color: #e6ecff; /* branco */
      color: #555555;
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
     <button type="button" class="navbar-toggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>     
      <a class="navbar-brand" href="index.php">Home</a>
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
  <h3 class="margin">Quem somos nós?</h3>
  <img src="img/logo.png" class="img-responsive img-circle margin" style="display:inline" alt="Arena" width="300" height="300">
  <h3>Nós somos a melhor arena de society e lazer da região agreste. Venha já conferir!</h3>
</div>

<!-- Segundo Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">O que nós oferecemos?</h3>
  <p>Nós não oferecemos apenas o serviço de campo de futebol society, também temos piscinas, playground para as crianças brincarem, espaço de convivência que funciona como salão de eventos, podendo ser para reuniões ou ocasiões comemorativas.</p>
  
</div>



<!-- Terceiro Container (Fotos) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Nossos Campos</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Campos com grama sintética, para melhor eficiência dos usuários.</p>
      <img src="img/cmp1.jpg" class="img-responsive margin " style="width:400px; height: 300px;" alt="Campo">
    </div>
    <div class="col-sm-4"> 
      <p>Arenas bem iluminadas, para facilitar a visão dos jogadores.</p>
      <img src="img/cmp3.jpg" class="img-responsive margin " style="width:400px; height: 300px" alt="Campo">
    </div>
    <div class="col-sm-4"> 
      <p>Campos com boas dimensões, para que o jogador não se sinta sufocado.</p>
      <img src="img/cmp2.jpg" class="img-responsive margin " style="width:400px; height: 300px" alt="Campo">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Copyright © 2017 | Arena Evolução<br/> 
  
</footer>

</body>
</html>
