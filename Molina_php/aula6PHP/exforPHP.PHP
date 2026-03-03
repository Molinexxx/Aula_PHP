<?php 
    // $segundos = date("s");

    // for($x = 0; $x <= $segundos; $x++){
    //     echo $x . "<br>";
    // }



    // // verificando ano atual
    // $ano_atual =  date("s");

    // for($ano = 2007; $ano <= $ano_atual; $ano){
    //     echo $ano . "<br>";
    // }


    //tabuada
    $tabuada = 2; 

    for ($t = 1; $t <= 10; $t++){
        echo $tabuada. " x " . $t . "=" . ($tabuada * $t). "<br/>";
    }
    echo "<br/><br />";
    for ($a = 1 ; $a <= 10; $a++){
        for ($b=1; $b <= 10; $b++){
            echo $a. "x". $b. "=". ($a * $b). "<br/>";
        }
        echo "<br/><br/>";
    }
?>