<?php 
function mensagem(){
    echo "Ola, Mundo!";
}

mensagem(); 


function nam($nome){
    echo "<br> seja bem vindo " . $nome;
}

nam("Ronaldo");

function divdi($x , $y){
    echo "<br>" . $x / $y;
}

divdi(10, 5);


function nota($num){
    if ($num <= 7) {
        echo "<br> voce tirou nota baixa";
    } else {
        echo "<br> vc tirou nota alta";
    }
}

nota(8);
nota(3);

function verifcar($nota){
    if ($nota >= 7){
        echo "vc passou de ano";
    } else {
        echo "vc reprovou de ano";
    }
}


verifcar(3);

  $lsit = ["maca" , "cenoura" , "melao" , "melancia " , "cebola" ];

  function contadorFrutas($frutas){
     return count($frutas);
  }
 $frutes = contadorFrutas($lsit);
  if ( $frutes > 10 ) {
    echo "<br> vc comprou muitas frutas";
  } else {
    echo "<brvc compro a quantidade ideal de frutas ";
  }
?>