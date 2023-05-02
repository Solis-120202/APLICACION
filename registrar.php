<?php
    include 'conecctionDB.php';

    $id = $_POST["identificador"];
    $nombre = $_POST["nombre"];
    $detalle = $_POST["detalle"];

    
    $sql="INSERT INTO categoria_1 (id, nombre, detalle) values ('$id', '$nombre', '$detalle')";

    $res = 0;
    if($conexion->query($sql) === TRUE) {
      echo('Aceptado');
    }
    else{
      echo('Rechazado');
    }
    mysqli_close($conexion);  // Cierra la conexion
?>