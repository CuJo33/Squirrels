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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Events App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Manage Events</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
      $events = array( 
        array("event_name" =>  "Exciting event", "event_desc" => "This is some exciting details about the event "),
        array("event_name" => "Another exciting event", "event_desc" => "This is some more exciting news about another event, so exciting I wrote about it on the app ")
      );
    ?>

    <?php
      echo $events[0]["event_name"];
    ?>

    <?php 
      foreach($events as $event){
        echo $event["event_name"];
      }
    ?>

    <div class="row">
      <div class="col-lg-4 d-flex justify-content-center">
        <div class="card text-white bg-dark mt-5" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $event_name ?></h5>
            <p class="card-text"><?php echo $event_desc ?></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JavaScript bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>



