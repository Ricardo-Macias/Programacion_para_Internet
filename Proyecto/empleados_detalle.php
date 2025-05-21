<?php
    include "funciones/conecta.php";
    $con = conecta();

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM empleados WHERE id = $id AND eliminado = 0";
    $res = $con->query($sql);
    $num = $res->num_rows;

    $row = $res->fetch_array();

    $name = $row['nombre'].' '.$row['apellidos'];
    $email = $row['correo'];
    $rol = ($row['rol'] == 1) ? 'Gerente' : 'Ejecutivo';
    $status = ($row['eliminado' == 0]) ? 'Activo' : 'Inactivo';

?>

<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/detalle.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="head">
            <div class="section_title">
                <?php
                    echo "Detalle Empleado";
                ?>
            </div>
            <div class="content-botton">
                <div class="botton">
                    <a href="empleados_lista.php">Regresar al Listado</a>
                </div>
            </div>
        </div>

        <div class="content grid-content">
            <div class="image">
            </div>
            <div class="info">
                <?php
                    echo "<div> <b>Nombre:</b> $name </div>";
                    echo "<div> <b>Correo:</b> $email </div>";
                    echo "<div> <b>Rol:</b> $rol </div>";
                    echo "<div> <b>Status:</b> $status</div>";
                ?>
            </div>
        </div>        
    </body>
</html>
