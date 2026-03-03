<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"></head>
</head>
<body>
    <form method="POST">

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>


        <button class="btn btn-primary">Verificar</button>

    </form>

    <hr>

    <h3>Resultado:</h3>

    <?php 
        isset($_POST["nome"]);
        $nome = $_POST["nome"];
        echo "Ola, ", $nome;

     ?>

    
</body>
</html>