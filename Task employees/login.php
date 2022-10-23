<?php

session_start();




?>

<?php
 
$conn = mysqli_connect("localhost", "root", "", "users");
if(isset($_POST['submit'])) {

    $sqlSpecific = "SELECT * FROM info WHERE  email='" . $_POST["email"] . "' AND pass='" . $_POST["password"] . "'    ";
    $resultSpecific = mysqli_query($conn, $sqlSpecific);
   


    // $sql = mysqli_query($conn, "SELECT * FROM info WHERE  email='" . $_POST["email"] . "' AND pass='" . $_POST["password"] . "'    ");
   





    $num = mysqli_num_rows( $resultSpecific);
   
    if($num > 0) {
        // $row = mysqli_fetch_array($sql);

         $rowSpecific = mysqli_fetch_assoc($resultSpecific);
        $_SESSION['email']=$rowSpecific ['email'];
        $_SESSION['name']= $rowSpecific['fullname'];
        $_SESSION['admin']= $rowSpecific['admin'];
        if($rowSpecific['admin']==0){
          header("location:check.php");  
        }else{
            header("location:admin.php"); 
        }
    
        // $result =mysqli_fetch_assoc($sql); 
        //    $_SESSION['admin']= $result['admin'];
        // print_r( $rowSpecific);
        
        exit();
    }
    else {
?>
<hr>
<font color="red"><b>
        <h3>Sorry Invalid Email and Password<br>
            Please Enter Correct data</br></h3>
    </b>
</font>
<hr>
 
<?php
      }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
 
    

</head>


<body>

    <div  class="containerc">
    <form  name="myForm" id="sign-up" method="post" action="">
       
        <h1 style="text-align:center ">Login</h1>
        <p style="text-align:center ;" class="create">Sign in to continue</p><br>
     

        <label for="mail" >Email </label>
        <input   autofocus id="email" name="email" />
        <div id="one"class="err"></div><br>
       
       

        <label for="pass"> Password </label>
        <input
          type="password"
          id="pass"
          name="password"
          autocomplete="current-password"
        />
       <div class="Err"></div>
        <div id="three" class="err"></div><br />
        <input class="signForm" type="submit" name="submit"  value="LOG IN " />
        
        <p class="forget">Forgot password?<a href="SIGNUP.php" > <b>sign up</b></a></p>
        <div id="invalid"></div>

       </div>
      </form>
    </div>
  </div>

   <!-- <script src="login.js"></script> -->
 

</body>
</html>