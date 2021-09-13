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
  
  <title>Painel do Administrador</title>
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
  
  </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse">
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
  <h3 class="margin">Cadastro de Usuários</h3>
       <form id="loginform" class="form-horizontal" role="form" method="post" action="processamento/cadastrofunc.php" autocomplete="off">
            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6" style="padding-right: 5px; border-right: 1px solid #fff;">
            <h4>Cadastro de Funcionários:</h4>
              <div style="margin-bottom: 15px; margin-left: 175px;" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="func-nome" type="text" class="form-control" name="nome" value="" placeholder="Nome" style="width: 250px;" autocomplete="off">
              </div> 
              <div style="margin-bottom: 15px; margin-left: 175px;" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input id="func-telefone" type="text" class="form-control" name="celular" placeholder="Número para Contato" style="width: 250px;">
              </div>
              <div style="margin-bottom: 15px; margin-left: 175px;" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input id="func-telefone" type="text" class="form-control" name="email" placeholder="Email" style="width: 250px;">
              </div>
              <div style="margin-bottom: 15px; margin-left: 175px;" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                <input id="func-telefone" type="text" class="form-control" name="endereco" placeholder="Endereço" style="width: 250px;">
              </div>  
              <div style="margin-top:10px; margin-left: 175px;" class="form-group">
                  <div class="col-sm-7 controls">
                    <input type="submit" name="ok" value="Cadastrar" class="btn btn-success">
                    <input type="reset" value="Cancelar" class="btn btn-danger" />
                    
                 </div>
              </div>  
            </div>
            </form>
            <form method="post" action="processamento/cadastrocliente.php" autocomplete="off">
            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
            <h4>Cadastro de Clientes:</h4>
              <div style="margin-bottom: 15px; margin-left: 175px;" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="cliente-nome" type="text" class="form-control" name="nome" value="" placeholder="Nome" style="width: 250px;" autocomplete="off">
              </div>
              <div style="margin-bottom: 15px; margin-left: 175px;" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="cliente-senha" type="password" class="form-control" name="senha" placeholder="Senha" style="width: 250px;" autocomplete="off">
              </div> 
              <div style="margin-bottom: 15px; margin-left: 175px;" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input id="cliente-telefone" type="text" class="form-control" name="celular" placeholder="Número para Contato" style="width: 250px;">
              </div>
              <div style="margin-bottom: 15px; margin-left: 175px;" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input id="cliente-telefone" type="text" class="form-control" name="email" placeholder="Email" style="width: 250px;">
              </div>
              <div style="margin-bottom: 15px; margin-left: 175px;" class="form-group">
                  <div class="col-sm-7 controls">
                    <input type="submit" name="ok" value="Cadastrar" class="btn btn-success">
                    <input type="reset" value="Cancelar" class="btn btn-danger" />
                 </div>
              </div>   
            </div>
            
        </div>         
    </form>
  
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Copyright © 2017 | Arena Evolução<br/> 
  
</footer>

</body>
</html>
