<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>exemplo 3 </title>
</head>
<body>
    <h1>Digite o valor para saber da tabuada</h1>
    <!-- Criando formulario -->
    <form method="post">
        <input type="number" name="numero">
        <button type= "submit">Gerar tabuada</button>
    </form>
    <!-- PHP -->

    <?php
        if (isset($_POST["numero"]))
        {
            $numero_digitalizado = $_POST["numero"];
            $tabuada = 0;

            while ( $tabuada <= 10 )
            {
                echo "$numero_digitalizado x $tabuada = " . ( $numero_digitalizado * $tabuada ). "<br>";
                $tabuada ++;    
            }
        }
    
    
    
    
    
    ?>
</body>
</html>