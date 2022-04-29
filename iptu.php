<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPTU</title>
</head>
<body>
    <input type="text" id="Area construida">
    <input type="text"  id="Area da regiao">
    <input type="text" id="Aliquota">
    <input type="submit" value="Calcular" >

<?php
if(isset($_GET['Area construida']))
{
   $Construida = $_GET['Area construida'];
   if(isset($_GET['Area da regiao'])){
       $regiao = $_GET['Area da regiao'];
   }
   if(isset($_GET['Aliquota'])){
       $aliquota = $_GET['Aliquota'];
   }
   echo "{$construida} {$aliquota} {$regiao}"; 
     
}


?>

<script>
    
    
        alert('ola, mundo')
    
      
</script>
</body>
</html>

