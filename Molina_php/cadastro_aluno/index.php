<?php
$file = "alunos.json";

// Criar arquivo se não existir
if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
}

// Carregar alunos
$alunos = json_decode(file_get_contents($file), true);

if (!is_array($alunos)) {
    $alunos = [];
}

// Cadastrar aluno
if (isset($_POST['cadastrar'])) {

    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $municipio = trim($_POST['municipio']);
    $cpf = trim($_POST['cpf']);
    $rg = trim($_POST['rg']);
    $data_nascimento = $_POST['data_nascimento']; // já vem no formato yyyy-mm-dd

    if ($nome !== "" && $email !== "" && $municipio !== "" && $cpf !== "" && $rg !== "" && $data_nascimento !== "") {

        $alunos[] = [
            "id" => time(),
            "nome" => $nome,
            "email" => $email,
            "municipio" => $municipio,
            "cpf" => $cpf,
            "rg" => $rg,
            "data_nascimento" => $data_nascimento
        ];

        file_put_contents($file, json_encode($alunos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    header("Location: index.php");
    exit;
}

// Deletar aluno
if (isset($_GET['delete'])) {

    $id = (int) $_GET['delete'];

    $alunos = array_filter($alunos, function ($aluno) use ($id) {
        return (int)$aluno['id'] !== $id;
    });

    file_put_contents($file, json_encode(array_values($alunos), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow mb-4">
        <div class="card-header text-center">
            <h3>Cadastro de Aluno</h3>
        </div>

        <div class="card-body">

            <!-- Formulário -->
            <form method="POST" class="row g-3">

                <div class="col-md-3">
                    <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                </div>

                <div class="col-md-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="col-md-2">
                    <input type="text" name="municipio" class="form-control" placeholder="Município" required>
                </div>

                <div class="col-md-2">
                    <input type="text" name="cpf" class="form-control" placeholder="CPF" required>
                </div>

                <div class="col-md-2">
                    <input type="text" name="rg" class="form-control" placeholder="RG" required>
                </div>

                <div class="col-md-2">
                    <input type="date" name="data_nascimento" class="form-control" required>
                </div>

                <div class="col-md-2">
                    <button name="cadastrar" class="btn btn-primary w-100">Cadastrar</button>
                </div>

            </form>

        </div>
    </div>

    <!-- Lista de alunos -->
    <div class="card shadow">
        <div class="card-header">
            Lista de Alunos
        </div>

        <div class="card-body">

             <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Município</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Data de Nascimento</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alunos as $aluno): ?>
                        <tr>
                            <td><?= htmlspecialchars($aluno['nome']) ?></td>
                            <td><?= htmlspecialchars($aluno['email']) ?></td>
                            <td><?= htmlspecialchars($aluno['municipio']) ?></td>
                            <td><?= htmlspecialchars($aluno['cpf']) ?></td>
                            <td><?= htmlspecialchars($aluno['rg']) ?></td>
                            <td><?= htmlspecialchars($aluno['data_nascimento']) ?></td>
                            <td>
                                <a href="?delete=<?= $aluno['id'] ?>" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>