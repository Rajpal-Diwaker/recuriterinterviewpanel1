<style>
  .protext2 h5 {
    font-family: 'SFProDisplay-Regular';
    color: #fff;
    margin: 0;
    font-size: 15px;
    line-height: 20px;
    /* font-weight: bold; */
  }
</style>

<!-- Interview Modal Starts Here -->
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
                <input type="range" class="custom-range" id="profile" min="0" step="0.50" max="10" value="">
                <div id="profile_result"><b></b></div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Communication</label>
                <input type="range" class="custom-range" id="communication" min="0" step="0.50" max="10" value="">
                <div id="communication_result"><b></b></div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Behaviour</label>
                <input type="range" class="custom-range" id="behaviour" min="0" step="0.50" max="10" value="">
                <div id="behaviour_result"><b></b></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Attitude towards Position</label>
                <input type="range" class="custom-range" id="attitude" min="0" step="0.50" max="10" value="">
                <div id="attitude_result"><b></b></div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Work Experience</label>
                <input type="range" class="custom-range" id="work" min="0" step="0.50" max="10" value="">
                <div id="work_result"><b></b></div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Team Player</label>
                <input type="range" class="custom-range" id="team" min="0" step="0.50" max="10" value="">
                <div id="team_result"><b></b></div>
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

          <div class="form-group bdr">
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
          <div class="form-group bdr">
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
<!-- Interview Modal Starts Here -->

<!-- Video Modal Starts Here -->
<div id='videoModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;
        </button>
        <h4 class='modal-title'>START VIDEO</h4>
      </div>
      <div class="modal-body" id="yt-player">
        <?php if (empty($resumeData[0]['video'])) : ?>
          <h1>No video to play</h1>
        <?php else : ?>
          <video controls width="100%" height="300">
            <source src="<?php echo $resumeData[0]['video']; ?>" type="video/mp4">
            Video tag is not supported in this browser.
          </video>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal Starts Here -->

<!--Sidebar Menu End Here-->
<div class='pageContent innerpg'>

  <!--Interviewer Detail Section Start Here-->
  <div class='detailheader'>
    <ul>
      <li><button type='button' onclick="window.open('<?php echo $resumeData[0]['resume']; ?>','_blank')">VIEW RESUME</button></li>
      <li><button type='button' data-toggle='modal' data-target='#videoModal'>VIEW VIDEO</button></li>
      <li><button type='button' data-toggle='modal' onclick="startInterviewModel();">START INTERVIEW</button></li>
    </ul>
  </div>
  <div class='detailwrapper'>
    <div class='profile clearfix'>
      <div class='protext2'>
        <h5>Name : <?php echo $resumeData[0]['name'];
                    ?></h5>
        <h5>Mobile : <?php echo $resumeData[0]['mobile'];
                      ?></h5>
        <h5>Email : <?php echo $resumeData[0]['email'];
                    ?></h5>
        <h5>Profile : <?php echo $resumeData[0]['position'];
                      ?></h5>
        <h5>Experience : <?php echo $resumeData[0]['totalExperince'];
                          ?></h5>
        <!-- <h5>Current CTC: <?php echo $resumeData[0]['current_ctc'];
                              ?> </h5>
        <h5>Expected CTC: <?php echo $resumeData[0]['expected_ctc'];
                          ?> </h5> -->
      </div>
    </div>
    <div class='questionbox clearfix'>
      <h5>Do you manage a team in your current organization?</h5>
      <p><?php echo $resumeQuestion[0]['manageTeam'];
          ?> </p>
    </div>
    <div class='questionbox clearfix'>
      <h5>What are the programming languages you have used so far or most familiar with? (Comma to separate)</h5>
      <p> <?php echo $resumeQuestion[0]['programingLanguage'];
          ?></p>
    </div>
    <div class='questionbox clearfix'>
      <h5>What frameworks you are expert in? Multiple frameworks can be comma separated.</h5>
      <p> <?php echo $resumeQuestion[0]['framework'];
          ?> </p>
    </div>
    <div class='questionbox clearfix'>
      <h5>What are the 3 major tasks that are most important in your current role? </h5>
      <p> <?php echo $resumeQuestion[0]['majortask'];
          ?></p>
    </div>
    <div class='questionbox clearfix'>
      <h5>From where did you get to know about Techugo? </h5>
      <p><?php echo $resumeQuestion[0]['knowTechugo'];
          ?> </p>
    </div>
    <div class='questionbox clearfix'>
      <h5>What is your expectations from this role? </h5>
      <p> <?php echo $resumeQuestion[0]['expectationRole'];
          ?> </p>
    </div>
  </div>

  <div class='detailtabs'>
    <ul class='nav nav-tabs'>

      <!-- <li class = 'active'><a data-toggle = 'tab' href = '#round1'>Round 1 <span class = 'blue'>( Hire )</span></a></li>
<li><a data-toggle = 'tab' href = '#round2'>Round 2 <span class = 'green'>( Strongly hire )</span></a></li>
<li><a data-toggle = 'tab' href = '#round3'>Round 3 <span class = 'yellow'>( Hold )</span></a></li>
<li><a data-toggle = 'tab' href = '#round4'>Round 4 <span class = 'red'>( Reject )</span></a></li> -->

      <li class='active'>
        <a data-toggle='tab' href='#round1'>Round 1
          <span class='blue'>(<?php if (!empty($Round1[0]['recommendation'])) echo $Round1[0]['recommendation'];
                              else echo "Not Interviewed" ?>)
          </span>
        </a></li>
      <li>
        <a data-toggle='tab' href='#round2'>Round 2
          <span class='green'>(<?php if (!empty($Round2[0]['recommendation'])) echo $Round2[0]['recommendation'];
                                else echo "Not Interviewed" ?>)
          </span>
        </a></li>
      <li>
        <a data-toggle='tab' href='#round3'>Round 3
          <span class='yellow'>(<?php if (!empty($Round3[0]['recommendation'])) echo $Round3[0]['recommendation'];
                                else echo "Not Interviewed" ?>)
          </span>
        </a></li>
      <li>
        <a data-toggle='tab' href='#round4'>Round 4
          <span class='red'>(<?php if (!empty($Round4[0]['recommendation'])) echo $Round4[0]['recommendation'];
                              else echo "Not Interviewed" ?>)
          </span>
        </a>
      </li>
      <li>
        <a data-toggle='tab' href='#round5'>Round 5
          <span class='red'>(<?php if (!empty($Round5[0]['recommendation'])) echo $Round5[0]['recommendation'];
                              else echo "Not Interviewed" ?>)
          </span>
        </a>
      </li>


    </ul>
    <div class='tab-content'>
      <div id='round1' class='tab-pane fade in active'>
        <div class='reportwrapper'>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>INTERVIEWER </h5>
                <p><?php echo $Round1[0]['interviewerName'];
                    ?> ( <?php if (!empty($Round1[0]['designation'])) echo $Round1[0]['designation'];
                          else echo "Pending" ?>)</p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>RECOMMENDATION </h5>
                <p>
                  <?php if (!empty($Round1[0]['recommendation'])) echo $Round1[0]['recommendation'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>PROFILE SKILLS </h5>
                <p>
                  <?php if (!empty($Round1[0]['profileSkills'])) echo $Round1[0]['profileSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>COMMUNICATION </h5>
                <p>
                  <?php if (!empty($Round1[0]['communication'])) echo $Round1[0]['communication'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>BEHAVIOUR </h5>
                <p>
                  <?php if (!empty($Round1[0]['behaviour'])) echo $Round1[0]['behaviour'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>ATTITUDE TOWARDS POSITION </h5>
                <p>
                  <?php if (!empty($Round1[0]['attiToWordPostion'])) echo $Round1[0]['attiToWordPostion'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>WORK EXPERIENCE </h5>
                <p>
                  <?php if (!empty($Round1[0]['workExperience'])) echo $Round1[0]['workExperience'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>TEAM PLAYER </h5>
                <p>
                  <?php if (!empty($Round1[0]['teamPlayer'])) echo $Round1[0]['teamPlayer'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>STRENGTH </h5>
                <p>
                  <?php if (!empty($Round1[0]['strength'])) echo $Round1[0]['strength'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>WEAKNESS </h5>
                <p>
                  <?php if (!empty($Round1[0]['weekness'])) echo $Round1[0]['weekness'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>ADDITIONAL COMMENTS </h5>
                <p>
                  <?php if (!empty($Round1[0]['additionalComment'])) echo $Round1[0]['additionalComment'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id='round2' class='tab-pane fade'>
        <div class='reportwrapper'>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>INTERVIEWER </h5>
                <p><?php echo $Round2[0]['interviewerName'];
                    ?> ( <?php if (!empty($Round2[0]['designation'])) echo $Round2[0]['designation'];
                          else echo "Pending" ?>)</p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>RECOMMENDATION </h5>
                <p>
                  <?php if (!empty($Round2[0]['recommendation'])) echo $Round2[0]['recommendation'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>PROFILE SKILLS </h5>
                <p>
                  <?php if (!empty($Round2[0]['profileSkills'])) echo $Round2[0]['profileSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>COMMUNICATION </h5>
                <p>
                  <?php if (!empty($Round2[0]['communication'])) echo $Round2[0]['communication'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>BEHAVIOUR </h5>
                <p>
                  <?php if (!empty($Round2[0]['behaviour'])) echo $Round2[0]['behaviour'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>ATTITUDE TOWARDS POSITION </h5>
                <p>
                  <?php if (!empty($Round2[0]['attiToWordPostion'])) echo $Round2[0]['attiToWordPostion'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>WORK EXPERIENCE </h5>
                <p>
                  <?php if (!empty($Round2[0]['workExperience'])) echo $Round2[0]['workExperience'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>TEAM PLAYER </h5>
                <p>
                  <?php if (!empty($Round2[0]['teamPlayer'])) echo $Round2[0]['teamPlayer'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>STRENGTH </h5>
                <p>
                  <?php if (!empty($Round2[0]['strength'])) echo $Round2[0]['strength'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>WEAKNESS </h5>
                <p>
                  <?php if (!empty($Round2[0]['weekness'])) echo $Round2[0]['weekness'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>ADDITIONAL COMMENTS </h5>
                <p>
                  <?php if (!empty($Round2[0]['additionalComment'])) echo $Round2[0]['additionalComment'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id='round3' class='tab-pane fade'>
        <div class='reportwrapper'>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>INTERVIEWER </h5>
                <p><?php echo $Round3[0]['interviewerName'];
                    ?> ( <?php if (!empty($Round3[0]['designation'])) echo $Round3[0]['designation'];
                          else echo "Pending" ?>)</p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>RECOMMENDATION </h5>
                <p>
                  <?php if (!empty($Round3[0]['recommendation'])) echo $Round3[0]['recommendation'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>PROFILE SKILLS </h5>
                <p>
                  <?php if (!empty($Round3[0]['profileSkills'])) echo $Round3[0]['profileSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>COMMUNICATION </h5>
                <p>
                  <?php if (!empty($Round3[0]['communication'])) echo $Round3[0]['communication'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>BEHAVIOUR </h5>
                <p>
                  <?php if (!empty($Round3[0]['behaviour'])) echo $Round3[0]['behaviour'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>ATTITUDE TOWARDS POSITION </h5>
                <p>
                  <?php if (!empty($Round3[0]['attiToWordPostion'])) echo $Round3[0]['attiToWordPostion'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>WORK EXPERIENCE </h5>
                <p>
                  <?php if (!empty($Round3[0]['workExperience'])) echo $Round3[0]['workExperience'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>TEAM PLAYER </h5>
                <p>
                  <?php if (!empty($Round3[0]['teamPlayer'])) echo $Round3[0]['teamPlayer'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>STRENGTH </h5>
                <p>
                  <?php if (!empty($Round3[0]['strength'])) echo $Round3[0]['strength'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>WEAKNESS </h5>
                <p>
                  <?php if (!empty($Round3[0]['weekness'])) echo $Round3[0]['weekness'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>ADDITIONAL COMMENTS </h5>
                <p>
                  <?php if (!empty($Round3[0]['additionalComment'])) echo $Round3[0]['additionalComment'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id='round4' class='tab-pane fade'>
        <div class='reportwrapper'>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>INTERVIEWER </h5>
                <p><?php echo $Round4[0]['interviewerName'];
                    ?> ( <?php if (!empty($Round4[0]['designation'])) echo $Round4[0]['designation'];
                          else echo "Pending" ?>)</p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>RECOMMENDATION </h5>
                <p>
                  <?php if (!empty($Round4[0]['recommendation'])) echo $Round4[0]['recommendation'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>PROFILE SKILLS </h5>
                <p>
                  <?php if (!empty($Round4[0]['profileSkills'])) echo $Round4[0]['profileSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>COMMUNICATION </h5>
                <p>
                  <?php if (!empty($Round4[0]['communication'])) echo $Round4[0]['communication'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>BEHAVIOUR </h5>
                <p>
                  <?php if (!empty($Round4[0]['behaviour'])) echo $Round4[0]['behaviour'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>ATTITUDE TOWARDS POSITION </h5>
                <p>
                  <?php if (!empty($Round4[0]['attiToWordPostion'])) echo $Round4[0]['attiToWordPostion'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>WORK EXPERIENCE </h5>
                <p>
                  <?php if (!empty($Round4[0]['workExperience'])) echo $Round4[0]['workExperience'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>TEAM PLAYER </h5>
                <p>
                  <?php if (!empty($Round4[0]['teamPlayer'])) echo $Round4[0]['teamPlayer'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>STRENGTH </h5>
                <p>
                  <?php if (!empty($Round4[0]['strength'])) echo $Round4[0]['strength'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>WEAKNESS </h5>
                <p>
                  <?php if (!empty($Round4[0]['weekness'])) echo $Round4[0]['weekness'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>ADDITIONAL COMMENTS </h5>
                <p>
                  <?php if (!empty($Round4[0]['additionalComment'])) echo $Round4[0]['additionalComment'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id='round5' class='tab-pane fade'>
        <div class='reportwrapper'>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>INTERVIEWER </h5>
                <p><?php echo $Round5[0]['interviewerName'];
                    ?> ( <?php if (!empty($Round5[0]['designation'])) echo $Round5[0]['designation'];
                          else echo "Pending" ?>)</p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>RECOMMENDATION </h5>
                <p>
                  <?php if (!empty($Round5[0]['recommendation'])) echo $Round5[0]['recommendation'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>PROFILE SKILLS </h5>
                <p>
                  <?php if (!empty($Round5[0]['profileSkills'])) echo $Round5[0]['profileSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>COMMUNICATION </h5>
                <p>
                  <?php if (!empty($Round5[0]['communication'])) echo $Round5[0]['communication'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>BEHAVIOUR </h5>
                <p>
                  <?php if (!empty($Round5[0]['behaviour'])) echo $Round5[0]['behaviour'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>ATTITUDE TOWARDS POSITION </h5>
                <p>
                  <?php if (!empty($Round5[0]['attiToWordPostion'])) echo $Round5[0]['attiToWordPostion'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>WORK EXPERIENCE </h5>
                <p>
                  <?php if (!empty($Round5[0]['workExperience'])) echo $Round5[0]['workExperience'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>TEAM PLAYER </h5>
                <p>
                  <?php if (!empty($Round5[0]['teamPlayer'])) echo $Round5[0]['teamPlayer'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>STRENGTH </h5>
                <p>
                  <?php if (!empty($Round5[0]['strength'])) echo $Round5[0]['strength'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>WEAKNESS </h5>
                <p>
                  <?php if (!empty($Round5[0]['weekness'])) echo $Round5[0]['weekness'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-12 col-md-12'>
              <div class='reportbox clearfix'>
                <h5>ADDITIONAL COMMENTS </h5>
                <p>
                  <?php if (!empty($Round5[0]['additionalComment'])) echo $Round5[0]['additionalComment'];
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--Interviewer Detail Section End Here-->
</div>
</div>
<!--Page Content View End Here-->

</div>
</body>

</html>
<script>
  $(document).ready(function() {
    $("#videoModal").on('hidden.bs.modal', function(e) {
      $("#videoModal iframe").attr("src", $("#videoModal iframe").attr("src"));
    });
  });
</script>

<script>
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

  function startInterviewModel() {
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
              location.href = "<?php echo base_url('Interview/interviewMenu'); ?>";
              // location.reload();
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

    $(".modal-body #roundId").val(<?php echo $roundId; ?>);
    $(".modal-body #resumeId").val(<?php echo $resumeId; ?>);

  });
</script>