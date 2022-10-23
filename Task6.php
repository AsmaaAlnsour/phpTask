<!-- <form method="Get">
  <div>
    <label for="Email">Email</label>
    <input name="email" id="email" value="email" />
  </div>
  <div>
    <label for="Password">Password</label>
    <input name="Password" id="Password" value="Password" />
  </div>
  <div>
    <button>Send</button>
  </div>
</form> -->


<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Email: <input type="Email" name="Email">
Password: <input type="Password" name="Password">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Done";}
else{
    echo "Not Done";
}
    // collect value of input field
    // if (empty()) {
    //     echo "Data is empty";
    // } else {
    // }
// }
?>

</body>
</html>