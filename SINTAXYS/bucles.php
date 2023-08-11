<?php

/**
 * estructuras repetitivas:
 * for, foreach, do while, while
 * 
 * 3 elementos => contador, limite contador, incremento/decremento
 */


//crear un contador que empieze del 5 y llegue hasta el 50
function contadorNumeros(){
    for($i = 5; $i <= 50; $i++){ 
        /**
         * i = 5 + 1 = 6, 7... 50
         */
        echo $i . "<br>"; //5, 6, 7,.. 50
    }
}
contadorNumeros();

//los valores del arreglo sean multiplicados * 2
/**
 * length => arreglo/cadena
 * 
 * PHP
 * count() => devuelve el tamaño del arreglo
 * strlen() => devuelve el tamaño de una cadena
 */
function arregloNumeros(){
    $arreglo = [34,67,12,2,5]; 
    for($j = 0; $j < count($arreglo); $j++){
        /**
         * $arreglo[0] * 2 = 34 * 2 = 68
         * $arreglo[1] = 67 * 2
         * $arreglo[2] = 12 * 2
         * $arreglo[3] = 2 * 2
         * $arreglo[4] = 5 * 2
         * $arreglo[5] = undefined posicion 5
         */
        $resultado = $arreglo[$j] * 2;
        echo "Resultado: " . $resultado . "<br>";
    }
}

arregloNumeros();

#while
//verificar cuantas vocales contiene una cadena

function contarVocales($texto){
    //"hola" = h o l a
    /**
     * $texto = "hola"
     * $texto[0] = h
     * $texto[1] = o
     * $texto[2] = l
     * $texto[3] = a
     */
    $k = 0;
    $total_vocales = 0;
    while($k < strlen($texto)){
        if($texto[$k] == "a" || $texto[$k] == "e" || $texto[$k] == "i" || $texto[$k] == "o" || $texto[$k] == "u"){
            $total_vocales++; //0 + 1 = 1 + 1 = 2
        }
        //echo $texto[$k] . "<br>"; 
        //incremento/decremento
        $k++;
    }
    echo "El texto tiene $total_vocales vocales";
}

contarVocales("murcielago");
echo "<br>";
//mostrar los elementos del arreglo al reves
function arregloReves(){
    /**
     * fruta: pera
     * fruta: sandia
     */
    $frutas = ["manzana","banana","uvas","sandia","pera"];
    
    $m = count($frutas) - 1; //4 -> 0
    /**
     * 4 -1 = 3
     * 3 -1 = 2
     * 2 -1 = 1
     * 1 -1 = 0
     */

    while($m >= 0){
        echo "Fruta: " . $frutas[$m] . "<br>";
        $m--;
    }
}

arregloReves();

#do while => la primera vez siempre entra al ciclo

//calcular la media de un arreglo = suma / tamano
function calcularMedia(){
    $arreglo = [45,6,7,89,12];

    $l = 0;
    $suma = 0;
    $media = 0;
    /**
     * $suma = 0 + $arreglo[0] = 45
     *          45 + $arreglo[1] = 51
     *          51 + $arreglo[2] = 58
     *          58 + $arreglo[3] = 147
     *          147 + $arreglo[4] = 159
     */
    do{
        //sumar los elementos del arreglo
        $suma += $arreglo[$l];
        $l++;
    }while($l < count($arreglo));

    $media = $suma / count($arreglo); //31.80
    echo "La media del arreglo es $media";
}

calcularMedia();

#foreach => sirve para iterar arreglos

function iterarArreglo(){
    $arreglo = ["tijeras", "cuadernos", "borrador", "zacapunta"];

    foreach($arreglo as $item){
        echo "Util Escolar: $item <br>";
    }
}

//[1,2,3] //[2,4,6] for,while, do while
iterarArreglo();
?>