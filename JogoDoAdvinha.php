<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JOGO DA VELHA</title>
</head>
<body>
      <div id="placar">

      </div>
      <p> DIGITE UM NUMERO <label><input type="text" id="numero"></label></p>
      <button type="submit" onclick="Advinha()" > ENVIAR</button>
      <script>
             function Advinha()
             {
                 var placar = document.getElementById('placar')
                 var numero = document.getElementById('numero').value
                 var computador = Math.floor(Math.random() *10)                 
                 alert(`Computador sorteou ${computador}`)
                 if(numero == computador)
                 {
                     alert('usuario ganhou')                    
                     
                 }
                else
                {
                   alert('computador ganhou')
                                                                           
                
                }
            }

             
              

      </script>
                
               

    



</body>
</html>