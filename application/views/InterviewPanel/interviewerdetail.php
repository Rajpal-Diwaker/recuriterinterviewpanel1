<!-- Video Modal Starts Here -->
<div id='videoModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>
    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;
        </button>
        <h4 class='modal-title'>START VIDEO</h4>
      </div>
      <div class="modal-body" id="yt-player">
        <iframe width="100%" height="300" src="<?php echo $resumeData[0]['video']; ?>" frameborder="0" allowfullscreen></iframe>
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
      <!-- <li><button type = 'button' data-toggle = 'modal' data-target = '#interviewModal'>START INTERVIEW</button></li> -->
    </ul>
  </div>
  <div class='detailwrapper'>
    <div class='profile clearfix'>
      <div class='proimg'>
        <img src='<?php echo base_url() ?>assets/images/admin.png' alt='' />
      </div>
      <div class='protext'>
        <h4><?php echo $resumeData[0]['name'];
            ?></h4>
        <h5><?php echo $resumeData[0]['mobile'];
            ?></h5>
        <h5><?php echo $resumeData[0]['email'];
            ?></h5>
        <h5><?php echo $resumeData[0]['position'];
            ?></h5>
        <h5><?php echo $resumeData[0]['totalExperince'];
            ?></h5>
      </div>
    </div>
    <div class='questionbox clearfix'>
      <h5>Do you manage a team in your current organization?</h5>
      <p> <?php echo $resumeQuestion[0]['manageTeam'];
          ?> </p>
    </div>
    <div class='questionbox clearfix'>
      <h5>What are the programming languages you have used so far or most familiar with? (Comma to separate) </h5>
      <p> <?php echo $resumeQuestion[0]['programingLanguage'];
          ?> </p>
    </div>
    <div class='questionbox clearfix'>
      <h5>What frameworks you are expert in? Multiple frameworks can be comma separated.</h5>
      <p><?php echo $resumeQuestion[0]['framework'];
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
      <p><?php echo $resumeQuestion[0]['expectationRole'];
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
                  <?php if ($Round1[0]['profileSkills'] > -1) echo $Round1[0]['profileSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>COMMUNICATION </h5>
                <p>
                  <?php if ($Round1[0]['communication'] > -1) echo $Round1[0]['communication'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>BEHAVIOUR </h5>
                <p>
                  <?php if ($Round1[0]['behaviour'] > -1) echo $Round1[0]['behaviour'] . '/ 10';
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
                  <?php if ($Round1[0]['attiToWordPostion'] > -1) echo $Round1[0]['attiToWordPostion'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>WORK EXPERIENCE </h5>
                <p>
                  <?php if ($Round1[0]['workExperience'] > -1) echo $Round1[0]['workExperience'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>TEAM PLAYER </h5>
                <p>
                  <?php if ($Round1[0]['teamPlayer'] > -1) echo $Round1[0]['teamPlayer'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>Technical Skills </h5>
                <p>
                  <?php if ($Round1[0]['technicalSkills'] > -1) echo $Round1[0]['technicalSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>Logical Skills </h5>
                <p>
                  <?php if ($Round1[0]['logicalSkills'] > -1) echo $Round1[0]['logicalSkills'] . '/ 10';
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
                  <?php if ($Round2[0]['profileSkills'] > -1) echo $Round2[0]['profileSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>COMMUNICATION </h5>
                <p>
                  <?php if ($Round2[0]['communication'] > -1) echo $Round2[0]['communication'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>BEHAVIOUR </h5>
                <p>
                  <?php if ($Round2[0]['behaviour'] > -1) echo $Round2[0]['behaviour'] . '/ 10';
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
                  <?php if ($Round2[0]['attiToWordPostion'] > -1) echo $Round2[0]['attiToWordPostion'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>WORK EXPERIENCE </h5>
                <p>
                  <?php if ($Round2[0]['workExperience'] > -1) echo $Round2[0]['workExperience'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>TEAM PLAYER </h5>
                <p>
                  <?php if ($Round2[0]['teamPlayer'] > -1) echo $Round2[0]['teamPlayer'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>Technical Skills </h5>
                <p>
                  <?php if ($Round2[0]['technicalSkills'] > -1) echo $Round2[0]['technicalSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>Logical Skills </h5>
                <p>
                  <?php if ($Round2[0]['logicalSkills'] > -1) echo $Round2[0]['logicalSkills'] . '/ 10';
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
                  <?php if ($Round2[0]['strength'] > -1) echo $Round2[0]['strength'];
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
                  <?php if ($Round3[0]['profileSkills'] > -1) echo $Round3[0]['profileSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>COMMUNICATION </h5>
                <p>
                  <?php if ($Round3[0]['communication'] > -1) echo $Round3[0]['communication'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>BEHAVIOUR </h5>
                <p>
                  <?php if ($Round3[0]['behaviour'] > -1) echo $Round3[0]['behaviour'] . '/ 10';
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
                  <?php if ($Round3[0]['attiToWordPostion'] > -1) echo $Round3[0]['attiToWordPostion'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>WORK EXPERIENCE </h5>
                <p>
                  <?php if ($Round3[0]['workExperience'] > -1) echo $Round3[0]['workExperience'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>TEAM PLAYER </h5>
                <p>
                  <?php if ($Round3[0]['teamPlayer'] > -1) echo $Round3[0]['teamPlayer'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>Technical Skills </h5>
                <p>
                  <?php if ($Round3[0]['technicalSkills'] > -1) echo $Round3[0]['technicalSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>Logical Skills </h5>
                <p>
                  <?php if ($Round3[0]['logicalSkills'] > -1) echo $Round3[0]['logicalSkills'] . '/ 10';
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
                  <?php if ($Round4[0]['profileSkills'] > -1) echo $Round4[0]['profileSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>COMMUNICATION </h5>
                <p>
                  <?php if ($Round4[0]['communication'] > -1) echo $Round4[0]['communication'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>BEHAVIOUR </h5>
                <p>
                  <?php if ($Round4[0]['behaviour'] > -1) echo $Round4[0]['behaviour'] . '/ 10';
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
                  <?php if ($Round4[0]['attiToWordPostion'] > -1) echo $Round4[0]['attiToWordPostion'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>WORK EXPERIENCE </h5>
                <p>
                  <?php if ($Round4[0]['workExperience'] > -1) echo $Round4[0]['workExperience'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>TEAM PLAYER </h5>
                <p>
                  <?php if ($Round4[0]['teamPlayer'] > -1) echo $Round4[0]['teamPlayer'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>Technical Skills </h5>
                <p>
                  <?php if ($Round4[0]['technicalSkills'] > -1) echo $Round4[0]['technicalSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>Logical Skills </h5>
                <p>
                  <?php if ($Round4[0]['logicalSkills'] > -1) echo $Round4[0]['logicalSkills'] . '/ 10';
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
                  <?php if ($Round5[0]['profileSkills'] > -1) echo $Round5[0]['profileSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>COMMUNICATION </h5>
                <p>
                  <?php if ($Round5[0]['communication'] > -1) echo $Round5[0]['communication'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>BEHAVIOUR </h5>
                <p>
                  <?php if ($Round5[0]['behaviour'] > -1) echo $Round5[0]['behaviour'] . '/ 10';
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
                  <?php if ($Round5[0]['attiToWordPostion'] > -1) echo $Round5[0]['attiToWordPostion'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>WORK EXPERIENCE </h5>
                <p>
                  <?php if ($Round5[0]['workExperience'] > -1) echo $Round5[0]['workExperience'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>TEAM PLAYER </h5>
                <p>
                  <?php if ($Round5[0]['teamPlayer'] > -1) echo $Round5[0]['teamPlayer'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
          </div>
          <div class='row clearfix'>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>Technical Skills </h5>
                <p>
                  <?php if ($Round5[0]['technicalSkills'] > -1) echo $Round5[0]['technicalSkills'] . '/ 10';
                  else echo "Pending" ?>
                </p>
              </div>
            </div>
            <div class='col-sm-4 col-md-4'>
              <div class='reportbox clearfix'>
                <h5>Logical Skills </h5>
                <p>
                  <?php if ($Round5[0]['logicalSkills'] > -1) echo $Round5[0]['logicalSkills'] . '/ 10';
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