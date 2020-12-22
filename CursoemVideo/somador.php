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
	$n1 = 3;
	$n2 = 2;
	$s = $n1 + $n2;
	$sub = $n1 - $n2;
	$mult = $n1 * $n2;
	$div = $n1 / $n2;
		
	echo "<h2>A soma entre $n1 e $n2 é ígual a $s<br>";
		echo "A subtração entre $n1 e $n2 é ígual a $sub<br>";
		echo "A multiplicão entre $n1 e $n2 é ígual a $mult<br>";
		echo "A divisao entre $n1 e $n2 é ígual a $div</h2><br>"
	?>
		</div>
</body>
</html>