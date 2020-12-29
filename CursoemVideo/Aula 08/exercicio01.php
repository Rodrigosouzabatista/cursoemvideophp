<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../aula 07/_css/estilo.css">
<title>Aula 07</title>
	
</head>

<body>
	<div>
	<?php
/* 
Como obter dados de formulários?

*/
	    $datanasc =$_GET["nasc"];
	    $idade = (2020 - $datanasc);
		echo "Voce tem $idade anos de idade ";
		echo "<br/>Voto ".(($idade > 17 && $idade < 65)? "Obrigatório": "Não Obrigatorio");
	
	
		?>
	
	
	</div>
</body>
</html>
