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
        <link href="css/table.css" rel="stylesheet" type="text/css" >
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <!-- JS -->
         <script src="js/jquery-3.3.1.min.js"></script>
         <script src="js/funciones_jquery.js"></script>
    </head>
    <body>
        <div class="head">
            <div class="section_title">
                <?php
                    echo "Listado de empleados ($num)";
                ?>
            </div>
            <div class="content-botton">
                <div class="botton">
                    <a href="empleados_alta.html">Agregar empleado</a>
                </div>
            </div>
        </div>
        <div class="content list">
            <div class="table">
                <div class="table-header row">
                    <div class="column">ID</div>
                    <div class="column">Nombre</div>
                    <div class="column">Correo</div>
                    <div class="column">Rol</div>
                    <div class="column">Detalles</div>
                    <div class="column">Editar</div>
                    <div class="column">Eliminar</div>
                </div>
                <?php
                    while ($row = $res->fetch_array()){
                        $id = $row["id"];
                        $name = $row["nombre"];
                        $last_name = $row["apellidos"];
                        $mail = $row["correo"];
                        $role = ($row["rol"] == "1") ? "Gerente":"Ejecutivo";

                        echo "<div class=\"row row$id\">";
                        echo "<div class=\"column id\">$id</div>";
                        echo "<div class=\"column name\">$name $last_name</div>";
                        echo "<div class=\"column email\">$mail</div>";
                        echo "<div class=\"column role\">$role</div>";
                        echo "<div class=\"column details\"><a href=\"empleados_detalle.php?id=$id\"><i class=\"fa-solid fa-circle-info\"></i></a></div>";
                        echo "<div class=\"column edit\"><a href=\"empleados_editar.php?id=$id\"><i class=\"fa-solid fa-pen-to-square\"></i></a></div>";
                        echo "<div class=\"column delete\"><a href=\"javascript:deleteAjax($id);\"><i class=\"fa-solid fa-trash\"></i></a></div>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>
