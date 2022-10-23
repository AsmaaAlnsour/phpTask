<?php 

$con =new mysqli("localhost", "root", "", "add_user");

// Check connection
  if($con){
    // echo "success";
  }
    else{
    die(mysqli_error($con));
  }

  $id=$_GET['updateid'];

  $sql="select * from `user` where id=$id ";

  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $image=$row["image"];
  $Name=$row["Name"];
  $Address=$row["Address"];
  $Salary=$row["Salary"];


  if(isset($_POST['submit'])){

    // $imgField=$_POST ['image'];
    $NameField=$_POST ['Name']; 
$AddressField=$_POST['Address'];
$SalaryField=$_POST ['Salary'];
// $image=$_POST['image'];




$sql="update `user` set id=$id, Name='$NameField',
Address='$AddressField',Salary='$SalaryField' 
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
    <style>
      body{
        background-color :  #E0AC89;
        color: white ;
      }
.containerc{
  width:300px;
  height : 600px ;
  border : solid 5px white ;
  margin-left : 550px;
  margin-top : 80px ;

}
.signForm{
  width : 250px;
  height : 40px ;
  margin-left : 25px;
  background-color : #C76A2A;
  color : white ;
  /* border-color : #C76A2A ; */
}
      </style>

</head>


<body>
<a class="btn co btn-md" href="index.php" >Back<i class="fa fa-download pl-2"></i></a>

    <div  class="containerc">
    <form  name="myForm" id="sign-up" method="post" >
       
        <h1 style="text-align:center ">Update Data</h1>
       
     
        <!-- <label for="image" class="form-label "><b>img:</b></label> -->
        
        <div class="form-group text-center" style="position: relative;" >
            <!-- <span class="img-div"> -->
              <!-- <div class="text-center img-placeholder"  onClick="triggerClick()">
              <button > <h4>Upload image</h4> </button >
              </div> -->
              <img src="<?php echo 'images/'. $row['image']; ?>" width='90' height='90' onClick="triggerClick()" id="profileDisplay">
            <!-- </span>
            <input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
            <label>Profile Image</label>
          </div> -->
     <br><br>
</div>
        <label for="mail" >Name </label>
        <input   autofocus id="Name" name="Name" value=<?php
        echo  $Name;?> />
        <div id="one" class="err"></div><br />
        <br><br>
        <label for="phone">Address </label>
        <input type="Address"  name="Address" id="Address" value=<?php
        echo  $Address;?>>
        <div id="two" class="err"></div><br />
        <br><br>
        <label for="Salary">Salary:</label>
       <input type="Salary" id="Salary" name="Salary" value=<?php
        echo  $Salary;?>><br>
       <div id="four" class="err"></div><br />
       
    
       <br><br>
        <input id="submitBtn" class="signForm" type="submit" value="Update " name="submit"/><br />
       

     
      </form>  </div>
    </div>
  </div>
<!-- <script src="signup.js"></script> -->
<script>
    function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>
</body>
</html>