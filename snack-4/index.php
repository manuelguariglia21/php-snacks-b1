<?php
  $numbers = [];
  while(count($numbers) < 15){
    $num = rand(0, 14);
    if(!in_array($num, $numbers)){ 
      array_push($numbers, $num);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>
  <h1>Snack 4</h1>
  <p>
    <?php
    foreach($numbers as $number){
      echo "<h2>";
      echo $number;
      echo "</h2>";
    }
    ?>
  </p>
</body>
</html>