<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario 4</title>
</head>
<body>
    <form method="post">
        <label >Digite um nome:</label>
        <input type="text" name="nome">
        <button type="submit">Enviar</button>
        <br><br>
         <label >Digite segundo nome:</label>
        <input type="text" name="nome1">
        <button type="submit">Enviar</button>
        <br><br>
         <label >Digite terceiro nome:</label>
        <input type="text" name="nome2">
        <button type="submit">Enviar</button>
        <br><br>
    </form>

    <?php 
        $list = [];

            if (isset($_POST["nome"])) {
            $list[] = $_POST["nome"];
            }

            if (isset($_POST["nome1"])) {
            $list[] = $_POST["nome1"];
            }

            if (isset($_POST["nome2"])) {
            $list[] = $_POST["nome2"];
            }

            // Mostrar o array
                print_r($list);
    ?>
     
    
</body>
</html>