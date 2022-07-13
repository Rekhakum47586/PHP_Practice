<?php

$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php

  if(!empty($name)){
    echo "<h2>$name</h2>"."<br>";
   }else {
    echo "name is required <br>";
   }

 if(!empty($email)){
    echo $email."<br>";
   }else {
    echo "email is required";
   }

?>
