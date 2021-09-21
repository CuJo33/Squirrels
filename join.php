<?php
  include 'dbcon.php';

  // $sql = "SELECT * FROM events";
 
  $sql = 
  "SELECT * FROM events 
  LEFT JOIN venues on events.venue_id  = venues.venue_id 
  LEFT JOIN organisers on organisers.organiser_id = events.organiser_id";

  $events = $conn->query($sql);

  $conn->close();


?>
