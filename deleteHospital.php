
<?php
require 'connect.php';
$result='';
$sql='';
$ids='';
$row='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ids = check_input($_POST["ids"]);
}
try
  {
    global $conn,$row;
    $sql = $conn->prepare("DELETE FROM hospitalinfo WHERE id = ? ");
    $sql->execute([$ids]);

    echo "Record deleted successfully";
    header("Location: index_view.php");

    #$result = $sth->fetchAll();
    #print_r($result);
  }
catch(PDOException $e)
  {
    echo "View failed: " . $e->getMessage();
  }
?>
