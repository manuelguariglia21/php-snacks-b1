
<?php
$paragraph = 'Scarface è un film del 1983 diretto da Brian De Palma, scritto da Oliver Stone e interpretato da Al Pacino.

Il film è il remake dell\'omonimo lungometraggio del 1932 diretto da Howard Hawks. A differenza dell\'originale ambientato a Chicago durante gli anni del proibizionismo, in questo film, le vicende si svolgono nella Miami degli anni ottanta, allora centro di un considerevole traffico di droga. ';

$newParagraph = str_replace(".", ".</p><p>", $paragraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>
<body>
  <h1>Snack 5</h1>
  <p>
    <?php
    echo $newParagraph;
    ?>
  </p>
</body>
</html>