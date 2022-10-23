<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
</head>
<body>

<?php
include 'navbar.php';
  $dsn = 'mysql:host=localhost;dbname=students database'; // Data Source Name

  $user = 'root'; // The User To Connect

  $pass = ''; // Password for This User

  try {

    $connect = new PDO($dsn, $user, $pass); // Start A New Connection With PDO Class

 echo 'Updated Value' ;
    // $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

    $q = "UPDATE `students` SET `family_name` = 'Updated' WHERE `students`.`ID` = 22";
    
    $connect->exec($q);

  }

  catch(PDOException $e) {

    echo 'Failed' . $e->getMessage();

  }
  include 'footer.php';