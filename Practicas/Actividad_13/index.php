<html>
    <head>
        <title>Actividad 12</title>
        <script>
            function validar(){
                var rows = document.forma1.rows.value;
                if (rows == '0'){
                    alert("Seleccione un valor");
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
                    for($count=0; $count <= 5000; $count++){
                        $value_rows = ($count == 0) ? 'Selecciona' : $count;
                        echo "<option value='$count'>$value_rows</option>";
                    }
                ?>
            </select>
            <input onclick="validar(); return false;" type="submit" value="Enviar">
        </form>
    </body>
</html>