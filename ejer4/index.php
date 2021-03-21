<?php
session_start();
?>
<html>
<head>
    <link href="estilos\css.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="lista">
        <ul class="acorh">
            <li>
                <?php
                if (isset($_SESSION['usuario'])) {
                ?>
            <li>
                <a href="#"><?php
                            echo $_SESSION['usuario'];
                            ?> esta conectado</a></li>
            <li>
                <a href="codigo/principal.php?jugar">Jugar</a>
            </li>
            <li>
                <a href="codigo/principal.php?cerrar">Cerrar</a>
            </li>
        <?php
                } else {
        ?>
            <a href="#"> No hay usuario conectado</a>
            </li>
            <li>
                <a href="formularios\formuiniciarsesion.php">Iniciar Sesión</a>
            </li>
        <?php
                }
        ?>
        </ul>
    </div>

    <div class="contenido">
        <p>
            <img src="estilos\fondo.jpg" style="position: right;top:80px;left: 100px;width: 95%;height: 95%;border:blue;">
        </p>
    </div>
</body>

</html>