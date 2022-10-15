<!DOCTYPE html>
<html lang="es">
<head>
    <title>Laboratorio 13</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
    <h1>Recuperar valor de una coockie</h1>
    <?php
    if(isset($_COOKIE["user"])){
        echo "<h2>Bienvenido ". $_COOKIE["user"] . "!</h2><br/>";
    }
    else{
        echo "Bienvenido Invitado";
    }
    ?>
    <a href="lab132.php">...Regresar</a>&nbsp;
    <a href="lab134.php">Continuar...</a>
</body>
</html>