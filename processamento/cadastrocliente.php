<?php

	if(isset($_POST["ok"])){

		$nome = isset($_POST["nome"])?$_POST["nome"]:"";
		$senha = isset($_POST["senha"])?$_POST["senha"]:"";
		$celular = isset($_POST["celular"])?$_POST["celular"]:"";
		$email = isset($_POST["email"])?$_POST["email"]:"";
		if ($nome != "" && $senha != "" && $celular != "" && $email != "") {
			/*CODIGO SQL*/
		}

		header("location: ../usuarios.php");
	}
	else {

		header("location: ../usuarios.php");
	}
?>