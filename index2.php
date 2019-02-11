<?php
include 'connect.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mycss.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js">
    </script>
  </head>
  <body>
    <div class="container-fluid bg-dark">

      <div class="d-flex justify-content-center text-light p-2">
        <h2>Hospital / Infirmary / Birthing Hospital</h2>
      </div>

    </div>
    <div class="container-fluid">
      <div class="row">
        <nav class="nav flex-column col-md-2 sidebar p-2">
          <div class="sticky nav flex-column">
            <a href="index.php">Add Hospital</a>
            <a href="index2.php">View Hospitals</a>
          </div>

        </nav>
        <div class="main-form ml-auto col-md-10 p-4">


        </div>
      </div>
    </div>

    <div class="container-fluid bg-dark">

      <div class="d-flex justify-content-center text-light p-2">
        <h2>Powered with PHP</h2>
      </div>

    </div>
  </body>
  <script type="text/javascript">
    $("#hospitalSelection").hide();
    $(document).ready(function(){
      $("#service_capacity").change(function(){
        var selectedService = $(this).children("option:selected").val();
        if (selectedService==="Hospital"){
          $("#hospitalSelection").show();
        }
      })
    })
  </script>
</html>
