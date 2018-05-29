<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="#">
		<label>Nome Completo</label><br>
		<input type="text" id="n_c"><br>		 
		<label>Senha</label><br>
		<input type="password" name="senha1" id="n_c"><br> 
		<label>Confirmar Senha</label><br>
		<input type="password" name="senha2" id="n_c"><br><br>  

		<input type="submit" value="Cadastrar">
	</form>

	<?php 
		if ($_POST) {
			$senha1 = $_POST['senha1'];
			$senha2 = $_POST['senha2'];
		if ($senha1 == "") {
				$mensagem = "<span class='aviso'><b>AVISO</b>: Senha não foi alterada!</span>";
			} elseif ($senha1 ==$senha2) {
				$mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais</span>";
			} else {
				$mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem</span>";
			}
			echo "<p id='mensagem'>".$mensagem."</p>";
		}
	 ?>
</body>
</html>