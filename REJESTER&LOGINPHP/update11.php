<?php 

$con =new mysqli("localhost", "root", "", "login_sample_db");

// Check connection
  if($con){
    echo "success";}
    else{
    die(mysqli_error($con));
  }

  $ID=$_GET['updateID'];

  $sql="select * from `users` where ID=$ID ";

  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $FirstName = $row['FirstName'];
  $MiddleName = $row['MiddleName'];
  $Lastname = $row['Lastname'];
  $Familyname = $row['Familyname'];
  $Email = $row['Email'];
  $Mobile = $row['Mobile'];

  if(isset($_POST['submit'])){

    // $IDField=$_GET['GetID'];
    $FirstNameField = $_POST['First_Name'];
    $MiddleNameField = $_POST['Middle_Name'];
    $LastnameField = $_POST['Last_name'];
    $FamilynameField = $_POST['Family_name'];
    $EmailField = $_POST['Email'];
    $MobileField = $_POST['Mobile'];
   


$sql="update `users` set `FirstName` = $FirstNameField, `MiddleName`='$MiddleNameField',`Lastname`='$LastnameField',`Familyname`='$FamilynameField',`Email`='$EmailField',`Mobile`='$MobileField'where `users`.`ID`=$ID";

$result=mysqli_query($con,$sql);
if($result){
    echo"success";
    // header('location: Admin.php');

}else{
    die(musqli_error($con));
}





  }
  


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="signupContainer ">
    <div class="HeaderSignUp">
    <h1 >update </h1>
</div>
<!-- Action="Admin.php" -->
    <form id="form-reg"  method="POST" >
    <div class="mb-3">
    <label for="exampleInputName1" class="form-label">First Name</label>
    <input type="namespace" class="form-control" id="exampleInputName1" name="First_Name" value="<?php echo $FirstName ?>">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputName2" class="form-label">Middle Name</label>
    <input type="namespace" class="form-control" id="exampleInputName2" name="Middle_Name" value="<?php echo $MiddleName ?>">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputName3" class="form-label">Last name</label>
    <input type="namespace" class="form-control" id="exampleInputName3" name="Last_name" value="<?php echo $Lastname ?>">
  </div>
  <div id=name3Err></div>
  <div class="mb-3">
    <label for="exampleInputName4" class="form-label">Family name </label>
    <input type="namespace" class="form-control" id="exampleInputName4" name="Family_name" value="<?php echo $Familyname ?>">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" value="<?php echo $Email ?>">
  </div>
  <div class="mb-3">
    <label for="Mobile" class="form-label">Mobile</label>
    <input type="numfmt_format" class="form-control" id="InputMobile"  name="Mobile" value="<?php echo $Mobile ?>">
   
  
  <!-- <input type="submit" id="submitBtn" class="signForm btn btn-primary" value="submit" name="submit">update</input> -->
  <input id="submitBtn" class="signForm" type="submit" value="Update" name="submit"/><br />
  
</div>   
</form>
</div>
</div>

<!-- <script src="sign.js"> -->
<script>
form.addEventListener("submit", (e))
</script>

</body>
</html>