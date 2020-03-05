<?php
include("Controllers/cn.php");

$con = conectar();
echo  "se realizo la conexion";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/gradientes.css">
    <link rel="stylesheet" href="src/fonts.css">
    <!--todo descargar las fuentes para evitar cargas al navegador y este integrado de manera local en caso de no tener internet-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
</head>
<body>
<div class="contenedor">

    <header>
        <h1 class="title">ITESCHAM</h1>
        <a href="views/registro.php">Registrate</a>
    </header>
    <div class="login">
        <article class="fondo">
            <img src="src/img/itescham.jpg" alt="User">
            <h3>Inicio de Sesión</h3>
            <form class="" action="index.php" method="post">
                <span class="icon-user"></span><input class="inp" type="text" name="user" value=""><br>
                <span class="icon-key"></span><input class="inp" type="password" name="pass" value=""><br>
                <a href="" class="he">He olvidado mi contraseña</a>
                <input class="boton" type="submit" name="inicio" value="Iniciar Sesión">
            </form>
        </article>
    </div>

</div>
</body>
</html>
