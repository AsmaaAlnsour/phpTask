<!DOCTYPE html>
<html>
<body>
  <?php
  // function addNumbers(int $a, int $b) {
  //   return $a + $b;
  // }
  // echo addNumbers(5, "5 days"); 
  // // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
//*******************************************GLOBALS******************************************************************************************************** */

// function multiply() {
//   $x = 75;
//   $y = 25;
// $z = $x * $y;
//   echo $z;
// };

// multiply();



// print "<br><br>" ;

// $x = 75;
// $y = 25; 
// function addition() {
//   $i = $GLOBALS['x'] + $GLOBALS['y'];
//   // print_r ($GLOBALS) ;
  
// echo $i;
// }
// addition();

//  print_r ($GLOBALS) ;
//**********************************************SERVER*****************************************************************************************************
// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
?>
<!-- //**********************************************post***************************************************************************************************** -->

<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit"> 
</form>-->
 <?php


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // collect value of input field
//     $name = htmlspecialchars($_REQUEST['fname']);
//     if (empty($name)) {
//         echo "Name is empty";
//     } else {
//         echo $name;
//     }
// } 

?> 
<!-- //**********************************************post***************************************************************************************************** -->

<a href="test_get.php?subject=google&web=www.google.com">Test $GET</a>

</body>
</html>