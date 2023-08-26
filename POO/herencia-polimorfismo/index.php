<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
            <h1>Control de Coaches</h1>
            <form action="" method="POST">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre">

                <label for="">Direccion</label>
                <input type="text" class="form-control" name="direccion">

                <label for="">Telefono</label>
                <input type="text" class="form-control" name="telefono">

                <label for="">Correo</label>
                <input type="text" class="form-control" name="correo">

                <label for="">Academia</label>
                <input type="text" class="form-control" name="academia">

                <label for="">Nivel Academico</label>
                <select name="nivel_academico" id="" class="form-control">
                    <option value="Ingenieria en Sistemas">Ingenieria en Sistemas</option>
                    <option value="Licenciatura en Ciencias de la Computacion">Licenciatura en Ciencias de la Computacion</option>
                    <option value="Tecnico en Ingenieria Computacion">Tecnico en Ingenieria Computacion</option>
                    <option value="Desarrollo de Software">Desarrollo de Software</option>
                </select>

                <label for="">Especialidad</label>
                <select name="especialidad" id="" class="form-control">
                    <option value="FrontEnd">FrontEnd</option>
                    <option value="Backend">Backend</option>
                    <option value="FullStack">FullStack</option>
                    <option value="Ciencia de Datos">Ciencia de Datos</option>
                </select>

                <label for="">Cargo</label><br>
                <input type="radio" value="Coach" name="cargo"> Coach
                <input type="radio" value="Mentor" name="cargo"> Mentor
                <br>
                <label for="">Salario</label>
                <input type="text" class="form-control" name="salario">

                <input type="submit" class="btn btn-dark" value="Cargar Datos">
            </form>
    </div>
    <?php
        require "./clases/Coach.php";

        $nombre = @$_POST['nombre'];
        $direccion = @$_POST['direccion'];
        $telefono = @$_POST['telefono'];
        $correo = @$_POST['correo'];
        $academia = @$_POST['academia'];
        $nivel_academico = @$_POST['nivel_academico'];
        $especialidad = @$_POST['especialidad'];
        $cargo = @$_POST['cargo'];
        $salario = @$_POST['salario'];

        $coach = new Coach($nombre, $correo, $academia, $nivel_academico, $especialidad, $cargo, $salario);
        $coach->setDireccion($direccion);
        $coach->setTelefono($telefono);
        #imprimiendo la informacion
        echo $coach->obtenerInfo();
        echo "<br>";
        echo "Direccion: " . $coach->getDireccion();
        echo "<br>";
        echo "Telefono: " . $coach->getTelefono();
    ?>
</body>
</html>