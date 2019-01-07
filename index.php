<?php
$number = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title></title>
</head>
<body>
  <?php while($number <= 10){ ?>
    <p><?= $number ?></p>
    <?php
    $number += ($number / 2);
  }
  ?>
</body>
</html>
