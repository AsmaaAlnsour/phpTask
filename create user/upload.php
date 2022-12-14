<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload PHP</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <style>
    body{
      background-color : #E0AC89 ;
      color : white ;
    }
    .btn{
      color : white;
      background-color: #E6BFA4;
    }
    </style>
</head>
<body>
<a class="btn co btn-md" href="index.php" >Back<i class="fa fa-download pl-2"></i></a>

  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 pt-3 form-div">
        
        <form action="functions.php" method="post" enctype="multipart/form-data">
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
              <button > <h4>Upload image</h4> </button >
              </div>
              <img src="https://image.shutterstock.com/image-vector/upload-profile-icon-design-vector-260nw-1980453848.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
            <label>Profile Image</label>
          </div>
          <div class="form-group">
            <!-- <label>name</label>
            <input name="name" class="form-control" required> -->
          
              
        <label for="Name" >Name </label>
        <input  id="Name" name="Name"  />
        <div id="one" class="err"></div><br />
        
        <label for="Address">Address</label>
        <input type="text"  name="Address" id="Address">
        <div id="two" class="err"></div><br />

        <label for="Salary">Salary</label>
       <input type="number" id="Salary" name="Salary" ><br>
       <div id="four" class="err"></div><br />
          <div class="form-group"></div>
            <button type="submit" name="save_profile" class="btn  btn-block">Add New Employee</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script>
    function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>




</body>
</html>

