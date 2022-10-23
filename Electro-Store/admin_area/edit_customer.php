<?php

if(!isset($_SESSION['admin_email'])){

  header("Location:http://localhost/electro-Store//dashboard/login.php");

}



?>

<?php

if(isset($_GET['edit_customer'])){
    $edit_id = $_GET['edit_customer'];


$get_p = "SELECT * FROM users where user_id='$edit_id'";

$run_edit = mysqli_query($con,$get_p);

$row_edit = mysqli_fetch_array($run_edit);


$user_name = $row_edit['user_name'];

$user_email = $row_edit['user_email'];

$user_pass = $row_edit['user_pass'];

$user_country = $row_edit['user_country'];

$user_address = $row_edit['user_address'];

$user_phone = $row_edit['user_phone'];

$user_type = $row_edit['user_type'];





}




?>


<!DOCTYPE html>

<html>

<head>

<title> Edit Products </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Products

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Customer

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<input type="hidden" class="form-control" name="user_id" id="fullName" placeholder="Enter full name" value=<?php echo  $row_edit['user_id'];  ?>>


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Customer Name </label>

<div class="col-md-6" >

<input type="text" name="user_name" class="form-control" required value="<?php echo $user_name; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Customer Email </label>

<div class="col-md-6" >

<input type="text" name="user_email" class="form-control" required value="<?php echo  $user_email; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Customer Password </label>

<div class="col-md-6" >

<input type="text" name="user_pass" class="form-control" required value="<?php echo  $user_pass; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Customer Country </label>

<div class="col-md-6" >

<input type="text" name="user_country" class="form-control" required value="<?php echo $user_country; ?>">

</div>

</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Customer Address </label>

<div class="col-md-6" >

<input type="text" name="user_address" class="form-control" required value="<?php echo  $user_address; ?>">

</div>

</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Customer Phone Number </label>

<div class="col-md-6" >

<input type="text" name="user_phone" class="form-control" required value="<?php echo  $user_phone; ?>">

</div>

</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > User Type </label>

<div class="col-md-6" >

<input type="text" name="user_type" class="form-control" required value="<?php echo  $user_type; ?>">

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update " class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['update'])){

$id=$_POST['user_id'];

$user_name = $_POST['user_name'];

$user_email = $_POST['user_email'];

$user_pass = $_POST['user_pass'];

$user_country = $_POST['user_country'];

$user_address = $_POST['user_address'];

$user_phone = $_POST['user_phone'];

$user_type = $_POST['user_type'];



$update_customer = "UPDATE `users` SET `user_name`='$user_name',`user_email`='$user_email',`user_pass`='$user_pass',
`user_country`='$user_country',`user_address`='$user_address',`user_phone`='$user_phone',`user_type`='$user_type'
 WHERE `user_id`='$id'";

$run_customer = mysqli_query($con,$update_customer);

if($run_customer){


//echo "<script> alert('Product has been updated successfully') </script>";

echo "<script>window.open('index.php?view_customers','_self')</script>";

}

}

?>


