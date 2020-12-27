<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css">
<title>Documento sem título</title>
	<style>
		p{
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
			font-size: 15pt;
			color: #1F0576;
			text-shadow: 1px 1px 1px black;
		}
		h2{
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
			font-size: 20pt;
			color: #106809;
			text-shadow: 1px 1px 1px black;
		}
		
	</style>
</head>

<body>
	<div>
	
<p>Como facilitar as atribuições feita com PHP</p>
	<h2>Aplicar 10% de desconto ao preço de um produto</h2>
	
	
		<?php
		$preco = $_GET["p"];
		echo "O preço do produto é de R$".number_format($preco,2,",",".");
		$preco -= $preco * 10/100;
		echo "</br>O preço do produto com desconto de 10% é de R$".number_format($preco,2,",",".");
		?>
		
		</div>
</body>
</html>