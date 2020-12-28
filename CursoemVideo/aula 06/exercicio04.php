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
		/*Variáveis de variáveis.
		$site="cursoemvideo";           
		$$site="cursoPHP"			
		$$b +=5; variaveis de variaveis ou variaveis de variantes	
		echo "$site";
		echo "</br>$cursoemvideo";
		
		
		$site   		$$cursoemvideo
		[cursoemvideo]  [cursoPHP]
		*/
		//Vamos praticar o uso de variáveis de variáveis.
		$site="cursoemvideo";
		$$site="CursoPHP";
		echo"A Variável site recebe $site";
		echo "</br> A Variável Cursoemvideo recebeu  $cursoemvideo";
		?>
		
		</div>
</body>
</html>