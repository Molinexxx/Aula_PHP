<?php 
$mes = 1; 

switch($mes){
    case 1: 
        echo "domingo";
            break;
    case 2: 
        echo "segunda-feira";
            break;
    case 3: 
        echo "terca-feira";
            break;
    case 4:
        echo "quarta-feira";
            break;
    case 5:
        echo "quinta-feira";
            break;
    case 6:
        echo "sexta-feira";
            break;
    case 7:
        echo "sabado";
            break;
    default:
        echo "invalido";

}

//ex 2

$user = 1;

switch($user){

    case 1:
        echo "cadastrar usuario";
        break;
    case 2: 
        echo "editar usuario";
            break;
    case 3:
        echo "excluir usuario";
            break;
    case 4:
        echo "listar usuarios";
            break;
    default:
        echo "invalido";
}
    //ex 3

    $humor = "a"; 

    switch($humor){
        case "a": 
            echo "execelente";
                break;
        case "b":
            echo "bom";
                break;
        case "c": 
            echo "regular";
                break;
        case "d":
            echo "ruim";
                break;
        case "e": 
            echo "reprovado";
                break;
        default:
            echo "invalido";
        
    }

    //ex 4 

    $dias = "m";

    switch($dias){
        case "M":
            echo "Manha";
                break;
        case "T":
            echo "Tarde";
                break;
        case "N":
            echo "Noite";
                break;
    }

