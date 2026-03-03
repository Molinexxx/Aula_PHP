<?php 
    $v = 34;
    $v1 = 23;
     
    $soma = $v + $v1;
    $subtracao = $v - $v1;
    $multiplicacao = $v * $v1;
    $divisao = $v / $v1;
    $modulo = $v % $v1;

    echo "a soma de " . $v . " e " . $v1 . " sao: " . $soma;
    echo "<br>a Subtracao de " . $v . " e " . $v1 . " sao: " . $subtracao;
    echo "<br>a multiplicacao de " . $v . " e " . $v1 . " sao: " . $multiplicacao;
    echo "<br>a divisao de " . $v . " e " . $v1 . " sao: " . $divisao;
    echo "<br>a modulo de " . $v . " e " . $v1 . " sao: " . $modulo;

    // ex 2

    const ANO_NASCIMENTO = 2007;
    $ano_atual = 2026;

    echo "<br> Eu nasci no ano ". ANO_NASCIMENTO . " e estamos em " . $ano_atual . ", portanto tenho " . $ano_atual - ANO_NASCIMENTO . "anos.";

    //ex 3 

    $val = 0;
    echo " <br>" . $val;
    $val++;
    $val++;
    $val++;
    echo $val;

    //ex4 

    $val1 = 5;
    echo "<br> <br>" . $val1; 
    $val1--;
    $val1-- ;
    echo $val1; 
?>