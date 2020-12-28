<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css">
<title>Aula 07</title>
	
</head>

<body>
	<div>
	<?php
		/*                                         ::::::::::::::::::::::::::
												   ::Operadores Relacionais::
												   ::::::::::::::::::::::::::
												   
												   Maior $a > $b
												   Menor $a < $b
												   Maior ou igual $a >= $b
												   Menor ou igual $a <= $b
												   Diferente $a <> $b ou $a != $b
												   Igual $a == $b
												   Indêntico $a === Sb igual e do mesmo tipo
----------------------------------------------------------------------------------------------------------------------------------------
												   ::::::::::::::::::::::::::
												   ::  Operadores Unários  ::
												   ::::::::::::::::::::::::::

												Expressão ? verdadeiro : falso
												 $a > $b  ?    $a      :  $b
										$maior = $a > $b  ?    $a      :  $b
----------------------------------------------------------------------------------------------------------------------------------------
												   ::::::::::::::::::::::::::
												   ::     Exercicio 01     ::
												   ::::::::::::::::::::::::::
                               
							   Permitir que o usuário escolha entre somar e multiplicar dois números.
  
*/
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$tipo = $_GET["op"];
		echo "Os valores passados foram $n1 e $n2 <br/> ";
		$r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2 ;
		echo "O resultado sera $r ";
		
		?>
	
	
	</div>
</body>
</html>