<?php
// $conn=new mysqli("localhost", "root", "", "employees_dp");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
  body{
    color : #C76A2B ;
  }
  table{
    border-style: solid;
  /* border-color: #C76A2B ; */
  }
  </style>

</head>
<body style="margin:50px;">
<h1>employees Details</h1>
<button class="btn btn-danger my-2" ><a href="addnew.php"class="text-light" >Add New employee</a></button>
    
<table class="table " >
  <tr>
        <th>id</th>
        <th>image</th>
        <th>Name</th>
        <th>Address</th>
        <th>Salary</th>
  </tr>
  <?php

 
// Create connection(variable)
// $connection = new mysqli($servername, $username, $password ,"database name");

  $connection =new mysqli("localhost", "root", "", "employees_dp");

// Check connection
 

    // delete user
    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
    
        mysqli_query($connection, "DELETE FROM employees WHERE id=".$id);
        header('location: index.php');
    }
  //print table $sql(variable any name)


  $sql = "SELECT * FROM employees";


  $result =$connection->query($sql);
  if(!$result){
    die("Invalid query: ". $connection->error);
  }
  while($row=$result->fetch_assoc()){
$id=$row["id"];
    echo" <tr>
    <td>".$row["id"] ."</td>";?>
    <td>
    <img src="<?php echo 'images/'. $row['image']; ?>" width='90' height='90'> 
    </td>
        <?php echo"    

    <td>".$row["Name"]."</td>
    <td>".$row["Address"]."</td>
    <td>".$row["Salary"]."</td>
    <td>
    <button class='btn btn-warning'><a href='user.php?veiwid=".$id."' class='text-light'><img src='eye.svg'></a></button>
    <button class='btn btn-info'><a href='update.php?updateid=".$id."' class='text-light'>Update</a></button>
    <button class='btn btn-danger'><a href='index.php?deleteid=".$id."' class='text-light'>Delete</a></button>
    </td>

   </tr>";
  }
 
 ?>
 