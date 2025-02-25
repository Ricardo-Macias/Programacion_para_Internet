<html>
    <head>
        <title>Actividad 12</title>
        <script>
            function validar(){
                var rows = document.forma01.rows.value;
                if (rows == '0'){
                    alert("Seleccione un valor");
                } else{
                    document.forma01.submit();
                }
            }
        </script>
    </head>
    <body>
        <form name="forma01" action="table.php" method="post">
            <label for='rows'>Filas</label>
            <select name="rows" id="rows">
                <?php
                    echo "<option value='0' selected>Seleciona</option>";
                    for($count=1; $count <= 5000; $count++){
                        echo "<option value='$count'>$count</option>";
                    }
                ?>
            </select>
            <input onclick="validar(); return false;" type="submit" value="Enviar">
        </form>
    </body>
</html>