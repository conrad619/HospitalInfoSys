<?php
  require 'connect.php';
  $result='';
  $sql='';
try
  {
    global $conn;
    $sql = $conn->query("SELECT * FROM hospitalinfo");


    #$result = $sth->fetchAll();
    #print_r($result);
  }
catch(PDOException $e)
  {
    echo "View failed: " . $e->getMessage();
  }
?>
