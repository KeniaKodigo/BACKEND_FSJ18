<?php

function countSwaps($a) {
    // Write your code here
    $contador = 0;
    for($i = 0; $i < count($a); $i++){
        for($j = 0; $j < count($a) - 1; $j++){
            if($a[$j] > $a[$j + 1]){
                $contador++;
                $temporal = $a[$j + 1];
                $a[$j + 1] = $a[$j];
                $a[$j] = $temporal;
            }
        }
    }
    //obteniendo el total de comparaciones
    echo "Array is sorted in $contador swaps.\n";
    //obteniendo el primer elemento del arreglo
    echo "First Element: " . $a[0] . "\n";
    //el ultimo elemento del arreglo
    echo "Last Element: " . $a[count($a) - 1];
    //print_r($a);

}

?>