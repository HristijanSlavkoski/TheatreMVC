<!DOCTYPE html>
<html lang="en">
   <?php
      require APPROOT . '/views/includes/head.php';
   ?>
   <!--
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Actors</title>
   </head>
-->
   <body>
      <?php
         require APPROOT . '/views/includes/navigation.php';
      ?>
      <div class="list">
         <div>
            
         </div>
         <table width="100%" border="1px">
            <tr>
               <th>Наслов</th>
               <th>Жанр</th>
               <th>Датум на изведување</th>
               <th>Време на изведување</th>
               <th>Времетраење</th>
               <th></th>
            </tr>
            <?php
               $title = array_column($data, 'title');
               $genre = array_column($data, 'genre');
               $date = array_column($data, 'date');
               $time = array_column($data, 'time');
               $duration = array_column($data, 'duration');
               $imageUrl = array_column($data, 'imageUrl');
               for ($i = 0; $i < count($title); $i++) {
            ?>
            <tr align="center">
               <td><?php echo $title[$i];?></td>
               <td><?php echo $genre[$i]; ?></td>
               <td><?php echo $date[$i];?></td>
               <td><?php echo $time[$i]; ?> година</td>
               <td><?php echo $duration[$i];?> минути</td>
               <td><?php echo "<img src=".$imageUrl[$i]." alt=\"ShowPoster\" width=\"100\" height=\"100\">"; ?></td>
            </tr>
            <?php
               }
            ?>
         </table>        
      </div>
   </body>
</html>
