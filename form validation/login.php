<?php
session_start();

class Connection{
  public $host = "localhost";
  public $user = "root";
  public $password = "";
  public $db_name = "users";
  public $conn;

  public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
  }
}


class Login extends Connection{
  public $id;
  public function login($usernameemail, $password){
    $resultSpecific = mysqli_query($this->conn,"SELECT * FROM info WHERE  email='" . $_POST["email"] . "' AND pass='" . $_POST["password"] . "'    ");
    $row = mysqli_fetch_assoc($resultSpecific);

    if(mysqli_num_rows($resultSpecific) > 0){
      if($password == $row["pass"]){

        $this->id = $row["id"];
        // Login successful
        return 1;
      }
      else{
        return 10;
        // Wrong password
      }
    }
    else{
      return 100;
      // User not registered
    }
  }

  public function idUser(){
    return $this->id;
  }
}


// if(!empty($_SESSION["id"])){
//   header("Location: check.php");
// }

$login = new Login();

if(isset($_POST["submit"])){
  $resultSpecific = $login->login($_POST["email"], $_POST["password"]);

  if($resultSpecific == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    // $rowSpecific = mysqli_fetch_assoc($resultSpecific);
    //     $_SESSION['email']=$rowSpecific ['email'];
    //     $_SESSION['name']= $rowSpecific['fullname'];
        $_SESSION['admin']= $rowSpecific['admin'];
        if($rowSpecific['admin']==0){
          header("location:superadmin.php"); 
          // header("location:check.php");  
        }else if ($rowSpecific['admin']==1){
            header("location:admin.php"); 
        }else{
          header("location:superadmin.php"); 
        }
  }
  elseif($resultSpecific == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($resultSpecific == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}




// class Register extends Connection{
//   public function registration($name, $username, $email, $password, $confirmpassword){
//     $duplicate = mysqli_query($this->conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
//     if(mysqli_num_rows($duplicate) > 0){
//       return 10;
//       // Username or email has already taken
//     }
//     else{
//       if($password == $confirmpassword){
//         $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$password')";
//         mysqli_query($this->conn, $query);
//         return 1;
//         // Registration successful
//       }
//       else{
//         return 100;
//         // Password does not match
//       }
//     }
//   }
// }




?>

<?php
 
// $conn = mysqli_connect("localhost", "root", "", "users");
// if(isset($_POST['submit'])) {

//     $sqlSpecific = "SELECT * FROM info WHERE  email='" . $_POST["email"] . "' AND pass='" . $_POST["password"] . "'    ";
//     $resultSpecific = mysqli_query($conn, $sqlSpecific);
   


//     // $sql = mysqli_query($conn, "SELECT * FROM info WHERE  email='" . $_POST["email"] . "' AND pass='" . $_POST["password"] . "'    ");
   





//     $num = mysqli_num_rows( $resultSpecific);
   
//     if($num > 0) {
//         // $row = mysqli_fetch_array($sql);

//          $rowSpecific = mysqli_fetch_assoc($resultSpecific);
//         $_SESSION['email']=$rowSpecific ['email'];
//         $_SESSION['name']= $rowSpecific['fullname'];
//         $_SESSION['admin']= $rowSpecific['admin'];
//         if($rowSpecific['admin']==0){
//           header("location:check.php");  
//         }else if ($rowSpecific['admin']==1){
//             header("location:admin.php"); 
//         }else{
//           header("location:superadmin.php"); 
//         }
    
//         // $result =mysqli_fetch_assoc($sql); 
//         //    $_SESSION['admin']= $result['admin'];
//         // print_r( $rowSpecific);
        
//         exit();
//     }
//     else {
?>
<!-- <hr>
<font color="red"><b>
        <h3>Sorry Invalid Email and Password<br>
            Please Enter Correct data</br></h3>
    </b>
</font>
<hr> -->
 
<?php
//       }
// }
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
    <link rel="stylesheet" href="sss.css">
 
    

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