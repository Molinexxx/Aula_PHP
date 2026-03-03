<?php 
/*
Autor: Kaua Molina
Projeto: Jogo da Memória
Data: 26/02/2026
Descrição: Jogo de memória em PHP com emojis
*/
session_start();
// Se clicou em reiniciar, destrói a sessão e recarrega
if (isset($_POST['reiniciar'])) {
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (!isset($_SESSION['cartas'])) {
    $cartas=['😎', '😎', '🪐', '🪐', '🚀', '🚀', '🧬', '🧬','🍕','🍕','😍','😍']; // exemplo simples, emoji das cartas
    shuffle($cartas); // embaralha as cartas
    $_SESSION['cartas'] = $cartas; // salva as cartas na sessão
    $_SESSION['cartasViradas'] = array_fill(0, count($cartas), false); // inicializa o estado das cartas como viradas para baixo
    $_SESSION['achadas']= [];  // cartas já encontradas
    $_SESSION['tentativas'] = 0; // contador de tentativas
    $_SESSION['primeira']= null;
} 
    
if (isset($_POST['carta'])) {
     $indice = (int)$_POST['carta'];

        if ($_SESSION['primeira'] === null) {
            // Se ainda não escolheu a primeira carta, salva o índice
             $_SESSION['primeira'] = $indice;
        } else {
        // Segunda carta escolhida, aumenta tentativas
         $_SESSION['tentativas']++;

        $primeira = $_SESSION['primeira'];
        $segunda = $indice;

        // Compara as cartas
        if ($_SESSION['cartas'][$primeira] == $_SESSION['cartas'][$segunda]) {
            // Par correto, marca como achado
            $_SESSION['achadas'][] = $primeira;
            $_SESSION['achadas'][] = $segunda;
            $_SESSION['primeira'] = null;
        } else {
            $_SESSION['segunda'] = $segunda; // Não limpa ainda
            }
        }
}
 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo da Memória</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div class="mt-5 mx-auto p-2 text-center" >
            <h1>Jogo da Memória</h1>
            <p>Tentativas: <?php echo $_SESSION['tentativas']; ?></p>
            <form method="post" style="margin-top:20px;">
                <button class="btn btn-danger" type="submit" name="reiniciar" value="1">
                    Reiniciar Jogo
                </button>
            </form>
            <div class="tabuleiro">
                <?php 
                $mostrar = [];
                     if (isset($_SESSION['primeira'])) $mostrar[] = $_SESSION['primeira'];
                     if (isset($_SESSION['segunda'])) $mostrar[] = $_SESSION['segunda'];
                for ($i = 0; $i < count($_SESSION['cartas']); $i++): ?>
                    <form method="post" style="display:inline;">
                        <button class="carta" type="submit" name="carta" value="<?= $i ?>">
                          <?php
                            
                                if (in_array($i, $_SESSION['achadas']) || in_array($i, $mostrar)) {
                                    echo $_SESSION['cartas'][$i];
                                } else {
                                     echo "?";
                                }
                            ?>
                        </button>
                    </form>
                <?php endfor; ?>
            </div>
            <script>
                <?php if(isset($_SESSION['segunda'])): ?>
                    setTimeout(function() {
                        // Recarrega a página para virar as cartas de volta
                        window.location = window.location.href;
                    }, 1000); // 1 segundo para ver as duas cartas
                <?php 
                    // Depois do reload, limpar segunda carta
                    if (isset($_SESSION['segunda'])) {
                        $segundaTemp = $_SESSION['segunda'];
                        unset($_SESSION['segunda']);
                        $_SESSION['primeira'] = null;
                    }
                endif; ?>
            </script>
            <!-- Assinatura visível -->
            <footer style="margin-top:30px; font-size:0.8em; color:gray;">
                DevelopedByMolina &copy; 2026
            </footer>

        </div>
        
    </body>
</html>