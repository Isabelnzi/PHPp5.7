<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>P5ex7</title>
  </head>
  <body>
    <p>
  <?php
     $tableau = array ('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise','62' => 'Pas-de-Calais', '80 '=> 'Somme');
     $tableau['51'] = 'Marne';
     //echo $tableau

     foreach ($tableau as $departmentNumber => $departmentName){
        echo 'Département n°' . $departmentNumber . ' : ' . $departmentName;
     }
     ?>
</p>
</body>
