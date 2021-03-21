<?php
    include('funciones.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    #Ejer1
    
    if (isset($_GET['ejer1'])) {
        numerocubo();
    }
    
    #Ejer2

    elseif (isset($_GET['ejer2'])){
        diasmes();
    }
    
    #Ejer3

    elseif (isset($_GET['ejer3'])){
        leernumeros($base, $expo);
        calcular($base, $expo, $resultado);
        mostrar($resultado);
    }

    #Ejer6
    
    elseif (isset($_GET['ejer6circulo'])){
        ejer6circulo();
    }
    elseif (isset($_GET['ejer6cuadrado'])){
        ejer6cuadrado();
    }
    elseif (isset($_GET['ejer6rectangulo'])){
        ejer6rectangulo();
    }
    elseif (isset($_GET['ejer6triangulo'])){
        ejer6triangulo();
    }

    #Ejer7
    elseif (isset($_GET['ejer7circulo'])){
        ejer7circulo();
    }
    elseif (isset($_GET['ejer7cuadrado'])){
        ejer7cuadrado();
    }
    elseif (isset($_GET['ejer7rectangulo'])){
        ejer7rectangulo();
    }
    elseif (isset($_GET['ejer7triangulo'])){
        ejer7triangulo();
    }


    #Ejer13
    elseif (isset($_GET['ejer13a'])){
        ejer13a();
        
    }elseif (isset($_GET['ejer13'])){
        ejer13();
    }

    #Ejer14
    elseif (isset($_GET['ejer14a'])){
        ejer14a();
        
    }elseif (isset($_GET['ejer14'])){
        ejer14();
        
    }

    #Ejer15

    elseif (isset($_GET['ejer15'])){
        recojerfechas($f1, $f2);
        datediferencia($f1, $f2);
    }


    #Ejer16
    elseif (isset($_GET['ejer16'])){
        ejer16();
    }


    #Ejer17
    elseif (isset($_GET['ejer17'])){    //He encontrado esta otra solucion utilizando funciones mas simple que todos esos calculos
        LeeFechaValida($semana);
        DiaSemana($semana);
    }

    #Ejer19
    elseif (isset($_GET['ejer19'])){
        ejer19();
    }

    #Ejer20
    elseif (isset($_GET['ejer20'])){
        ejer20();
    }

    elseif (isset($_GET['juego'])){
        juego();
    }

    elseif (isset($_GET['jugando'])){
        jugando();
    }
    
    ?>
    <p><a href="../">volver al inicio</a></p>
</body>
</html>