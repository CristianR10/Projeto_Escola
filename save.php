<?php 
if (mysql_num_rows($query) != 1) {
	//Mensagem de erro quando os dados são inválidos ou o usuário não foi encontrado
	echo "Login Inválido"; exit;
} else {
	//Salva os dados encontrados na variável $resultado
	$resultado = mysql_fetch_assoc($query);

	//Se a sessão não existir, inicia uma
	if (!isset($_SESSION)) session_start();
	
	//Salva os dados encontrados na sessão
	$_SESSION['UsuarioID'] = $resultado['id'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];
	$_SESSION['UsuarioNivel'] = $resultado['nivel'];

	// Redireciona o visitante
	header("Location: restrito.php"); exit;
	
}
 ?>