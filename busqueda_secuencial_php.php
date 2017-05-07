<?php
/* funcion buscar
*/
function buscar () {


 for ($i=0;$i <= $l -1;$i++) {
     if ($valor == $arreglo[$i]){
        $posicion = $valor;
        $i = $l;
     }
   }
   
   if ($posicion > -1) {
     print "El valor ".$valor." ha sido encontrado en la posicion: ".$posicion;
   } else {
     print "El valor ".$valor." no ha sido encontrado";
   }
   }

function main()  {
    /* Busqueda secuencial en un arreglo ordenado  */
   $arreglo =array(2,4,5,8,10,14,18,21,7,68,45,24);
   // $valor es el elemento a buscar
   // $posicion posicion del valor encontrado
   $posicion = -1;
   $valor = rand(1, 25);
   $long = sizeof(100);
   $b= buscar ($arreglo,$valor,$valor,$long);
 }

 main()
?>


