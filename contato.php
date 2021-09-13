<!DOCTYPE html>
<html>
<head>
  
  <title>Entre em Contato</title>
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
      margin-top: -50px;
      margin-bottom: -50px;
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
     <button type="button" class="navbar-toggle" data-toggle="collapse" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> 
           
      <a class="navbar-brand" href="index.php"> <img src="img/logo.png" class="img-responsive img-circle margin" style="display:inline;margin-top: -20px; float: left;"  alt="Arena" width="50" height="50">Home</a>
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
  <h3 class="margin">Contato</h3>
  <div class="container">
  <form class="form-horizontal" method="post" action="processamento/processcontato.php" autocomplete="off">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Nome:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="nome" placeholder="Nome" name="nome" style="width: 750px;">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" style="width: 750px;">
      </div>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
  	<h3>Escreva sua mensagem:</h3>
  	<textarea class="form-control" rows="5" id="mensagem" placeholder="Escreva aqui sua mensagem" style="resize: none;" name="mensagem"></textarea>
  	</div>
	</div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-default" name="ok">Enviar sua Mensagem</button>
      </div>
    </div>
  </form>
</div>
  
  <div class="row">
  <div class="col-sm-15">
      <p>Entre em contato conosco e nós retornaremos para você dentro de 24 horas.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Pedro Velho, Rio Grande do Norte, Brasil</p>
      <p><span class="glyphicon glyphicon-phone"></span> (**) **** - ****</p>
      <p><span class="glyphicon glyphicon-envelope"></span> evolucaoarena@gmail.com</p>
    </div>
   </div>
</div>

<!-- Segundo Container -->
  

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Copyright © 2017 | Arena Evolução<br/> 
  
</footer>

</body>
</html>
