<?php 
	// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
	if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
		header("Location: index.php"); exit;
	}

	// Tenta se conectar ao servidor MySQL
	mysql_connect('127.0.0.1','root','') or trigger_error(mysql_error());
	// Tenta se conectar a um BD MySQL
	mysql_select_db('usuario') or trigger_error(mysql_error());


	$usuario = mysql_real_escape_string($_POST['usuario']);
	$senha = mysql_real_escape_string($_POST['senha']);

	// Validação do usuário/senha digitados
	$sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '". $usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
	$query = mysql_query($sql);
	if (mysql_num_rows($query) != 1) {
		//Mensagem de erro quando os dados são invalidos e/ou o usuário não foi encontrado
		echo "Login Inválido!"; exit;
	}else{
		//Salva os dados encontrados na variável $resultado

		$resultado = mysql_fetch_assoc($query);
	}


 ?>