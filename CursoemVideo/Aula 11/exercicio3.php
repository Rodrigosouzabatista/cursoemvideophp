<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
	$t= isset($_GET["tabuada"])?$_GET["tabuada"]:1;
	echo "<h1>Calculando a tabuada de $t </h1>";
	$c = 0;
	$result= 0;
	do{
		$result = $t * $c;
		echo "$t x $c = $result <br/>";
		$c++;
	}while($c<=10);
	
  ?>
	<p><a href="exercicio3.html">Voltar</a></p>
</div>
</body>
</html>
 