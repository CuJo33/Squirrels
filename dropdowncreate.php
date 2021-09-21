<?php 
include 'logic.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Event</title>
  <!-- Bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

  <?php
    include 'nav.php'
  ?>

  <div class="row">
    <div class="col-lg-4 d-flex justify-content-center">
      <div class="card text-dark bg-light mt-5" style="width: 18rem;">
        <div class="card-body">
          <form method="POST">
            <label for="eventname"> Event Name:</label><br>
            <input type="text" name="eventname"> <br><br>
            <label for="eventdate"> Event Date:</label><br>
            <input type="date" name="eventdate"> <br><br>
            <label for="eventdesc"> Event Description:</label><br>
            <input type="textarea" name="eventdesc"> <br><br>
            <!-- <label for="vid"> Venue:</label><br>
            <input type="text" name="vid"> <br><br>
            <label for="oid"> Organiser:</label><br>
            <input type="text" name="oid"> <br><br> -->

            <label for="vid"> Venue:</label><br>
            <select name="vid">
              <?php foreach($voptions as $option){
                echo "<option value=$option[venue_id]> $option[venue_name] </option>";
              } ?>
            </select><br><br>

            <label for="oid"> Organiser:</label><br>
            <select name="oid">
              <?php foreach($ooptions as $option){
                echo "<option value=$option[organiser_id]> $option[organiser_name] </option>";
              } ?>
            </select><br><br>

            <button class="btn btn-dark" name="new_event">Add Post</button>
          </form>  
        </div>
      </div>
    </div>
  </div>

</body>
</html>