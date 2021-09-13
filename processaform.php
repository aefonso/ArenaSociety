<?php	
	
	if(isset($_POST["imagem"]) && isset($_POST["titulox"])){
		$imagem = $_POST["imagem"];
		$titulo= $_POST["titulox"];
		
		
		$params = "?imagem=$imagem&titulox=$titulo";
		
		header('location:arena.php'.$params); 
		
	}
?>	