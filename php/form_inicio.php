<?php
    include 'conexion.php';
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje =$_POST["mensaje"];
    


    $sql = "INSERT INTO usuarios (id,nombre, correo, mensaje ) VALUES (null,'$nombre', '$correo','$mensaje')";

    $conectar->query($sql);
    header('location:../index.html');
?>