<html>
     <header>
   	    </header>
   	    <meta charset="utf-8"/>
	    <body>		
		<title> <p align=center>Formulário Mysql </p></title>
		</head>

<body>


		<form method="POST" action="cadastro_formulario.php">

		<label>Nome:</label><input type="text" name="login" id="login"><br>
		<label>Email:</label><input type="text" name="email" id="email"><br>
		<label>Cidade:</label><input type="text" name="cidade" id="cidade"><br>
		<label>Estado:</label><input type="text" name="estado" id="estado"><br>
		<label>Comentarios:</label><input type="text" name="comentarios" id="comentarios"><br>
		<label>Senha:</label><input type="password" name="senha" id="senha"><br>


		<label for='formCursos[]'>Selecione o curso que deseja:</label><br>
		        <select multiple="multiple" name="formCursos[]">
				    <option value="EnsinoMedio">Ensino Médio</option>
				    <option value="eletrotecnica">Ensino Médio Integrado a Eletrotécnica</option>
				    <option value="Ds">Desenvolvimento de Sistemas</option>
				    <option value="EnsMedioIntLog">Ensino Médio Integrado a Logística</option>
				    <option value="TecEletrotecnica">Técnico em Eletrotécnica</option>
				    <option value="TecDs">Técnico em Desenvolvimento de Sistemas </option>
		        </select>
		<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
		</form>

</body>
</html> 
