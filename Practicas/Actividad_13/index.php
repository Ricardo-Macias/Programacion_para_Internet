<html>
    <head>
        <title>Actividad 12</title>
        <script>
            function validar(){
                var rows = document.forma1.rows.value;
                if (rows == ''){
                    alert("Seleccione un valor mayor a 0");
                } else{
                    document.forma01.submit();
                }
            }
        </script>
    </head>
    <body>
        <form name="forma1" action="table.php" method="post">
            <label for='rows'>Filas</label>
            <select name="rows">
                <?php
                    for($count; $count <= 5000; $count++){
                        echo "<option value='$count'> $count </option>";
                    }
                ?>
            </select>
            <input onclick="validar(); return false;" type="submit" value="Enviar">
        </form>
    </body>
</html>