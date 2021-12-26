<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6</title>
</head>
<style>
  .teachers{
    width: 100%;
    background-color: grey;
  }
  .pm{
    width: 100%;
    background-color: green;
  }
</style>
<body>
  <h1>Snack 6</h1>

  <?php
    foreach($db as $role){
      if(array_keys($db, $role)[0] === 'teachers'){
        echo "<div class='teachers'>";
      }
      if(array_keys($db, $role)[0] === 'pm'){
        echo "<div class='pm'>";
      }
      echo "<h2>";
      echo array_keys($db, $role)[0];
      echo ":</h2>";

      echo "<ul>";
        foreach($role as $singleRole){
          echo "<li>";
          echo $singleRole['name'];
          echo "</li>";
        }
      echo "</ul>";
    }
    echo "</div>";
  ?>
</body>
</html>