<?php 

$mysqli = new mysqli("localhost","root","","test_whatever");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM whatevers")) {
  while($row = mysqli_fetch_assoc($result))
  {
      $results[] = $row;
  }


}

echo json_encode($results);


$mysqli -> close();
?>