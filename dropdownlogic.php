<?php
  include 'dbcon.php';
 
  //get events  
  $sql = 
  "SELECT * FROM events 
  LEFT JOIN venues on events.venue_id  = venues.venue_id 
  LEFT JOIN organisers on organisers.organiser_id = events.organiser_id";

  $events = $conn->query($sql);

  //get venue options
  $getvoptions = 
  "SELECT * FROM venues";

  $voptions = $conn->query($getvoptions); 

  //get organiser options
  $getooptions = 
  "SELECT * FROM organisers";
  $ooptions = $conn->query($getooptions); 

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
