
<!DOCTYPE html>
<html>
<head>
  
  <title>Faça já sua Reserva</title>
  <link rel="shortcut icon" href="img/favicon.ico"> 
  <meta http-equiv="Content-Language" content="pt-br">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script src="js/bootstrap-datepicker.min.js"></script> 
    <script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
  <script type="text/javascript">
    function abrir_popup() {
      document.getElementById("popup").style.display = "block";
    }

    function fechar_popup() {
      document.getElementById("popup").style.display = "none";
    }
    function conf_reserva() {
      
    }
    function cancel_reserva() {
      
    }
  </script>
  <style>
  #popup {
    width: 500px;
    height: 500px;
    margin-left: -250px;
    margin-top: -250px;
    position: fixed;
    top: 50%;
    left: 50%;
    display: none;
    box-shadow: 0px 0px 10px;
    border-width: 10px;
    border-color: black;
  }
  #fecha{
    border: hidden; 
    background-color:#2f2f2f; 
    width: 30px; 
    height: 30px;
    margin-left: 430px;
    

  }
  body {
      font: 20px sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #474e5d; /* azul claro */
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
  .bg-5 { 
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
      <a class="navbar-brand" href="index.php"> <img src="img/logo.png" class="img-responsive img-circle margin" style="display:inline;margin-top: -20px; float: left;"  alt="Arena" width="50" height="50"> Home</a>
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
  <h3 class="margin">Faça já sua reserva</h3>
  
  <h3>Confira nossos horários e preços, veja qual dia se encaixa melhor na sua agenda e venha aproveitar com a sua galera!</h3>
</div>

<!-- Segundo Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Preços e Horários:</h3>
  <div class="table-responsive">
    <table class="table table-striped table-bordered" ">
      <thead>
   		<tr>
			<th scope="col" style=" background-color: #eee; color: #2f2f2f;">Horário</th>
			<th scope="col" style=" background-color: #eee; color: #2f2f2f;">Preço por hora</th>
			</tr>
			</thead>
			<tfoot></tfoot>
			<tbody>
			<tr>
			<td style=" background-color: #eee; color: #2f2f2f;">Das 08:00h às 17:00h</td>
			<td style=" background-color: #eee; color: #2f2f2f;">R$ 120,00</td>
			</tr>
			<tr>
			<td style=" background-color: #eee; color: #2f2f2f;">Das 17:00h às 00:00h</td>
			<td style=" background-color: #eee; color: #2f2f2f;">R$ 180,00</td>
		</tr>
      </tbody>
    </table>
    </div>
</div>

<!-- Terceiro Container (Fotos) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Reservas</h3><br>
  <div class="table-responsive">
    <table class="table table-striped table-bordered" >
      <thead>
      <tr>
      <th scope="col" style=" background-color: #eee; color: #2f2f2f;">Dias da Semana</th>
      <th scope="col" style=" background-color: #eee; color: #2f2f2f;">Selecione o Horário</th>
      <th scope="col" style=" background-color: #eee; color: #2f2f2f;">Clique em Reservar</th>
      </tr>
      </thead>
      <tfoot></tfoot>
      <tbody>
      <tr>
      <td style=" background-color: #eee; color: #2f2f2f;"><div class="input-group date">
               <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
              <input type="text" class="form-control" id="exemplo" placeholder="Data" style="width: 150px;" >
             
            </div>
      </td>
      <td style=" background-color: #eee; color: #2f2f2f;"><select name="horarios"  style="color: black;" class="selectpicker">
          <option value="01">08:00h - 09:00h</option>
          <option value="02">09:00h - 10:00h</option>
          <option value="03">10:00h - 11:00h</option>
          <option value="04">13:00h - 14:00h</option>
          <option value="05">14:00h - 15:00h</option>
          <option value="06">15:00h - 16:00h</option>
          <option value="07">16:00h - 17:00h</option>
          <option value="08">17:00h - 18:00h</option>
          <option value="09">18:00h - 19:00h</option>
          <option value="10">19:00h - 20:00h</option>
          <option value="11">20:00h - 21:00h</option>
          <option value="12">21:00h - 22:00h</option>
          <option value="13">22:00h - 23:00h</option>
          <option value="14">23:00h - 00:00h</option>
          </select>

      </td>
      <td style=" background-color: #eee; color: #2f2f2f;"><button type="button" class="btn btn-primary" style="border-color: white;" value="abrir" onclick="abrir_popup();">Reservar</button></td>
      </tr>
      </tbody>
    </table>
    </div>
    <div id="popup"> 
       
      <div class="container-fluid bg-5 text-center" style=" width: 700px; height: 500px; margin-left: -80px; padding-right: -50px;padding-top: -1000px; padding-left: 50px;">
            <button id="fecha" value="fechar" onclick="fechar_popup();"> <img src="img/remove-symbol.png" class="img-responsive margin "></button> 
            
            <h2>Confirmação de Reserva</h2>

            <form id="loginform" class="form-horizontal" role="form" method="post" action="processamento/cadastroreserv.php" autocomplete="off">
            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6" style="padding-right: 5px; border-right: 1px solid #fff;">
            <h5>Cadastre-se para confirmar a reserva:</h5>
              <div style="margin-bottom: 15px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="reserva-nome" type="text" class="form-control" name="nome" value="" placeholder="Nome" style="width: 170px;" autocomplete="off">
              </div> 
              <div style="margin-bottom: 15px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="reserva-telefone" type="password" class="form-control" name="senha" placeholder="Senha" style="width: 170px;" autocomplete="off">
              </div>
              <div style="margin-bottom: 15px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input id="reserva-telefone" type="text" class="form-control" name="celular" placeholder="Número para Contato" style="width: 170px;">
              </div>
              <div style="margin-bottom: 15px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input id="reserva-telefone" type="text" class="form-control" name="email" placeholder="Email" style="width: 170px;">
              </div>
              <div style="margin-top:10px" class="form-group">
                  <div class="col-sm-4 controls">
                    <input type="submit" name="ok" value="Cadastrar e Reservar" class="btn btn-success">
                    <input type="reset" value="Cancelar" class="btn btn-danger" />
                    
                 </div>
              </div>  
            </div>
            </form>
            <form method="post" action="processamento/reserva.php">
            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
            <h5>Já cadastrado? Então só é reservar</h5>
              <div style="margin-bottom: 15px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="reserva-nome" type="text" class="form-control" name="nome" value="" placeholder="Nome" style="width: 170px;" autocomplete="off">
              </div> 
             <div style="margin-bottom: 15px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="reserva-telefone" type="password" class="form-control" name="senha" placeholder="Senha" style="width: 170px;" autocomplete="off">
              </div>
              <div style="margin-top:10px" class="form-group">
                  <div class="col-sm-1 controls">
                    <input type="submit" name="ok" value="Reservar" class="btn btn-success">
                    <input type="reset" value="Cancelar" class="btn btn-danger" />
                 </div>
              </div>   
            </div>
            
        </div>         
    </form>
      </div>

  
    </div>
  
</div>
  <script type="text/javascript">
      $('#exemplo').datepicker({  
        format: "dd/mm/yyyy", 
        language: "pt-BR",
        startDate: '+0d',
      });
    </script> 

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Copyright © 2017 | Arena Evolução<br/> 
</footer>

</body>
</html>
