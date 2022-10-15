<?php
if (array_key_exists('enviar',$_POST)) {
    $expire=time()+60*5;
    setcookie("user",$_REQUEST['visitante'], $expire);
    header("Refresh:0");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Laboratorio 13</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
    <h1>Creacion de Cookies</h1>
    <h2>la coockie "User" tendra solo 5 minutos de duración</h2>
    <?php
    if(isset($_COOKIE["user"])){
        print("<br>Hola <b>". $_COOKIE["user"] ."</b> gracias por visitar nuestro sitio web</br>");
    }
    else{
    ?>
    <form name="formcoockie" action="lab132.php" method="post">
        <br/> Hola, primera ves que te vemos por nuestro sitio web ¿como te llamas?
        <input type="text" name="visitante">
        <input type="submit" value="Gracias por identificarte" name="enviar"/><br/>
    </form>
    <?php
    }
    ?>
    <br/><a href="lab133.php">Continuar...</a>
</body>
</html>