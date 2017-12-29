<?php


echo("<!DOCTYPE html>

<head>
	<title>Vasco na Liberta 2018</title>
	
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta charset='UTF-8'>
	<link rel='stylesheet' type='text/css' href='../folha.css'>
	<!-- Bootstrap -->
	<link href='../bootstrap.min.css' rel='stylesheet'>
	<link href='../css/bootstrap.css' rel='stylesheet'>
</head>
<body>

<div class='container full'>

<div class='row'>
	<div class='col-md-3'>
		<img class='mymark2' src='../img/libert.png'>
	</div>
	<div class='col-md-6'>
		<img class='mymark' src='../img/logo.png'>
		<h6 align='center'>Club de Regatas Vasco da Gama, Gigante desde 1898.</h6>");
		$line="<div class='skew'></div>";

		for ($i=0; $i < 3; $i++) { 
			echo "$line";
		}
	echo("

		<h1 align='center'>Vasco na <font color='#D2883B'>Libertadores</font> 2018</h1>
	</div>
	<div class='col-md-3'>
		<div class='login'>
		<form>
			<input class='inputglass' placeholder='Usuário' type='text'>
			<input class='inputglass' placeholder='Senha' type='password' maxlegth='16'>
			<button class=''>Entrar</button><span> </span><button class=''>Limpar</button>
		</form>
	</div>
	</div>
	

</div>

<div class='row rowfull'>


	<div class='col-md-4 col-xs-12'>
	<a href='../index.php'>Home</a>
		
	</div>
	<div class='col-md-4 col-xs-12'>
		<div class='loginCad'>
			<h2>Cadastro</h2>
			<hr>
			<form>
				<input class='inputglass' placeholder='Nome de usuário' type='text'>
				<input class='inputglass' placeholder='Senha' type='password' maxlegth='16'>
				<input class='inputglass' placeholder='Nome Completo' type='text'>
				<tr>
				   
				   <td align='left'>
				    <input type='text' class='inputglassDate name='dia' size='2' maxlength='2' placeholder='Dia'> 
				   <input type='text' class='inputglassDate name='mes' size='2' maxlength='2' placeholder='Mês'> 
				   <input type='text' class='inputglassDate name='ano' size='4' maxlength='4' placeholder='Ano'>
				   </td>

				</tr>
				<br><br>
				<button class=''>Cadastrar</button><span> </span><button class=''>Limpar</button>
			</form>
			<hr>
		</div>
	</div>
	<div class='col-md-4 col-xs-12'>
	
		
	</div>

</div>
<br>
<footer>All rights reserved to Julinho Tomaz | From Teresina-PI, Brasil 2018</footer>
</div>
</body>
</html>");

?>



