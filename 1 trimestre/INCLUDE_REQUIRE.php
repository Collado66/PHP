<html>
     <header>
   	    </header>
	    <body>
	           <p align=center> INCLUDE E REQUIRE</p>
 			<?php
				#IOs dois tem quase a mesma função - um inclui o conteúdo do arquivo especificado (seja um script PHP ou um arquivo HTML normal) e o outro requer que o arquivo especificado seja incluído. Se esse arquivo por algum motivo não puder ser incluído, um erro aparecerá na página.


include('FORMULARIO.php');
include_once('FORMULARIO.php');

Include('cpf-invalido2.php');
include_once('cpf-invalido2.php');

Include('switch.php');
include_once('switch.php');

echo "modo require";
require('FORMULARIO.php');
require_once('FORMULARIO.php');

			?>

			


		    </body>
</html> 
