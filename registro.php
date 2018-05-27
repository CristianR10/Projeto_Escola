<!DOCTYPE HTML>
<html>
		
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Cadastro </title>
		<!--Import Google Icon Font-->
		<link rel="stylesheet" type="text/css" href="cssaplic.css">
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- materialize css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<!--<div class="container">-->
			
           <!-- do meta name até link type, href css/materialize é disigner do google -->

</head>	
<style type="text/css">
	body{
		margin: 0 auto ;
  		width:500px ;
  		background: white;
  		padding:50px ;
  	}

</style>
<body class="#ffc400 amber accent-3">		
			
	<div class="center">
		    <form class="hoverable #eceff1 blue-grey lighten-5 " name="f1" method="post"><!--hoverable = Sombra saltando obs. passar o mouse por cima -->
						    <!--formulario -->
					<div class="row ">
						<div class="input-field col s12 ">
							<i class="material-icons large center center "> directions_bus </i>
						</div>
						        <div class="input-field col s12">
						          <input id="nome_completo" name="nome_completo" type="text" class="validate">
						          <label for="nome_completo">Nome Completo</label>
						        </div>
						       
						        <div class="input-field col s12">
						          <input id="email" name="e_mail" type="email" class="validate">
						          <label data-error="Email Inválido" data-success="Email_Válido" for="email" >Email</label>
						        
						      	</div>
						      
						        <div class="input-field col s12 ">
						          <input id="password " name="senha1" type="password" class="validate" name="password">
						          <label for="password">Senha</label>
						        </div>
						      
						  
						        <div class="input-field col s12 ">
						          <input id="password_confirma" name="senha2" type="password" class="validate">
						          <label for="password">Confirmar Senha</label>
						        </div>
						    
						      	<div class="input-field col s12">      
		          				<input id="icon_telephone" name="celular" type="text" class="validate">
		          				<label for="icon_telephone">Celular</label>
		        				</div>

						    	<div class="input-field col s12">      
		          				<input id="icon_telephone_fixo" name="fixo" type="text" class="validate">
		          				<label for="icon_telephone">Fixo</label>
		        				</div>
		        		</div>
						      <!--<div class="row">
						        <div class="col s12">
						          This is an inline input field:
						          <div class="input-field inline">
						            <input id="email" type="email" class="validate">
						            <label for="email" data-error="wrong" data-success="right">Email</label>
						          </div>
						        </div>
						      </div> -->
				<div class="row">						      
				<button class="btn waves-effect waves-light" type="submit" name="enviar">Registrar
  				</button>
  				</div>
            		
            	<div class="row">     
				  <a href="index.html" class="btn waves-effect waves-light">Voltar</a>
            	  <br><br>            		
            	</div>
            		
			</form>
	</div>			    

				<!-- materialize JS-->
				<!--Import jQuery before materialize.js-->
			      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			      <script type="text/javascript" src="js/materialize.min.js"></script>
	<!--<?php
	/*-------------------------------Cod confirmação de senha----------------------------*/
		/*if (isset($_POST['enviar'])) {
			$senha1 = $_POST['senha1'];
			$senha2 = $_POST['senha2'];
		 if ($senha1 == "") {
		 	$mensagem = "<span class='aviso'><b>AVISO</b>: Senha não foi alterada!</span>";	 	
		 } elseif ($senha1 == $senha2) {
		 	$mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais</span>";
		 } else {
		 	 $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
		 }
		 echo "<p id='mensagem'>".$mensagem."</p>";
		}
		/*-------------------------Abrir banco de dados------------------------------------*/
		/*$servidor = 'localhost';
		$usuario = 'root';
		$senha = 'eniac';
		$banco = 'test';


		//Faz a conexão com o banco de dados
		$mysqli = new mysqli
		($servidor, $usuario, $senha, $banco);


		//verifica se esta correta a conexão
		if (mysqli_connect_errno()) 
			trigger_error(mysqli_connect_error());


		/*------------------------------Gravar os arquivos--------------------------------------*/
		/*include "abrir_bd.php";

		$nome_completo = $_REQUEST['nome_completo'];
		$e_mail = $_REQUEST['e_mail'];
		$senha1 = $_REQUEST['senha1'];
		$celular = $_REQUEST['celular'];
		$fixo = $_REQUEST['fixo'];

		$executa = "INSERT INTO cadastro (nome, email, senha, celular, fixo) VALUES ('$nome_completo','$e_mail','$senha1','$celular','$fixo') ";
		$query = $mysqli->query($executa);





	?>	*/	      
		      

				    



