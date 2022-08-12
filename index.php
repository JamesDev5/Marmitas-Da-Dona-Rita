<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css">
      <title>Document</title>
</head>

<body>
      <?php
      include 'layouts/cabecalho.php'
      ?>

      <div class="imagem-principal">
            <h1>A melhor comida com tempero caseiro, não deixe para amanhã o que se pode comer hoje!!</h1>
            <button class="btn-principal">Venha conferir</button>
      </div>

      <h2>Confira nossas marmitas!</h2>
      <div class="marmitas">

            <div class="card">
                  <img src="img/galinhada.jpg" alt="imagem de uma galinhada">
                  <p>Marmita de galinhada</p>
                  <a href="./pages/galinhada.php" target="_blank"><button class="btn-principal">Mais Detalhes</button></a>
            </div>
            <div class="card">
                  <img src="img/risoto.jpg" alt="imagem de um risoto de camarão">
                  <p>Marmita de risoto de camarão</p>
                  <a href="./pages/risoto.php" target="_blank"><button class="btn-principal"> Mais Detalhes </button></a>
            </div>
            <div class="card">
                  <img src="img/feijoada.jpg" alt="imagem de uma feijoada">
                  <p>Marmita de feijoada</p>
                  <a href="./pages/feijoada.php" target="_blank"><button class="btn-principal">Mais Detalhes</button></a>
            </div>
            <div class="card">
                  <img src="img/vegetariana.jpg" alt="imagem de uma marmita vegetariana">
                  <p>Marmita Vegetariana</p>
                  <a href="./pages/vegetariana.php" target="_blank"><button class="btn-principal">Mais Detalhes</button></a>
            </div>
      </div>

      <?php
      include 'layouts/rodape.php'
      ?>

</body>
</html>