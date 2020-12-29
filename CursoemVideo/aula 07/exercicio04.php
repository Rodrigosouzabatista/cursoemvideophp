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
::::::::::::::::::::::
::Operadores Logicos::
::::::::::::::::::::::

-------------      
|p  q  p(E)q|&&
|V  V    V  |
|V  F    F  |
|F  V    F  |
|F  F    F  |
-------------
-------------
|p  q p(ou)q|||
|V  V    V  |
|V  F    V  |
|F  V    V  |
|F  F    F  |
-------------
---------------
|p  q  p(XOU)q|xor , conhecido como 
|V  V     F   |      ou exclusivo.
|V  F     V  |
|F  V     V   |
|F  F     F   |
---------------
-------------
|p nao p| !
|V   F  |
|F   V  |
-------
::::::::::::::::::::::::::
::     Exercicio 04     ::
::::::::::::::::::::::::::
Mostrar se um eleitor é obrigado a votar ou não.
sendo que com 17 anos o voto é opcional e acima de 65 anos também.

ela vai ficar nervosa por que eu nao fui falar com a beatriz e vai começar a brigar comigo.9mais na verdade ela nao consegue dar atenção para a Beatriz

*/
	    $datanasc =$_GET["nasc"];
	    $idade = (2020 - $datanasc);
		echo "Voce tem $idade anos de idade ";
		echo "<br/>Voto ".(($idade > 17 && $idade < 65)? "Obrigatório": "Não Obrigatorio");
	
	
		?>
	
	
	</div>
</body>
</html>