<html>
     <header>
    	

    </header>

		    <body>
		           <p align=center> IF E ELSE</p>
		    
		 			<?php
						$prova1 = 7;
						$prova2 = 5;
						$nota = ($prova1 + $prova2) / 2;

						if ($nota<3)
							$desempenho = "PÉSSIMO";

						elseif ($nota<5) {
							$desempenho = "RUIM";
							}

						elseif ($nota<7) {
							$desempenho = "MÉDIO";
							}

						elseif ($nota<9) {
							$desempenho = "BOM";
							}
						elseif ($nota=10) {
							$desempenho = "ÓTIMO";
								# code...
							}	

							echo "o seu desempenho foi $desempenho";



					?>





		    </body>
</html>                            