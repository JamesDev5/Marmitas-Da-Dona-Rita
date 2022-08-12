<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/stylePages.css">
      <link rel="stylesheet" href="../css/style.css">
      <title>Marmita de Feijoada</title>
</head>

<body>
      <?php
      include '../layouts/cabecalho.php';
      ?>
      <img src="../img/feijoada.jpg" alt="">
      <table>

            <?php
            $marmitas = array(
                  array(
                        'Nome' => 'Marmita de Feijoada ',
                        'Tamanho' => 'P',
                        'Valor' => 'R$ 10,0',
                        'Ingredientes' =>  ' Feijão Preto, Linguiça Calabresa,Bacon, Cebola, Alho,Orelha de Porco,Tomate,Cheiro-Verde.'
                  ),
                  array(
                        'Nome' => 'Marmita de Feijoada ',
                        'Tamanho' => 'M',
                        'Valor' => 'R$ 13,00',
                        'Ingredientes' =>  ' Feijão Preto, Linguiça Calabresa,Bacon, Cebola, Alho,Orelha de Porco,Tomate,Cheiro-Verde.'
                  ),
                  array(
                        'Nome' => 'Marmita de Feijoada ',
                        'Tamanho' => 'G',
                        'Valor' => 'R$ 16,00',
                        'Ingredientes' =>  ' Feijão Preto, Linguiça Calabresa,Bacon, Cebola, Alho,Orelha de Porco,Tomate,Cheiro-Verde.'
                  )
            );

            echo "<thead>";
            echo "<tr>";
            echo "<th>";
            echo "Nome: ";
            echo "</th>";
            echo "<th>";
            echo "Tamanho: ";
            echo "</th>";
            echo "<th>";
            echo "Valor: ";
            echo "</th>";
            echo "<th>";
            echo "Ingredientes: ";
            echo "</th>";

            foreach ($marmitas as $marmita) {

                  echo "<tr>";
                  echo "<td>";
                  echo $marmita["Nome"];
                  echo "</td>";
                  echo "<td>";
                  echo $marmita["Tamanho"];
                  echo "</td>";
                  echo "<td>";
                  echo $marmita["Valor"];
                  echo "</td>";
                  echo "<td>";
                  echo $marmita["Ingredientes"];
                  echo "</td>";
                  echo "</tr>";
            }

            ?>

      </table>
      <?php
      include '../layouts/rodape.php'
      ?>

</body>

</html>