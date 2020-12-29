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
/* 
::::::::::::::::::::::::::
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
::     Exercicio 03     ::
::::::::::::::::::::::::::

Mostrar a situação de um aluno, de acordo com a sua média obtida.

*/
		$b1 = 6;
		$b2 = 9;
		$b3 = 8;
		$b4 = 6;
		$media = ($b1+$b2+$b3+$b4)/4;
		echo "A média dos 4 bimestres é $media";
		echo "<br/>Aluno ".(($media > 7) ?"Aprovado":"Reprovado");
	
	
		?>
	
	
	</div>
</body>
</html>