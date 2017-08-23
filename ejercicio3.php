<!--realice un  algoritmo que calcule el area y el perimetro de un deltoide y lo muestre en pantalla.-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <?php
          $valor['l1']="6";
          $valor['l2']="5";
          $valor['l3']="2";
          $valor['l4']="4";

          $area=($valor['l1']*$valor['l2']/2);
          echo "$valor[l1] , $valor[l2] </br> ";
          echo "El Área del Deltoide es: $area </br>";

          $perimetro=2*($valor['l3']+$valor['l4']);
          echo "$valor[l3] , $valor[l4] </br> ";
          echo "El perimetro del Deltoide es: $perimetro";

     ?>

  </body>
</html>
