<?php

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
    <!-- <link rel="stylesheet" href="signup.css"> -->
    <link rel="stylesheet" href="sss.css">

    

</head>


<body>

    <div  class="containerc">
    <form  name="myForm" id="sign-up" method="post"action="hello.php" >
       
        <h1 style="text-align:center ">Sign Up</h1>
        <p style="text-align:center ;" class="create">Create an account,it's free</p>
     
        <label for="name" class="form-label "><b>Name:</b></label>
        
        <input type="text"  name="name" id="name" />
        <div id="zero" class="err"></div><br />
     
        
        <label for="mail" >Email </label>
        <input   autofocus id="email" name="email"  />
        <div id="one" class="err"></div><br />
        
        <label for="phone">Mobile </label>
        <input type="number"  name="phone" id="phone">
        <div id="two" class="err"></div><br />

        <label for="birthday">Birthday:</label>
       <input type="date" id="birthday" name="birthday" ><br>
       <div id="four" class="err"></div><br />
       

        <label for="password"> Password </label>
        <input type="password" id= "pass"  name="password"  autocomplete="current-password"/>
        <div id="three" class="err"></div><br />  <label for="chekpass"> confirm Password </label>
        <input type="password" id= "password2"  name="checkpass"  autocomplete="current-password" onkeyup="checkPassword(); "/>
         <div id="pw2_check"class="err"></div>
        <br />
    
        
        <input id="submitBtn" class="signForm" type="submit" value="SIGN UP " name="submit"/><br />
        <p>already have an account? <a href="login.php" > <b>log in</b></a></p>
        <div id="invalid"></div>

       </div>
      </form>
    </div>
  </div>
<!-- <script src="signup.js"></script> -->

</body>
</html>