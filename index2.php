<?php include 'toplayout.php' ?>
<?php include 'viewHospitals.php' ?>

  <h3 class="d-flex justify-content-center m-3 text-info">Hospitals</h3>
  <!--  style="position:sticky;top:62px;left:1000;z-index:100;"-->
  <div class="col" >
    <a href="#"><button type="button" name="button" class="btn btn-primary">Update</button></a>
    <a href="#"><button type="button" name="button" class="btn btn-primary">Delete</button></a>
  </div>
  <div class="col-12" style="overflow-x:scroll;max-height:75vh;">
  <table class="table table-bordered table-striped hlist">
    <thead class="thead-dark">
      <tr>
        <th>#                     </th>
        <th>name                  </th>
        <th>address               </th>
        <th>director              </th>
        <th>owner                 </th>
        <th>authorized_capacity   </th>
        <th>service_capacity      </th>
        <th>facility              </th>
        <th>contact               </th>
        <th>email                 </th>
        <th>classification        </th>
        <th>private               </th>
        <th>clinical_lab          </th>
        <th>DTL                   </th>
        <th>HIV                   </th>
        <th>pharmacy              </th>
        <th>xray                  </th>
        <th>BSF                   </th>
        <th>dialysis              </th>
        <th>water_testing_lab     </th>
        <th>LTO_cert              </th>
        <th>license               </th>
        <th>date_monitoring       </th>
        <th>NOV                   </th>
        <th>conformed_issued      </th>
        <th>date_deadline         </th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($sql as $row)
        {
          echo "<tr>";
          echo "<td>" . $row['id'                 ] . "</td> \n";
          echo "<td>" . $row['name'               ] . "</td> \n";
          echo "<td>" . $row['address'            ] . "</td> \n";
          echo "<td>" . $row['director'           ] . "</td> \n";
          echo "<td>" . $row['owner'              ] . "</td> \n";
          echo "<td>" . $row['authorized_capacity'] . "</td> \n";
          echo "<td>" . $row['service_capacity'   ] . "</td> \n";
          echo "<td>" . $row['facility'           ] . "</td> \n";
          echo "<td>" . $row['contact'            ] . "</td> \n";
          echo "<td>" . $row['email'              ] . "</td> \n";
          echo "<td>" . $row['classification'     ] . "</td> \n";
          echo "<td>" . $row['private'            ] . "</td> \n";
          echo "<td>" . $row['clinical_lab'       ] . "</td> \n";
          echo "<td>" . $row['DTL'                ] . "</td> \n";
          echo "<td>" . $row['HIV'                ] . "</td> \n";
          echo "<td>" . $row['pharmacy'           ] . "</td> \n";
          echo "<td>" . $row['xray'               ] . "</td> \n";
          echo "<td>" . $row['BSF'                ] . "</td> \n";
          echo "<td>" . $row['dialysis'           ] . "</td> \n";
          echo "<td>" . $row['water_testing_lab'  ] . "</td> \n";
          echo "<td>" . $row['LTO_cert'           ] . "</td> \n";
          echo "<td>" . $row['license'            ] . "</td> \n";
          echo "<td>" . $row['date_monitoring'    ] . "</td> \n";
          echo "<td>" . $row['NOV'                ] . "</td> \n";
          echo "<td>" . $row['conformed_issued'   ] . "</td> \n";
          echo "<td>" . $row['date_deadline'      ] . "</td> \n";
          echo "</tr>";
        }
      ?>
      <tr>

      </tr>
    </tbody>
  </table>
</div>
<?php include 'bottomlayout.php' ?>
