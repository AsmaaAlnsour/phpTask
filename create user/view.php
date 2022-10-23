<?php 

$con =new mysqli("localhost", "root", "", "add_user");

// Check connection
  if($con){
    // echo "success";
}
    else{
    die(mysqli_error($con));
  }

  $id=$_GET['veiwid'];

  $sql="select * from `user` where id=$id ";

  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $image=$row["image"];
  $Name=$row["Name"];
  $Address=$row["Address"];
  $Salary=$row["Salary"]; ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color : #E0AC89 ;
        }
        .vv{
            margin-left: 550px;
            margin-top: 100px;
width:300px;
height:300px;
border: solid 10px #C96F34 ;
color :white ;
                }
                .in{
                    margin-left: 100px;
            margin-top: 10px;
                }
        </style>
  </head>
  <body>
  
  <a class="btn co btn-md" href="index.php" >Back<i class="fa fa-download pl-2"></i></a>
  <div class="vv">
  <div class ="in">
  <div>
  <img src=images/<?php echo  $row['image'];?> width='90' height='90'>
</div> 
  <div><h1><?php echo$row['Name'];?></div><div><h3>
  <?php echo$row['Address'];?>
</div><div><h3><?php echo $row['Salary'];?></div>
</div>
            </div>
  </body>
  </html>

