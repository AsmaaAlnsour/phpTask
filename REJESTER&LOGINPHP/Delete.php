<?php 

include("connection.php");
include("Functions.php");

if(isset($_GET['Del']))
         {
             $ID = $_GET['Del'];
             $query = " delete from users where ID =$ID";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:Admin.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:Admin.php");
         }