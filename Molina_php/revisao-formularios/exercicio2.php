<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario 2</title>
</head>
<body>
    <form method="POST">
        <label>Digite o primeiro numero:</label>
        <br>
        <input type="number" name="num1">
        <br><br>
        <label >Digite o segundo numero: </label>
        <br>
        <input type="number" name="num2">
        <br>
        <button type="submit">Somar </button>
    </form>

    <?php 
        if(isset($_POST["num1"]) && isset($_POST["num2"])){
            $Num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $res = $Num1 + $num2;

            echo "resultado: ", $res;

        }
     ?>
    
</body>
</html>