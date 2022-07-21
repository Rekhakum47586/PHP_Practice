<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
    $conn = new mysqli($servername, $username, $password);

// Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }
     echo "Connected successfully";
     
     
     // Create database
     $sql = "CREATE DATABASE myDB";
    if ($conn->query($sql) === TRUE) {
     echo "Database created successfully";
    } else {
     echo "Error creating database: " . $conn->error;
     }
     
      // sql to create table
     $sql = "CREATE TABLE MyGuests (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   firstname VARCHAR(30) NOT NULL,
   lastname VARCHAR(30) NOT NULL,
   email VARCHAR(50),
   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
     //Insert Data
     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
       VALUES ('John', 'Doe', 'john@example.com')";
       
       //Get Last ID
       
        $last_id = $conn->insert_id;
        
       //Inser Multiple
       
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com');";
       $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com');";
       $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com')";

    if ($conn->multi_query($sql) === TRUE) {
     echo "New records created successfully";
   } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   }
       
 //close Connection
 
 $conn->close();

?>

