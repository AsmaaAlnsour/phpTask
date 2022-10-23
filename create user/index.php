<?php include_once('functions.php');
  $connection =new mysqli("localhost", "root", "", "add_user");

  if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    mysqli_query($connection, "DELETE FROM user WHERE id=".$id);
    header('location: index.php');
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
<style>
    .co{
       color: white ;
       background-color: #C96F34;
       
    }
    body{
        color : #C96F34; 
    }
    .table{
        color : #C96F34;
    }
    </style>
</head>
  <body class="hm-gradient">
    
    <main>
        
        <!--MDB Tables-->
        <div class="container mt-4">

            <div class="text-center darken-grey-text mb-4">
              
            </div>
            <div class="card ">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-6">
                            <h2 class="py-3 text-center font-bold font-up blue-text">All profiles</h2></div>
                            <div class="col-md-6">
                            <a class="btn co btn-md" href="upload.php" >Add new Employee<i class="fa fa-download pl-2"></i></a>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                    <table class="table table-hover  container">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th scope="row">#</th>
                                <!-- <th class="th-lg"><a href="">Username</a></th> -->
                                <th class="th-lg">Image</th>
                                <th class="th-lg">Name</th>
                                <th class="th-lg">Address</th>
                                <th class="th-lg"></th>
                                <th class="th-lg">Salary</th>
                                <th class="th-lg">Action</th>

                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                           <?php foreach($user as $item): ?>

                           <tr>
                           <td>
                             <?php echo $item['id']; ?>
                           </td>
                           <!-- <td>
                             <?php echo $item['username']; ?>
                           </td> -->
                           <td>
                            <img src="<?php echo 'images/'. $item['image']; ?>" width='90' height='90'> 
                           </td>
                           <td>
                             <?php echo $item['Name']; ?>
                           </td>
                           <td>
                             <?php echo $item['Address']; ?>
                           </td>
                           <td>
                           <td>
                             <?php echo $item['Salary']; ?>
                           </td>
                           <td>
                            <?php
                           $id=$item['id'];
    echo "<button class='btn btn-warning'><a href='view.php?veiwid=".$id."' class='text-light'>".'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
  </svg>'."</a></button>
    <button class='btn btn-info'><a href='update.php?updateid=".$id."' class='text-light'>".'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
  </svg>'."</a></button>
    <button class='btn btn-danger'><a href='index.php?deleteid=".$id."' class='text-light'>".'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
  </svg>'."</a></button>"
   ?>
    </td>
                           </tr>
                           
                           <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="my-4">
        </div>
      
    </main>
  
</body>
