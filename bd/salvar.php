<?php 
	include "conexaobd.php";
	session_start();
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$titulox = $_POST['titulox'];
		
		ini_set('post_max_size', '10M');
		ini_set('upload_max_filesize', '10M');
		ini_set('max_execution_time', 0);
		ini_set('max_input_time', 0);
		
		if(!isset($_FILES['imagemx'])) {
			die("Desculpe, mas não foi detectado nenhum arquivo a ser enviado pro servidor.");
		}

		$_UP['pasta'] = '../img/';
		$_UP['tamanho'] = 1024 * 1024 * 10; // 10Mb
		$_UP['extensoes'] = array('bmp', 'jpg', 'jpeg', 'png');
		
		$_UP['erros'][0] = 'Não houve erro';
		$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
		$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
		$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
		$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
		
		if ($_FILES['imagemx']['error'] > 0) {
			die("Desculpe, aconteceu um erro com o seu envio. Erro: ".$_UP[$_FILES['imagemx']['error']]);
			exit;
		}
		
		$extensao = strtolower(end(explode('.', $_FILES['imagemx']['name'])));

		if (array_search($extensao, $_UP['extensoes']) === false) {
			echo "Envie o arquivo no formato correto (.png,.jpg,.bmp,.jpeg). A extensão enviada foi: .".$extensao;
			exit;
		}
		
		if ($_UP['tamanho'] < $_FILES['imagemx']['size']) {
			echo "Envie o arquivo com, no máximo, 16 MB. O arquivo enviado possuía: ".$_FILES['imagemx']['size']." MB";
			exit;
		}

		$nome_final = md5(time()).".".$extensao;

		if(is_uploaded_file($_FILES['imagemx']['tmp_name'])) {

			if(!$result_move = move_uploaded_file($_FILES['imagemx']['tmp_name'], dirname(FILE_) . '/uploads/' . md5(time()) . '.' . $extensao)) {
				header('location: ../up.php');
			}

		} else {
			//n enviou
		}
		
		$sql = "insert into fotos (imagemx, titulox) values ('$nome_final', '$titulox');";
			if(mysqli_query($conn, $sql)){
				$_SESSION['msg'] = "Cadastrado com sucesso!";
				
			}else{
				$_SESSION['msg'] =  mysqli_error($conn);
			}
			header('location: ../up.php');
	}
 ?>