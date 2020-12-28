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
		/*Variaveis referenciadas
		$a=3;           $a=3;
		$b=$a;			$b=&$a; referenciar
		$b +=5;			$b +=5;
		echo $a;		echo $a;
		echo $b;
		$a   $b			$a	 $b
		[3]  [8]		[8]<>[8]
		*/
		//Vamos praticar o uso de variáveis referenciadas
		$a=3;
		$b=&$a;
		$b+=5;
		echo"A Variável A vale $a";
		echo "</br> A variável B vale $b";
		?>
		
		</div>
</body>
</html>