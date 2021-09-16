<html>
<head>
<title> PW2 </title>
</head>

	<body>
	           <p align=center><big><big><strong>  Formulario Mysql </strong> </big></big></p>
	           
	           	<?php	
	        //iniciando a conexão com o banco de dados 
			
			//$cx = mysqli_connect("localhost:3306", "root", "");
			$cx = mysqli_connect("192.168.0.8:3306", "Aluno2DS","SenhaBD2");
	 	
	 	//selecionando o banco de dados 
		$db = mysqli_select_db($cx, "bd_php5");
				$login = $_POST["login"];
				$email = $_POST["email"];
				$cidade = $_POST["cidade"];
				$estado = $_POST["estado"];
				$comentarios = $_POST["comentarios"];
				$senha = $_POST["senha"];
				$formCursos = $_POST ["formCursos"]
		
		$db= "INSERT INTO usuarios VALUES";
			$db .="('$login','$email','$cidade','$estado','$comentarios','$senha','$formCursos')";
				if ($cx->query($db)=== TRUE){
					echo "Usuário incluído com sucesso!";}
						else {
							echo "Erro:".$db. "<br>". $cx->error;
							}
			//exibindo informações das vaviáveis método post
				$cx->close();
					echo "o SEU NOME É: " . $_POST["login"];
					echo "<br>O SEU E-MAIL É: " . $_POST["email"];
					echo "<br>A SUA CIDADE É: " . $_POST["cidade"];
					echo "<br>SEU ESTADO É: " . $_POST["estado"];
					echo "<br> SEU COMENTÁRIO FOI: " . $_POST["comentarios"];
					echo "<br> O CURSO ESCOLHIDO FOI: " . $_POST["formCursos"];
				?>
 
</body>
</html>