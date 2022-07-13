<?php
$servername = "localhost";
$username = "i95dev";
$password = "i95dev";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    
  die("Connection failed: " . $conn->connect_error);

}

// Create database
$sql = "CREATE DATABASE magento243";

if ($conn->query($sql) === TRUE) {

  echo "Database created";

} 

else {
    echo "db is allready exist";

  echo "Error creating database: " . $conn->error;


}

$conn->close();

?>
