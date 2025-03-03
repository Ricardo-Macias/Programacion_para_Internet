<?php
    define('HOST','localhost:3307');
    define('BD', 'proyecto');
    define('USER_BD','root');
    define('PASS_BD','');

    function conecta(){
        $con = new mysqli(HOST, USER_BD, PASS_BD, BD);
        return $con;
    }
?>