<?php 

$con =new mysqli("localhost", "root", "", "employees_dp");

// Check connection
  if($con){
    echo "success";}
    else{
    die(mysqli_error($con));
  }

  $id=$_GET['updateid'];

  $sql="select * from `employees` where id=$id ";

  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $image=$row["image"];
  $Name=$row["Name"];
  $Address=$row["Address"];
  $Salary=$row["Salary"];


  if(isset($_POST['submit'])){

    $imgField=$_POST ['image'];
    $NameField=$_POST ['Name']; 
$AddressField=$_POST['Address'];
$SalaryField=$_POST ['Salary'];


$sql="update `employees` set id=$id,image='$imgField', Name='$NameField',
Address='$AddressField',Salary='$Salary'
where id=$id";

$result=mysqli_query($con,$sql);
if($result){
    echo"success";
    header('location: index.php');

}else{
    die(musqli_error($con));
}





  }

  


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="signup.css">
    

</head>


<body>

    <div  class="containerc">
    <form  name="myForm" id="sign-up" method="post" >
       
        <h1 style="text-align:center ">Update Data</h1>
       
     
        <label for="image" class="form-label "><b>img:</b></label>
        
        <input type="image"  name="image" id="img" value=<?php
        echo  $image;?> />
        <div id="zero" class="err"></div><br />
     
        
        <label for="mail" >Name </label>
        <input   autofocus id="Name" name="Name" value=<?php
        echo  $Name;?> />
        <div id="one" class="err"></div><br />
        
        <label for="phone">Address </label>
        <input type="Address"  name="Address" id="Address" value=<?php
        echo  $Address;?>>
        <div id="two" class="err"></div><br />

        <label for="Salary">Salary:</label>
       <input type="Salary" id="Salary" name="Salary" value=<?php
        echo  $Salary;?>><br>
       <div id="four" class="err"></div><br />
       
    
        
        <input id="submitBtn" class="signForm" type="submit" value="Update " name="submit"/><br />
       

       </div>
      </form>
    </div>
  </div>
<!-- <script src="signup.js"></script> -->

</body>
</html>