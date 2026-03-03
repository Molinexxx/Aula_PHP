<!-- Apenas Estudo -->

<?php 
$file = "tasks.json";

// Criar arquivo se não existir
if (!file_exists($file)){
    file_put_contents($file, json_encode([]));
}

// Carregar tarefas
$tasks = json_decode(file_get_contents($file), true);

if (!is_array($tasks)) {
    $tasks = [];
}

// Adicionar tarefa
if(isset($_POST['add'])){
    $title = trim($_POST['title']);

    if($title !== ""){
        $tasks[] = [
            "id" => time(),
            "title" => $title,
            "done" => false
        ];

        file_put_contents($file, json_encode($tasks));
    }

    header("Location: index.php");
    exit;
}

// Alternar status via checkbox
if (isset($_POST['toggle'])) {

    $id = $_POST['toggle'];

    foreach ($tasks as &$task) {
        if ($task['id'] == $id) {
            $task['done'] = !$task['done']; // inverte o status
        }
    }

    file_put_contents($file, json_encode($tasks));
    header("Location: index.php");
    exit;
}

// Deletar tarefa
if (isset($_GET['delete'])) {

    $tasks = array_filter($tasks, function ($task) {
        return $task['id'] != $_GET['delete'];
    });

    file_put_contents($file, json_encode(array_values($tasks)));
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Todo List PHP molina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-center">
            <h3>Minha Todo List</h3>
        </div>
        <div class="card-body">

            <!-- Formulário -->
            <form method="POST" class="d-flex mb-3">
                <input type="text" name="title" class="form-control me-2" placeholder="Nova tarefa..." required>
                <button name="add" class="btn btn-primary">Adicionar</button>
            </form>

            <!-- Lista -->
            <ul class="list-group">
                <?php foreach ($tasks as $task): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">

                        <form method="POST" class="d-flex align-items-center w-100">

                            <!-- Checkbox -->
                            <input 
                                type="checkbox" 
                                name="toggle" 
                                value="<?= $task['id'] ?>" 
                                onchange="this.form.submit()"
                                class="form-check-input me-2"
                                <?= $task['done'] ? 'checked' : '' ?>
                            >

                            <!-- Título -->
                            <span class="flex-grow-1">
                                <?= $task['done'] 
                                    ? '<s>' . htmlspecialchars($task['title']) . '</s>' 
                                    : htmlspecialchars($task['title']) ?>
                            </span>

                        </form>

                        <!-- Botão delete -->
                        <a href="?delete=<?= $task['id'] ?>" 
                           class="btn btn-danger btn-sm ms-2">
                           ✖
                        </a>

                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>

</body>
</html>