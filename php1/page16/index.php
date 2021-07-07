<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $nilai = ['Matematika' => 80, 'Fisika' => 85, 'Kimia' => 85];

    // Tulis loop foreach dibawah
    foreach($nilai as $key => $value) {
      echo $key ." : ". $value;
      echo '<br>';
    }
    
  ?>

</body>
</html>