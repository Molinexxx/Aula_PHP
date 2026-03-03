
<?php
function calcularIMC($peso, $altura){
    $resultado =  $peso /($altura*$altura); 
    return $resultado;
}

$imc = null;


if(isset($_POST["peso"]) && isset($_POST["altura"])){

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    calcularIMC($peso, $altura);
    $imc = calcularIMC($peso, $altura);

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Calculadora de IMC</h3>
        </div>

        <div class="card-body">

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Peso (kg)</label>
                    <input type="number" step="0.1" name="peso" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Altura (m)</label>
                    <input type="number" step="0.01" name="altura" class="form-control" required>
                </div>

                <button class="btn btn-success w-100">
                    Calcular IMC
                </button>

            </form>

            <?php if($imc): ?>
                <div class="alert alert-info mt-4 text-center">
                    Seu IMC é: <strong><?= number_format($imc, 2) ?></strong>
                </div>
            <?php endif; ?>

        </div>
    </div>

</div>
