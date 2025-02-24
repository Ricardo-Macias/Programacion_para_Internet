<?php
    $rows = $_POST['rows'];

    echo "<table width='60' border='1'>";
    for($count=1; $count <= $rows; $count++){
        echo "<tr height='60' align='center' valign='middle' ><td>$count</td></tr>";
    }
    echo "</table>";
?>