<html>
<head>
	<title>Escola_marcus</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="selecao">
	<label><spam style="color:white;">Selecione a Unidade</spam></label>
		<select name="estados-brasil" onchange="location = this.value;">
			<option value="index.php">--</option>
			<option value="../login.html">Acre</option>
			<option value="../login.html">Alagoas</option>
			<option value="../login.html">Amapá</option>
			<option value="../login.html">Amazonas</option>
			<option value="../login.html">Bahia</option>
			<option value="../login.html">Ceará</option>
			<option value="../login.html">Distrito Federal</option>
			<option value="../login.html">Espírito Santo</option>
			<option value="../login.html">Goiás</option>
			<option value="../login.html">Maranhão</option>
			<option value="../login.html">Mato Grosso</option>
			<option value="../login.html">Mato Grosso do Sul</option>
			<option value="../login.html">Minas Gerais</option>
			<option value="../login.html">Pará</option>
			<option value="../login.html">Paraíba</option>
			<option value="../login.html">Paraná</option>
			<option value="../login.html">Pernambuco</option>
			<option value="../login.html">Piauí</option>
			<option value="../login.html">Rio de Janeiro</option>
			<option value="../login.html">Rio Grande do Norte</option>
			<option value="../login.html">Rio Grande do Sul</option>
			<option value="../login.html">Rondônia</option>
			<option value="../login.html">Roraima</option>
			<option value="../login.html">Santa Catarina</option>
			<option value="../login.html">São Paulo</option>
			<option value="../login.html">Sergipe</option>
			<option value="../login.html">Tocantins</option>
		</select>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<footer class="mainfooter" role="contentinfo">      
  <div class="footer-bottom">
  	<center>    
	    <?php  
	    $matricula = date("d/m/Y");
		echo "&copy 2018 Copyright Todos os direitos reservados - $matricula"; ?>	    
  </center>
</footer>	
</body>

</html>