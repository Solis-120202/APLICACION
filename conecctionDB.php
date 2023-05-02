<?php
    // Developer: Andres 
    // MySQL engine Credentials
    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "aplicacion";
	$port = "3306";

    // Create connection
    $conexion = new mysqli($servername, $username, $password,$database,$port);

    /* Check connection
    if($conn->connect_error){
        echo "Connection Failed: ".$conn->connect_error;
    } else{
        echo "Connection Successfully";
    }*/
    if($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
    }
?>