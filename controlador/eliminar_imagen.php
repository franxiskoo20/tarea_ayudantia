<?php
require_once("../bds/conexion.php");


   
    $eliminar = $_GET["id"]; 
    $eliminar_imagenSql = "DELETE FROM `imagenes` WHERE id = $eliminar";    
    $eliminar_imagen = mysqli_query($con,$eliminar_imagenSql);


header("Location: http://localhost/ayudantia");

?>