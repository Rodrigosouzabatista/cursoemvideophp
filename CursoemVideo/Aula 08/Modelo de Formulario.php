<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<title>Formulario</title>
	
</head>

<body>
	<form>
	<fieldset id="usuario"><legend>Identificação do Usuário</legend>
		<p><label for="nome">nome:</label><input type="text" name="nome" id="nome" size= "20" maxlenght="30" placeholder="Nome Completo"/></p>
		<p><label for="senha">senha:</label><input type="password" name="senha" id="senha" size= "3" maxlength="8" placeholder="8 dígitos"/></p>
		<p><label for="email">email:</label><input type="email" name="email" id="email" size= "20" maxlength="30" placeholder="Email"/></p>
		<fieldset id= "sexo"><legend>sexo:</legend>
			<input type="radio" name="sexo" id="masc"/> <label for="masc">masculino</label><br/>
			<input type="radio" name="sexo" id="fem"/><label for="fem">feminino</label></fieldset>
		<p>data de nascimento:</p>
		</fieldset>
	
	
	</form>
	
	
</body>
</html>
