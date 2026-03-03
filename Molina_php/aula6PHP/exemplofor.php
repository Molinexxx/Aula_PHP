<?php
 $contador = 0 ;
 // ENQUANTO
while ($contador <= 10){
    if($contador > 6){
        echo "aprovado com a nota de $contador<br>"; 
    } else {
        echo "Voce foi reprovado sua nota foi : $contador <br>";
    }
    $contador++;
 }


 //exemplo de for
 for ($idade = 0; $idade <= 20; $idade++){
    if ($idade > 18){
        echo "idade: $idade Pode fazer faculdade </br>";
    } else {
        echo "idade: $idade voce precisa terminar a escola </br>";
    }
}
?>