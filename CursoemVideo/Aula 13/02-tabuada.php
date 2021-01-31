<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
		<?php
		$c=isset($_GET["num"])?$_GET["num"]:1;
		for($i=0;$i<=10;$i++){
			$r = $c*$i;
			echo "$c x $i = $r<br/>";
		}
	
		?>
	<a href="exercicio2.php"><input type="button" value="Voltar"/></a>
		
		
	
	
    
</div>
</body>
</html>
 