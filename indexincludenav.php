<?php
  include "logic.php";
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  </head>
  <body>
    <!-- Nav bar -->
   <?php
    include 'nav.php'
   ?>
    <br>


    <div class="row">
      <?php foreach($events as $event){?>
        <div class="col-lg-4 d-flex justify-content-center">
          <div class="card text-white bg-dark mt-5" style="width: 18rem;">
            <div class="card-body">
              <h3 class="card-title"><?php echo $event["event_name"] ?></h3>
              <p class="card-text">Date:<br><?php echo $event["event_date"] ?></p>
              <p class="card-text">Venue:<br><?php echo $event["venue_name"] ?><br>
              <?php echo $event["venue_address"] ?> </p>
              <p class="card-text">Tickets:<br><?php echo $event["venue_capacity"] ?></p>
              <p class="card-text">Information:<br>
              <?php echo $event["event_desc"] ?></p>
              <p class="card-text">Contact:<br>
              <?php echo $event["organiser_name"] ?> - 
              <?php echo $event["organiser_email"] ?></p>
            </div>
          </div>
        </div>
        <?php } ?>
    </div>

    <!-- Bootstrap JavaScript bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>



