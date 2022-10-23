<?php

include("connection.php");
include("Functions.php");

// if(isset($_POST['update']))
//     {

        $ID=$_GET['GetID'];
        $FirstName = $_POST['FirstName'];
        $MiddleName = $_POST['MiddleName'];
        $Lastname = $_POST['Lastname'];
        $Familyname = $_POST['Familyname'];
        $Email = $_POST['Email'];
        $Mobile = $_POST['Mobile'];

        $query = "UPDATE `users` SET `FirstName` = $FirstName, `MiddleName`='$MiddleName',`Lastname`='$Lastname',`Familyname`='$Familyname',
        `Email`='$Email'
        ,`Mobile`='$Mobile' WHERE ID=$ID";
            // $connect->exec($query);

        $result = mysqli_query($con,$query);

        if($result)
        {
            // header("location:Admin.php");
            echo ' 1';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    // }
    // else
    // {
    //     echo '2';
    //     // header("location:Admin.php");
    // }
