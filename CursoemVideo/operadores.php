<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>
<title>Documento sem título</title>
	<style>
		h2{
			color: #07572C;
			text-shadow: 1px 1px 1px black;
		}
	</style>
</head>

<body>
	<div>
	<?php
	$n1 = $_GET["a"];
	$n2 = $_GET["b"];
	echo "<h2>Valores recebidos: $n1 e $n2</h2>";
	$m = ($n1 + $n2)/2;
	
		echo "<h2>A soma vale ".($n1+$n2);
		echo "</br>A subtração vale ".($n1-$n2);
		echo "</br>A multiplicão vale ".($n1*$n2);
		echo "</br>A divisao vale ".($n1/$n2);
		echo "</br>A media vale ".($m);
		echo "</br>O modulo vale ".($n1%$n2);
	?>
		</div>
</body>
</html>