<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="phps.php"></script>
    <title>Document</title>
    <style>
        img{
            float: left;
            width: 50%;
            width: 200pt;
            
        }
        body{
            background-color: green;
        }
    </style>
</head>
<body>
    <form>
     <input type="text" name="peso">
     <input type="text" name="altura">
     <input type="submit">   
     <div id="res">

     </div>  
     </form>
     <?php
         echo "<script> var img = document.createElement('img') </script>";
         echo "<script> document.img.style.text-aling = center </script>" ;
         $peso = $_GET['peso'];
         $altura = $_GET['altura'];
         $imc = $peso / (($altura*$altura));

         
                 
         if($imc < 17)
         {
             echo "Abaixo do peso";
             echo "<script> 
             img.src = 'Abaixo.png'
             var res = document.getElementById('res')
             res.appendChild(img) </script>";
             echo "O imc é igual a $imc";  

         }
         elseif($imc < 24.9)
         {
             echo "Peso ideal";
             echo "<script> 
             img.src = 'Ideal.png'
             var res = document.getElementById('res')
             res.appendChild(img) </script>";
             echo "O imc é igual a $imc";
           
             
         }     
         elseif($imc < 29.9)
         {
             echo "Acima do peso";
             echo "<script> 
             img.src = 'acima.png'
             var res = document.getElementById('res')
             res.appendChild(img)
             </script>";
             echo "O imc é igual a $imc";
            
         }

         elseif($imc < 34.9)
         {
             echo "Obesidade 1";
             echo "<script> 
             img.src = 'acima.png'
             var res = document.getElementById('res')
             res.appendChild(img)
             </script>";
             echo "O imc é igual a $imc";
                          
         }
         elseif($imc < 39.9)
         {
             echo "Obesidade 2";
             echo "<script> 
             img.src = 'acima.png'
             var res = document.getElementById('res')
             res.appendChild(img)
             </script>";
             echo "O imc é igual a $imc";
             
         }
         elseif($imc > 40)
         {
             echo "Obesidade morbida";
             echo "<script> 
             img.src = 'obesas.png'
             var res = document.getElementById('res')
             res.appendChild(img)
             </script>";
             echo "O imc é igual a $imc";
         }   
          
     ?>
     
</body>
</html>