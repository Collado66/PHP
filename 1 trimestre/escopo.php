<?php
         $num = 5;
          
          function testa_escopo1 ( ) 
          {
		    global $num;               
 		    $num += 5;
            echo $num .  "<br>";
          }


			function testa_escopo2 ( ) 
          {
		    global $num;               
 		    $num += 5;
            echo $num .  "<br>";
          }

 echo $num . "<br>";
testa_escopo1 ( );
testa_escopo2 ( );

?>
