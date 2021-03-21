<?php

function mult2(){
    $num =$_POST["numero"];
    $radio=$_POST["radio"];

    if ($radio=='a') {    
        for ($i=0; $i < $num; $i++) { 
            if ($i%2==0) {
                echo "$i<br>";
            }
        }
    }

    if ($radio == 'b') {
            for ($i = 0; $i < $num; $i++) {
                if ($i%3 == 0) {
                    echo "$i<br>";
                }
            }
    }
        if ($radio == 'c') {
            for ($i = 0; $i < $num; $i++) {
                if ($i%4== 0) {
                    echo "$i<br>";
                }
            }
    }

}
