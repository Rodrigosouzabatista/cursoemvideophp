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
	$n=isset($_GET["numero"])?$_GET["numero"]:0;
	$multiplos= "";
	echo "<h2>Analisando o numero $n...</h2><br/>";
	
	
	echo "Valores de Multiplos ";
        for ($c = 1; $c <= $n; $c++){
            $test = $n % $c;
            if ($test == 0){
                $multiplos++;
                echo "$c ";
            }
		}
        

        echo "<br/>Total de múltiplos: $multiplos<br/>";

        if ($multiplos > 2){
            $result = "Não é primo!";
        }
        else {
            $result = "É primo!";
        }

        echo "Resultado: $result";

   
        
    ?>
	<br/><a href="exercicio3.html"><input type="button" value="VOLTAR"/></a>
</div>
</body>
</html>
 