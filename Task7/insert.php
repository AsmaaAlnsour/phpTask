<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserte</title>
</head>
<body>
<?php
include 'navbar.php';


  $dsn = 'mysql:host=localhost;dbname=students database'; // Data Source Name

  $user = 'root'; // The User To Connect

  $pass = ''; // Password for This User

  try {

    $connect = new PDO($dsn, $user, $pass); // Start A New Connection With PDO Class

 echo 'Inserted row' ;
    // $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

    $q = "INSERT INTO students (
      first_name	,
      Middle_name	,
      family_name	,
      Date_of_birth	,
      degree	,
      Major_Address	,
      Age	,
      Tell_number) VALUES ('Razan','A','Nsour','1989-4-21','95','Amman','33','0771234567')";
    
    $connect->exec($q);

  }

  catch(PDOException $e) {

    echo 'Failed' . $e->getMessage();

  }
  include 'footer.php';
?>

  <!-- <!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
  </head>
  
  <body>
  
    <div class="container">
      <h1>Contact Us Here</h1>
  
      <form action="" method="POST" class="main-form">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" name="name" id="name" class="gt-input"
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>">
        </div>
  
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="gt-input"
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>">
        </div>
  
        <div class="form-group">
          <label for="message">Your Message</label>
          <textarea name="message" id="message" cols="30" rows="10"
            class="gt-input gt-text"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $message ?></textarea>
        </div>
  
        <input type="submit" class="gt-button" value="Submit">
  
        <div class="form-status">
          <?php echo $status ?>
        </div>
      </form>
    </div>
  
    <script src="main.js"></script>
  
  </body>
  
  </html> -->
