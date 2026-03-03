<?php   
/* Operador &&  AND ( EXEMPLO ) 
if ($idade >= 18 && $idade <= 65) {
    echo "Pode trabalhar";
}

// Operador || OR ( EXEMPLO  )

if ($temCarteirinha || $éAluno) {
    echo "Entrada liberada";
}
*/
//ex1

$nota = 10; 
$frequencia = 20;

if ($nota && $frequencia > 6 ){
    echo " <br> o aluno foi aprovado";
} else {
    echo "o aluno foi reprovado";
}


//ex2 

$temIngresso = 1; 
$estaNaListaVip = 1;

if ($temIngresso || $estaNaListaVip == 1){
    echo "<br> Sua entrada esta permitida";
} else {
    echo "sua entrada nao estar permitida";
}

//ex3

$login = "admin";
$senha = 1234; 

if ($login && $senha = "admin" && 1234) {
    echo "<br>seu login e valido";

} else {
    echo "seu login nao e valido";
}
//ex 4 

$estudant = "esta estudando"; 
$idoso = 65;

if ($estudante = "esta estudando" && $idoso >= 60){
    echo "<br> ela ganha desconto"; 
} else {
    echo "ela nao tem desconto";
}


?>