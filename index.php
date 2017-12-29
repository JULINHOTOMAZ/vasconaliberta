<!DOCTYPE html>

<head>
	<title>Vasco na Liberta 2018</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<!-- <meta http-equiv="content-type" content="application/xhtml+xml;charset=iso-8859-1"> -->
	<link rel="stylesheet" type="text/css" href="folha.css">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
</head>

<?php
date_default_timezone_set('America/Sao_Paulo');
header('Content-Type: text/html; charset=utf-8');
$connect = mysqli_connect("localhost","julinho","88998194","vascolibertadores");
$connect->set_charset("utf8");
mysqli_select_db($connect,"vascolibertadores");
$sql="SELECT * FROM postnews ORDER BY COD DESC ";
$result = mysqli_query($connect,$sql);
$row = $result->num_rows;
mysqli_query($connect,"SET NAMES 'utf8'");
mysqli_query($connect,'SET character_set_connection=utf8');
mysqli_query($connect,'SET character_set_client=utf8');
mysqli_query($connect,'SET character_set_results=utf8');


echo("<body>

<div class='container full'>

<div class='row '>
	<div class='col-md-3 col-xs-12'>
		<img class='mymark2' src='img/libert.png'>
	</div>
	<div class='col-md-6 col-xs-12'>
		<img class='mymark' src='img/logo.png'>
		<h6 align='center'>Club de Regatas Vasco da Gama, Gigante desde 1898.</h6>");
		$line="<div class='skew'></div>";

		for ($i=0; $i < 3; $i++) { 
			echo "$line";
		}
	echo("

		<h1 align='center'>Vasco na <font color='#D2883B'>Libertadores</font> 2018</h1>
	</div>
	<div class='col-md-3 col-xs-12'>

		<div class='login'>
			<form>
				<input class='inputglass' placeholder='Usuário' type='text'>
				<input class='inputglass' placeholder='Senha' type='password' maxlegth='16'>
				<button class=''>Entrar</button><span> </span><button class=''>Limpar</button>
			</form>
			<hr>
			<a href='doc/CadastroUser.php'>Cadastre-se</a><spam> | </span><a href='#'>Recuperar Senha</a>
		</div>
	</div>
	

</div>

<div class='row rowfull'>");
	
	$cont=0;
	




	while($array= $result->fetch_array()){

		$cont++;
		// echo "$cont";
		$Titulo = $array["Titulo"];
		$SubTitulo = $array['SubTitulo'];
		$DataPost = $array['DataPostagem'];
		$image = $array['Imagem'];
		$numLetter = strlen($Titulo);
		if($numLetter>70){
			$reduce=$numLetter - 68;
			$rest = substr($Titulo, 0, -($reduce));  // retorna "abcde"
		}else{
			$rest = $Titulo;
		}
		$Titulo = $rest."...";

		$numLetter = strlen($SubTitulo);
		if($numLetter>100){
			$reduce=$numLetter - 84;
			$rest = substr($SubTitulo, 0, -($reduce));  // retorna "abcde"
		}
		$SubTitulo = $rest."...";



		$datass = explode ('-',$DataPost);
		$ano =$datass[0];
		$mes =$datass[1];
		$diass =$datass[2];
		$dias =explode (' ',$diass);
		$dia = $dias[0];
		
		$completeDate = (string)$dia."/".(string)$mes."/".(string)$ano;
		$completeDateFormat = (string)$ano."/".(string)$mes."/".(string)$dia;


		$HoraAtual = date('H:i:s');
		$HoraComparar = $dias[1];

		$SeparetedHour = explode (':',$HoraComparar);
		$onlyhour = $SeparetedHour[0];
		$onlyMinute = $SeparetedHour[1];
		$onlySecond = $SeparetedHour[2];
		$OnlyHourMoreTree = $onlyhour + 3;
		$HourMOreTree = $OnlyHourMoreTree.":".$onlyMinute.":".$onlySecond;

		$horaDataBase = strtotime($HourMOreTree);
		$horaatual = strtotime("$HoraAtual");

		$dateAtual = date('Y-m-d');

		$DiaDataBase = strtotime("$completeDateFormat");
		$DiaAtual = strtotime("$dateAtual");

		if ($cont==1) {
			echo "<div class='row rowFull'>";
		}

		 echo ("
			<div class='col-md-3 col-xs-12 '>
			<a target='_top' href='doc/materia_001.php'>
				<div class='square'>");
		 		if($DiaAtual > $DiaDataBase){

		 		}else if($DiaAtual == $DiaDataBase){

		 			if($horaatual < $horaDataBase){//FICARA COMO NEW NO SISTEMA POR UM PERIODO DE 3 HORAS
					    echo "<div width='100%' class='pullpush'><p>Novo!</p></div>";
					}


		 		}
					


				echo "<img class='square_img' alt='Sample Image' title='$Titulo' src='$image'>
					<div class='insquare '>
					<h4>$Titulo</h4>
					<h5 class='hgold'>$SubTitulo</h5>
					<p class='data_post'>$completeDate $dias[1]</p>
					</div>
					

				</div></a>
			</div>";

			if ($cont==4) {
			echo "</div>";
			
			}
			if ($cont==4) {
			$cont=0;
			
			}
				
	}

	

echo ("	
</div>
<br>
<footer>
	All rights reserved to WORLDNET TECNOLOGIES IN WEB SYSTEMS | From Teresina-PI, Brasil 2018

<div class='col-md-3'></div>
<br><br><br>	
</footer>
</div>
</body>
</html>");

?>



