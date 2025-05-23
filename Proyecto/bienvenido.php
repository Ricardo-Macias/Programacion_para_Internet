<?php
    session_start();
    $userName = $_SESSION['userName'];
    if($userName == ""){
        header('Location: index.php');
    }
?>

<html>
    <head>
        <title>Bienvenido</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="head">
            <div class="title-menu">
                <div class="section_title">
                    <?php
                        echo "Sistema Administracion";
                    ?>
                </div>
                <div class="content-menu">
                    <div class="menu">
                        <?php include ('menu.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content type-text-1">
            Hola <?php echo $userName ?>, bienvenido al sistema 
        </div>
    </body>
</html>