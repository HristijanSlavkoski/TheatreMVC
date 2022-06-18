
<?php
   require APPROOT . '/views/includes/head.php';
?>
<div id="section-landing">
<?php
   require APPROOT . '/views/includes/navigation.php';
?>
<?php
$idCats = array_column($data, 'Name');
for ($x = 0; $x <= 2; $x++) {
    echo  $idCats[$x];
  }
  ?>
