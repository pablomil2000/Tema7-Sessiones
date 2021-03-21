<?php

#Ejer1
function numerocubo(){
    $n1=$_POST['n1'];
    $num=$n1*$n1*$n1;
    echo $num;
}

#Ejer2

function diasmes(){
    $mes=$_POST['mes'];
    if ($mes==1 || $mes==3 || $mes== 5 || $mes==6 || $mes==8 || $mes==10 || $mes==12) {
        echo "El mes tiene 31 dias";
    }elseif ($mes==2){
        echo "El mes tiene 28-29 dias";
    }else {
        echo "El mes tiene 30 dias";
    }
}

#Ejer3

function leernumeros(&$base, &$expo){
    $base=$_POST['base'];
    $expo=$_POST['expo'];
}

function calcular(&$base, &$expo, &$result){
    $result=1;

    for ($i=0; $i < $expo; $i++) { 
        $result=$result*$base;
    }
}

function mostrar(&$result){
    echo "El resultado es: $result";
}

#Ejer6

function ejer6circulo(){
    $radio=$_POST['radio'];
    $area=pi()*pow($radio, 2);
    echo "$area<br>";
}

function ejer6cuadrado(){
    $lado=$_POST['lado'];
    $area=pow($lado, 2);
    echo "$area<br>";
}

function ejer6rectangulo(){
    $ancho=$_POST['ancho'];
    $lado=$_POST['lado'];
    $area=$ancho*$lado;
    echo "$area<br>";
}

function ejer6triangulo(){
    $base=$_POST['base'];
    $altura=$_POST['altura'];
    $area=$base*$altura;
    echo "$area<br>";
}

#Ejer7

function ejer7circulo(){
    $radio=$_POST['radio'];
    echo "<svg width='100%' height='100%' viewBox='0 0 250 150'>
            <circle cx='125' cy='75' r='$radio' stroke='black' stroke-width='4' fill='#6ab150'></circle>
            </svg>";
}

function ejer7cuadrado(){
    $lado=$_POST['lado'];
    echo "<svg width='100%' height='100%' viewBox='0 0 250 150'>
            <rect x='125' y='75' height='$lado' width='$lado' stroke='black' stroke-width='4' fill='#6ab150'></circle>
            </svg>";
    
}

function ejer7rectangulo(){
    $ancho=$_POST['ancho'];
    $lado=$_POST['lado'];
    
    echo "<svg width='100%' height='100%' viewBox='0 0 250 150'>
            <rect x='125' y='75' height='$lado' width='$ancho' stroke='black' stroke-width='4' fill='#6ab150'></circle>
            </svg>";
    
}

function ejer7triangulo(){
    $base=$_POST['base'];
    $altura=$_POST['altura'];
    
}

#Ejer13

function ejer13a(){
    $num=rand(1,50);
    setcookie("numero", $num, time()+3600, "/");
    setcookie("intentos", 0, time()+3600, "/");
    include("../formulario/formu_juego1.html");
}

function ejer13(){
    $num=$_POST['numero'];
    $sol=$_COOKIE['numero'];
    $intentos=$_COOKIE['intentos'];
    $intentos++;

    if ($num==$sol) {
        echo "Has acertado con $intentos intentos";
    }else {
        echo "Has fallado, llevas $intentos intentos";
        setcookie("intentos", $intentos, time()+3600, "/");
        if ($intentos>10) {
            echo "No te quedan intentos, vuelve a empezar";
        }else {
            include("../formulario/formu_juego1.html");
        }
    }
}

#Ejer14

function ejer14a(){
    include("../formulario/formu_numprimo.html");
}

function ejer14(){
    $n1=$_POST['num'];
    $n2=$n1+1;
    $a=0;
    while ($a != 1) {
        if ($n2%2!=0 && $n2%3!=0 && $n2%4!=0 && $n2%5!=0 && $n2%6!=0 && $n2%7!=0) {
            $a=1;
        }else {
            $n2++;
        }
    }
    echo $n2;
}

#Ejer15

function recojerfechas(&$f1, &$f2){
    $f1=$_POST['f1'];
    $f2=$_POST['f2'];
}

function datediferencia(&$date1, &$date2){

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

echo"$years Años, $months Meses, $days Dias";

}

#Ejer16

function ejer16(){
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    for ($i=$n1; $i < $n2 ; $i++) { 
        if ($n2%$i==0) {
            echo "$i<br>";
        }
    }
}

#Ejer17

function LeeFechaValida(&$dia) {
    $fecha =$_POST['fecha'];    
    $dia = date("w",strtotime($_POST['fecha']));
}

function DiaSemana($dia) {
    switch($dia) {
        case '1':
            echo "lunes";
            break;
        case '2':
            echo "Martes";
            break;
        case '3':
            echo "Miercoles";
            break;
        case '4':
            echo "Jueves";
            break;
        case '5':
            echo "Viernes";
            break;
        case '6':
            echo "Sabado";
            break;
        case '7':
            echo "Domingo";
            break;
    }
}

#Ejer19

function obtener_factorial($mi_fatorial)
{
   if($mi_fatorial==1)
      return 1;
   else
      return $mi_fatorial * obtener_factorial($mi_fatorial-1);
}

function ejer19() {
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    ?>
    <table border="1">
    <tr>
        <td>n</td>
        <td>n^2</td>
        <td>n^3</td>
        <td>n^4</td>
        <td>n!</td>
        <td>log n!</td>
    </tr>

<?php
    for ($i=$n1; $i <= $n2; $i++) {
        $i2=$i*$i;
        $i3=$i2*$i;
        $i4=$i3*$i;
        $i5=obtener_factorial($i);
        $i6=log10($i5); 
        ?>
        <tr>
        <td>
            <?php
                echo"$i";
            ?>
        </td>
        <td>
            <?php
                echo"$i2";
            ?>
        </td>
        <td>
            <?php
                echo"$i3";
            ?>
        </td>
        <td>
            <?php
                echo"$i4";
            ?>
        </td>
        <td>
            <?php
                echo"$i5";
            ?>
        </td>
        <td>
            <?php
                echo"$i6";
            ?>
        </td>
    </tr>
        <?php
    }
    ?>
    </table><?php
}


#Ejer20

function ejer20(){
    $operacion =$_POST['operacion'];
    setcookie("oper", $operacion, time()+3600, "/");
    header("Location:principal.php?juego");
}

function juego(){
    if (!isset($_COOKIE['intent'])) {
        $n1=rand(0,999);
        setcookie("n1", $n1, time()+3600, "/");
        $n2=rand(0,999);
        setcookie("n2", $n2, time()+3600, "/");
        $oper=$_COOKIE['oper'];
        $text="";

        switch ($oper) {
            case '0':
                $text="$n1+$n2";
                $sol=$n1+$n2;
                break;
            case '1':
                $text="$n1-$n2";
                $sol=$n1-$n2;
                break;
            case '2':
                $text="$n1*$n2";
                $sol=$n1*$n2;
                break;
            case '3':
                $text="$n1/$n2";
                $sol=$n1/$n2;
                break;
            default:
                break;
    }

    }else {
        $oper=$_COOKIE['oper'];
        $text="";
        $n1=$_COOKIE['n1'];
        $n2=$_COOKIE['n2'];
        switch ($oper) {
            case '0':
                $text="$n1+$n2";
                $sol=$n1+$n2;
                break;
            case '1':
                $text="$n1-$n2";
                $sol=$n1-$n2;
                break;
            case '2':
                $text="$n1*$n2";
                $sol=$n1*$n2;
                break;
            case '3':
                $text="$n1/$n2";
                $sol=$n1/$n2;
                break;
            default:
                break;
        }
        
    }
    echo "$text";
    setcookie("sol", $sol, time()+3600, "/");
    setcookie("intent", "0", time()+3600, "/");
    include("../formulario/formu_juego.html");
}

function jugando() {
    $resp=$_POST['respuesta'];
    $sol=$_COOKIE['sol'];
    $intentos=$_COOKIE['intent'];
    $intentos++;
    if ($resp==$sol) {
        echo "has acertado";
        switch ($_COOKIE['intent']) {
            case '0':
                echo "<br>Muy bien";
                break;
            case '1':
                echo "<br>Exelente";
                break;
            case '2':
                echo "<br>Bien";
                break;
            case '3':
                echo "<br>Por los pelos";
                break;
            default:
                echo "<br>Has necesitado demasiados intententos";
                break;
        }
        setcookie("intent", null, 0, "/");

    }
    else{
        echo"Has fallado";
        echo "Llevas $intentos intentos";
        if ($intentos==4) {
            echo "no te quedan intentos";
            setcookie("intent", $intentos, 0, "/");
        }
        else {
            setcookie("intent", $intentos, time()+3600, "/");
        }
        
    }
    ?>
        <p><a href="principal.php?juego">Vover a jugar</a></p>
        <p><a href="../formulario/formu_operaciones.html">Cambiar operacion</a></p>
    <?php
}