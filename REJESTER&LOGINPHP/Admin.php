<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    // $x = check_Admin($con)
    $query = " select * from users ";
    $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

<a href="logout.php">Logout</a>
	<h1>This is the Admin page</h1>

	<br>
	Hello, <?php echo $user_data['FirstName']; 
    echo "<table style='border: solid 1px black;'>";?>

    <!-- <div class="container"> -->
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered" style="border: solid 4px black;">
                        <tr>
                            <td> ID </td>
                            <td> FirstName </td>
                            <td> MiddleName </td>
                            <td> Lastname </td>
                            <td> Familyname </td>
                            <td> Email </td>
                            <td> Password </td>
                            <td> DateofBirth </td>
                            <td> Mobile </td>
                            <td> Edit  </td>
                            <td> Delete </td>
                        </tr>
            
                        <?php 
                                
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $ID = $row['ID'];
                                    $FirstName = $row['FirstName'];
                                    $MiddleName = $row['MiddleName'];
                                    $Lastname = $row['Lastname'];
                                    $Familyname = $row['Familyname'];
                                    $Email = $row['Email'];
                                    $Password = $row['Password1'];
                                    $DateofBirth = $row['DateofBirth'];
                                    $Mobile = $row['Mobile'];
                                
                        ?>
                                <tr>
                                    <td style="border: solid 1px black;"><?php echo $ID ?></td>
                                    <td style="border: solid 1px black;"><?php echo $FirstName ?></td>
                                    <td style="border: solid 1px black;"><?php echo $MiddleName ?></td>
                                    <td style="border: solid 1px black;"><?php echo $Lastname ?></td>
                                    <td style="border: solid 1px black;"><?php echo $Familyname ?></td>
                                    <td style="border: solid 1px black;"><?php echo $Email ?></td>
                                    <td style="border: solid 1px black;"><?php echo $Password ?></td>
                                    <td style="border: solid 1px black;"><?php echo $DateofBirth ?></td>
                                    <td style="border: solid 1px black;"><?php echo $Mobile ?></td>
                                    <td style="border: solid 1px blue;"><a href="update11.php?updateID=<?php echo $ID ?>">Edit</a></td>
                                    <td style="border: solid 1px red ;"><a style="color:red;" href="Delete.php?Del=<?php echo $ID ?>">Delete</a></td>
                                </tr>        
                        <?php 
                                }  
                        ?>                                                                    
                               

                    </table>
                </div>
            </div>
        </div>
    </div>
                            </table>
                            </body>