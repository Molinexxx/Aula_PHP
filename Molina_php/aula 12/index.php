<?php include "header.php";?>
<main class="container my-5 text-center flex-grow-1">
    <h1 class="display-4 ">Bem vindos ao site</h1>
    <p class="lead">Aprendendo Bootstrap e PHP</p>
    <a href="#" class="btn btn-primary">ver mais</a>
</main>
<div class="container">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/dog.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/cat.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/DragonRed.jpg" class="d-block w-100" alt="...">
            </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>
<div class="container my-5">
  <div class="row justify-content-center gap-4">

    <div class="card" style="width: 18rem;">
        <img src="./img/morcego.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Morcego da transiuvania</h5>
            <p class="card-text">Este morcego frugívoro de nariz tubular (Nyctimene albiventer), que se tornou uma sensação na internet, é apenas uma das quase 200 espécies encontradas durante duas expedições científicas à Papua Nova Guiné, em 2009. 
                Embora tenha sido observado em expedições anteriores, o morcego foi documentado como uma nova espécie. </p>
            <a href="https://www.nationalgeographicbrasil.com/animais/conheca-os-13-animais-mais-raros-do-mundo" class="btn btn-primary">Click para saber mais</a>
        </div>
        </div>
        <div class="card" style="width: 18rem;">
                <img src="./img/porcoDaIndia.jpg" class="card-img-top" width="30" >
                <div class="card-body">
                    <h5 class="card-title">Aardvark </h5>
                    <p class="card-text">Alimenta-se principalmente de insetos como cupins e formigas, sendo noturnos e podendo ser vistos  ao anoitecer e ao amanhecer. Com um comportamento muito semelhante aos nossos tamanduás, é um animal que pode atingir grandes proporções chegando a quase 2 metros  e pesando quase 80 quilos. </p>
                    <a href="https://www.instagram.com/p/CrS0j8lInxs/?img_index=3" class="btn btn-primary">Click para saber mais</a>
                </div>
         </div>
    </div>
</div>
<?php include "footer.php"; ?>