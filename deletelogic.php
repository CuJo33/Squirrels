<?php
  include 'dbcon.php';
 
  $test = 1;
  settype($test, "integer");

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

    $insert = "INSERT INTO events(event_name, event_date, event_desc, venue_id, organiser_id) 
    VALUES('$name', '$date', '$desc', '$vid', '$oid')";

    $conn->query($insert);

    header("Location: index.php");
    exit();
  }
  
  // Get post data based on 
  if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql =
    "SELECT * FROM events
    LEFT JOIN venues on events.venue_id  = venues.venue_id 
    LEFT JOIN organisers on organisers.organiser_id = events.organiser_id
    WHERE event_id=$id";

    $list = $conn->query($sql); 
  }

  // Update a post
  if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];
    $name = $_REQUEST['eventname'];
    $date = $_REQUEST['eventdate'];
    $desc = $_REQUEST['eventdesc'];
    $vid = $_REQUEST['vid'];
    $oid = $_REQUEST['oid'];
  
    $update =
    "UPDATE events
    SET event_name='$name', event_date='$date', event_desc='$desc', venue_id='$vid', organiser_id='$oid'
    WHERE event_id=$id";
    
    //  
    $conn->query($update);

    header("Location: index.php");
    exit();
    }

  // Delete a post
  if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];

    $delete = "DELETE FROM events WHERE event_id=$id";
    $conn->query($delete);

    header("Location: index.php");
    exit();
    }
  
  $conn->close();

?>
