<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario 3</title>
</head>
<body>
     <form method="POST">

    

        <div class="mb-3">
            <label class="form-label">Idade</label>
            <input type="number" name="idade" class="form-control">
        </div>

        <button class="btn btn-primary">Verificar</button>

    </form>

    <hr>

    <h3>Resultado:</h3>

    <?php
       if (isset($_POST["idade"])) {
            $idade = $_POST["idade"];
            echo "Olá você tem " . $idade . " anos";
        }
        if ($idade > 18){
            echo "<br> voce e maior de idade"; 
        } else {
            echo "<br> Voce e menor de idade";
        }
        
    ?>
    
</body>
</html>