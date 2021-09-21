<?php
  include 'dbcon.php';
 
  $sql = 
  "SELECT * FROM events 
  LEFT JOIN venues on events.venue_id  = venues.venue_id 
  LEFT JOIN organisers on organisers.organiser_id = events.organiser_id";

  $events = $conn->query($sql);

  // Create a new event
  if(isset($_REQUEST['new_event'])){
    $name = $_REQUEST['eventname'];
    $date = $_REQUEST['eventdate'];
    $desc = $_REQUEST['eventdesc'];
    $vid = $_REQUEST['vid'];
    $oid = $_REQUEST['oid']; 

    echo $name;

    $insert = "INSERT INTO events(event_name, event_date, event_desc, venue_id, organiser_id) 
    VALUES('$name', '$date', '$desc', '$vid', '$oid')";

    mysqli_query($conn, $insert);

    header("Location: index.php");
    exit();
  }
  

  $conn->close();

?>
