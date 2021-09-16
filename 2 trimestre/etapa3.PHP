<html>
<head>
<title> PW2 </title>
</head>

	<body>
	           <p align=center><big><big><strong>  TERCEIRA ETAPA DO FORMULÁRIO </strong> </big></big></p>
	            <form method="POST" action="etapa4.php">

	           <?php
				    	$nome = $_POST["nome"];
						$email = $_POST["email"];
						$datanascimento = $_POST["datanascimento"];
						$sexo = $_POST["sexo"];
						$profissao = $_POST["profissao"];
						$telefone = $_POST["telefone"];
						$endereco = $_POST["endereco"];
						$cidade = $_POST["cidade"];
						//$telefone = $_POST["telefone"];
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
				?>

	           <input type="hidden" name="nome" value="<?php echo $nome; ?>">
	           <input type="hidden" name="email" value="<?php echo $email; ?>">
	           <input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>">
	           <input type="hidden" name="sexo" value="<?php echo $sexo; ?>">
	           <input type="hidden" name="profissao" value="<?php echo $profissao; ?>">
	           <input type="hidden" name="telefone" value="<?php echo $telefone; ?>">
	           <input type="hidden" name="endereco" value="<?php echo $endereco; ?>">
	           <input type="hidden" name="cidade" value="<?php echo $cidade; ?>">
	           <input type="hidden" name="estado" value="<?php echo $estado; ?>">
	           <input type="hidden" name="cep" value="<?php echo $cep; ?>">

	           <div align="center"><center><p>
	           USUÁRIO:<input type="text" name="username" size="10"></p></center></div>

	           <div align="center"><center><p>
	           SENHA:<input type="password" name="senha" size="10"></p></center></div>

	           <div align="center"><center><p>
	           CONFIRME SUA SENHA:<input type="password" name="confirma_senha" size="10"></p></center></div>

	  		   <div align="center"><center><p>
	           <input type="submit" value="FINALIZAR CADASTRO"></p></center></div>
	       </form>
</body>
</html>
      
   









 
</body>
</html>