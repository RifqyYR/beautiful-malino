<?php
  function createConnection() {
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '12345';
    $dbname = 'malino_tourism';
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    return $conn;
  }
?>