<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> BREAK </p>
 			<?php
				//ESTE COMANDO OFERECE FORÇAR A SAÍDA DE UM LAÇO OU DE UM COMANDO CONDICIONAL
				$k = 0;
				$i = 0;
				while ($k < 10)
				{
					$i++;
					$k++;
					while ($i < 20)
					{
						if($i == 10)
						{
							echo "encerramento o primeiro while..<br>";
							break;
							echo "essa linha não vai ser impressa!";
						}

						elseif ($i==15)
						{
							echo "encerramento os dois whiles..";
							break 2;
						}
						$i++;
					}
				}
               

			?>
		    </body>
</html> 
