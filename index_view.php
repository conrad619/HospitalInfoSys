<?php include 'toplayout.php' ?>
<?php include 'viewHospitals.php' ?>
    <!-- <h3 class="d-flex justify-content-center m-3 text-info">Hospitals</h3> -->
    <!--  style="position:sticky;top:62px;left:1000;z-index:100;"-->
    <div class="col" >
      <button type="button" name="button" id="updateBtn" class="btn btn-primary">Update</button>
      <button type="button" name="button" id="deleteBtn" class="btn btn-primary">Delete</button>
      <form class="" action="index_update.php" method="post" id="updateForm">
        <input type="hidden" name="ids" id="ids" value="-1">
      </form>
      <form class="" action="deleteHospital.php" method="post" id="deleteForm">
        <input type="hidden" name="ids" id="idsd" value="-1">
      </form>
    </div>
    <div class="col-12" style="overflow:scroll;height:80vh;">
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
              echo "<td class='ids'>" . $row['id'                 ] . "</td> \n";
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

<script type="text/javascript">
  $("tbody tr").click(function () {
    $('.selected').removeClass('bg-primary');
    $('.selected').removeClass('selected');
    $(this).addClass("selected");
    $(this).addClass("bg-primary");
    var ids = $('.ids',this).html();//get row id
    $("#ids").val(ids);//put id to update input
    $("#idsd").val(ids);//put id to update input
    //alert(ids);
    // var product = $('.p',this).html();
    // var infRate =$('.i',this).html();
    // var note =$('.n',this).html();
    // alert(product +','+ infRate+','+ note);
    //$(this).css('background','blue');
  });

  $("#updateBtn").click(function(){
    if ($("#ids").val() != "-1") {
      $("#updateForm").submit();
    }else{
      alert('Please select row to update');
    }
  });

  $("#deleteBtn").click(function(){
    if ($("#idsd").val() != "-1") {
      if (confirm('Are you sure you want to delete this row?')) {
          // Save it!
          $("#deleteForm").submit();
      } else {
          // Do nothing!
      }
    }else{
      alert('Please select row to delete');
    }
  });
</script>
<?php include 'bottomlayout.php' ?>
