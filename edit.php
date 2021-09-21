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
      <?php foreach($list as $event){?>
        <div class="col-lg-4 d-flex justify-content-center">
          <div class="card text-white bg-dark mt-5" style="width: 18rem;">
            <div class="card-body">
              <form method="POST">
                <input type="text" hidden value='<?php echo $event['event_id']?>' name="id">
                <label for="eventname"> Event Name:</label><br>
                <input type="text" name="eventname" value='<?php echo $event["event_name"] ?>'> <br><br>
                <label for="eventdate"> Event Date:</label><br>
                <input type="date" name="eventdate" value='<?php echo $event["event_date"] ?>'> <br><br>
                <label for="eventdesc"> Event Description:</label><br>
                <input type="textarea" name="eventdesc" value='<?php echo $event["event_desc"] ?>'> <br><br>
                <label for="vid"> Venue:</label><br>
                <select name="vid" value='<?php echo $event["venue_id"] ?>'>
                  <?php foreach($voptions as $option){
                    if($option['venue_id']==$event['venue_id']){
                      echo "<option value=$option[venue_id] selected='selected'> $option[venue_name] </option>";
                    }else{
                      echo "<option value=$option[venue_id]> $option[venue_name] </option>";
                    }
                  } ?>
                </select><br><br>
                <label for="oid"> Organiser:</label><br>
                <select name="oid" value='<?php echo $event["organiser_id"] ?>' >
                  <?php foreach($ooptions as $option){
                    if($option['organiser_id']==$event['organiser_id']){
                      echo "<option value=$option[organiser_id] selected='selected'> $option[organiser_name] </option>";
                    }
                      echo "<option value=$option[organiser_id]> $option[organiser_name] </option>";
                  } ?>
                </select><br><br>
              <button class="btn btn-dark" name="update">Update</button>    
              </form>  
            </div>
          </div>
        </div>
        <?php } ?>
    </div>

    <!-- Bootstrap JavaScript bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>



