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
::     Exercicio 02     ::
::::::::::::::::::::::::::

Igual Indêntico.

*/
		$a = 3;
		$b = "3";
		$iguais = ($a==$b)?'Sim':'Não';
		$identicas =($a===$b)?'Sim':'Não';
		echo "As variáveis A e B São iguais: $iguais";
		echo "<br/>As variáveis A e B São idênticas: $identicas";
	
	
		?>
	
	
	</div>
</body>
</html>