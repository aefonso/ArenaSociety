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
<!DOCTYPE html>
<html>
<head>
  
  <title>Upload de Imagens</title>
  <link rel="shortcut icon" href="img/favicon.ico"> 
  <meta http-equiv="Content-Language" content="pt-br">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
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
  
  #up{
    margin-left: 600px;
  }
  #caixa{
    margin-left: 800px;
  }
  #btn{
    margin-left: 200px;
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
           
      <a class="navbar-brand" href="administrador.php"><img src="img/logo.png" class="img-responsive img-circle margin" style="display:inline;margin-top: -20px; float: left;"  alt="Arena" width="50" height="50"> Painel do Administrador</a>
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
  <div class="row">
  <div class="col-sm-15" style="padding-bottom: 100px;">
        

        <h3 class="margin">Upload de Imagens</h3>
      <form method="POST" action="bd/salvar.php" enctype="multipart/form-data">
        <div id="up">        
        <input type="file" name="imagemx" id="imagem" ><br>
        </div>
        <h3>Insira o Titulo da imagem para aparecer na página</h3>
        <div id="caixa">
        <input type="textarea" name="titulox" id="titulo" style="color: black; margin-left: -800px; height: 50px; width: 500px; ">
        <br><br><br>
        <div id="btn">
        <input type="submit" class="btn btn-success" value="Enviar" style="color: #2f2f2f; margin-left: -1000px">
        <input type="reset" class="btn btn-danger" value="Apagar" style="color: #2f2f2f">
        </div>
        </div>
      </form> 

  </div>
  </div>
</div>

<?php 


 ?>
 
 <?php 
  
      


?>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center" style="font: 20px sans-serif; line-height: 1.8; color: #f5f6f7;">
  <p>Copyright © 2017 | Arena Evolução<br/> 
  
</footer>

</body>
</html>
