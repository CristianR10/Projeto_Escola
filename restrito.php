<?php 

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

// Verifica se não há a variavel da sessão que identifica o usuário
if (!isset($_SESSION['usuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
	
	session_destroy();
	// Rediciona o visitante de volta pro login
	header("Location: index.php"); exit;
}
	
 ?>

 <h1>Página restrita</h1>
 Olá, <?php echo $_SESSION['UsuarioNome']; ?>!