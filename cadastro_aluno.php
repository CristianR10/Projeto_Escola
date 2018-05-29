<html>
<head>
	<title>Cadastro Aluno</title>
</head>
<body>
	<form method="post" action="#">
		<label>Dados do Aluno</label><br>
			<input type="text" placeholder="Nome Completo do Aluno" id="#" required><br><br>
			<input type="text" placeholder="R.G" id="#"required>
			<input type="text" placeholder="CPF" id="#"required>
			<input type="date" id="#" required><br><br>	
			<input type="text" placeholder="Endereço" id="#"required>
			<input type="text" placeholder="CEP" id="#"required>
			<input type="text" placeholder="E-mail" id="#">
			<input type="url" placeholder="facebook" id="#">
			<input type="url" placeholder="instagram" id="#">
			<input type="url" placeholder="Twitter" id="#"><br><br>
		<label>Dados dos Reponsaveis</label><br>
			<input type="text" placeholder="Nome Mãe" id="#"required>
			<input type="text" placeholder="Nome Pai" id="#"required><br><br>
		<label>Confirmação do Cadastro</label><br>					
			<input type="password" placeholder="Senha" name="senha1"required>
			<input type="password" placeholder="Confirmar Senha" name="senha2"required><br><br>
		<label>Situação</label><br>
			<select name="select">
				<option value="valor1" selected>Ativo</option>
				<option value="valor2">Higienizado</option>
				<option value="valor1">Trancado</option>
				<option value="valor1">SPC</option>
			</select><br><br>
			<label>Inicio do Curso</label><br>
			<select name="select">
				<option value="valor1" selected>Informática</option>
				<option value="valor2">Gestão</option>
				<option value="valor1">Inglês</option>
			</select><br><br>
			<label>Data de Inicio do Curso</label><br><br>
			<input type="date" id="#">
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