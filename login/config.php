<?php
 $link = mysqli_connect("localhost:3306","root","","collado");
					if (!$link) {
					die('Could not connect: ' . mysql_error());
					mysql_set_charset($link, 'utf8');
				    }
				    echo 'CONECTADO COM SUCESSO';


?>