<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cotagem ata 100</title>
</head>
<body>
    <h1> Contagem Creciva </h1>
    <h2> Objetivo Chegar ate 100</h2>

    <form method="post">
        <Label>Digite o numero para contar ate o numero pedido </Label>
        <br><br>
        <input type= "number" name= "numero">
        <button typer="submit">Iniciar a contagem!</button>
    </form>

    <?php 
     if (isset($_POST[!"numero"]));

        $contador = 0;
        $escritor = $_POST["numero"];

        while ($contador <= $escritor)
        {
    
           echo $contador . "<br>";
           $contador++; 

             
        }    

    
    
    
    ?>
</body>
</html>