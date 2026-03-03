<?php 
function post($chave){
    $valor = $_POST[$chave];
    $valor = str_replace("'", "", $valor);
    return $valor;
}

function get($chave){
    $valor = $_GET[$chave];
    $valor = str_replace("'", "", $valor);
    return $valor;
}

function trim_campos(array $dados ){
    foreach ($dados as $chave => $valor){
        $dados[$chave] = trim($valor);
    }
    return $dados;
}


$exemplo = ["teste"];

$resultado = trim_campos($exemplo);

print_r($resultado);


?>