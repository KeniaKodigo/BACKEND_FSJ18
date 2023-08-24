<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php"; ?>
    <section>
        <h1>Gestion de Planillas</h1>
        <!-- 
            peticiones: GET (obtener datos), POST (enviar datos), PUT (actualizar dato), DELETE (eliminar datos)
        -->
        <form action="" method="POST">
            <label for="">Ingresa tu nombre completo</label>
            <input type="text" id="" class="" name="nombre">
            <br>
            <label for="">Cargo</label>
            <input type="text" id="" class="" name="cargo">
            <br>
            <label for="">Sueldo</label>
            <input type="text" id="" class="" name="sueldo">

            <input type="submit" value="Gestionar">
        </form>
    </section>
    <?php
        /**
         * llamar archivos dentro de otro
         * warning/error
         * 
         * include: incluir vistas, cuando hay errores solo mandan un warning
         * require: error faltal, lo utilizamos para incluir archivos backend
         */
        require "Planilla.php";
        /**
         * utilizamos la variable magica $_POST para capturar los datos del formulario
         * 
         * isset() => validar si un campo esta vacio o no
         */
        $nombre = @$_POST['nombre'];
        $cargo = @$_POST['cargo'];
        $sueldo = @$_POST['sueldo'];
        #instanciando la clase
        $persona1 = new Planilla($nombre, $cargo, $sueldo); //objeto
        //print_r($persona1);
        $persona1->calcularDeducciones();
        echo $persona1->informacion();
    ?>
</body>
</html>