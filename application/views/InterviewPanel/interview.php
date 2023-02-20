<!-- <style>
 .custom-range {
    width: 100%;
    height: calc(1rem + 0);
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    }
 </style> -->
<div class="pageContent innerpg">
  <div class="tablesection">
    <div class="table-responsive">
      <table id="example" class="table" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="first">S.No</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Mobile Number</th>
            <th>Date</th>
            <th>Total Exp</th>
            <th>Round</th>
            <th>Interview Date/Time</th>
            <th class="last">Interview</th>
          </tr>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>


<div id="wrapper">
  <div id="interviewModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" onclick="closeModal();">&times;</button>
          <h4 class="modal-title">START INTERVIEW</h4>
        </div>
        <div class="modal-body">

          <form method="post" id="NewGroup">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Profile Skills</label>
                  <input type="range" class="custom-range" id="profile" min="0" max="10" value="0">
                  <div id="profile_result"><b></b></div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Communication</label>
                  <input type="range" class="custom-range" id="communication" min="0" step="0.50" max="10" value="0">
                  <div id="communication_result"><b></b></div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Behaviour</label>
                  <input type="range" class="custom-range" id="behaviour" min="0" step="0.50" max="10" value="0">
                  <div id="behaviour_result"><b></b></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Attitude towards Position</label>
                  <input type="range" class="custom-range" id="attitude" min="0" step="0.50" max="10" value="0">
                  <div id="attitude_result"><b></b></div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Work Experience</label>
                  <input type="range" class="custom-range" id="work" min="0" step="0.50" max="10" value="0">
                  <div id="work_result"><b></b></div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Team Player</label>
                  <input type="range" class="custom-range" id="team" min="0" step="0.50" max="10" value="0">
                  <div id="team_result"><b></b></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Technical Skills</label>
                  <input type="range" class="custom-range" id="technicalSkills" min="0" step="0.50" max="10" value="0">
                  <div id="technicalSkills_result"><b></b></div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Logical Skills</label>
                  <input type="range" class="custom-range" id="logicalSkills" min="0" step="0.50" max="10" value="0">
                  <div id="logicalSkills_result"><b></b></div>
                </div>
              </div>

            </div>

            <input type="hidden" name="roundId" id="roundId" value="" />
            <input type="hidden" name="resumeId" id="resumeId" value="" />
            <div class="form-group bdr">
              <h5>Strength</h5>
              <textarea type="text" class="form-control" id="strength" maxlength="200"></textarea>
              <span id="err_strength" style="color:red"></span>
            </div>

            <div class="form-group bdr">
              <h5>Weakness</h5>
              <textarea type="text" class="form-control" id="weekness" maxlength="200"></textarea>
              <span id="err_weekness" style="color:red"></span>
            </div>

            <div class="form-group bdr">
              <h5>Additional Comments</h5>
              <textarea type="text" class="form-control" id="additionalComment" maxlength="200"></textarea>
              <span id="err_additionalComment" style="color:red"></span>
            </div>

            <div class="form-group bdr intmenu">
              <h5>Total time taken for the interview</h5>
              <i class="fa fa-angle-down"></i>
              <select class="form-control selectpicker" id="timetaken" name="timetaken" required>
                <option value=""></option>
                <option value="15Min">15 Min</option>
                <option value="30Min">30 Min</option>
                <option value="45Min">45 Min</option>
                <option value="1">1 hrs</option>
                <option value="2">2 hrs</option>
                <option value="3">3 hrs</option>
                <option value="4">4 hrs</option>
                <option value="5">5 hrs</option>
              </select>
              <span id="err_timetaken" style="color:red"></span>
            </div>
            <div class="form-group bdr intmenu">
              <h5>My recommendation</h5>
              <i class="fa fa-angle-down"></i>
              <select class="form-control selectpicker" id="recommendation" name="recommendation" required>
                <option value=""></option>
                <option value="1">Hire</option>
                <option value="2">Reject</option>
                <option value="3">Hold</option>
                <option value="4">Strongly Hire</option>
              </select>
              <span id="err_recommendation" style="color:red"></span>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onClick="submitInterview();">SUBMIT</button>
        </div>
        </form>
      </div>
    </div>
  </div>

</div>
</body>

</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {

    $('#example').DataTable({
      dom: 'Bfrtip',
      'processing': false,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
        'url': '<?php echo base_url() ?>Interview/getInterviewMenu'
      },
      'columns': [{
          data: 'id'
        },
        {
          data: 'jobId'
        },
        {
          data: 'name'
        },
        {
          data: 'mobile'
        },
        {
          data: 'lastCompany'
        },
        {
          data: 'totalExperince'
        },
        {
          data: 'round'
        },
        {
          data: 'interViewDateTime'
        },
        {
          data: 'status'
        },
      ],
      buttons: [{
        extend: 'pdf',
        text: 'Export PDF',
      }],
      columnDefs: [{
        orderable: false,
        targets: -1
      }, ],
      "destroy": true
    });
  });

  function closeModal() {
    swal({
        title: "Are you sure?",
        text: "You want to end Interview",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          swal.close();
          $('#interviewModal').modal('hide');
        } else {
          swal.close();
        }
      });
  }

  function startInterview(roundId, resumeId) {
    swal({
        title: "Are you sure?",
        text: "You want to start Interview",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          swal.close();
          console.log('eveny_id', roundId);
          $(".modal-body #roundId").val(roundId);
          $(".modal-body #resumeId").val(resumeId);
          $('#interviewModal').modal('show');
        } else {
          swal.close();
        }
      });
  }

  function submitInterview() {
    $("#err_strength").html('');
    $("#err_weekness").html('');
    $("#err_additionalComment").html('');
    $("#err_timetaken").html('');
    $("#err_recommendation").html('');

    let postdata = {
      'roundId': $("#roundId").val().trim(),
      'resumeId': $("#resumeId").val().trim(),
      'profileSkills': $("#profile").val().trim(),
      'behaviour': $("#behaviour").val().trim(),
      'teamPlayer': $("#team").val().trim(),
      'communication': $("#communication").val().trim(),
      'attiToWordPostion': $("#attitude").val().trim(),
      'workExperience': $("#work").val().trim(),
      'strength': $("#strength").val(),
      'weekness': $("#weekness").val(),
      'additionalComment': $("#additionalComment").val(),
      'totalTime': $("#timetaken").val(),
      'recommendation': $("#recommendation").val(),
      'technicalSkills': $("#technicalSkills").val(),
      'logicalSkills': $("#logicalSkills").val(),
    }

    console.log("postdata==", postdata)

    if (postdata.strength == false) {
      $("#err_strength").html('');
      $("#err_weekness").html('');
      $("#err_additionalComment").html('');
      $("#err_timetaken").html('');
      $("#err_recommendation").html('');
      $("#err_strength").html(' Please enter strength');
      $("#err_strength").hide().slideDown().delay(3000).fadeOut();
      $("#strength").focus();
      return false;
    }

    if (postdata.weekness == false) {
      $("#err_strength").html('');
      $("#err_weekness").html('');
      $("#err_additionalComment").html('');
      $("#err_timetaken").html('');
      $("#err_recommendation").html('');
      $("#err_weekness").html(' Please enter weekness');
      $("#err_weekness").hide().slideDown().delay(3000).fadeOut();
      $("#weekness").focus();
      return false;
    }

    if (postdata.additionalComment == false) {
      $("#err_strength").html('');
      $("#err_weekness").html('');
      $("#err_additionalComment").html('');
      $("#err_timetaken").html('');
      $("#err_recommendation").html('');
      $("#err_additionalComment").html(' Please enter additionalComment');
      $("#err_additionalComment").hide().slideDown().delay(3000).fadeOut();
      $("#additionalComment").focus();
      return false;
    }

    if (postdata.totalTime == false) {
      $("#err_strength").html('');
      $("#err_weekness").html('');
      $("#err_additionalComment").html('');
      $("#err_timetaken").html('');
      $("#err_recommendation").html('');
      $("#err_timetaken").html(' Please Choose Timetaken');
      $("#err_timetaken").hide().slideDown().delay(3000).fadeOut();
      $("#timetaken").focus();
      return false;
    }

    if (postdata.recommendation == false) {
      $("#err_strength").html('');
      $("#err_weekness").html('');
      $("#err_additionalComment").html('');
      $("#err_timetaken").html('');
      $("#err_recommendation").html('');
      $("#err_recommendation").html(' Please Choose Recommendation');
      $("#err_recommendation").hide().slideDown().delay(3000).fadeOut();
      $("#recommendation").focus();
      return false;
    }

    // if (postdata.technicalSkills == false) {
    //   $("#err_strength").html('');
    //   $("#err_weekness").html('');
    //   $("#err_additionalComment").html('');
    //   $("#err_timetaken").html('');
    //   $("#err_technicalSkills").html('');
    //   $("#err_technicalSkills").html(' Please Choose Technical Skills');
    //   $("#err_recommendation").hide().slideDown().delay(3000).fadeOut();
    //   $("#technicalSkills").focus();
    //   return false;
    // }

    // if (postdata.logicalSkills == false) {
    //   $("#err_strength").html('');
    //   $("#err_weekness").html('');
    //   $("#err_additionalComment").html('');
    //   $("#err_timetaken").html('');
    //   $("#err_logicalSkills").html('');
    //   $("#err_logicalSkills").html(' Please Choose logical Skills');
    //   $("#err_logicalSkills").hide().slideDown().delay(3000).fadeOut();
    //   $("#logicalSkills").focus();
    //   return false;
    // }

    swal({
        title: "Are you sure?",
        text: "You want to submit, form once submitted can not be changed",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $(".confirm").attr('disabled', 'disabled');
          $.ajax({
            url: '<?php echo base_url(); ?>Interview/submitInterview',
            type: 'POST',
            dataType: "json",
            data: postdata,
            success: function(response) {
              swal.close();
              location.reload();
            }
          });
        } else {
          location.reload()
          swal.close();
        }
      });
  }

  $(document).ready(function() {
    $("#work_result b").html($("#work").val());
    $("#work").change(function() {
      $("#work_result b").html($(this).val());
    });

    $("#profile_result b").html($("#profile").val());
    $("#profile").change(function() {
      $("#profile_result b").html($(this).val());
    });

    $("#team_result b").html($("#team").val());
    $("#team").change(function() {
      $("#team_result b").html($(this).val());
    });

    $("#attitude_result b").html($("#attitude").val());
    $("#attitude").change(function() {
      $("#attitude_result b").html($(this).val());
    });

    $("#communication_result b").html($("#communication").val());
    $("#communication").change(function() {
      $("#communication_result b").html($(this).val());
    });

    $("#behaviour_result b").html($("#behaviour").val());
    $("#behaviour").change(function() {
      $("#behaviour_result b").html($(this).val());
    });

    $("#technicalSkills_result b").html($("#technicalSkills").val());
    $("#technicalSkills").change(function() {
      $("#technicalSkills_result b").html($(this).val());
    });

    $("#logicalSkills_result b").html($("#logicalSkills").val());
    $("#logicalSkills").change(function() {
      $("#logicalSkills_result b").html($(this).val());
    });
  });
</script>