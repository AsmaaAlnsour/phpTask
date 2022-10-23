<?php
$conniction= mysqli_connect('localhost','root','','users')
?>
<?php include_once('top-header.php');?>		   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>cms dashboard</title>
	    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	
	
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
      <style>
        .main-content{

            background-color:#6189F6;
            padding:100px;
        }
        .co{
            background-color: red;
            color : white;
            margin-bottom:20px;
            margin-left:1150px;
            padding:10px 20px;
            

        }
        .yo{
            background-color: gray;
            color : white;
            /* margin-bottom:20px; */
            padding:10px 20px;

        }
        .sum{
            margin-Top:20px;
        }
        </style>
</head>
<body>
<div class="main-content">
<a class="btn yo btn-md" href="superadmin.php" >Back<i class="fa fa-download pl-2"></i></a>
<a class="btn co btn-md" href="login.php" >Logout<i class="fa fa-download pl-2"></i></a>


		      <div class="row">
			     <div class="col-lg-3 col-md-6 col-sm-6">
				    <div class="card card-stats">
					   <div class="card-header">
					      <div class="icon icon-warning">
						     <span class="material-icons">equalizer</span>
						  </div>
					   </div>
					   <div class="card-content">
					       <p class="category"><strong>Numper of Employee</strong></p>
						   <h3 class="card-title">
                           <?php
$query ="SELECT id FROM info ORDER BY id";
$query_run = mysqli_query($conniction,$query);
$row = mysqli_num_rows($query_run);
echo "<h1>".$row."</h1>"



?>
                           </h3>
					   </div>
					   <div class="card-footer">
					      <div class="stats">
                            <!-- <br> -->
                            <h6>Our efficiency is greater than this!..</h6>
						     <!-- <i class="material-icons text-info">info</i> -->
							 <!-- <a href="#">See detailed report</a> -->
						  </div>
					   </div>
					</div>
				 </div>
				 
				 <div class="col-lg-3 col-md-6 col-sm-6">
				    <div class="card card-stats">
					   <div class="card-header">
					      <div class="icon icon-rose">
						     <span class="material-icons">attach_money</span>
						  </div>
					   </div>
					   <div class="card-content">
					       <p class="category"><strong> Avg. Salary</strong></p>
						   <h3 class="card-title">
                           <?php
$query ="SELECT AVG(Salary) AS avg FROM info";
$query_result = mysqli_query($conniction,$query);
while($row = mysqli_fetch_assoc($query_result)){
$output=$row['avg'];
};
echo "<h1>".$output ."  JD"."</h1>"

?>

                           </h3>
					   </div>
					   <div class="card-footer">
					      <div class="stats">
                          <h6> Avg </h6>
						  </div>
					   </div>
					</div>
				 </div>
				 
				 <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <span class="material-icons">attach_money</span>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Max. Salary</strong></p>
                                    <h3 class="card-title">
                                    <?php
$query ="SELECT MAX(Salary) AS max FROM info";
$query_result = mysqli_query($conniction,$query);
while($row = mysqli_fetch_assoc($query_result)){
$MAXSALARY=$row['max'];
};
echo "<h1>".$MAXSALARY ."  JD"."</h1>"


?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    <h6> Max</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
				  <div class="col-lg-3 col-md-6 col-sm-6">
				    <div class="card card-stats">
					   <div class="card-header">
					      <div class="icon icon-info">
						     <span class="material-icons">attach_money</span>
						  </div>
					   </div>
					   <div class="card-content">
					       <p class="category"><strong>Min. Salary</strong></p>
						   <h3 class="card-title">
                           <?php
$query ="SELECT MIN(Salary) AS min FROM info";
$query_result = mysqli_query($conniction,$query);
while($row = mysqli_fetch_assoc($query_result)){
$MINSALARY=$row['min'];
};
echo "<h1>".$MINSALARY ."  JD"."</h1>"


?>
                           </h3>
					   </div>
					   <div class="card-footer">
					      <div class="stats">
                          <h6> Min</h6>
					   </div>
					</div>
				 </div>
				 </div>
				 
                 <div class="col-lg-3 col-md-6 col-sm-6 sum">
				    <div class="card card-stats">
					   <div class="card-header">
					      <div class="icon icon-info">
						     <span class="material-icons">attach_money</span>
						  </div>
					   </div>
					   <div class="card-content">
					       <p class="category"><strong>SUM Salary</strong></p>
						   <h3 class="card-title">
                           <?php
$query ="SELECT SUM(Salary) AS sum FROM info";
$query_result = mysqli_query($conniction,$query);
while($row = mysqli_fetch_assoc($query_result)){
$SUMSALARY=$row['sum'];
};
echo "<h1>".$SUMSALARY ."  JD"."</h1>"


?>
                           </h3>
					   </div>
					   <div class="card-footer">
					      <div class="stats">
                          <h6> SUM</h6>
					   </div>
					</div>
				 </div>
			  </div>
			  
			  	  
    
</body>
</html>

