<?php
session_start();
include("connection.php");
include("Functions.php");

$Err="";
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
     //something was posted
    $Email = $_POST['Email'];
		$password = $_POST['Password'];

    
        if(!empty($Email) && !empty($password))
        {
    
          //read from database
          $query = "select * from users where Email = '$Email' limit 1";
          $result = mysqli_query($con, $query);
    
          if($result)
          {
            if($result && mysqli_num_rows($result) > 0)
            {
    
              $user_data = mysqli_fetch_assoc($result);
              
              if($user_data['Password1'] === $password)
              {
    
                $_SESSION['user_id'] = $user_data['user_Id'];
                
                if($user_data['ID'] == 1){
                  header("Location: Admin.php");
                  die;
                }else{
                header("Location: Welcome.php");
                die;
                }
              }
            }
          }
          
          $Err= "wrong username or password!";
        }else
        {
          $Err="wrong username or password!";
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
<div class="signinContainer">
    <h1 >LogIn </h1>
    <p> Welcome Back! Login with your credentials</p> 
    <form onsubmit='validationData(event)' method="post">
    <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" id="EmailSignIN" aria-describedby="emailHelp" name="Email">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <div class="eye">
        <i class="bi bi-eye-slash" id="togglePassword2" ></i>
    <input type="password" class="form-control" id="passSignIN" name="Password">
    <div class="error" id=Err ><?php echo $Err ?></div>
  </div></div>
  <button type="submit" class="btn btn-primary" value="LogIn">LogIn</button>
    </form>
    <p> Don't have an accaount ? <a href="Signup.php">Sign Up</a> </p>

</div>

<!-- <script src="Sign.js"></script> -->

</body>
</html>