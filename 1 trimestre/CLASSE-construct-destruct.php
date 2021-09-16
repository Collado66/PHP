<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> CLASSE - construct-destruct </p>
			<?php
			//a função construct e destruct é o metodo que será chamado após a última referencia feita a um objeto no programa.
			//um destrutor pode ser útil para fins de depuração, fechamento de conexão com banco de dados.

			Class MinhaClasse 
			{
				function __construct(){
				$this->nome = "minha Classe";
				print "Esse é o construtor da classe" .$this->nome."<br>";
							          }

				function __destruct(){
					print "esse é o destrutor da classe" .$this->nome.",br>";
				                     }	
			}  

			$obj = new MinhaClasse();

			?>
		    </body>
</html> 
