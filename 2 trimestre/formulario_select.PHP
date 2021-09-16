<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> FORMULÁRIO SELECT</p>
 			

			<form action="select.php" method="post">
			<B>Qual seu processador?</B><br>
			
			<select name=processador>
			<option value=I3>I3</option>
			<option value=I5>I5</option>
			<option value=I7>I7</option>
			</select><BR><BR>
					
					<B>Livros que deseja comprar?</B><br>
					Obs: segure "CTRL" para selecionar mais de um.<BR>
					<select name="livros[]" multiple>
					<option value="PHP">PHP</option>
					<option value="PHP Etec Jaraguá">PHP Etec Jaragua</option>
					<option value="Iniciando em PHP">Iniciando em PHP</option>
					<option value="PHP 5">PHP 5</option>
					<option value="MySQL">MySQL</option>
					</select><BR><BR>
							
							<input type=submit>
			</form>
		    </body>
</html> 
