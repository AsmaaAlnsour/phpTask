<?php
// print_r ($_FILES);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="signup.css">
    

</head>


<body>

    <div  class="containerc">
    <form  name="myForm" id="sign-up" method="post"action="insert.php" >
       
        <h1 style="text-align:center ">Add new employee</h1>
     
     
        
        <label for="Name" >Name </label>
        <input  id="Name" name="Name"  />
        <div id="one" class="err"></div><br />
        
        <label for="Address">Address</label>
        <input type="text"  name="Address" id="Address">
        <div id="two" class="err"></div><br />

        <label for="Salary">Salary</label>
       <input type="number" id="Salary" name="Salary" ><br>
       <div id="four" class="err"></div><br />
       
       <label for="image" class="form-label "><b>image :</b></label>
        
        <input type="file"  name="image" id="image" accept=".jpg,.jpeg, .png " />
        
        <div id="zero" class="err"></div><br />

    
        
        <input id="submitBtn" class="signForm" type="submit" value="Add new " name="submit"/><br />
        <div id="invalid"></div>

       </div>
      </form>
    </div>
  </div>
<!-- <script src="signup.js"></script> -->

</body>
</html>