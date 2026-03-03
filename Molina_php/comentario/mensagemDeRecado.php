<?php
// Caminho do arquivo JSON
$arquivo = 'recados.json';

// Inicializa feedback
$mensagem = '';
$erro = '';

// Reiniciar: apagar todos os recados
if (isset($_POST['reiniciar'])) {
    if (file_exists($arquivo)) unlink($arquivo);
    $mensagem = 'Todos os recados foram apagados.';
}

// Envio do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['reiniciar'])) {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $msg = trim($_POST['msg'] ?? '');
    $use_terms = isset($_POST['use_terms']);

    // Validação
    if (empty($nome)) {
        $erro = 'O campo nome é obrigatório.';
    } elseif (empty($msg)) {
        $erro = 'O campo recado é obrigatório.';
    } elseif (!$use_terms) {
        $erro = 'Você deve aceitar os termos de uso.';
    } else {
        // Lê recados existentes
        if (file_exists($arquivo)) {
            $recados = json_decode(file_get_contents($arquivo), true);
        } else {
            $recados = [];
        }

        // Adiciona novo recado
        $recados[] = [
            'nome' => $nome,
            'email' => $email,
            'msg' => $msg,
            'data' => date('d/m/Y H:i:s')
        ];

        // Salva de volta no arquivo
        file_put_contents($arquivo, json_encode($recados, JSON_PRETTY_PRINT));
        $mensagem = 'Seu recado foi enviado com sucesso!';
    }
}

// Lê recados para exibição
if (file_exists($arquivo)) {
    $recados = json_decode(file_get_contents($arquivo), true);
} else {
    $recados = [];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recados PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #1c1c1c; color: #f1f1f1; }
        .form-control, .form-check-label { color: #f1f1f1; }
        .form-control { background-color: #333; border-color: #555; }
        .list-group-item { background-color: #222; color: #f1f1f1; border-color: #444; }
        a { color: #4db8ff; }
        a:hover { color: #66ccff; }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Gostaria de deixar um recado?</h2>

    <!-- Feedback -->
    <?php if($erro): ?>
        <div class="alert alert-danger"><?= $erro ?></div>
    <?php elseif($mensagem): ?>
        <div class="alert alert-success"><?= $mensagem ?></div>
    <?php endif; ?>

    <!-- Formulário de recado -->
    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Seu nome *</label>
            <input type="text" name="nome" id="nome" class="form-control" maxlength="60" value="<?= htmlspecialchars($_POST['nome'] ?? '') ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" maxlength="120" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
        </div>
        <div class="mb-3">
            <label for="msg" class="form-label">Recado *</label>
            <textarea name="msg" id="msg" class="form-control" maxlength="900" rows="3" required><?= htmlspecialchars($_POST['msg'] ?? '') ?></textarea>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="use_terms" name="use_terms" required>
            <label class="form-check-label" for="use_terms">
                Declaro que li e concordo com os <a href="#">Termos de uso</a> e <a href="#">Política de Privacidade</a>.
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar recado</button>
        <button type="submit" name="reiniciar" class="btn btn-danger ms-2">Apagar todos os recados</button>
    </form>

    <!-- Recados enviados -->
    <?php if(!empty($recados)): ?>
        <hr class="my-4" style="border-color:#555;">
        <h3>Recados enviados:</h3>
        <ul class="list-group mt-3">
            <?php foreach($recados as $r): ?>
                <li class="list-group-item">
                    <strong><?= htmlspecialchars($r['nome']) ?></strong> (<?= htmlspecialchars($r['data']) ?>)<br>
                    <?= nl2br(htmlspecialchars($r['msg'])) ?>
                    <?php if($r['email']): ?><br><em><?= htmlspecialchars($r['email']) ?></em><?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
</body>
</html>