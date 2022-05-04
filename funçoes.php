<style>
    table tr, table th, table td
    {
        background-color: blue;
        border: 1px solid black;
    }
      



</style>


<?php

$array = [1,8,35,25,50,55];
$paises = ['Brasil' ,"Argentina"];



function ContParesEImpares($arrays)
{
   $contPares = 0;
   $contImpares = 0;
   $pares = [];
   $impares = [];
   for($i = 0; $i < count($arrays); $i++)
   {
       $resto = $arrays[$i] % 2;
       if($resto == 0)
       {
           $pares[$i] = $arrays[$i];
           $contPares += 1;
       }
       else
       {
           $impares[$i] = $arrays[$i];
           $contImpares += 1;
       }


   }    
    echo "Numero de pares {$contPares}";
    echo "<br>";
    echo "Numero de impares {$contImpares}";
    echo "<br>";
    echo "Numeros pares: "; 
    print_r($pares);
    echo "<br>";
    echo "Numeros Impares";
    echo "<br>";
    print_r($impares);
    echo "<br>";


}

ContParesEImpares($array);

function maiorEmenor($arrayss)
{
      $maior = 0;
      $menor = $arrayss;
      for($i = 0; $i < count($arrayss); $i++)
      {
         if($arrayss[$i] > $maior)
         {
             $maior = $arrayss[$i];
         }
         if($arrayss[$i] < $menor)
         {
             $menor = $arrayss[$i];
         }


      }

      echo "O maior numero é {$maior}";
      echo "<br>";
      echo "O menor numero é {$menor}"; 

}

maiorEmenor($array);

function Somatorio($S)
{
     $somatorio = 0;
     for($i = 0; $i < count($S); $i++)
     {
          $somatorio = $somatorio + $S[$i];


     }

     echo "<br>A soma dos dados é igual a {$somatorio}";
 
}

Somatorio($array);

function ListagemDoarray($arrayss)
{     
     foreach ($arrayss as $valor)
     {
        echo "<table>";
        echo "<tr>"; 
        echo "<th>";          
        echo "ARRAYS";
        echo "{$valor}";
        echo "</th>";        
        echo "</tr>";
        echo "</table>" ;   
     }
            
     


}

ListagemDoarray($array);

?>