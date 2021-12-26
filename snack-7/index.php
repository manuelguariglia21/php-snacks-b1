<?php

$alunni = [
  [
    'nome' => 'Manuel',
    'cognome' => 'Guariglia',
    'voti' => [8, 8, 8, 8],
  ],
  [
    'nome' => 'Bettino',
    'cognome' => 'Craxi',
    'voti' => [8, 7, 5, 9],
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>
  <h1>Snack 7</h1>

  <h2>
    <?php 
      echo "<ul>";
      foreach($alunni as $alunno){
        echo "<li>";

        echo "<p>Nome: ";
        echo $alunno['nome'];
        echo "</p>";

        echo "<p>Cognome: ";
        echo $alunno['cognome'];
        echo "</p>";

        echo "<p>Media: ";
        echo round(array_sum($alunno['voti']) / count($alunno['voti']));
        echo "</p>";

        echo "</li>";
      }
      echo "</ul>";
    ?>
  </h2>

</body>
</html>