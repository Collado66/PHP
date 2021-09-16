<html>
     <header>


   	 </header>
		    <body>
	        <?php
    		//iniciando a conexão com o banco de dados 
			$cx = mysqli_connect("localhost:3306", "root", "");
			//$cx = mysqli_connect("192.168.0.8:3306", "Aluno2DS","SenhaBD2");
			 
			//selecionando o banco de dados 
			$db = mysqli_select_db($cx, "bd_php5");
			 
			//criando a query de consulta à tabela criada 
			$sql = mysqli_query($cx, "SELECT * FROM usuarios") or die( 
			  mysqli_error($cx) //caso haja um erro na consulta 
			);
			 
			//pecorrendo os registros da consulta. 
			while($aux = mysqli_fetch_assoc($sql)) { 
			  echo "VAMOS EXIBIR OS DADOS DA TABELA USUARIOS DO BANCO DE DADOS<br />"; 
			  echo "nome:".$aux["login"]."<br />";
			  echo "Senha:".$aux["senha"]."<br />";
			  echo "Email:".$aux["email"]."<br />"; 
			  echo "Cidade:".$aux["cidade"]."<br />";
			  echo "Estado:".$aux["estado"]."<br />";
			  echo ".............................<br />"; 
			}
			?>
	</body>
</html> 
