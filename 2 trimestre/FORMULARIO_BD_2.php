<!DOCTYPE html>
<?php 
 //$oCon= mysqli_connect('192.168.0.8','Aluno3DS','SenhaBD3','ACERVO');
  
  $cx = mysqli_connect("localhost:3306", "root", "");
            //$cx = mysqli_connect("192.168.0.8:3306", "Aluno2DS","SenhaBD2");
             
            //selecionando o banco de dados 
            $db = mysqli_select_db($cx, "bd_php5");
             
            //criando a query de consulta à tabela criada 
            $sql = mysqli_query($cx, "SELECT * FROM usuarios") or die( 
              mysqli_error($cx) //caso haja um erro na consulta 
            );
             
 
 
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>