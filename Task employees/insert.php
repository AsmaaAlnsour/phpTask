<?php

// $conn=new mysqli("localhost", "root", "", "employees_dp");

session_start();

$_SESSION['username']=$_POST ['Name'];
// $_SESSION['email']=$_POST ['email'];

echo 'hello '.$_SESSION['name'].'<br>';
// echo 'your email is: '.$_SESSION['email'];

echo'<br>';
?>
<?php 
//get data from form
	    $imgField=time() . '-' . $_FILES['image'];
			$NameField=$_POST ['Name']; 
      $AddressField=$_POST['Address'];
      $SalaryField=$_POST ['Salary'];
      // $passField=$_POST['password'];
      $target_dir="images/";
      $target_file=$target_dir . basename($imgField);
  
      //now move the image to the folder (images)
  
      $target_dir="images/";
      $target_file=$target_dir . basename($image);
  
      //now move the image to the folder (images)
  
      // move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
  
      //now let we upload the image to the database
  
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
          $sql="INSERT INTO employees SET image='$image', username='$username'";}
  //if the data has been saved in the database , redirect the user to the main page
    
        // move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
  
      //now let we upload the image to the database
  
      // if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
      //     $sql="INSERT INTO user SET image='$image', username='$username'";
$conn=new mysqli("localhost", "root", "", "employees_dp");
if($conn->connect_error){
  die("connection failed: ". $conn->connect_error);
}else{
  $query = "INSERT INTO employees (image,Name,Address,Salary)
  values ('$imgField','$NameField','$AddressField','$SalaryField')";
mysqli_query($conn, $query);

header("Location: index.php");
die;






  }



//   if(isset($_POST['submit'])){
//       // $username=stripslashes($_POST['name']);
//           $Name=$_POST['Name'];
//      $Address=$_POST['Address'];
//       $Salary =$_POST['Salary'];
//       // $position =$_POST['position'];
//       //this is the name of the image that will be saved in the database
//       $image=time() . '-' . $_FILES['image']['name'];
  
//       //upload the image to a specific folder first and this folder for example called (images)
  
//       $target_dir="images/";
//       $target_file=$target_dir . basename($image);
  
//       //now move the image to the folder (images)
  
//       // move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
  
//       //now let we upload the image to the database
  
//       if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
//           $sql="INSERT INTO employees  (Name,image,	Address, Salary ) 
//          VALUES('$Name','$image','$Address','$Salary')";
  
         
//   //if the data has been saved in the database , redirect the user to the main page
//           if(mysqli_query($conn, $sql)){
//               header('location:employeesInfo.php');
//           }
//       }
//   }
  
//   //let we select all the profiles from the database 
  
//   $results=mysqli_query($conn, "SELECT * FROM employees");
//   $user=mysqli_fetch_all($results, MYSQLI_ASSOC);
  
// print_r ($_FILES);
?>