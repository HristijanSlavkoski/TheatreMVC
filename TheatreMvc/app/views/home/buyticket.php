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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <div class="movie-container">
      <label> Избери претстава:</label>
      <select id="movie">
        <?php $title = array_column($data, 'title');
          for ($i = 0; $i < count($title); $i++) {
            echo "<option>" . $title[$i] . "</option>";
          }
        ?>
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat-selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat-sold"></div>
        <small>Sold</small>
      </li>
    </ul>
    <div class="container">
      <div class="screen">
      </div>
      <?php
        for ($i = 0; $i < 6; $i++) {
          ?> 
          <div class="row">
            <?php
              for ($j = 0; $j < 8; $j++) {
                ?>
                  <button id="<?php echo (8*$i+$j+1); ?>" class="<?php 
                     $a=(end($data)[8*$i+$j]->seat_boolean);
                     if($a==0)
                     {
                      echo "seat";
                     } 
                     else {
                      echo "seat-sold";
                     } ?>" onclick="reserveSeat(this)"></button>
                <?php
              }
            ?>
          </div>
          <?php
        }
      ?>
    </div>
    <button id="reserveSeats" onclick="reserveSeats()">Резервирај бители</button>
    <p class="text">
   
    </p>
  </body>
</html>




<script>  
  function reserveSeat(seat) {
    seat.classList.toggle("seat-selected");
  }

  function reserveSeats() {
    seats = document.getElementsByClassName("seat-selected");
    var seatNumbers = [];
    //We don't get the first, because the first element is the demo div without id
    for (var i=1; i<seats.length; i++){
      seatNumbers[i-1] = seats[i].id;
    }
    let seatNumbersString = seatNumbers.join(',');
    console.log(seatNumbersString);
    $.ajax({
      type: 'POST',
      url: '<?php echo URLROOT;?>/public/shows/buyticket',
      //url: '../controllers/shows.php',
      data: {seatNumbersString: seatNumbersString},
      success: function (data) {
        location.reload()
       
      },
      error: function (xhr, status, error) {
        alert("ERROR");
      }
    });
  }

</script>