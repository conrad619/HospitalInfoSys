<?php include 'toplayout.php' ?>
<?php include 'retrieveHospital.php'; ?>
          <h3 class="d-flex justify-content-center m-3 text-info">Update Hospital</h3>
              <form action="updateHospital.php" method="post" class="p-5">

                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name of Hospital:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " name="id" id="id" value="<?php echo $row["id"]; ?>" required>
                      <input type="text" class="form-control " name="name" id="name" value="<?php echo $row["name"]; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " name="address" id="address" value="<?php echo $row["address"]; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="director" class="col-sm-2 col-form-label">COH / Medical Director:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="director" id="director" value="<?php echo $row["director"]; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="owner" class="col-sm-2 col-form-label">Owner:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="owner" id="owner" value="<?php echo $row["owner"]; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="authorized_capacity" class="col-sm-2 col-form-label ">Authorized By Capacity:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " name="authorized_capacity" id="authorized_capacity" value="<?php echo $row["authorized_capacity"]; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="service_capacity" class="col-sm-2 col-form-label">Service Capacity: </label>
                    <div class="col-sm-10">
                      <select class="custom-select" name="service_capacity" id="service_capacity" required>
                        <option value="<?php echo $row["service_capacity"]; ?>" selected><?php echo $row["service_capacity"]; ?></option>
                        <option value="Hospital">Hospital</option>
                        <option value="Infirmary">Infirmary</option>
                        <option value="Birthing Facility">Birthing Facility</option>
                      </select>
                      <div class=" col-sm-12" id="hospitalSelection">
                        <div class="row">
                          <label for="shospital" class="col-form-label mr-3">Hospital:</label>
                          <select class="custom-select col" name="shospital" id="shospital" required>
                            <option selected>Open this select menu</option>
                            <option value="L1">L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="facility" class="col-sm-2 col-form-label">Facility #:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="facility" id="facility" value="<?php echo $row["facility"]; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="contact" class="col-sm-2 col-form-label">Contact #:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="contact" id="contact" value="<?php echo $row["contact"]; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="email" value="<?php echo $row["email"]; ?>" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="classification" class="col-sm-2 col-form-label ">Classification by Ownership:</label>
                      <div class="col-sm-10">
                        <label for="" class="col-form-label ">Government:</label>
                        <select class="custom-select" name="classification" id="classification" value="<?php echo $row["classification"]; ?>" required>
                          <option selected>Open this select menu</option>
                          <option value="Province">Province</option>
                          <option value="Municipality">Municipality</option>
                          <option value="City">City</option>
                          <option value="DOH">DOH</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" name="private" value="1" <?php echo ($row["private"]==1) ? "checked": ""; ?> id="private">
                        <label class="custom-control-label" for="private">Private</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label ">Other Services:</label>
                      <div class="col-sm-10">
                        <label for="clinical_lab" class="col-form-label ">Clinical Lab:</label>
                        <select class="custom-select" name="clinical_lab" id="clinical_lab"  required>
                          <option value="<?php echo $row["clinical_lab"]; ?>" selected><?php echo $row["clinical_lab"]; ?></option>
                          <option value="Primary">Primary</option>
                          <option value="Secondary">Secondary</option>
                          <option value="Tertiary">Tertiary</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" name="DTL" value="1" <?php echo ($row["DTL"]==1) ? "checked": ""; ?> id="DTL">
                        <label class="custom-control-label" for="DTL">DTL</label>
                      </div>
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" name="HIV" value="1" <?php echo ($row["HIV"]==1) ? "checked": ""; ?> id="HIV">
                        <label class="custom-control-label" for="HIV">HIV</label>
                      </div>
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" name="pharmacy" value="1" <?php echo ($row["pharmacy"]==1) ? "checked": ""; ?> id="pharmacy">
                        <label class="custom-control-label" for="pharmacy">Pharmacy</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="xray" class="col-sm-10 col-form-label offset-sm-2">XRAY:</label>
                      <div class="col-sm-10  offset-sm-2">
                        <select class="custom-select" name="xray" id="xray" required>
                          <option value="<?php echo $row["xray"]; ?>" selected><?php echo $row["xray"]; ?></option>
                          <option value="level 1">level 1</option>
                          <option value="level 2">level 2</option>
                          <option value="level 3">level 3</option>
                          <option value="Specialized XRAY services">Specialized XRAY services</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="BSF" class="col-sm-10 col-form-label offset-sm-2">BSF:</label>
                      <div class="col-sm-10 offset-sm-2">
                        <select class="custom-select" name="BSF" id="BSF" required>
                          <option value="<?php echo $row["BSF"]; ?>" selected><?php echo $row["BSF"]; ?></option>
                          <option value="BS">BS</option>
                          <option value="BCU">BCU</option>
                          <option value="BCU/BS">BCU/BS</option>
                          <option value="BB">BB</option>
                          <option value="BC">BC</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="dialysis" class="col-sm-2 col-form-label offset-sm-2">Dialysis:</label>
                    <div class="col-sm-10 offset-sm-2">
                      <input type="text" class="form-control" name="dialysis" id="dialysis" value="<?php echo $row["dialysis"]; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="water_testing_lab" class="col-sm-2 col-form-label offset-sm-2">Water Testing Lab:</label>
                    <div class="col-sm-10 offset-sm-2">
                      <input type="text" class="form-control" name="water_testing_lab" id="water_testing_lab" value="<?php echo $row["water_testing_lab"]; ?>" required>
                    </div>
                  </div>
                  <hr class="my-5">
                  <div class="form-group row">
                    <label for="LTO_cert" class="col-sm-2 col-form-label">LTO Certificate:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="LTO_cert" id="LTO_cert" value="<?php echo $row["LTO_cert"]; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="license" class="col-sm-2 col-form-label">License #:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="license" id="license" value="<?php echo $row["license"]; ?>" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="date_monitoring" class="col-sm-2 col-form-label">Date of Monitoring:</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="date_monitoring" id="date_monitoring" value="<?php echo $row["date_monitoring"]; ?>"required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="NOV" class="col-sm-2 col-form-label">NOV/Notice Of Violation issued:</label>
                    <div class="col-sm-10 d-flex align-items-center">
                      <div class="custom-control custom-radio mr-5">
                        <input type="radio" id="nyes" name="NOV" value="1" <?php echo ($row["NOV"]==1) ? "checked": ""; ?> class="custom-control-input">
                        <label class="custom-control-label" for="nyes">YES</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="nno" name="NOV" value="0" <?php echo ($row["NOV"]==0) ? "checked": ""; ?> class="custom-control-input">
                        <label class="custom-control-label"  for="nno">NO</label>
                      </div>
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="conformed_issued" class="col-sm-2 col-form-label">Conformed Issued:</label>
                    <div class="col-sm-10 d-flex align-items-center">
                      <div class="custom-control custom-radio mr-5">
                        <input type="radio" id="cyes" value="1" name="conformed_issued" <?php echo ($row["conformed_issued"]==1) ? "checked": ""; ?> class="custom-control-input">
                        <label class="custom-control-label" for="cyes">YES</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="cno" value="0" name="conformed_issued" <?php echo ($row["conformed_issued"]==0) ? "checked": ""; ?> class="custom-control-input">
                        <label class="custom-control-label" for="cno">NO</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="date_deadline" class="col-sm-2 col-form-label">Deadline date for Compliance:</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="date_deadline" id="date_deadline" value="<?php echo $row["date_deadline"]; ?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12 d-flex justify-content-end my-4">
                      <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
                    </div>
                  </div>


              </form>


<?php include 'bottomlayout.php' ?>

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
