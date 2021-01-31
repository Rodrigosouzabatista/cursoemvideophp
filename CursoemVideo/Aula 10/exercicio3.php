<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
	$ini=$_GET["inicial"];
	$fin=$_GET["final"];
	$increm=$_GET["incremento"];
	if ($ini<=$fin){
		while
	($ini<=$fin){
		echo "$ini,  ";
		$ini = $ini + $increm;
		}
		
	}elseif($ini >= $fin){
		
		while
			($ini >= $fin){
			echo "$ini,  ";
			$ini = $ini - $increm;
		}
	}
	exit
	
	?>
	<a href="exercicio3.html"><input type="button" value="Voltar"> </a>
</body>
</html>