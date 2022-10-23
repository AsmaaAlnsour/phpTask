
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
<button class="btn btn-danger my-2" ><a href="logout.php"class="text-light" >Log out</a></button>
<br>
<?php

echo "success login"."<br><br>";

session_start();

echo " hello your email is ". $_SESSION['email']."<br>";
echo " hello ". $_SESSION['name'];
echo $_SESSION['admin'];
?>
</body>
</html>




