<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/stylePages.css">
      <link rel="stylesheet" href="../css/style.css">
      <title>Marmita de risoto</title>
</head>

<body>
      <?php
      include '../layouts/cabecalho.php';
      ?>
      <img src="../img/risoto.jpg" alt="">
      <table>

            <?php
            $marmitas = array(
                  array(
                        'Nome' => 'Marmita de Risoto de  Camarão ',
                        'Tamanho' => 'P',
                        'Valor' => 'R$ 11,00',
                        'Ingredientes' =>  'Arroz Arbóreo Camarão, alho, Cebola, Caldo de Peixe,Tomate.'
                  ),
                  array(
                        'Nome' => 'Marmita Risoto de  Camarão',
                        'Tamanho' => 'M',
                        'Valor' => 'R$ 13,35',
                        'Ingredientes' =>  ' Arroz Arbóreo Camarão, alho, Cebola, Caldo de Peixe,Tomate.'
                  ),
                  array(
                        'Nome' => 'Marmita de Risoto de  Camarão ',
                        'Tamanho' => 'G',
                        'Valor' => 'R$ 14,50',
                        'Ingredientes' =>  ' Arroz Arbóreo Camarão, alho, Cebola, Caldo de Peixe,Tomate.'
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