<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> FUNÇÃO RECURSIVA </p>
			<?php
			//CHAMAMOS DE FUNÇÕES RECURSIVAS AQUELAS FUNÇÕES QUE CHAMAM ELAS MESMAS
			function teste ($valor)
			{
				if ($valor!=0)
				{
					echo "foi chamada a função teste passando valor $valor <br>";
					teste ($valor-1);
				}
			}
			teste (7);
			?>
		    </body>
</html> 
