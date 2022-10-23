<?php 

    include("connection.php");
    include("Functions.php");

    $ID = $_GET['GetID'];
$query="select * from users where ID='".$ID."'";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
                                {
                                    $ID = $row['ID'];
                                    $FirstName = $row['FirstName'];
                                    $MiddleName = $row['MiddleName'];
                                    $Lastname = $row['Lastname'];
                                    $Familyname = $row['Familyname'];
                                    $Email = $row['Email'];
                                    $Password = $row['Password1'];
                                    $DateofBirth = $row['DateofBirth'];
                                    $Mobile = $row['Mobile'];


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
    <form id="form-reg" Action="update.php" method="POST" >
    <div class="mb-3">
    <label for="exampleInputName1" class="form-label">First Name</label>
    <input type="namespace" class="form-control" id="exampleInputName1" name="FirstName" value="<?php echo $FirstName ?>">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputName2" class="form-label">Middle Name</label>
    <input type="namespace" class="form-control" id="exampleInputName2" name="MiddleName" value="<?php echo $MiddleName ?>">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputName3" class="form-label">Last name</label>
    <input type="namespace" class="form-control" id="exampleInputName3" name="Lastname" value="<?php echo $Lastname ?>">
  </div>
  <div id=name3Err></div>
  <div class="mb-3">
    <label for="exampleInputName4" class="form-label">Family name </label>
    <input type="namespace" class="form-control" id="exampleInputName4" name="Familyname" value="<?php echo $Familyname ?>">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" value="<?php echo $Email ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>

    <div class="eye">
        <i class="bi bi-eye-slash" id="togglePassword1" ></i>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password1" value="<?php echo $password ?>">
       
    </div>
  </div>

  <div class="mb-3">
    <label for="Date of Birth: " class="form-label">Date of Birth </label>
    <input type="Date" class="form-control" id="InputDateOfBirth"  name="DateOfBirth" value="<?php echo $DateOfBirth ?>">
  </div>
  <div class="mb-3">
    <label for="Mobile" class="form-label">Mobile</label>
    <input type="numfmt_format" class="form-control" id="InputMobile"  name="Mobile" value="<?php echo $Mobile ?>">
  </div>
  <div>
  <button type="submit" class="btn btn-primary" value="update">update</button>
    </form>
</div>
</div>

<!-- <script src="sign.js"></script> -->

</body>
</html>