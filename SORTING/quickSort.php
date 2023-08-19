<?php

function quickSort($array){
    //validando que el arreglo tenga mas de una posicion
    if(count($array) > 1){
        $pivote = $array[0]; //[54]
        $derecha = [];
        $izquierda = [];

        for($i = 1; $i < count($array); $i++){
            if($pivote > $array[$i]){
                //agregamos el elemento al arreglo izquierda
                //array_push()
                //arreglo = ["manzana", "uva"]
                //arreglo.push("uva")

                //concat
                array_push($izquierda, $array[$i]);
            }else{
                array_push($derecha, $array[$i]);
            }
        }
        //izquierda = [45,34]
        //derecha = [89,90]
        return array_merge(quickSort($izquierda), array($pivote), quickSort($derecha));
    }else{
        return $array;
    }
}
print_r(quickSort([45,89,34]));
echo "<br>";
print_r(quickSort([56,89,45,34,90]));

?>