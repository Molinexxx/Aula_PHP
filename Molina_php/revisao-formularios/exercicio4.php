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
        <br>
    </form>

    <?php 
    $list = ["ana", "Maria", "pedro"];
        if(isset($_POST["nome"])){
            $busca = $_POST["nome"];
                if(in_array($busca,$list)){
                    echo "o nome esta na lista";
                } else {
                    echo "o nome nao esta na lista";
                }
        }
     ?>
    
</body>
</html>