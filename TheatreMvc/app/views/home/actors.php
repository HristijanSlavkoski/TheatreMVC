<!DOCTYPE html>
<html lang="en">
   <?php
      require APPROOT . '/views/includes/head.php';
   ?>
   <body>
      <?php
         require APPROOT . '/views/includes/navigation.php';
      ?>
      <div class="list">
         
         <table width="100%" border="1px">
            <tr>
               <th>Име</th>
               <th>Презиме</th>
               <th></th>
            </tr>
            <?php
               $firstName = array_column($data, 'Name');
               $lastName = array_column($data, 'Surname');
               $imageId = array_column($data, 'ImageUrl');
               for ($i = 0; $i < count($firstName); $i++) {
            ?>
            <tr align="center">
               <td><?php echo $firstName[$i];?></td>
               <td><?php echo $lastName[$i]; ?></td>
               <td><?php echo "<img src=".$imageId[$i]." alt=\"ActorShow\" width=\"100\" height=\"100\">"; ?></td>
            </tr>
            <?php
               }
            ?>
         </table>        
      </div>
   </body>
</html>
