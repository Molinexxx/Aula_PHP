
    <?php 
    define("TITULO", "Treinamento PHP I" );
    define("equipe", "PHP Team");

    $nome = "Juliana Almeida";
    
    ?>


<!DOCTYPE html>

<head>
    <title> <?php echo TITULO ?> </title>
</head>
<body>
    <div>
        <p>Olá <?php echo $nome ?>, obragado por ter se cadastrado em nosso sistema, </br>
        clique no link abaixo para confirmar seu cadastro. 
     </p>

     <p>
        <a href="#" alt="exemplo de link"> http://localhost</a>
     </p>

     <p>Atenciosamente, </br> <?php echo equipe ?> </p>

    </div>

</body>
</html>