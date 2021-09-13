<?php
session_start();
if (!isset($_SESSION['autenticado'])) {
	session_destroy();
	if(isset($_POST["ok"])){
		$username = isset($_POST["username"])?$_POST["username"]:"";
		$password = isset($_POST["password"])?$_POST["password"]:"";

		if($username != "" && $password != ""){
			if($username == "admin" && $password == "admin"){
				session_start();
				$_SESSION['autenticado'] = true;
				
				header("location: ../administrador.php");
			}else{
				header("location: ../index.php");
			}
		}else{
			header("location: ../index.php");
		}
	}else{
		header("location: ../index.php");
	}
}else{
	if($_SESSION['autenticado']){
		header("location: ../administrador.php");
	}else{
		header("location: ../index.php");
	}
}
?>