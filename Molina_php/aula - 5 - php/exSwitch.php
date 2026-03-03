<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo Switch</title>
</head>
<body>
    <h1>Switch 01</h1>

    <form method="post">  
        <label> digite um numero  (1 a 7|)</label> <!-- texto na tela -->
        <br><br> <!-- pula linha -->
        <input type="number" name="numero"> <!-- tipo da escrita -->
        <button type="submit"> Enviar</button> <!-- botao de enviar -->
    </form>

    <?php
        // essa condicao e para verificar se ele digitou um numero
        if (isset($_POST["numero"])) 
         {
            $numero = $_POST["numero"]; //variavel sitando o numero

                switch( $numero ) 
                {
                case 1:
                    echo "domingo"; // caso for 1 irar escreve isso
                    break;
                case 2:
                    echo "voce digitou o numero 2";
                    break;
                case 3: 
                    echo "digitou o numero 3";
                    break;
                default:
                    echo "invaido";
                }
        }

    ?>
</body>
</html> 