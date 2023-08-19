<?php

function insertionSort($array){
    $comparaciones = 0;
    for($i = 0; $i < count($array); $i++){
        //[56,89,45,34,90]
        /**
         * [45,56,89,34,90]
         * $i = 4
         * [34,45,56,89,90]
         */
        $punto_interseccion = $i - 1; //-1, 0, 1, 2, 3
        $posicion = $array[$i]; //56, 89, 45, 34, 90

        //condicionamos si se pueden evaluar posiciones anteriores
        while($punto_interseccion >= 0 && $posicion < $array[$punto_interseccion]){
            //intercambiamos las posiciones

            /**
             * array[2] = 89
             * array[1] = 45
             * [56,89,45,34,90]
             * [56,45,89,34,90]
             * array[1] = 56
             * array[0] = 45
             * [45,56,89,34,90]
             * array[3] = 89
             * array[2] = 34
             * [45,56,34,89,90]
             * array[2] = 56
             * array[1] = 34
             * [45,34,56,89,90]
             * array[1] = 45
             * array[0] = 34
             * [34,45,56,89,90]
             */
            
            $array[$punto_interseccion + 1] = $array[$punto_interseccion];
            $array[$punto_interseccion] = $posicion;

            //restar el punto de interseccion
            $punto_interseccion = $punto_interseccion - 1; //0, -1, 1, 0, -1
        }
        $comparaciones++;
    }
    echo "Comparaciones: " . $comparaciones . "<br>";
    print_r($array);
}
insertionSort([100,789,1105,23,67,876]);

?>