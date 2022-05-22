<?php 
    require_once("../bds/conexion.php");
   
    if($_POST){
      $id_modificar = $_POST["id_modificar"]; 
      $url_modificar = $_POST["url_modificar"];
      $modificar_url_imagenSql =  "UPDATE imagenes SET imagenes.url = '$url_modificar' WHERE id = $id_modificar";
      $modificar_url_imagen =  mysqli_query($con,$modificar_url_imagenSql);
      
    }

   header("Location: http://localhost/ayudantia");
    
  ?>