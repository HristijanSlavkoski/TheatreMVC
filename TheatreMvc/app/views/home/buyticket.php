<!DOCTYPE html>
<html lang="en">
<?php
         require APPROOT . '/views/includes/navigation.php';
      ?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/media/buyticket.css">
   
  </head>
  <body>
    <div class="movie-container">
      <label> Избери претстава:</label>
      <select id="movie">
        <?php $title = array_column($data, 'title');
          
         
        ?>
        
        <option value="220"><?php echo $title[0];  ?></option>
        <option value="320"><?php echo $title[1];  ?></option>
        <option value="250"><?php echo $title[2];  ?></option>
        <option value="260"><?php echo $title[3];  ?></option>
        
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
     
     
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>
    <div class="container">
      <div class="screen"></div>

      <div class="row">
        <form   action="<?php  ?>https://localhost/TheatreMVC/TheatreMvc/public/shows/buyticket">
         
        <button type="submit" class="seat" id="2" name="1" value=2>

        </form>
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">

      </div>

      <div class="row">
      <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">>
       
      </div>
      <div class="row">
      <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
      </div>
      <div class="row">
      <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
      </div>
      <div class="row">
      <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
      </div>
      <div class="row">
      <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
        <button type="submit" class="seat">
      </div>
    </div>

    <p class="text">
      <?php  echo $data[5] ?>
   
     
    
    
  </body>
</html>