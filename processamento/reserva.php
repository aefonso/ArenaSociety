<?php

	if(isset($_POST["ok"])){
		$nome = isset($_POST["nome"])?$_POST["nome"]:"";
		$senha = isset($_POST["senha"])?$_POST["senha"]:"";

		if ($nome != "" && $senha != "") {
			/*CODIGO SQL*/
		}
		header("location: ../reservas.php");
			}else{
				header("location: ../reservas.php");
			}
?>