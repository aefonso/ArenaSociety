<?php

	if(isset($_POST["ok"])){

		$nome = isset($_POST["nome"])?$_POST["nome"]:"";
		$celular = isset($_POST["celular"])?$_POST["celular"]:"";
		$email = isset($_POST["email"])?$_POST["email"]:"";
		$endereco = isset($_POST["endereco"])?$_POST["endereco"]:"";
				
		if ($nome != "" && $celular != "" && $email != "" && $endereco != "") {
			/*CODIGO SQL*/
		}

		header("location: ../usuarios.php");
	}
	else {

		header("location: ../usuarios.php");
	}
?>