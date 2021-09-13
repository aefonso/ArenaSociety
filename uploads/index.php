<?php
	
	session_start();
	ini_set('post_max_size', '50M');
	ini_set('upload_max_filesize', '50M');
	ini_set('max_execution_time', 0);
	ini_set('max_input_time', 0);
	

	if(isset($_POST['btn_submeter'])) {

		if(!isset($_FILES['imagemx'])) {
			die("Desculpe, mas não foi detectado nenhum arquivo a ser enviado pro servidor.");
		}

		$_UP['pasta'] = 'uploads/';
		$_UP['tamanho'] = 1024 * 1024 * 50; // 50Mb
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

			$result_move = move_uploaded_file($_FILES['imagemx']['tmp_name'], dirname(__FILE__) . '/uploads/' . md5(time()) . '.' . $extensao);

		} else {
			echo "<p>Hmmm... Parece que o arquivo não foi enviado para o servidor</p>;
		} 
		
	}


?>
