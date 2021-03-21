<?php
session_start();
include('funciones.php');
?>
<html>

<head>
    <link href="../estilos/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="lista">
        <ul class="acorh">
            <li>
                <?php

                if (isset($_SESSION['usuario'])) {
                ?>
            <li>
                <a href=""><?php
                            echo $_SESSION['usuario'];
                            ?> esta conectado</a></li>
            <li>
                <a href="../codigo/principal.php?jugar">Jugar</a>
            </li>
            <li>
                <a href="../codigo/principal.php?cerrar">Cerrar</a>
            </li>
        <?php
                } else {
        ?>
            <a href=""> No hay usuario conectado</a>
            </li>
            <li>
                <a href="../formularios\formuiniciarsesion.php">Iniciar Sesión</a>
            </li>
        <?php
                }
        ?>
        </ul>
    </div>
    <div class="contenido">
        <p>
            <?php
            if (isset($_GET['iniciosesion'])) {
                echo "I N I C I A R  S E S I O N";
            } elseif (isset($_GET['cerrar'])) {
                echo "A D I O S";
            } elseif (isset($_GET['jugar'])) {
                echo "A  J U G A R";
            }
            ?>
        </p>
        <p>-------------------------------------------------------</p>
        <p>
            <?php
            if (isset($_GET['iniciosesion'])) {
                iniciosesion();
            } elseif (isset($_GET['cerrar'])) {
                cerrar();
            } elseif (isset($_GET['jugar'])) {
                juego();
            }
            ?>
        </p>
    </div>
</body>

</html>