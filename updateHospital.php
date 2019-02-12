<?php

require 'connect.php';
$ids = "";
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
  $ids                   = check_input($_POST["id"]);
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
  $sql = $conn->prepare("UPDATE hospitalinfo SET

    name = ?,
    address = ?,
    director = ?,
    owner = ?,
    authorized_capacity = ?,
    service_capacity = ?,
    facility = ?,
    contact = ?,
    email = ?,
    classification = ?,
    private = ?,
    clinical_lab = ?,
    DTL = ?,
    HIV = ?,
    pharmacy = ?,
    xray = ?,
    BSF = ?,
    dialysis = ?,
    water_testing_lab = ?,
    LTO_cert = ?,
    license = ?,
    date_monitoring = ?,
    NOV = ?,
    conformed_issued = ?,
    date_deadline = ?
    WHERE id = ? ");

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
  $date_deadline,
  $ids]);

  echo "Updated successfully!";
  header("Location: index_view.php");
  die();
}
catch(PDOException $e)
{
  echo "Update failed: " . $e->getMessage();
}



?>
