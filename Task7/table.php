<?php
include 'navbar.php';

echo "<br><h1>Table</h1><br><br>";
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Number</th><th>first_name</th><th>Middle_name</th><th>family_name</th><th>Date_of_birth</th>
<th>degree</th><th>Major_Address</th><th>Age</th><th>Tell_number</th><th>education</th></tr>";



class TableRows extends RecursiveIteratorIterator {
  function construct($it) {
    parent::construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students database";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT students.id,students.first_name,students.Middle_name,students.family_name,students.Date_of_birth,students.degree,students.Major_Address,students.Age,students.Tell_number,education.education FROM education INNER JOIN students ON education.education_id = students.id;");
  $stmt->execute();
  
  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
include 'footer.php';



