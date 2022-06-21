
<?php
   require APPROOT . '/views/includes/navigation.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Actors</title>
   </head>
   <body>
      <div class="list">
         <div class="item">
            <?php
               require APPROOT . '/views/includes/head.php';
               $idCats = array_column($data, 'ImageUrl');
               echo "<img src=".$idCats[0]." alt=\"AKTERKA\" width=\"500\" height=\"600\"";
            ?>
         </div>
      </div>
   </body>
</html>
