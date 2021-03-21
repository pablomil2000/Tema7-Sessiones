<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <title>Pares y Nones</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <LINK href="estilos\estilos.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="menu" style="float:left;margin-left: 60px;">
        <ul>


            <?php
            if (!isset($_SESSION['usuario'])) {
            ?>
                <li class="menupal"><a href="formularios/formuiniciarsesion.php" class="nivel1" target="contenedor">Iniciar Sesión</a></li>
            <?php
            } else {
            ?>
                <p href="#" class="nivel1">Sesión Iniciada por <?php echo $_SESSION['usuario'];?> </p>
                </li>
                <li class="menupal"><a href="codigo/principal.php?jugar" class="nivel1">Iniciar Juego</a></li>
                <li class="menupal"><a href="codigo/principal.php?continuar " class="nivel1">Continuar Juego</a></li>
                <li class="menupal"><a href="codigo/principal.php?puntos" class="nivel1">Ver Puntuación</a></li>
                <li class="menupal"><a href="codigo/principal.php?cerrar" class="nivel1">Cerrar Sesión</a></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <center>
        <img src="estilos/fondo.png" style="position: absolute;top:80px;left: 100px;width: 80%;height: 80%;border:blue;">
    </center>

</body>

</html>