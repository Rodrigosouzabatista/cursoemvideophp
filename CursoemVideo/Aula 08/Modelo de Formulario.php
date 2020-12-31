<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<title>Formulario</title>
	
</head>

<body>
	<form method="post" id="contato" action="">
	<fieldset id="usuario"><legend>Identificação do Usuário</legend>
		<p><label for="nome">nome:</label><input type="text" name="nome" id="nome" size= "20" maxlenght="30" placeholder="Nome Completo"/></p>
		<p><label for="senha">senha:</label><input type="password" name="senha" id="senha" size= "3" maxlength="8" placeholder="8 dígitos"/></p>
		<p><label for="email">email:</label><input type="email" name="email" id="email" size= "20" maxlength="30" placeholder="Email"/></p>
		<fieldset id= "sexo"><legend>sexo:</legend>
			<input type="radio" name="sexo" id="masc"/> <label for="masc">masculino</label><br/>
			<input type="radio" name="sexo" id="fem"/><label for="fem">feminino</label></fieldset>
		<p><label for="data">data de nascimento:</label><input type="date" name="data" id="data"/></p>
		
		como fazer formulario de estado
		<p><label for="estado">Estado:</label>
		<select name="estado" id="estado">
		<optgroup label="Região Sudeste">
			<option value="RJ">Rio de Janeiro</option>
			<option value="SP" selected>São Paulo</option>
			<option value="MG">Minas Gerais</option>
		</optgroup>
			<optgroup label="Região Sul">
			<option value="PR">Paraná</option>
			<option value="SC">Santa Catarina</option>
			<option value="RS">Rio Grande do Sul</option>
		</optgroup>
			</select></p>
			
			como fazer cidade 
			<br/><p><label for="cidade">Cidade:</label>
			<input type="text" name="cidade" id="cidade" maxlenght="40" size="20" placeholder="Sua Cidade" list="cidades"/></p>
			<datalist id="cidades">
			<option value="Rio de Janeiro"></option>
			<option value="Nova Iguaçu"></option>
			<option value="Niterói"></option>
			</datalist>
				</select>
		
		</fieldset>
	
	
	</form>
	
	
</body>
</html>
