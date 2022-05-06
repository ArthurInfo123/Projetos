<?php

$array = [1,5,10,15,25,11];

foreach($array as $ind => $valor)
{
      echo "<br><br>o valor {$ind} é {$valor}";


}

foreach($array as $valor)
{
    echo "<br><br> valor {$valor}";
}

for($i = 0; $i < count($array); $i++)
{
    echo "<br><br> Valores{$array[$i]}";
}

$ini = 0;
while ($ini < count($array))
{
    echo "<br><br> Val {$array[$ini]}";
    $ini++;
}
?>