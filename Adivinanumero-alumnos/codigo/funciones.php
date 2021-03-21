

function juego(){
    if (isset($_COOKIE['intentos']) && $_COOKIE['intentos']<5) {
        if (isset($_POST['numero'])) {
            $usuario = $_POST['numero'];
            if ($usuario == $_COOKIE['respuesta']) {
                echo "Has ganado, la respuesta era " . $_COOKIE['respuesta'];
                setcookie('win',1,time() + 3600);
            } else {
                echo "has fallado";
                if ($usuario > $_COOKIE['respuesta']) {
                    echo "El numero es menor";
                }else {
                    echo "El enumero es mayor";
                }
                $num = $_COOKIE['intentos'];
                $num++;
                setcookie('intentos', $num, time() + 3600);
            }
        }
        include("../formularios/juego.php");
        
    }else {
        if (isset($_COOKIE['intentos'])) {
            echo "Has perdido";
        }
        else {
            setcookie('intentos', 0, time() + 3600);
            echo "Que empiece el juego";
            $resp = rand(0,10);
            setcookie('respuesta', $resp, time() + 3600);
            include("../formularios/juego.php");
        }
        
    }
}