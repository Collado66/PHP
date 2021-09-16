<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> FOREACH </p>
 			<?php
				//ESTE COMANDO OFERECE UMA MANEIRA MAIS FÁCIL DE NAVEGAR ENTRE OS ELEMENTOS DE UMA ARRAY
				$vetor = array (1, 2, 3, 4);
				foreach ($vetor as $v) {
					print "o valor atual do vetor é $v. <br>";
					}

					$a = array ("um" => 1, "dois" => 2,"tres" => 3);
					foreach ($a as $chave => $valor){
						print "\$a[$chave] => $valor. <br>";
						}
			?>
		    </body>
</html> 
