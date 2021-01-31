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
	$v= isset($_GET["val"])?$_GET["val"]:1;
	echo "<h1>Calculando o fatorial de $v </h1>";
	do{
		echo "$c ";
		$c+=2;
		
	}while($c <=20);
        
    ?>
</div>
</body>
</html>
 