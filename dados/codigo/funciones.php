<?php
function login()
{
    $nombre = $_POST['usuario'];
    $_SESSION['usuario'] = $nombre;
    header('location:../');
    setcookie('puntos', 0, time() + 3600, '/');
}

function cerrar()
{
    setcookie('puntos', 0, time() - 1, '/');
    session_destroy();
    header('location:../');
}

function juego(&$d1, &$d2, &$puntos)
{
    $puntos=$_COOKIE['puntos'];
    $d1 = rand(1, 6);
    $d2 = rand(1, 6);
    $puntos = $d1 + $d2 + $puntos;
    $d1 = "../estilos/img/" . "$d1" . ".png";
    $d2 = "../estilos/img/" . "$d2" . ".png";
    setcookie('puntos', $puntos, time() + 3600, '/');
}


function mostrar($d1, $d2, $puntos)
{
?>
    <table style="position: absolute;top:100px;left: 150px;width: 20%;height: 20%;border:blue;" bgcolor="FFFFFF" border="1" cellpadding="1" cellspacing="1">
        <tr>
            <th colspan="2">D1<br>
                <img class="img-fluid mb-5 d-block mx-auto" src=<?php echo $d1 ?> alt=""> <?php echo "Puntos: $puntos" ?></th>
            <th colspan="2">D2<br>
                <img class="img-fluid mb-5 d-block mx-auto" src=<?php echo $d2 ?> alt=""></th>
        </tr>
    
<?php
if ($puntos > 50) {
    if ($puntos<60) {
        ?>
        <tr>
            <th colspan="5">Has Ganado</th>
            <tr>
                <th colspan="5"><a href="principal.php?reset">volver a jugar</a></th>
            </tr>
        </tr>
        <?php
    }else {
        ?>
        <tr>
            <th colspan="5">Has perdido</th>
            <tr>
                <th colspan="5"><a href="principal.php?reset">volver a jugar</a></th>
            </tr>
        </tr>
        <?php
    }
}
?>
</table>
<?php

}

function reinicio(){
    setcookie('puntos', 0, time() +3600, '/');
    header('location:../');
}

function puntos(){
    ?>
    <table style="position: absolute;top:100px;left: 150px;width: 20%;height: 20%;border:blue;" bgcolor="FFFFFF" border="1" cellpadding="1" cellspacing="1">
        <tr>
            <th colspan="5">Tienes: <?php echo $_COOKIE['puntos']; ?></th>
        </tr>
    <table>
    <?php
}

function juego2(&$d1, &$d2, &$puntos)
{
    $puntos=0;
    $d1 = rand(1, 6);
    $d2 = rand(1, 6);
    $puntos = $d1 + $d2 + $puntos;
    $d1 = "../estilos/img/" . "$d1" . ".png";
    $d2 = "../estilos/img/" . "$d2" . ".png";
    setcookie('puntos', $puntos, time() + 3600, '/');
}