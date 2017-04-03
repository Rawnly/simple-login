<?php
  error_reporting(E_ERROR | E_PARSE);

  // CREDENTIALS  
  // Database from https://freemysqlhosting.net
  $host = 'sql8.freemysqlhosting.net';
  $name = "sql8167203";
  $port = 3306;
  $pass = "sql8167203";
  $user = "sPxjck5E8z";
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
