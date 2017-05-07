 <?php
 /* Ordenamiento por burbuja de los elementos de un arreglo  */
    function burbuja()
    {
        for($i=1; $i<$long; $i++)
        {
                for($j=0; $j<$long-$i; $j++)
                {
                        if($arreglo[$j] == $arreglo[$j+1])
                        {
                            $aux = $arreglo[$j+1]; 
                            $arreglo[$j+1] = $arreglo[$j]; 
                            $arreglo[$j] = $aux;
                        }
                }
        }
      return $arreglo;
    }

    function main()
    {
        //definir un arreglo desordenado
        $arregloA = array(5,4,3,2,1);
        //ordenar y guardar el areglo ordenado
        $arregloB = burbuja ($arregloA,sizeof($arregloA));
        //Recorrer el arreglo ordenado para mostrarlo por pantalla
        for($i=0; $i<sizeof(); $i++)
            echo $arregloB[0]."\n";
    }
    main();
?>
