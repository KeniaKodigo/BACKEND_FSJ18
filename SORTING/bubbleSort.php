<?php

/**
 * BubbleSort: Es un algoritmo de ordenamiento que revisa elemento por elemento, si el elemento anterior es mayor al seguiente hacemos el intercambio y se repite el proceso hasta que el arreglo se ordene
 */

function bubbleSort($array){
    //[7,5,1,3,8]
    //[5,7,1,3,8]
    //[1,5,7,3,8]
    //[1,5,3,7,8]
    for($i = 0; $i < count($array); $i++){
        for($j = 0; $j < count($array) - 1; $j++){
            //[0] > [1]
            //[1] > [2]
            //[2] > [3]
            //[3] > [4]
            if($array[$j] > $array[$j + 1]){
                //realizamos el intercambio del valor
                /**
                 * temporal = 5, 1, 3
                 * array[1] = 7
                 * array[0] = 5
                 * array[2] = 7
                 * array[1] = 1
                 * array[3] = 7
                 * array[2] = 3
                 */
                $temporal = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temporal;
            }
        }
    }
    print_r($array);
}


?>