<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/stylePages.css">
      <link rel="stylesheet" href="../css/style.css">
      <title>Marmita de Galinhada</title>
</head>

<body>
      <?php
      include '../layouts/cabecalho.php';
      ?>
      <img src="../img/galinhada.jpg" alt="">
      <table>

            <?php
            $marmitas = array(
                  array(
                        'Nome' => 'Marmita de Galinhada ',
                        'Tamanho' => 'P',
                        'Valor' => 'R$ 8,50',
                        'Ingredientes' =>  ' Peito de frango, Tomate, Cebola, Caldo de Frango,Tomate,Cheiro-Verde.'
                  ),
                  array(
                        'Nome' => 'Marmita de Galinhada ',
                        'Tamanho' => 'M',
                        'Valor' => 'R$ 12,00',
                        'Ingredientes' =>  ' Peito de frango, Tomate, Cebola, Caldo de Frango,Tomate,Cheiro-Verde.'
                  ),
                  array(
                        'Nome' => 'Marmita de Galinhada ',
                        'Tamanho' => 'G',
                        'Valor' => 'R$ 14,00',
                        'Ingredientes' =>  ' Peito de frango, Tomate, Cebola, Caldo de Frango,Tomate,Cheiro-Verde.'
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