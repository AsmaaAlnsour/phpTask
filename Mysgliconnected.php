<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
  $mysqli = new mysqli("localhost", "root", "", "education");

  $mysqli->set_charset("utf8mb4");

  echo 'You are connected' ;

} catch(Exception $e) {

  error_log($e->getMessage());

  exit('Error connecting to database'); //Should be a message a typical user could understand
}