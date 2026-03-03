<?php 
for ($d = 0 ; $d <= 10 ; $d++)
    echo $d; 
//ex 2
     $num = 10;

    while ($num > 1){
        $num--;
    echo $num;
}
// ex 3
    for ($s = 0; $s <= 20; $s += 2 )
        echo $s;  
//ex 4
    $casd = 10;

    while ( $casd < 100){
        $casd++; 
    if ($casd % 2 == 1){
        echo "<br>" . $casd;
        }
    }   
//ex5
    $numero = 2;

    for ($s = 1; $s < 10; $s++){
        echo "<br> $numero x" . " $s" . "=" . $numero * $s; 
    } 
//ex6
    for ($s = 1; $s < 100; $s++){
        echo "<br> $s +" . " $s" . "=" . $s + $s; 
    }


?>  