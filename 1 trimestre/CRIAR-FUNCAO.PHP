<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> FUNÇÃO </p>
 			<?php
				//ESTE COMANDO OFERECE COMO CRIAR UMA FUNÇÃO
				function soma_valores ($valor1, $valor2, $valor3)
				{
				  $soma = $valor1 + $valor2 + $valor3;
				  echo " a soma dos valores $valor1, $valor2 e $valor3";
				  echo "é $soma";
				}

				$n1 = 10;
				$n2 = 20;
				$n3 = 50;
				soma_valores ($n1, $n2, $n3);
				          

			?>
		    </body>
</html> 
