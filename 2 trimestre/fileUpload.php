<html>
     <header>
   	   

   	 </header>
	 
	    <body>
	
<?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
?>
	


		</body>
</html> 
