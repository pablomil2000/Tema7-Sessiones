<?php
function iniciosesion()
{
    $usuario = $_POST['nombre'];
    echo "Bienvenido $usuario";
    $_SESSION['usuario'] = $usuario;
    header("Refresh:2;url=../");
}

function cerrar()
{
    session_destroy();
    header("Location:../");
}

function juego_inicio()
{
    if (isset($_COOKIE['sol'])) {
        $n1 = $_COOKIE['n1'];
        $n2 = $_COOKIE['n2'];
        echo "$n1*$n2=";
    } else {
        $n1 = rand(0, 10);
        $n2 = rand(0, 10);
        $sol = $n1 * $n2;
        $int = 0;
        setcookie("int", $int, time() + 3600,"/");
        setcookie("n1", $n1, time() +3600, "/");
        setcookie("n2", $n2, time() +3600, "/");
        setcookie("sol", $sol, time() +3600, "/");
        echo "$n1 * $n2 = ";
    }
    include("../formularios/juego.php");
}

function juego_jugando()
{
    $int = $_COOKIE['int'];
    $int++;
    setcookie("int", $int, time() + 3600,"/");
    $resp = $_POST['numero'];
    if ($resp == $_COOKIE['sol']) {
        echo "Acierto";
?>
        <a href="principal.php?fin_juego">Terminar juego</a>
    <?php
        setcookie("resultado", "a", time() + 3600,"/");
    } else {
        echo "Error. ";
        echo "Llevas $int intentos";
    ?>
        <a href="principal.php?jugar">Volver a intentar</a>
        <a href="principal.php?ff">Me rindo</a>
    <?php
        setcookie("resultado", "e", time() + 3600,"/");
        if ($_COOKIE['int'] == 3) {
            header("Location:principal.php?fin_juego");
        }
    }
}

function finalizar()
{
    echo "La solucion es " . $_COOKIE['sol'] . "<br>";
    if ($_COOKIE['resultado'] == "a") {
        echo "Has acertado con " . $_COOKIE['int'] . "<br>";
    } else {
        echo "No lo has acertado despues de " . $_COOKIE['int'] . "<br>";
    }
    setcookie("sol", 0, time()-1, "/");
    switch ($_COOKIE['int']) {
        case '1':
            echo "Muy bien<br>";
            break;
        case '2':
            echo "Bien<br>";
            break;
        case '3':
            echo "No esta mal<br>";
            break;
        case '4':
            if ($_COOKIE['resultado'] =="a") {
                echo "Por los pelos<br>";
            }else {
                echo "Necesitas practicar mas<br>";
            }
            
            break;

        default:
            echo "Necesitas practicar mas<br>";
            break;
    }
    ?>
    <a href="principal.php?jugar">Volver a intentar</a>
<?php
}


function ff() {
    setcookie("sol", 0, time()-1, "/");
    echo "Te has rendido pronto, la solucion era ".$_COOKIE['sol'];
    ?>
    <a href="principal.php?jugar">Volver a intentar</a>
<?php
}