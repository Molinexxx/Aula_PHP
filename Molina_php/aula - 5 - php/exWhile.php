<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo while</title>
</head>
<body>
    <h1> While 01</h1>

    <h2>Contagem Regressiva</h2>

    <form method="post">
        <label>Digite um numero para contagem regressiva: </label>
        <br><br>
        
        <input type="number" name="numero">
        <button type="submit">Iniciar</button>
    </form>
    <!-- Iniciando o PHP |  -->

    <?php
    if(isset($_POST["numero"]))
        $numero = $_POST["numero"];

        while ($numero >= 0)
        {
            echo $numero . "<br>";
            $numero--; 
        }
    
    
    ?>
</body>
</html>