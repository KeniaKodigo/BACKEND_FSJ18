<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include "./modulos/header.php";
        require "./clases/Estudiantes.php";

        $estudiante = new Estudiante();
        $arreglo_datos = $estudiante->getAll();
        //print_r($arreglo_datos);
    ?>

    <main id="main">
        <section class="container">
            <h1>Gestion de Estudiantes Activos</h1>
            <a href="./registrar_estudiante.php" class="btn btn-primary mb-3">Registrar Estudiante</a>

            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Carnet</th>
                    <th>Bootcamp</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach($arreglo_datos as $item){ ?>
                        <tr>
                            <td><?php echo $item["nombre"]; ?></td>
                            <td><?php echo $item["direccion"]; ?></td>
                            <td><?php echo $item["carnet"]; ?></td>
                            <td><?php echo $item["bootcamp"]; ?></td>
                            <td>
                                <button class="btn btn-warning">Editar</button>
                            </td>
                            <td>
                                <button class="btn btn-danger">Cambiar Estado</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>