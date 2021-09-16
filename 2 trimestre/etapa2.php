<html>
<head>
<title> PW2 </title>
</head>

	<body>
	           <p align=center><big><big><strong>  SEGUNDA ETAPA DO FORMULÁRIO </strong> </big></big></p>
	           <form method="POST" action="etapa3.php">

	           	<?php	
	           			$nome = $_POST["nome"];
						$email = $_POST["email"];
						$datanascimento = $_POST["datanascimento"];
						$sexo = $_POST["sexo"];
						$profissao = $_POST["profissao"];
			
						echo "o SEU NOME É: " . $_POST["nome"];
						echo "<br>O SEU E-MAIL É: " . $_POST["email"];
						echo "<br>A DATA DE NASCIMENTO É: " . $_POST["datanascimento"];
						echo "<br>O SEU SEXO É: " . $_POST["sexo"];
						echo "<br> A SUA PROFISSÃO É: " . $_POST["profissao"];


				?>

	           <input type="hidden" name="nome" value="<?php echo $nome; ?>">
	           <input type="hidden" name="email" value="<?php echo $email; ?>">
	           <input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>">
	           <input type="hidden" name="sexo" value="<?php echo $sexo; ?>">
	           <input type="hidden" name="profissao" value="<?php echo $profissao; ?>">
	           

	           <div align="center"><center><p>
	           TELEFONE:<input type="text" name="telefone" size="20"></p></center></div>

	           <div align="center"><center><p>
	           ENDEREÇO:<input type="text" name="endereco" size="20"></p></center></div>

	           <div align="center"><center><p>
	           CIDADE:<input type="text" name="cidade" size="20">&nbsp;&nbsp;
	           ESTADO:<input type="text" name="estado" size="2"></p></center></div>

	           <div align="center"><center><p>
	           CEP:<input type="text" name="cep" size="9"></p></center></div>


				



	  		   <div align="center"><center><p>
	           <input type="submit" value="PROSSEGUIR &gt;&gt;"></p></center></div>
	         
	       </form>


</body>
</html>
      
   









 
</body>
</html>