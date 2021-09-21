<?php
  include 'dbcon.php';

  // $events = array( 
  //   array("title" =>  "Exciting event", "content" => "This is some exciting details about the event "),
  //   array("title" => "Another exciting event", "content" => "This is some more exciting news about another event, so exciting I wrote about it on the app ")
  // );

  $sql = "SELECT * FROM events";
  $events = $conn->query($sql);

  $conn->close();
?>