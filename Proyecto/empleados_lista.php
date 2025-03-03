<?php
    require "funciones/conecta.php";
    $con = conecta();

    $sql = "SELECT * FROM empleados WHERE eliminado = 0";
    $res = $con->query($sql);
    $num = $res->num_rows;
?>

<html>
    <head>
        <link href="css/table.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <div class="section_title">
            <?php
                echo "Listado de empleados ($num)";
            ?>
        </div>
        <div class="table">
            <table>
                <?php
                    while ($row = $res->fetch_array()){
                        echo "<div class=\"row\">";
                        $id = $row["id"];
                        $name = $row["nombre"];
                        $mail = $row["correo"];
                        $role = $row["rol"];

                        echo "<div class=\"column\">$id</div>";
                        echo "<div class=\"column\">$name</div>";
                        echo "<div class=\"column\">$mail</div>";
                        echo "<div class=\"column\">$role</div>";
                        echo "</div>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>