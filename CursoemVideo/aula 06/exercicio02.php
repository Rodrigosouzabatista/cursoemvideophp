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
	
	
		<?php
		/*Este exercicio pretende demonstrar o uso de operadores de incremento e decremento*/
		//Mostrar qual foi o ano anterior e o ano atual
		$atual = $_GET["aa"];#essa linha vai pegar o ano na URL
		echo "O ano atual é $atual";
		$atual = --$atual;
		echo "/<br>O ano Anterior foi $atual";
		?>
		
		</div>
</body>
</html>