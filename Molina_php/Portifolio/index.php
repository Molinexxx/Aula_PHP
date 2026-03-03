<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Meu Portfólio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="#projetos">Projetos</a></li>
                <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<header class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1>Olá, eu sou Kauã Molina</h1>
        <p class="lead">Desenvolvedor Web | Designer | Freelancer</p>
        <a href="#projetos" class="btn btn-light mt-3">Ver meus projetos</a>
    </div>
</header>

<!-- SOBRE -->
<section id="sobre" class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Sobre Mim</h2>
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="img/foto.jpg" class="img-fluid rounded-circle mb-3" alt="Minha Foto">
            </div>
            <div class="col-md-8">
                <p>Sou um desenvolvedor web apaixonado por criar sites modernos, funcionais e responsivos. Tenho experiência em HTML, CSS, JavaScript e PHP, e estou sempre aprendendo novas tecnologias para entregar o melhor resultado aos meus clientes.</p>
            </div>
        </div>
    </div>
</section>

<!-- PROJETOS -->
<section id="projetos" class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-center">Meus Projetos</h2>
        <div class="row g-4">

            <!-- Projeto 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow">
                    <img src="img/projeto1.png" class="card-img-top" alt="Projeto 1">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro aluno</h5>
                        <p class="card-text">Sistema web simples para cadastrar alunos com nome, email, CPF, RG, município e data de nascimento. <br>  
                        Tecnologias: HTML, CSS, PHP, JSON. <br>
                        Com o objetivo de gerenciar e armazenar informações de alunos de forma prática e sem banco de dados. <br></p>
                        <a href="https://github.com/Molinexxx" class="btn btn-primary btn-sm">Ver Projeto</a>
                    </div>
                </div>
            </div>

            <!-- Projeto 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow">
                    <img src="img/Project2.png" class="card-img-top" alt="Projeto 2">
                    <div class="card-body">
                        <h5 class="card-title">Jogo da Memoria</h5>
                        <p class="card-text"> Jogo interativo para treinar memória e concentração, onde o usuário encontra pares de cartas iguais. <br> 
                            Tecnologias: HTML, CSS, JavaScript. <br> 
                            Objetivo: Criar uma experiência divertida e educativa. <br></p>
                        <a href="https://github.com/Molinexxx" class="btn btn-primary btn-sm">Ver Projeto</a>
                    </div>
                </div>
            </div>

            <!-- Projeto 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow">
                    <img src="img/projeto3.jpg" class="card-img-top" alt="Projeto 3">
                    <div class="card-body">
                        <h5 class="card-title">Projeto 3</h5>
                        <p class="card-text">Descrição curta do projeto, tecnologias utilizadas e objetivo.</p>
                        <a href="https://github.com/Molinexxx" class="btn btn-primary btn-sm">Ver Projeto</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTATO -->
<section id="contato" class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Contato</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">

                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Seu Nome" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Seu Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Sua Mensagem" required></textarea>
                    </div>
                    <button class="btn btn-primary w-100">Enviar Mensagem</button>
                </form>

            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    <p>© 2026 Meu Portfólio | Desenvolvido por Kaua Molina</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>