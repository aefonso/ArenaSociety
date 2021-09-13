<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login do Administrador</title>
    <link rel="shortcut icon" href="img/favicon.ico"> 
	<meta http-equiv="Content-Language" content="pt-br">
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/stylelogin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </script>
    <style>
    
    body {
      font: 20px sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
    }
    </style>
</head>
<body>
<div class="container-fluid bg-2 text-center">
<div style="float:right; font-size: 80%; position: relative; top:-10px"><span class="glyphicon glyphicon-arrow-left"></span>
<a href="index.php"> Voltar a Home</a></div>

    <div class="container-fluid">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel-heading">
            <div class="panel-title"><h4>Painel do Administrador | Login</h4></div>
            </div>     
            <div style="padding-top:30px" class="panel-body" >
            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            <form id="loginform" class="form-horizontal" role="form" method="post" action="processamento/valida.php" autocomplete="off"v>
            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="login-user" type="text" class="form-control" name="username"  placeholder="Usuário" autocomplete="off">
            </div> 
            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-senha" type="password" class="form-control" name="password" placeholder="Senha" autocomplete="off">
            </div>
			<div class="input-group">
                <div class="checkbox">
                    <label>
                    <input id="salvar-login" type="checkbox" name="lembrar" value=""> Lembrar
                    </label>
                </div>
            </div>
			<div style="margin-top:10px" class="form-group">
                <div class="col-sm-12 controls">
                    <input type="submit" name="ok" value="Login" class="btn btn-success">
                </div>
            </div>
        </div>         
    </form>
</div>
</div>
</div> 
</div>
</div>
<footer class="container-fluid bg-4 text-center">
  <p>Copyright © 2017 | Arena Evolução<br/> 
  
</footer>

</body>	
</html>