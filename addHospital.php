<?php

require 'connect.php';
$name = "";
$address = "";
$director = "";
$owner = "";
$authorized_capacity = "";
$service_capacity = "";
$facility = "";
$contact = "";
$email = "";
$classification = "";
$private = "";
$clinical_lab = "";
$DTL = "";
$HIV = "";
$pharmacy = "";
$xray = "";
$BSF = "";
$dialysis = "";
$water_testing_lab = "";
$LTO_cert = "";
$license = "";
$date_monitoring = "";
$NOV = "";
$conformed_issued = "";
$date_deadline = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name                  = check_input($_POST["name"]);
  $address               = check_input($_POST["address"]);
  $director              = check_input($_POST["director"]);
  $owner                 = check_input($_POST["owner"]);
  $authorized_capacity   = check_input($_POST["authorized_capacity"]);
  $service_capacity      = check_input($_POST["service_capacity"]);
  $facility              = check_input($_POST["facility"]);
  $contact               = check_input($_POST["contact"]);
  $email                 = check_input($_POST["email"]);
  $classification        = check_input($_POST["classification"]);
  $private               = check_input($_POST["private"]);
  $clinical_lab          = check_input($_POST["clinical_lab"]);
  $DTL                   = check_input($_POST["DTL"]);
  $HIV                   = check_input($_POST["HIV"]);
  $pharmacy              = check_input($_POST["pharmacy"]);
  $xray                  = check_input($_POST["xray"]);
  $BSF                   = check_input($_POST["BSF"]);
  $dialysis              = check_input($_POST["dialysis"]);
  $water_testing_lab     = check_input($_POST["water_testing_lab"]);
  $LTO_cert              = check_input($_POST["LTO_cert"]);
  $license               = check_input($_POST["license"]);
  $date_monitoring       = check_input($_POST["date_monitoring"]);
  $NOV                   = check_input($_POST["NOV"]);
  $conformed_issued      = check_input($_POST["conformed_issued"]);
  $date_deadline         = check_input($_POST["date_deadline"]);
}


try
{
  global $conn;
  $sql = $conn->prepare("INSERT INTO hospitalinfo
  (
    name,
    address,
    director,
    owner,
    authorized_capacity,
    service_capacity,
    facility,
    contact,
    email,
    classification,
    private,
    clinical_lab,
    DTL,
    HIV,
    pharmacy,
    xray,
    BSF,
    dialysis,
    water_testing_lab,
    LTO_cert,
    license,
    date_monitoring,
    NOV,
    conformed_issued,
    date_deadline
  )
  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

  $sql->execute([
  $name,
  $address,
  $director,
  $owner,
  $authorized_capacity,
  $service_capacity,
  $facility,
  $contact,
  $email,
  $classification,
  $private,
  $clinical_lab,
  $DTL,
  $HIV,
  $pharmacy,
  $xray,
  $BSF,
  $dialysis,
  $water_testing_lab,
  $LTO_cert,
  $license,
  $date_monitoring,
  $NOV,
  $conformed_issued,
  $date_deadline]);

  add_hospital($sql);
  echo "Added successfully!";
  header("Location: index.php");
  die();
}
catch(PDOException $e)
{
  echo "Add failed: " . $e->getMessage();
}

function add_hospital($sql_insert){
  global $conn;
  if($conn->exec($sql_insert) === false){
    $msg = 'Error inserting hospital.';
    return false;
  }else{
    $msg = "The new hospital inserted";
    return true;
  }
}


function check_input($data) {
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
