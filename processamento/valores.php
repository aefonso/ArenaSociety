<?php

	if(isset($_POST["ok"])){

		$descricao = isset($_POST["descricao"])?$_POST["descricao"]:"";
		$fluxo = isset($_POST["fluxo"]) ? $_POST["fluxo"] : "";
		$valor = isset($_POST["valor"])?$_POST["valor"]:"";
				
		if ($descricao != "" && $fluxo != "" && $valor != "" ) {
			
			if ($resp == "sim") {
				
			}
			elseif ($resp == "nao") {
				
			}

			/*CODIGO SQL*/
		}

		header("location: ../financeiro.php");
	}
	else {

		header("location: ../financeiro.php");
	}
?>