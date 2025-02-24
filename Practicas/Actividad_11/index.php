<html>
    <head>
        <title>Actividad 11</title>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script>
            function DeleteRow(row){
                if (confirm('Elminar fila')){
                    $('#row'+row).hide()
                }
            }
        </script>
        <style>
            #table{
                width: 960px;
                height: 800px;
                display: grid;
                grid-template-rows: repeat(5, 1fr);
            }
            .row{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
            }
            .col{
                border: 1px solid #000;
                text-align: center;
                place-content: center;
            }
        </style>
    </head>
    <body>
        <div id="table">
            <div id="row1" class="row">
                <div class="col">
                    <a href="https://consumer.huawei.com/mx/" target="_blank">
                        <img src="../Imagenes/huawei.png" width="100" height="100">
                    </a>
                </div>
                <div class="col">
                    <a href="https://consumer.huawei.com/mx/" target="_blank">
                        Huawei
                    </a>
                </div>
                <div class="col">
                    <input onclick="DeleteRow(1);" type="submit" value="Eliminar" >
                </div>
            </div>
            <div id="row2" class="row">
                <div class="col">
                    <a href="https://www.samsung.com/mx/" target="_blank">
                        <img src="../Imagenes/samsung.png" width="150" height="100">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.samsung.com/mx/" target="_blank">
                        Samsung
                    </a>
                </div>
                <div class="col">
                    <input onclick="DeleteRow(2);" type="submit" value="Eliminar" >
                </div>
            </div>
            <div id="row3" class="row">
                <div class="col">
                    <a href="https://www.mi.com/mx" target="_blank">
                        <img src="../Imagenes/xiaomi.png" width="100" height="100">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.mi.com/mx" target="_blank">
                        Xiaomi
                    </a>
                </div>
                <div class="col">
                    <input onclick="DeleteRow(3);" type="submit" value="Eliminar" >
                </div>
            </div>
            <div id="row4" class="row">
                <div class="col">
                    <a href="https://www.oppo.com/mx/" target="_blank">
                        <img src="../Imagenes/oppo.png" width="100" height="100">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.oppo.com/mx/" target="_blank">
                        oppo
                    </a>
                </div>
                <div class="col">
                    <input onclick="DeleteRow(4);" type="submit" value="Eliminar" >
                </div>
            </div>
            <div id="row5" class="row">
                <div class="col">
                    <a href="https://www.oneplus.com/mx" target="_blank">
                        <img src="../Imagenes/oneplus.jpg" width="150" height="100">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.oneplus.com/mx" target="_blank">
                        Oneplus
                    </a>
                </div>
                <div class="col">
                    <input onclick="DeleteRow(5);" type="submit" value="Eliminar" >
                </div>
            </div>
        </div>
    </body>
</html>