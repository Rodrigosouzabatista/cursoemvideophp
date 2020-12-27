<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>
<title>Documento sem título</title>
	<style>
		h2{
			font:15pt arial;
			color: #07572C;
			text-shadow: 1px 1px 1px black;
		}
	</style>
</head>

<body>
	<div>
	<?php
		$v1 = $_GET["x"];
		$v2 = $_GET["y"];
		echo "<h2>Valores recebidos: $v1 e $v2</h2>";
		echo "O valor absoluto de $v2 é ".abs($v2);
		echo "</br> O valor de $v1<sup>$v2</sup> é ".pow($v1,$v2);
		echo "</br> A raiz de $v1 é ".sqrt($v1);
		echo "</br> O valor de $v2 arendondado é ". round($v2);
		echo "</br> O valor inteiro de $v2 é ".intval($v2);
		echo "<br>O Valor de $v1 em moeda é R$ ".number_format($v1,2,",",".");
		
	?>
		</div>
</body>
</html>