<?php
require_once("../bds/conexion.php");

if($_POST){
    $imagen_url = $_POST["imagen"];

    $agregar_imgagen_urlSql = "INSERT INTO `imagenes`(`url`)
    VALUES ('$imagen_url');";
    $publicar_diariomural = mysqli_query($con,$agregar_imgagen_urlSql);
    
}
header("Location: http://localhost/ayudantia");

?>