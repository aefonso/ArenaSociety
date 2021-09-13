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
<div class="container-fluid bg-1 text-center" >
  <div style="float: left; width: 500px; height: 350px;">
  <form id="loginform" class="form-horizontal" role="form" method="post" action="processamento/valores.php" autocomplete="off" >
      <fieldset>

        <div class="form-group">
          <h3 class="col-md-7 control-label">Gestão Financeira</h3>
          </div>       
          <div class="form-group">
              <label class="col-md-3 control-label" >Descrição:</label>

              <div class="col-md-5">
                  <input id="descricao" name="descricao" type="text" placeholder="Descrição" class="form-control input-md" style="width: 400px;">
              </div>
          </div>        
          <div class="form-group">
            <label class="col-md-3 control-label" for="title">Fluxo:</label>
              <div class="col-md-5 ">
                <label class="radio-inline"><input type="radio" name="fluxo" value="entrada">Entrada</label>
                <label class="radio-inline"><input type="radio" name="fluxo" value="saida">Saída</label>
              </div>
          </div>        
          <div class="form-group">
              <label class="col-md-3 control-label">Valor:</label>

              <div class="col-md-4">
                  <input id="valor" name="valor" type="text" placeholder="Valor" class="form-control input-md"  style="width: 190px;">
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label" for="saveBtn"></label>

              <div class="col-md-5">
                  <button id="inserirBtn" name="inserirBtn" class="btn btn-success">Inserir</button>
                  <button id="cancelaBtn" name="cancelaBtn" class="btn btn-danger">Cancelar</button>
              </div>
          </div>

      </fieldset>
  </form>
  </div>

  <div class="table-responsive" style="float: right;  width: 800px; height: 350px; ">
    <table class="table table-striped table-bordered" >
      <thead>
      <tr>
      <th scope="col" style=" background-color: #2f2f2f; color: #eee;">Descrição:</th>

      <th scope="col" style=" background-color: #2f2f2f; color: #eee;">Valores:</th>

      <th scope="col" style=" background-color: #2f2f2f; color: #eee;">Fluxo:</th>
      </tr>
      </thead>
      <tfoot></tfoot>
      <tbody>
      
      <tr>
      <td style=" background-color: #eee; color: #2f2f2f;">
        <h4>--</h4>
      </td>
      <td style=" background-color: #eee; color: #2f2f2f;">  
        <h4>--</h4>       
      </td>
       <td style=" background-color: #eee; color: #2f2f2f;">  
        <h4>--</h4>       
      </td>
      </tr>
      
      <tr>
      <td style=" background-color: #eee; color: #2f2f2f;">
        <h4>--</h4>
      </td>
      <td style=" background-color: #eee; color: #2f2f2f;">  
        <h4>--</h4>       
      </td>
      <td style=" background-color: #eee; color: #2f2f2f;">  
        <h4>--</h4>       
      </td>
      </tr>

      <tr>
      <td style=" background-color: #eee; color: #2f2f2f;">
        <h4>--</h4>
      </td>
      <td style=" background-color: #eee; color: #2f2f2f;">  
        <h4>--</h4> 
        <td style=" background-color: #eee; color: #2f2f2f;">
        <h4>--</h4>
      </td>      
      </td>
      </tr>
      <tr>
        <tr>
      <td style=" background-color: #eee; color: #2f2f2f;">
        <h4>--</h4>
      </td>
      <td style=" background-color: #eee; color: #2f2f2f;">  
        <h4>--</h4>       
      </td>
      <td style=" background-color: #eee; color: #2f2f2f;">  
        <h4>--</h4>       
      </td>
      </tr>
      <tr>

      </tbody>
    </table>
    </div>
       
</div>
</div>





<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Copyright © 2017 | Arena Evolução<br/> 
  
</footer>

</body>
</html>
