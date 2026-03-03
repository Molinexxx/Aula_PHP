<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo Switch</title>
</head>
<body>
     <!-- criar um titulo -->
    <h1>Switch 01</h1> 

    <form method="post">  <!--  para criar um formulario -->
        <label> digite um numero  (1 a 7|)</label> <!-- texto na tela -->
        <br><br> <!-- pula linha -->
        <input type="number" name="numero"> <!-- tipo da escrita -->
        <button type="submit"> Enviar</button> <!-- botao de enviar -->
    </form>

    <?php
       if (isset($_POST["numero"]))
         
        $dias = $_POST["numero"];
        {
            switch ($dias)
            {
                case 1:
                    echo "Domingo";
                    break;
                case 2:
                    echo "segunda-feira";
                    break;
                case 3:
                    echo "terça-feira";
                    break;
                case 4:
                    echo "quarta-feira";
                    break;
                case 5:
                    echo "quinta-feira";
                    break;
                case 6:
                    echo "sexta-feira";
                    break;
                case 7:
                    echo "sabado";
                    break;
                default:
                    echo "dia invalido";
             }
        }
                       
    

    ?>
</body>
</html> 