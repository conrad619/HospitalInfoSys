<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = "";
try {
      $conn = new PDO("mysql:host=$servername;dbname=HospitalInfoSys", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    }
catch(PDOException $e)
    {
      //echo "Connection failed: " . $e->getMessage();
    }


    function check_input($data) {
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
