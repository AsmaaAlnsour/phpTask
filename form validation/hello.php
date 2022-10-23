<?php

// function check_login($con)
// {

//   if(isset($_SESSION['user_id']))
//   {

//     $id = $_SESSION['user_id'];
//     $query = "select * from info";

//     $result = mysqli_query($con,$query);
//     if($result && mysqli_num_rows($result) > 0)
//     {

//       $user_data = mysqli_fetch_assoc($result);
//       return $user_data;
//     }
//   }

//   //redirect to login
//   header("Location: login.php");
//   die;

// };
// check_login($con);

session_start();
$_SESSION['username']=$_POST ['name'];
$_SESSION['email']=$_POST ['email'];

echo 'hello '.$_SESSION['username'].'<br>';
echo 'your email is: '.$_SESSION['email'];

echo'<br>';
?>
<?php 
//get data from form
	    $nameField=$_POST ['name'];
			$emailField=$_POST ['email']; 
      $phoneField=$_POST['phone'];
      $birthField=$_POST ['birthday'];
      $passField=$_POST['password'];

$conn=new mysqli("localhost", "root", "", "users");
if($conn->connect_error){
  die("connection failed: ". $conn->connect_error);
}else{
  $stmt=$conn->prepare("insert into info (fullname,email,mobile_number,Date_of_birth,pass) 
  VALUES (?,?,?,?,?)");
   $stmt->bind_param("ssiss",$nameField,$emailField,$phoneField,$birthField,$passField);
   $stmt->execute();
   echo"success registration";
   $stmt->close();
   $conn->close();



  }



  


?>