<!-- //index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Mysql PDO CRUD(Create, Read, Update and Delete) Search and Pagination with jQuery Ajax Bootstrap</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row text-center"> 
      <h2>PHP Mysql PDO CRUD(Create, Read, Update and Delete) Search and Pagination with jQuery Ajax Bootstrap</h2>
    </div>
    <div class="alert alert-success text-center message" role="alert"></div>
     
    <div class="row mb-3">
      <div class="col-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#employeeModal" id="addnewbtn">Add New </button>
      </div>
      <div class="col-9">
        <div class="input-group input-group-lg">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput">
 
        </div>
      </div>
    </div>
     
    <table class="table" id="employeetable">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Name</th>
          <th scope="col">Position</th>
          <th scope="col">Office</th>
          <th scope="col">Age</th>
          <th scope="col">Salary</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
 
    <nav id="pagination"></nav>
    <input type="hidden" name="currentpage" id="currentpage" value="1">
<?php
//modal
include_once 'formModal.php';
include_once 'viewModal.php';
?>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<div id="overlay" style="display:none;">
    <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;"></div>
    <br />
    Loading...
</div> 
</body>
</html>