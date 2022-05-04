<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form>
     <input type="text" name="a">
     <input type="text" name="b">
     <input type="text" name="c">
     <input type="submit">  </input>
  </form>
     

     <?php   
          $a  =  $_REQUEST['a'];
          $b = $_REQUEST['b'];
          $c = $_REQUEST['c'];          
          $delta = ($b * $b) -4 * $a * $c;
          echo "{$delta}";
          intval($delta);
          if($delta < 0)
          {
            echo "Numero Negativo, calculo concluido";

          }
          else
          {
             $x1 = (-$b + sqrt($delta)) / 2 * $a;
             $x2 = (-$b - sqrt($delta)) / 2 * $a;
             echo " x1 igual a {$x1} x2 igual a {$x2}";

          }
      
     ?>



</body>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form>
     <input type="text" name="a">
     <input type="text" name="b">
     <input type="text" name="c">
     <input type="submit">  </input>
  </form>
     

     <?php   
          $a  =  $_REQUEST['a'];
          $b = $_REQUEST['b'];
          $c = $_REQUEST['c'];          
          $delta = ($b * $b) -4 * $a * $c;
          echo "{$delta}";
          intval($delta);
          if($delta < 0)
          {
            echo "Numero Negativo, calculo concluido";

          }
          else
          {
             $x1 = (-$b + sqrt($delta)) / 2 * $a;
             $x2 = (-$b - sqrt($delta)) / 2 * $a;
             echo " x1 igual a {$x1} x2 igual a {$x2}";

          }
      
     ?>



</body>
>>>>>>> 494d55d015c0ddc0329778951195eff9a2c18f6f
</html>