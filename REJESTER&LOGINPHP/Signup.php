<?php
session_start();
include("connection.php");
include("Functions.php");

$First_name_True=FALSE ;
 $Middle_name_True=FALSE ;
  $Last_name_True=FALSE ;
 $Family_name_True=FALSE ;
$Email_True=FALSE ;
$Mobile_True=FALSE ; 
$password_True=FALSE ;
$DateOfBirth_True=FALSE ;



$name1Err ="";
$name2Err ="";
$name3Err ="";
$name4Err ="";
$emailErr ="";
$MobileErr ="";
$pass1Err ="";
$pass2Err ="";
$DateOfBirthErr="";

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$First_name = $_POST['First_name'];
    $Middle_name = $_POST['Middle_name'];
    $Last_name = $_POST['Last_name'];
    $Family_name = $_POST['Family_name'];
    $Email = $_POST['Email'];
		$password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
$DateOfBirth = $_POST['DateOfBirth'];
$Mobile =  $_POST['Mobile'];

		if(empty($First_name) )
		{
$name1Err= "The First Name field is required.";
    }else{
      $First_name_True=True ;
    };
    if(empty($Middle_name) )
		{
      $name2Err=  "The Middle name field is required.";
    }else{
      $Middle_name_True=True ;
    };
    if(empty($Last_name) )
		{
      $name3Err=  "The Last name field is required.";
    }else{
      $Last_name_True=True ;
    };
    if(empty($Family_name) )
		{
      $name4Err=  "The Family name field is required.";
    }else{
      $Family_name_True=True ;
    };

    if(empty($Email) )
		{
        $emailErr ="The Email field is required.";
    }else if (!filter_var($Email,FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    else{
      $Email_True=True ;
    } ;

    if(empty($Mobile) ){
        $MobileErr ="The Mobile field is required.";
    }else if (strlen($Mobile)!==14) {
        $MobileErr = "The Mobile must be at least 14 numerics.";
    }
    else{
      $Mobile_True=True ;
    } ;

    //Check Strong Password
    $number = preg_match('@[0-9]@', $password1);
$uppercase = preg_match('@[A-Z]@', $password1);
$lowercase = preg_match('@[a-z]@', $password1);
$specialChars = preg_match('@[^\w]@', $password1);
 
if(empty($password1) )
{$pass1Err ="The password field is required.";}

else if(strlen($password1) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
  $pass1Err ="Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
} else {
  $password1_True=True ;;
};

if(strlen($password2) < 8 ) {
  $pass2Err ="Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
} else if ($password1!==$password2){
  $pass2Err = "The password must be Matched.";}
  else{
  $password_True=True ;
};

if(empty($DateOfBirth) )
		{
        $DateOfBirthErr ="The Date Of Birth field is required.";
    }
    else{
      $DateOfBirth_True=True ;
    } ;


if ($First_name_True==True&& $Middle_name_True==True&&  $Last_name_True==True&& $Family_name_True==True&&$Email_True==True &&$Mobile_True==True &&$password_True==True&&$DateOfBirth_True==True){
			//save to database
      echo "save to database";
			$user_id = random_num(20);
			$query = "INSERT INTO users (Firstname,Middlename,Lastname,Familyname,Email,Password1,ConfirmPassword,DateofBirth,Mobile,user_id)
       values ('$First_name','$Middle_name','$Last_name','$Family_name','$Email','$password1','$password2','$DateOfBirth','$Mobile','$user_id')";
	mysqli_query($con, $query);

  header("Location: LogIn.php");
  die;
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
    <h1 >sign up </h1>
    <p> Create an Accaount,its Free</p> 
</div>
    <form id="form-reg" onsubmit="validationForm(event)" method="post">
    <div class="mb-3">
    <label for="exampleInputName1" class="form-label">First Name</label>
    <input type="namespace" class="form-control" id="exampleInputName1" name="First_name">
    <div class="error" id=name1Err><?php echo $name1Err ?></div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputName2" class="form-label">Middle Name</label>
    <input type="namespace" class="form-control" id="exampleInputName2" name="Middle_name">
    <div class="error" id=name2Err><?php echo $name2Err ?></div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputName3" class="form-label">Last name</label>
    <input type="namespace" class="form-control" id="exampleInputName3" name="Last_name">
    <div class="error" id=name3Err><?php echo $name3Err ?></div>
  </div>
  <div id=name3Err></div>
  <div class="mb-3">
    <label for="exampleInputName4" class="form-label">Family name </label>
    <input type="namespace" class="form-control" id="exampleInputName4" name="Family_name">
    <div class="error" id=name4Err><?php echo $name4Err ?></div>
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email">
    <div class="error" id=emailErr><?php echo $emailErr ?></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>

    <div class="eye">
        <i class="bi bi-eye-slash" id="togglePassword1" ></i>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password1">
       
    </div>
    <div class="error" id="pass1Err"><?php echo $pass1Err ?></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <div class="eye"><div id="pass1Err"></div>
        <i class="bi bi-eye-slash" id="togglePassword2" ></i>
    <input type="password" class="form-control" id="exampleInputPassword2" name="password2">
  </div>
  <div class="error" id="pass2Err"><?php echo $pass2Err?></div>
</div>

  <div class="mb-3">
    <label for="Date of Birth: " class="form-label">Date of Birth </label>
    <input type="Date" class="form-control" id="InputDateOfBirth"  name="DateOfBirth">
    <div class="error" id="DateOfBirthErr" ><?php echo $DateOfBirthErr?></div>
  </div>
  <div class="mb-3">
    <label for="Mobile" class="form-label">Mobile</label>
    <input type="numfmt_format" class="form-control" id="InputMobile"  name="Mobile">
    <div class="error" id="MobileErr" ><?php echo $MobileErr?></div>
  </div>
  <div>
  <button type="submit" class="btn btn-primary" value="Signup">Sign up</button>
    </form>
    <p> Already have an accaount ? <a>Sign In</a> </p>
</div>
</div>

<!-- <script src="sign.js"></script> -->

</body>
</html>