<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <link href="<?= base_url(); ?>assets/css/jquery.pagepiling.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url(); ?>assets/js/jquery.pagepiling.js"></script>
    <script>
    $(function(){
        $('#pagepiling').pagepiling({
                onLeave: function(index, nextIndex, direction){
                if(index == 11 && direction =='down'){
                    $('body').addClass('hidenextview');
                    $('body').addClass('tenthActivemenu');
                }
                else if(index == 11 && direction =='up'){
                    $('body').removeClass('hidenextview');
                }
                else if(index == 12 && direction == 'up'){
                    $('body').removeClass('tenthActivemenu');
                }
                else if(index == 21 && direction == 'down'){
                    $('body').addClass('lastSection');
                }
                else if(index == 22 && direction == 'up'){
                    $('body').removeClass('lastSection');
                }
		    }
			});
        $('#ava_smart_garden').on('show.bs.modal', function () {
        $('#ava_smart_garden .modal-body .techugohelpbox').html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/GvkrSZR_9Ms" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        });
        $('#ava_smart_garden').on('hidden.bs.modal', function () {
            $('#ava_smart_garden .modal-body .techugohelpbox').empty();
        });

        $('#sterkla_coaching').on('show.bs.modal', function () {
            $('#sterkla_coaching .modal-body .techugohelpbox').html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/cQvtBJcG3MA?autoplay=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            });
        $('#sterkla_coaching').on('hidden.bs.modal', function () {
            $('#sterkla_coaching .modal-body .techugohelpbox').empty();
        });
       if ($(window).width() < 359) {
        $(".letstalkAboutprojects,.letstalkAboutprojects + section").remove();
        $(".companyaddressview").remove();
        }
        else if ($(window).height() < 480) {
        $(".section:nth-of-type(19)").after('<div></div>');
        }
        $(window).resize(function(){
        if ($(window).width() < 359) {
         $(".letstalkAboutprojects,.letstalkAboutprojects + section").remove();
         $(".companyaddressview").remove();
        }
        });
        orientationChange();
    })
    function orientationChange() {
    if(window.addEventListener) {
        window.addEventListener("orientationchange", function() {
            location.reload();
        });
    }
}
</script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <!--Sterkla Youtube box modal Start Here-->
      <div class="modal fade portfoliopgviews" id="sterkla_coaching" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
          <div class="modal-content">
          <button type="button" class="close stop-video" data-dismiss="modal"></button>
            <div class="modal-body">
                <div class="techugohelpbox"></div>
            </div>
          </div>
          
        </div>
      </div>
      <!--Sterkla box modal End Here-->

    <!--Ava Smart Garden box modal Start Here-->
    <div class="modal fade portfoliopgviews" id="ava_smart_garden" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"></button>
            <div class="modal-body">
                <div class="techugohelpbox"></div>
            </div>
          </div>
          
        </div>
      </div>
      <!--Ava Smart Garden box modal End Here-->
      
        <!--Portfolio Page Content Start Here-->
        <div id="pagepiling">
            <!--AVA Section Start Here-->
            <div class="section">
                <div class="sectionheading">Powering World's Smartest Indoor Garden</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="ava" src="<?= base_url(); ?>assets/images/portfolio/ava_logo.png" alt="AVA Logo" /></div>
                    <div class="appnamebx">
                        <div class="appname">AVA Smart Garden</div>
                        <div class="applinksrw">
                            <a href="https://apps.apple.com/tt/app/ava-smart-garden/id1482069857?ign-mpt=uo%3D2" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#ava_smart_garden"><span class="youtube"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--AVA Section End Here-->

            <!--BMF Section Start Here-->
            <div class="section">
                <div class="sectionheading">We got your shopping covered</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="bmf" src="<?= base_url(); ?>assets/images/portfolio/bmf_logo.png" alt="Book My Forex" /></div>
                    <div class="appnamebx">
                        <div class="appname">Book My Forex</div>
                        <div class="applinksrw">
                            <a href="https://apps.apple.com/in/app/bookmyforex/id1103240547" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
                            <a href="https://play.google.com/store/apps/details?id=com.app.bookmyforex&hl=en_IN" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                            <a href="https://www.bookmyforex.com" target="_blank"><span class="weblink"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--BMF Section Start Here-->

            <!--Sterkla Section Start Here-->
            <div class="section">
                <div class="sectionheading">Transformed Coaching and Tutoring</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="sterkla" src="<?= base_url(); ?>assets/images/portfolio/sterkla_logo.png" alt="Sterkla Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Sterkla</div>
                        <div class="applinksrw">
                            <a href="https://apps.apple.com/us/app/id1472511908" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
                            <a href="https://play.google.com/store/apps/details?id=com.sterkla.app" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                            <a href="https://sterkla.com" target="_blank"><span class="weblink"></span></a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#sterkla_coaching"><span class="youtube"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Sterkla Section End Here-->

            <!--My Follow Up Section Start Here-->
            <div class="section">
                <div class="sectionheading">Serving India's Largest Covid Hospital</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="mfu" src="<?= base_url(); ?>assets/images/portfolio/mfu_logo.png" alt="MFU Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">My Follow Up</div>
                        <div class="applinksrw">
                            <a href="https://itunes.apple.com/in/app/myfollowup/id1144895524?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
                            <a href="https://play.google.com/store/apps/details?id=com.virtualmediconnect.app" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--My Follow Up Section End Here-->

            <!--SPjain Section Start Here-->
            <div class="section">
                <div class="sectionheading">WORLD’S LEADING BUSINESS SCHOOLS</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="spjain" src="<?= base_url(); ?>assets/images/portfolio/sp_jain_logo.png" alt="SP Jain" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">SP Jain</div>
                        <div class="applinksrw">
                            <a href="https://apps.apple.com/in/app/global-learning-sp-jain/id1481195259" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
                            <a href="https://play.google.com/store/apps/details?id=v.com.spjainapp" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--SPjain Section Start Here-->

            <!--Godfrey Section Start Here-->
            <div class="section">
                <div class="sectionheading">We solved Demand and Supply</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="godfrey" src="assets/images/portfolio/godfrey_logo.png" alt="Godfrey Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname"><span class="textmh">Godfrey Phillips India ltd</span> <span class="textms">GPI</span></div>
                        <div class="appname">ENTERPRISE</div>
                    </div>
                </div>
            </div>
            <!--Godfrey Section Start Here-->

            <!--BJP Section Start Here-->
            <div class="section">
                <div class="sectionheading">We helped them Win, Twice</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="bjp" src="<?= base_url(); ?>assets/images/portfolio/bjp_logo.png" alt="BJP Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">BJP</div>
                        <div class="appname">ENTERPRISE</div>
                    </div>
                </div>
            </div>
            <!--BJP Section Start Here-->

            <!--Airtel Section Start Here-->
            <div class="section">
                <div class="sectionheading">Connecting your loved ones</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="bjp" src="<?= base_url(); ?>assets/images/portfolio/airtel_logo.png" alt="Airtel Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Airtel</div>
                        <div class="appname">ENTERPRISE</div>
                    </div>
                </div>
            </div>
            <!--Airtel Section Start Here-->

             <!--VisionR Pro Section Start Here-->
             <div class="section">
                <div class="sectionheading">We Help You Monitor</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="visionpro" src="<?= base_url(); ?>assets/images/portfolio/visionpro_logo.png" alt="VisionR Pro Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Vision R Pro</div>
                        <div class="appname">ENTERPRISE</div>
                    </div>
                </div>
            </div>
            <!--VisionR Pro Section Start Here-->

             <!--Blixr Section Start Here-->
             <div class="section">
                <div class="sectionheading">Connecting you with <i class="far fa-smile-wink"></i></div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="blixr" src="<?= base_url(); ?>assets/images/portfolio/blixr_logo.png" alt="Blixr Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Blixr</div>
                        <div class="applinksrw mrg5">
                            <a href="https://apps.apple.com/gb/app/blixr-connect-for-real/id1470609522" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
                            <a href="https://play.google.com/store/apps/details?id=com.blixr.app&hl=en" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                            <a href="https://www.blixrapp.com" target="_blank"><span class="weblink"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blixr Section Start Here-->

            <!--Truefan Section Start Here-->
            <div class="section">
                <div class="sectionheading">We got your favorite celebrity</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="truefan" src="<?= base_url(); ?>assets/images/portfolio/truefan_logo.png" alt="Truefan Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Truefan</div>
                        <div class="applinksrw mrg5 text-center">
                            <a href="https://www.truefan.in/home" target="_blank"><span class="weblink"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Truefan Section Start Here-->

             <!--SCC Online Section Start Here-->
             <div class="section">
                <div class="sectionheading">We created google for lawyers</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="ssc" src="<?= base_url(); ?>assets/images/portfolio/ssc_logo.png" alt="SSC Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">SCC Online</div>
                        <div class="applinksrw mrg5">
                            <a href="https://apps.apple.com/in/app/scc-online/id1324544648" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
                            <a href="https://play.google.com/store/apps/details?id=com.scconline&hl=en_IN" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                            <a href="https://www.scconline.com" target="_blank"><span class="weblink"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--SCC Online Section Start Here-->

            <!--Dhanuka Section Start Here-->
              <div class="section">
                <div class="sectionheading">Transforming India through Agriculture</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="dhanuka" src="<?= base_url(); ?>assets/images/portfolio/dhanuka_logo.png" alt="Dhanuka Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Dhanuka</div>
                        <div class="applinksrw mrg5">
                            <a href="https://play.google.com/store/apps/details?id=com.dhanuka.indhan&hl=en_IN" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Dhanuka Section Start Here-->

            <!--CanCan Section Start Here-->
            <div class="section">
                <div class="sectionheading">We measured Accurately</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="cancan" src="<?= base_url(); ?>assets/images/portfolio/cancan_logo.png" alt="Cancan Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">CanCan</div>
                        <div class="appname">COMING SOON</div>
                    </div>
                </div>
            </div>
            <!--CanCan Section Start Here-->

              <!--Youth In politics Section Start Here-->
              <div class="section">
                <div class="sectionheading">We get you into politics</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="yip" src="<?= base_url(); ?>assets/images/portfolio/yip_logo.png" alt="YIP Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Youth In Politics</div>
                        <div class="applinksrw mrg5">
                            <a href="https://play.google.com/store/apps/details?id=com.youthinpolitics.app&hl=en_US" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                            <a href="https://www.youthinpolitics.in" target="_blank"><span class="weblink"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Youth In politics Section Start Here-->

             <!--Aiffa In politics Section Start Here-->
             <div class="section">
                <div class="sectionheading">We made exercising fun</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="aiffa" src="<?= base_url(); ?>assets/images/portfolio/aiffa_logo.png" alt="Aiffa Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Aiffa</div>
                        <div class="appname">COMING SOON</div>
                    </div>
                </div>
            </div>
            <!--Aiffa In politics Section Start Here-->

             <!--Noida Deaf Society In politics Section Start Here-->
             <div class="section">
                <div class="sectionheading">Our love to differently abled</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="nds" src="<?= base_url(); ?>assets/images/portfolio/nds_logo.png" alt="NDS Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Noida Deaf Society</div>
                        <div class="applinksrw mrg5">
                            <a href="https://noidadeafsociety.org" target="_blank"><span class="weblink"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Noida Deaf Society In politics Section Start Here-->

             <!--Bono Section Start Here-->
             <div class="section">
                <div class="sectionheading">We got you a ride</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="bono" src="<?= base_url(); ?>assets/images/portfolio/bono_logo.png" alt="Bono Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Bono</div>
                        <div class="applinksrw mrg5">
                            <a href="https://apps.apple.com/in/app/bono-carpool-bikepool/id1253365104" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
                            <a href="https://play.google.com/store/apps/details?id=com.techugo.buno&hl=en" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                            <a href="https://bonoride.com" target="_blank"><span class="weblink"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Bono Section Start Here-->

             <!--Dilooni Section Start Here-->
             <div class="section dilooniview">
                <div class="sectionheading">Find your soulmate</div>
                <div class="portbtmbx clearfix">
                    <div class="applogorw"><img class="dilloni" src="<?= base_url(); ?>assets/images/portfolio/dilooni_logo.png" alt="Dilooni Logo" /></div>
                    <div class="appnamebx mrg">
                        <div class="appname">Dilooni</div>
                        <div class="applinksrw mrg5">
                            <a href="https://apps.apple.com/in/app/dilooni/id1343272966"  target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
                            <a href="https://play.google.com/store/apps/details?id=com.dilooni.android" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Dilooni Section Start Here-->

    <!--Portfolio Page Content End Here-->

<div class="section companyaddressview">
  <div class="letstalkprojectsCon">
    <div class="letstalkpCon">
      <div class="letstheading">You have made <span>this far!<i></i></span></div>
      <div class="simpletxt">
        <p>How about a Coffee together!</p>
        <p>Spill the beans – Share your idea</p>
        <p>And get a blueprint of your product, for free!</p>
      </div>
      <div class="gettingtouchbox">
        <div class="row clearfix">
          <div class="col-md-6">
            <div class="touchrw"> <span class="mobile"></span><a href="tel:966-713-4400"><i>+91 966-713-4400</i>(Sales)</a> &nbsp;&nbsp;&nbsp; <a href="tel:1-360-322-4913"><i>+1 360-322-4913</i></a> </div>
          </div>
          <div class="col-md-6">
            <div class="touchrw"> <span class="emails"></span><a href="mailto:sales@techugo.com">sales@techugo.com</a><i>,</i><br>
              <a href="mailto:hr@techugo.com">hr@techugo.com</a></div>
          </div>
          <div class="col-md-6">
            <div class="touchrw"> <span class="number"></span><a href="tel:950-444-5188"><i>+91 950-444-5188</i>(HR)</a> </div>
          </div>
          <div class="col-md-6">
            <div class="touchrw"> <span class="website"></span><a href="https://www.techugo.com/">www.techugo.com</a> </div>
          </div>
        </div>
      </div>
      <div class="addressrws">
        <div class="row rows6 clearfix">
          <div class="col-xs-6 col-md-3 cols6th">
            <div class="country_add"><span class="canadaflag"></span> <i class="count_office_add"><i>139</i> Baroness Drive Nepean ON <i>K2G 6Z2</i></i></div>
          </div>
          <div class="col-xs-6 col-md-3 cols6th">
            <div class="country_add"><span class="indiaflag"></span> <i class="count_office_add"><i>A-26,</i> Sector<i>- 63,</i> Noida, U.P, <i>201301</i></i></div>
          </div>
          <div class="col-xs-6 col-md-3 cols6th">
            <div class="country_add"><span class="usaflag"></span> <i class="count_office_add"><i>22375</i> Broderick Dr, Suite <i>225,</i> Dulles VA <i>20166</i></i></div>
          </div>
          <div class="col-xs-6 col-md-3 cols6th">
            <div class="country_add"><span class="uaeflag"></span> <i class="count_office_add">Emaar Square, Boulevard Plaza Tower <i>1,</i> Dubai</i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


      
  
   