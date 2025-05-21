<?php
    include "funciones/conecta.php";
    $con = conecta();

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM empleados WHERE id = $id AND eliminado = 0";
    $res = $con->query($sql);
    $num = $res->num_rows;

    $row = $con->fetch_array();

    $name = $row['nombre'].' '.$row['apellidos'];
    $email = $row['corro'];

?>

<html>
    <head>
    </head>
    <body>

        <div>
        </div>

        <div>
            <div>
            </div>
            <div>
                <?php
                    echo $name;
                    echo $email;
                ?>
            </div>
        </div>        
    </body>
</html>
