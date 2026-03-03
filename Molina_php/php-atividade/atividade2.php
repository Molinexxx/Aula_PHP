<!DOCTYPE html>
<html>
<head>
    <title>Exercício PHP - Maioridade</title>

    <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"></head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Verificar Maioridade</h2>

    <!-- FORMULÁRIO -->
    <form method="POST">

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Idade</label>
            <input type="number" name="idade" class="form-control">
        </div>

        <button class="btn btn-primary">Verificar</button>

    </form>

    <hr>

    <h3>Resultado:</h3>

    <?php
       if (isset($_POST["nome"]) && isset($_POST["idade"])) {
            $idade = $_POST["idade"];
            $nome = $_POST["nome"];
            echo "Olá " . $nome . ", você tem " . $idade . " anos";
        }
        if ($idade > 18){
            echo "<br> voce e maior de idade"; 
        } else {
            echo "<br> Voce e menor de idade";
        }
        
    ?>

</div>

</body>
</html>
