<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>aula 11</title>
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="./img/logo_santander.png" alt="santander" width="30" height="34">
    </a>
  </div>
</nav>
    <h1 class="text-center">bootstrap</h1>
    <!-- Boostrap javaScriptx -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <div class="text-center">
        <h2>Site de viagens</h2>
        <p>Conheça os principais destinos</p>
        <button class="btn active"> Saiba Mais </button>
  </div>
  <div class="spinner-border " role="status">
  <span class="visually-hidden">Loading...</span>
</div>
  <div class="conteiner m-5">
    <div class="row">
            <div class="col-md-4">
                <!-- card 01 -->
                 <div class="card">
                    <img src="./img/alogoinha.jpg" class="card-img-top" width="100" height="450">
                    <div class="card-body">
                        <strong class="card-title"> Viagem para alagoinha</strong>
                        <p class="card-text"> Alagoinha, localizada no Brejo Paraibano, é um destino encantador que mistura história, cultura rural e belezas naturais, fazendo parte da rota cultural "Raízes do Brejo". É conhecida por ser uma cidade hospitaleira, limpa e com um ritmo tranquilo, ideal para quem busca fugir do turismo de massa. </p>
                        <button class="btn btn-primary" id="liveAlertBtn"> Click aqui</button>
                    </div>
                 </div>
            </div>
            <div class="col-md-4">
                <!-- card 01 -->
                 <div class="card">
                    <img src="./img/amapa.jpeg" class="card-img-top" width="100" height="450">
                    <div class="card-body">
                        <strong class="card-title"> Viagem Para Amapa</strong>
                        <p class="card-text"> Uma viagem ao Amapá oferece uma imersão única na natureza amazônica, com o estado sendo considerado um dos mais preservados do Brasil. Localizado no extremo norte, destaca-se por experiências como cruzar a linha do Equador no Marco Zero, visitar a Fortaleza de São José de Macapá, explorar as cachoeiras de Santo Antônio e observar a pororoca. </p>
                        <button class="btn btn-primary"> Click aqui</button>
                    </div>
                 </div>
            </div>
            <div class="col-md-4">
                <!-- card 01 -->
                 <div class="card">
                    <img src="./img/rondonia.jpg" class="card-img-top" width="100" height="450">
                    <div class="card-body">
                        <strong class="card-title"> Viagem Para Rondonia</strong>
                        <p class="card-text"> Uma viagem a Rondônia é uma imersão na natureza exuberante da Amazônia, combinada com a rica história da construção da Estrada de Ferro Madeira-Mamoré. O estado tem se destacado como um destino crescente de ecoturismo e turismo de aventura. </p>
                        <button class="btn btn-primary"> Click aqui</button>
                    </div>
                 </div>
            </div>
            <div class="col-md-4">
                <!-- card 01 -->
                 <div class="card">
                    <img src="./img/natal.jpeg" class="card-img-top" width="100" height="450">
                    <div class="card-body">
                        <strong class="card-title"> Viagem para Natal</strong>
                        <p class="card-text"> Natal, localizada no Rio Grande do Norte, foi fundada em 25 de dezembro e por isso não havia nenhum nome que melhor representasse a pequena capital potiguar a não ser o nome escolhido! Localizada na "esquina" do Brasil, Natal fica em um ponto estratégico do nosso continente, cercada pelas mais variadas belezas naturais e por um ventinho constante. Ela é digna do título de “cidade grande”, mas tem aquele clima aconchegante de uma pequena capital, que cresce e muda constantemente. Considerada um dos melhores destinos do Nordeste, Natal tem passeios e praias lindas em qualquer época do ano!</p>
                        <button class="btn btn-primary"> Click aqui</button>
                    </div>
                 </div>
            </div>
    </div>
    
</div>
    <footer class="bg-dark text-white text-center mt-5">
        <p>Direitos reservados - MolinaDev😎</p>
    </footer>
</body>
</html>