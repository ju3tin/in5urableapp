<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>


<?php
$servername = "us-cdbr-east-04.cleardb.com";
$username = "bcaaca6b3b184b";
$password = "fd83cc9e";
$dbname = "heroku_bb5f8388728c941";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT numberid, userName, first_name, last_name FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "numberid: " . $row["numberid"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "Username " . $row["userName"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

  
  
</body>
</html>
