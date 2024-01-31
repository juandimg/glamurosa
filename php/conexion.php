<?php
    $servidor = 'localhost';
    $BD = 'deporte';
    $usuario = 'root';
    $password= '';

    $conectar = new PDO("mysql: server=$servidor; dbname=$BD", $usuario, $password);

?>