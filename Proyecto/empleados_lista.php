<?php
    require "funciones/conecta.php";
    $con = conecta();

    $sql = "SELECT * FROM empleados WHERE eliminado = 0";
    $res = $con->query($sql);
    $num = $res->num_rows;
?>

<html>
    <head>
        <!-- ICONOS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- CSS -->
        <link href="css/style_table.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <div class="head">
            <div class="section_title">
                <?php
                    echo "Listado de empleados ($num)";
                ?>
            </div>
        </div>
        <div class="content">
            <div>
                <a href="empleados_alta.php">Agregar empleado</a>
            </div>
            <div class="table">
                <div class="table-header row">
                    <div>ID</div>
                    <div>Nombre</div>
                    <div>Correo</div>
                    <div>Rol</div>
                    <div>Detalles</div>
                    <div>Editar</div>
                    <div>Eliminar</div>
                </div>
                <?php
                    while ($row = $res->fetch_array()){
                        echo "<div class=\"row\">";
                        $id = $row["id"];
                        $name = $row["nombre"];
                        $mail = $row["correo"];
                        $role = $row["rol"];

                        echo "<div class=\"column id\">$id</div>";
                        echo "<div class=\"column name\">$name</div>";
                        echo "<div class=\"column email\">$mail</div>";
                        echo "<div class=\"column role\">$role</div>";
                        echo "<div class=\"column details\"><a href=\"empleados_elimina.php?id=$id\"><i class=\"fa-solid fa-circle-info\"></i></a></div>";
                        echo "<div class=\"column edit\"><a href=\"\"><i class=\"fa-solid fa-pen-to-square\"></i></a></div>";
                        echo "<div class=\"column delete\"><a href=\"\"><i class=\"fa-solid fa-trash\"></i></a></div>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>