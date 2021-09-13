<?php

	if(isset($_POST["ok"])){
		$nome = isset($_POST["nome"])?$_POST["nome"]:"";
		$email = isset($_POST["email"])?$_POST["email"]:"";
		$mensagem = isset($_POST["mensagem"])?$_POST["mensagem"]:"";
				
		if ($nome != "" && $email != "" && $mensagem != "" ) {
			/*CODIGO SQL*/

		}
		header("location: ../reservas.php");

			}else{
				header("location: ../reservas.php");
			}
?>