<html>
     <header>
    	

    </header>

		    <body>
		           <p align=center> Variáveis criadas durante a execução;</p>
		    
		 			<?php
						$texto = "São Paulo";
						//cria variavel texto que recebe o valor São Paulo

						$futuro_identificador = "cidade";
						// a variavel futuro_identificador recebe o valor Cidade

						$$futuro_identificador = $texto;
                        // a variavel futuro_identificador recebeu o valor Cidade 
                        // $$ faz o valor "cidade" tornar se variavel 
                        // $cidade recebe a variavel $texto

						echo "<h2 align=center>";
						echo "minha cidade é $cidade";
						echo "</h2>";

					?>



		    </body>
</html>                            