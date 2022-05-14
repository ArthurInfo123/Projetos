<?php

$contPrimos = [2];
$divisores = [];
for($i = 3; $i < 15; $i++)
{
    for($divisor = 2; $divisor < 15; $divisor++)
    {            
       
        $pares = $i % 2;             
       
        if($pares != 0)
        {         
           if($i % $divisor == 0)
           {
               $divisores[$i] = $divisor;
           }           
            
            
        } ##Nao finalizado

       

    }


}

var_dump($contPrimos);
var_dump($divisores);


?>