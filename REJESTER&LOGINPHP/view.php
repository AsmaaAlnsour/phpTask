<?php 

    require_once("connection.php");
    $query = " select * from users ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
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
                                        <td><?php echo $ID ?></td>
                                        <td><?php echo $FirstName ?></td>
                                        <td><?php echo $MiddleName ?></td>
                                        <td><?php echo $Lastname ?></td>
                                        <td><?php echo $Email ?></td>
                                        <td><?php echo $Password ?></td>
                                        <td><?php echo $DateofBirth ?></td>
                                        <td><?php echo $Mobile ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $ID ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $ID ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>