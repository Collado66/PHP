<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> INCLUDE </p>
 			<?php
				//ESTE COMANDO OFERECE FORÇAR A SAÍDA DE UM LAÇO OU DE UM COMANDO CONDICIONAL
				$meses = $ = array ("janeiro","fevereiro", "março", "abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro");
				$dia = date ("d", time());
				$mes = date ("m", time());
				$ano = date ("y", time());
				echo $dia . "de" . $meses [$mes-1] . "de" . $ano;           

			?>
		    </body>
</html> 
