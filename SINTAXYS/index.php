<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos a PHP</h1>

    <?php 
        #comentario
        //comentario 2
        /**
         * otro comentario
         */

        #maneras de imprimir en PHP, "", ''
        echo "<h2>Esto es con PHP</h2>";

        #asignando variables
        $dato = "hola"; //string
        $numero = 2; //int
        $decimal = 45.6; //double
        $booleano = true; //FALSE
        $nulos = null;
        $undefined;

        #concatenar en php (.)
        echo "El numero es " . $numero;
        echo "<br>";
        echo "El numero es $numero";

        echo '<h4>El numero es $numero</h4>';

        #asignar constantes
        //define() 
        //const 

        define("PI", 3.1416);
        echo PI;
        echo "<br>";
        const GRAVEDAD = 100;
        echo GRAVEDAD;

        #arreglos
        //[], array()
        $array1 = ["libro",null,9,false, "cadena2"];
        $array2 = array("computadora","telefono","tablet");
        #echo $array1; => no se puede imprimir porque no acepta arreglo/objetos

        //print_r() => posicion, valor
        //var_dump()
        print_r($array1);
        echo "<br>";
        var_dump($array1);

        #objetos en PHP (clases)
        /**
         * persona = {
         *  nombre: "diego"
         *  apellido: "hernandez"
         * }
         * 
         */

        class Persona{
            public $nombre;
            public $apellido;
        }

        #llamar la clase
        $persona = new Persona();
        $persona->nombre = "Diego";
        $persona->apellido = "Hernandez";
        print_r($persona);

    ?>
</body>
</html>

