<html>
     <header>
   	   

   	 </header>
	 
	    <body>
	           <p align=center> RECEBE DADOS FORMULÁRIO</p>
 			<?php

 						$nome = $_POST["nome"];
						$email = $_POST["email"];
						$datanascimento = $_POST["datanascimento"];
						$sexo = $_POST["sexo"];
						$profissao = $_POST["profissao"];
						$telefone = $_POST["telefone"];
						$endereco = $_POST["endereco"];
						$cidade = $_POST["cidade"];
						$estado = $_POST["estado"];
						$cep = $_POST["cep"];



 				echo "o SEU NOME É: " . $_POST["nome"];
				echo "<br>O SEU E-MAIL É: " . $_POST["email"];
				echo "<br>A DATA DE NASCIMENTO É: " . $_POST["datanascimento"];
				echo "<br>O SEU SEXO É: " . $_POST["sexo"];
				echo "<br> A SUA PROFISSÃO É: " . $_POST["profissao"];
				echo "<br>O SEU TELEFONE É: " . $_POST["telefone"];
				echo "<br>O SEU ENDERECO É: " . $_POST["endereco"];
				echo "<br>A SUA CIDADE É: " . $_POST["cidade"];
				echo "<br>O SEU ESTADO É: " . $_POST["estado"];
				echo "<br>O SEU CEP É: " . $_POST["cep"];
				echo "<br>O LOGIN É: " . $_POST["username"];
				echo "<br>OBRIGADO POR CADASTRAR NO FORMULÁRIO:"
			?>
				
	
		</body>
</html> 
