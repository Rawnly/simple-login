<?php
  error_reporting(E_ERROR | E_PARSE);

  // CREDENTIALS  
  // Edit with yours.
  $host = '127.0.0.1';
  $name = "test_database";
  $port = 8889;
  $pass = "root";
  $user = "root";
  $server = "$host:$port";
  
  // Connection init
  $conn = new mysqli($host, $user, $pass, $name, $port);
  
  // Connection status
  if (!$conn->connect_error) {
    $status = "<span style='color: #28AC34'> Online </span>";
    $class = "online";
  } else {
    $status = "<span style='color: #E82D0C'> Offline </span>";
    $class = "offline";
  }
?>
