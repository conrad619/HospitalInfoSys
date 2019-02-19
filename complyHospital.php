<?php

require 'connect.php';
$ids = "";
$complied="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ids                   = $_POST["complyid"];
  $complied              = $_POST["comply"];
  //$date_deadline         = check_input($_POST["date_deadline"]);
}


try
{
  global $conn;
  $sql = $conn->prepare("UPDATE hospitalinfo SET

    complied = ?
    WHERE id = ? ");

  $sql->execute([
  $complied,
  $ids]);

  echo "Updated successfully!";
  header("Location: index_view.php#".$ids);
  die();
}
catch(PDOException $e)
{
  echo "Update failed: " . $e->getMessage();
}



?>
