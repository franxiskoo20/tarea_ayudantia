<!DOCTYPE html>
<html lang="en">
<head>
    <!-- agregar hoja de estilo css -->
    <link href="styles/style.css" rel="stylesheet">
    <!-- fin -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body style="display:flex;justify-content:center;align-items:center; background:#000;flex-direction:column;  margin:0">

    <h1 style="color: white; margin:5px 0 20px 0">Modificar</h1>
    <div>
        <form action="../controlador/modificar_imagen_bd.php" method="POST">
        
        <label style="color: white;"> ID: <?php echo $_GET["id"];?> </label>
        <input type="text" name="url_modificar" placeholder="url imagen">
       
        <input type="submit" value="Aplicar" name="submit">
        <input type="hidden" name="id_modificar" value="<?php echo $_GET["id"]; ?>">
        </form>      
    </div>
    <br>
    <a href="../index.php">
        <input type="button" value="Inicio">
    </a>

</body>

</html>