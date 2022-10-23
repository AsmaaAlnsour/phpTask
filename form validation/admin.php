<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body style="margin:50px;">
<button class="btn btn-danger my-2" ><a href="logout.php"class="text-light" >Log out</a></button>
    <h1>List of users</h1>
<table class="table border">
  <tr>
  <th>id</th>
      <th>full name</th>
        <th>email</th>
        <th>password</th>
        <th>mobile number</th>
        <th>birthday</th>
        <!-- <th>date created</th>
        <th>date last login </th>
        <th>user type</th> -->
        <th>Operations</th>
  </tr>
  <?php

 
// Create connection(variable)
// $connection = new mysqli($servername, $username, $password ,"database name");

  $connection =new mysqli("localhost", "root", "", "users");

// Check connection
 

    // delete user
    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
    
        mysqli_query($connection, "DELETE FROM info WHERE id=".$id);
        header('location: admin.php');
    }
  //print table $sql(variable any name)


  $sql = "SELECT * FROM info where admin = 0;";


  $result =$connection->query($sql);
  if(!$result){
    die("Invalid query: ". $connection->error);
  }
  while($row=$result->fetch_assoc()){
$id=$row["id"];
    echo" <tr>
    <td>".$row["id"] ."</td>
    <td>".$row["fullname"] ."</td>
    <td>".$row["email"]."</td>
    <td>".$row["pass"]."</td>
    <td>".$row["Date_of_birth"]."</td>
    <td>".$row["mobile_number"]."</td>
    <td>
    <button class='btn btn-info'><a href='update.php?updateid=".$id."' class='text-light'>Update</a></button>
    <button class='btn btn-danger'><a href='admin.php?deleteid=".$id."' class='text-light'>Delete</a></button>
    </td>

   </tr>";
  }
 
 ?>
 