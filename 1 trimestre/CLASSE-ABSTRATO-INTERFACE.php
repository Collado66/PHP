<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> CLASSE - ABSTRATA E INTERFACES </p>
			<?php
			//UTILIZAMOS AS PALAVRAS PRIVATE E PROTECT PARA CRIAR MÉTODOS E VARIÁVEIS PRIVADAS E PROTEGIDAS EM UMA CLASSE.

			abstract class ClasseAbstrata{
				abstract public function teste();
				}

				class ClasseImplementacao extends ClasseAbstrata{
					public function teste(){
						echo "método teste() chamado! <br>";
						}
				}
				$obj = new ClasseImplementacao;
				$obj->teste();			
			?>
		    </body>
</html> 
