<?php
    include('logindb.php');
     $connection = mysqli_connect($host, $username, $password, $database)
     or die ("La base de datos no esta disponible en este momento. Trate de entrar mas tarde.")
?>