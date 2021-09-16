<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> CLASSE - ABSTRATA E INTERFACES </p>
			<?php
			//UTILIZAMOS AS PALAVRAS PRIVATE E PROTECT PARA CRIAR MÉTODOS E VARIÁVEIS PRIVADAS E PROTEGIDAS EM UMA CLASSE.
			Class Classe1{
			private function MetodoPrivado(){
				echo "classe1::MetodoPrivado() chamado. <br>";
			}		

			protected function MetodoProtegido(){
				echo "classe1::MetodoProtegido() chamado. <br>";
				$this->MetodoPrivado();
				}
			}
			
			class Classe2 extends Classe1{
				public function MetodoPublico(){
					echo "Classe2::MetodoPublico() chamado. <br>";
					$this->MetodoProtegido();
				}

			}
			$obj = new Classe2;
			$obj->MetodoPublico();

			?>
		    </body>
</html> 
