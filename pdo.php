<?php

$servername = "homework";
$usname = "root";
$password = "";
$dbname = "registr";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usname, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user_registr (user_name,last_name,country,email,password) VALUES  ('$username','  $lastname',' $country ','$email','$pass' )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>