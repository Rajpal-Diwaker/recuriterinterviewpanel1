    <link href="<?= base_url(); ?>assets/css/workcase.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css" rel="stylesheet" type="text/css"> -->
    <link href="<?= base_url(); ?>assets/css/jquery.fullPage.css" rel="stylesheet" type="text/css">
   <!--  <script src="<?= base_url(); ?>assets/js/jquery.fullPage.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>
    <script>
$(function(){
	$('#mainfullpage').fullpage({
    // paddingTop: '66px',
      scrollingSpeed: 900,
      responsiveWidth: 767,
      'onLeave': function(index, nextIndex, direction){
        if (index == 22 && direction == 'down'){
            $('.letstalkprojectsCon').css({'margin-top':'-60px'});
        }
        else if(index == 24 && direction == 'up'){
            $('.letstalkprojectsCon').css({'margin-top':'30px'});
        }
      }
    });
    
  $('#sterkla_coaching').on('show.bs.modal', function () {
    $('#sterkla_coaching .modal-body .techugohelpbox').html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/cQvtBJcG3MA?autoplay=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
    $.fn.fullpage.setMouseWheelScrolling(false);
     });
  $('#sterkla_coaching').on('hidden.bs.modal', function () {
     $('#sterkla_coaching .modal-body .techugohelpbox').empty();
     $.fn.fullpage.setMouseWheelScrolling(true);
  });

  $('#ava_smart_garden').on('show.bs.modal', function () {
    $('#ava_smart_garden .modal-body .techugohelpbox').html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/GvkrSZR_9Ms" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
    $.fn.fullpage.setMouseWheelScrolling(false);
  });
  $('#ava_smart_garden').on('hidden.bs.modal', function () {
     $('#ava_smart_garden .modal-body .techugohelpbox').empty();
     $.fn.fullpage.setMouseWheelScrolling(true);
  });

  $('.whtclisay').click(function(){
      $('.midboxplayvideo').fadeIn();
      $('.hideappview').fadeOut();
  })

});

$(document).on('click', '.slider-prev', function(){
	$.fn.fullpage.moveSectionUp();
  });
  $(document).on('click', '.slider-next', function(){
  $.fn.fullpage.moveSectionDown();
  });
    </script>
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
      
      <div id="mainfullpage">
                 <!--Portfolio Page Content Start Here-->
                 
                   <!--AVA Section Start Here-->
             <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview ava">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="ava" src="<?= base_url(); ?>assets/images/portfolio1/ava_logo.jpg" alt="AVA Logo">
                            </div>
                            <div class="appinfo"><span>AVA</span> Byte – IoT- powered mobile app, letting users to manage light, temperature, water level of their indoor gardens. App is accessible via <span>ALEXA</span> as well.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <a href="https://apps.apple.com/tt/app/ava-smart-garden/id1482069857?ign-mpt=uo%3D2" target="_blank"><i class="ios"></i></a>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#ava_smart_garden"><span class="youtube"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview ava">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/ava_app_sc.png" alt="AVA App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">01</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--AVA Section End Here-->

                 <!--Book My Forex Section Start Here-->
                 <section class="section winheight">
                    <div class="portfoliowrap">
                        <div class="portleftview bmf">
                            <div class="appContentviewdetails">
                                <div class="logorw">
                                    <img class="sterkla" src="<?= base_url(); ?>assets/images/portfolio1/bmf_logo.png" alt="BMF Logo">
                                </div>
                                <div class="appinfo"><span>India’s #1 Foreign Exchange Marketplace,</span> gets you <span>BUY, SELL</span> or EXCHANGE Forex online, BMF underpins <span>INTERNATIONAL TRADE</span> & <span>INVESTMENTS</span> as a lucrative <span>OPPORTUNITY</span>, without rushing into danger.</div>
                            </div>
                            <div class="leftbtmbg">
                                <div class="applinkrow">
                                    <a href="https://apps.apple.com/in/app/bookmyforex/id1103240547" target="_blank"><i class="ios"></i></a>
                                    <a href="https://play.google.com/store/apps/details?id=com.app.bookmyforex&hl=en_IN" target="_blank"><i class="android"></i></a>
                                    <a href="https://www.bookmyforex.com/" target="_blank"><i class="web"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portrightview bmf">
                            <div class="appviewbox">
                                <img src="<?= base_url(); ?>assets/images/portfolio1/bmf_app_sc.png" alt="BMF App">
                            </div>
                        </div>
                        <div class="rtbtmbg">
                            <div class="navigationview">
                                <div class="progressline">
                                    <div class="selectprogress"></div>
                                    <span class="numposleft">02</span>
                                    <span class="numposright">22</span>
                                </div>
                                <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                                <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Book My Forex Section End Here-->

                 <!--Sterkla Section Start Here-->
            <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview sterkla">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="sterkla" src="<?= base_url(); ?>assets/images/portfolio1/sterkla_logo.png" alt="Sterkla Logo">
                            </div>
                            <div class="appinfo">Received <span>3K + downloads</span> in just a week of app launch; Sterkla is a <span>SPELL-BOUNDING</span> coaching app for Global market. Helps you evade <span>UNNECESSARY STRUGGLE</span> to find the <span>RIGHT</span> coach, without wasting time in travel. </div>
                            <div class="whtclisay"><a href="javascript:void(0)">What Our Happy Clients Have to say</a></div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <a href="https://apps.apple.com/us/app/id1472511908" target="_blank"><i
                                        class="ios"></i></a>
                                <a href="https://play.google.com/store/apps/details?id=com.sterkla.app" target="_blank">
                                    <i class="android"></i></a>
                                <a href="https://sterkla.com/" target="_blank"> <i class="web"></i></a>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#sterkla_coaching"><span class="youtube"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview sterkla">
                        <div class="appviewbox hideappview">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/sterkla_app_screen.png" alt="Sterkla App">
                        </div>
                        <div class="midboxplayvideo">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/vBF3y6tSNL8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">03</span>
                                <span class="numposright">23</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Sterkla Section End Here-->

            <!--SSC Online Section Start Here-->
             <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview ssconline">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="ssconline" src="<?= base_url(); ?>assets/images/portfolio1/ssc_logo.png" alt="SSC Logo">
                            </div>
                            <div class="appinfo">Powered by <span>Eastern Book Company</span> SCC online app expands to <span>3.4 MILLION</span> legal documents from over <span>20 DIFFERENT COUNTRIES.</span> Brings over <span>300 Indian, Foreign and International</span> legal database to your smartphone.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <a href="https://apps.apple.com/in/app/scc-online/id1324544648" target="_blank"><i class="ios"></i></a>
                                <a href="https://play.google.com/store/apps/details?id=com.scconline&hl=en_IN" target="_blank"><i class="android"></i></a>
                                <a href="https://www.scconline.com/"  target="_blank"><i class="web"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview ssconline">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/ssc_app_screen.png" alt="SSC Online App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">04</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--SSC Section End Here-->

             <!--SP Jain Section Start Here-->
             <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview spjain">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="spjain" src="<?= base_url(); ?>assets/images/portfolio1/sp_jain_logo.png" alt="SP Jain Logo">
                            </div>
                            <div class="appinfo">Crafted technology solution for <span>S P Jain School of Management-</span> one of the <span>WORLD’S LEADING BUSINESS SCHOOLS.</span> Helps students to utilize their PRE-ALLOCATED points to book EXTRA-CURRICULAR ACTIVITIES.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <a href="https://apps.apple.com/in/app/global-learning-sp-jain/id1481195259" target="_blank"><i class="ios"></i></a>
                                <a href="https://play.google.com/store/apps/details?id=v.com.spjainapp" target="_blank"><i class="android"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview spjain">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/spjain_app_screen.png" alt="SP Jain App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">05</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--SP Jain Section End Here-->

            <!--Dhanuka Section Start Here-->
            <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview dhanuka">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="dhanuka" src="<?= base_url(); ?>assets/images/portfolio1/dhanuka_logo.png" alt="Dhanuka Logo">
                            </div>
                            <div class="appinfo"><span>10 million</span> Indian farmers benefitting for an app built for <span>Fortune 200 company</span> Dhanuka. Indhan boosts overall <span>PERFORMANCE</span> and REDUCE negative environmental impacts of farming, with a technical gateway.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <a href="https://play.google.com/store/apps/details?id=com.dhanuka.indhan&hl=en_IN" target="_blank"><i class="android"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview dhanuka">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/dhanuka_app_screen.png" alt="Dhanuka App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">06</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Dhanuka Section End Here-->

             <!--Blixr Section Start Here-->
             <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview blixr">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="blixr" src="<?= base_url(); ?>assets/images/portfolio1/blixr_logo.png" alt="Blixr Logo">
                            </div>
                            <div class="appinfo"><span>Daily Star UK</span> featured Blixr- a dating app for UK market. Blixr dating is no more a last-ditch resort for desperate loners, but it is your <span>FOCAL POINT</span> to hop onto an event or sharing a connoisseur of fine wines
                            </div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <a href="https://apps.apple.com/gb/app/blixr-connect-for-real/id1470609522" target="_blank"><i class="ios"></i></a>
                                <a href="https://play.google.com/store/apps/details?id=com.blixr.app&hl=en" target="_blank"><i class="android"></i></a>
                                <a href="https://www.blixrapp.com/" target="_blank"><i class="web"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview blixr">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/blixr_app_screen.png" alt="Blixr App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">07</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Blixr Section End Here-->

            <!--Cancan Section Start Here-->
            <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview cancan">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="cancan" src="<?= base_url(); ?>assets/images/portfolio1/cancanlogo.png" alt="Cancan Logo">
                            </div>
                            <div class="appinfo">Integrated with <span>3D LOOK</span> technology, CanCan offers most <span>PERSONALIZED</span> and  <span>ENGAGING</span> Kandora shopping experience. Has branched out to offer online shopping, letting users to <span>BUY</span> what <span>FITS</span> them best.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <div class="comingsoon">COMING SOON</div>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview cancan">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/cancan_app_screen.png" alt="Cancan App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">08</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Cancan Section End Here-->

                <!--YIP Section Start Here-->
                  <section class="section winheight">
                    <div class="portfoliowrap">
                        <div class="portleftview yip">
                            <div class="appContentviewdetails">
                                <div class="logorw">
                                    <img class="yip" src="<?= base_url(); ?>assets/images/portfolio1/yiplogo.png" alt="Yip Logo">
                                </div>
                                <div class="appinfo">Mentored by <span>Prashant Kishor-</span> Indian political strategist and politician, YIP allows users to start their <span>POLITICAL CAREER,</span> and step into politics with PROFESSIONAL GUIDANCE from I-PAC, and access tailor made <span>MENTORSHIP</span> plans.</div>
                            </div>
                            <div class="leftbtmbg">
                                <div class="applinkrow">
                                    <a href="https://play.google.com/store/apps/details?id=com.youthinpolitics.app&hl=en_US"  target="_blank"><i class="android"></i></a>
                                    <a href="https://www.youthinpolitics.in/" target="_blank"><i class="web"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portrightview yip">
                            <div class="appviewbox">
                                <img src="<?= base_url(); ?>assets/images/portfolio1/yip_app_screen.png" alt="YIP App" />
                            </div>
                        </div>
                        <div class="rtbtmbg">
                            <div class="navigationview">
                                <div class="progressline">
                                    <div class="selectprogress"></div>
                                    <span class="numposleft">09</span>
                                    <span class="numposright">22</span>
                                </div>
                                <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                                <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                            </div>
                        </div>
                    </div>
                </section>
                <!--YIP Section End Here-->

         <!--Trail Blazers Section Start Here-->
            <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview trail_blazers">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="trail" src="<?= base_url(); ?>assets/images/portfolio1/trailblazers_logo.png"
                                    alt="Trail Blazers Logo">
                            </div>
                            <div class="appinfo"><span>SERVING 8+LAC RETAILERS,</span> to boost work <span>PRODUCTIVITY,</span> via an enterprise app crafted for <span>Fortune 500 COMPANY,</span> Godfrey Phillips. App lets employees to <span>MANAGE</span> tasks perfectly & rise to <span>SUCCESS</span> and <span>GLORY.</span></div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <div class="comingsoon">Enterprise</div>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview trail_blazers">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/trailblazers_app_screen.png" alt="Trail Blazers App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">10</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Trail Blazers Section End Here-->

              <!--NDS Section Start Here-->
              <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview nds">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="nds" src="<?= base_url(); ?>assets/images/portfolio1/nds_logo.png" alt="NDS Logo">
                            </div>
                            <div class="appinfo">One of the <span>INDIA’S BIGGEST NGO</span> funded by Tech-Giants; <span>Adobe, Google</span> and <span>Ford & Tech Mahindra</span> for deaf people. NDS <span>EMPOWERS</span> the deaf community in India to lead <span>SUSTAINABLE</span> and <span>SELF-RELIANT LIVES.</span></div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <a href="https://noidadeafsociety.org/" target="_blank"><i class="web"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview nds">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/nds_web.jpg" alt="NDS Web">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">11</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--NDS Section End Here-->

                 <!--Solar Sense Section Start Here-->
                 <section class="section winheight">
                    <div class="portfoliowrap">
                        <div class="portleftview solorsense">
                            <div class="appContentviewdetails">
                                <div class="logorw">
                                    <img class="solarsense" src="<?= base_url(); ?>assets/images/portfolio1/solor_sense.png" alt="Solar Sense Logo">
                                </div>
                                <div class="appinfo"><span>POWERED</span> by <span>OAKRIDGE  ENERGY-</span> India’s leading solar rooftop company. Solar sense enables helps in reducing up to <span>100%</span> of <span>ELECTRICITY BILL,</span> and provides <span>GREEN SOLAR ENERGY</span> substitute of expensive fossil fuels.</div>
                            </div>
                            <div class="leftbtmbg">
                                <div class="applinkrow">
                                    <a href="https://apps.apple.com/in/app/solar-sense/id1495001607"  target="_blank"><i class="ios"></i></a>
                                    <a href="https://play.google.com/store/apps/details?id=com.app.suntrack"  target="_blank"><i class="android"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portrightview solorsense">
                            <div class="appviewbox">
                                <img src="<?= base_url(); ?>assets/images/portfolio1/solorsense_app_screen.png" alt="Solar Sense App" />
                            </div>
                        </div>
                        <div class="rtbtmbg">
                            <div class="navigationview">
                                <div class="progressline">
                                    <div class="selectprogress"></div>
                                    <span class="numposleft">12</span>
                                    <span class="numposright">22</span>
                                </div>
                                <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                                <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Solar Sense Section End Here-->

            <!--Sero Section Start Here-->
            <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview sero">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="sterkla" src="<?= base_url(); ?>assets/images/portfolio1/sero_logo.png" alt="Sero Logo">
                            </div>
                            <div class="appinfo"><span>Sero Group’s 2000+ PROJECTS</span> from <span>3+ CONTINENTS,</span> helps brands’ battle to find better approach to <span>PROMOTE</span> their events. Attendees get an <span>INTUITIVE & COMPACT</span> alternative to mundane program brochures.
                            </div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <div class="comingsoon">COMING SOON</div>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview sero">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/sero_app_screen.png" alt="Sero App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress wd14"></div>
                                <span class="numposleft">13</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Sero Section End Here-->

            <!--Bono Section Start Here-->
            <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview bono">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="bono" src="<?= base_url(); ?>assets/images/portfolio1/bonologo.png" alt="Bono Logo">
                            </div>
                            <div class="appinfo"><span>10,000+</span> users are utilizing car pooling app- Bono- a DIPP (Department of Industrial Policy & Promotion) recognized start-up, trades the concept of <span>LESSER FUEL- LESSER POLLUTION-LESSER VEHICLES</span> on the road.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <a href="https://itunes.apple.com/in/app/bono-carpool-bikepool/id1253365104?mt=8"
                                    target="_blank"><i class="ios"></i></a>
                                <a href="https://play.google.com/store/apps/details?id=com.techugo.buno&hl=en"
                                    target="_blank"> <i class="android"></i></a>
                                <a href="https://bonoride.com/" target="_blank"><i class="web"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview bono">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/bono_app_screen.png" alt="Bono App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">14</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Bono Section End Here-->

               <!--BatalhaFunk Section Start Here-->
               <section class="section winheight">
                <div class="portfoliowrap sterklaviewport">
                    <div class="portleftview batalhafunk">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="batalhafunk" src="<?= base_url(); ?>assets/images/portfolio1/batalhafunk_logo.png"
                                    alt="Batalhafunk Logo">
                            </div>
                            <div class="appinfo">Techugo has built a platform for users to <span>RECORD VOICE/MUSIC, POST & CHALLENGE</span> other followers on the app. Batalha Funk is the first social FUNK app from Brazil, for the music lovers, who have the deep <span>REVERENCE</span> for music.</div>
                        </div>
                        <div class="leftbtmbg">
                        <div class="applinkrow"><a href="https://play.google.com/store/apps/details?id=com.batalhafunk.app"
                                    target="_blank"> <i class="android"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview batalhafunk">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/batalhafunkl_app_screen.png" alt="Batalhafunk App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress wd56"></div>
                                <span class="numposleft">15</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--BatalhaFunk Section End Here-->

            <!--Indofil Section Start Here-->
            <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview indofil">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="indofil" src="<?= base_url(); ?>assets/images/portfolio1/indofilapp_logo.png"
                                    alt="Indofil Logo">
                            </div>
                            <div class="appinfo"><span>Fortune 500 company-</span> Godfrey Phillps’ subsidiary venture- Indofil is an enterprise app solution to enhance <span>WORK-EFFICIENCY,</span> improve overall corporate <span>PRODUCTIVITY,</span> while <span>FUELING</span> the business mechanism.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <div class="comingsoon">Enterprise</div>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview indofil">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/indofil_app_screen.png" alt="indofil App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">16</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Indofil Section End Here-->

               <!--My Followup Section Start Here-->
               <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview myfollowapp">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="trail" src="<?= base_url(); ?>assets/images/portfolio1/myfollowup_logo.png"
                                    alt="My Followup Logo">
                            </div>
                            <div class="appinfo">MyFollowUp- app crafted for <span> Ganga Ram Hospital- ONE OF INDIA’S TOP-NOTCH HOSPITALS,</span> encourages better <span>COORDINATION,</span> improves <span>DIAGNOSTIC ACCURACY,</span> & builds a <span>BRIDGE OF TRUST</span> between patients & doctors.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <a href="https://itunes.apple.com/in/app/myfollowup/id1144895524?mt=8"
                                    target="_blank"><i class="ios"></i></a>
                                <a href="https://play.google.com/store/apps/details?id=com.virtualmediconnect.app"
                                    target="_blank"> <i class="android"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview myfollowapp">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/myfollowupl_app_screen.png" alt="My Follow App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">17</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--My Followup Section End Here-->

             <!--Worqleus Section Start Here-->
             <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview worqleus">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="worqleus" src="<?= base_url(); ?>assets/images/portfolio1/worqleus_logo.png" alt="Worqleus Logo">
                            </div>
                            <div class="appinfo">WorQleus acts as a bridge between <span>BUSINESSES</span> & a larger pool of <span>QUALITY TALENT</span> through a freelancing platform. Aiming to make it <span>FAST, SIMPLE,</span> & <span>COST-EFFECTIVE</span> to <span>FIND, HIRE, WORK</span>  with each other.</div>
                        </div>
                        <div class="leftbtmbg">
                        <div class="applinkrow">
                                <a href="https://www.worqleus.com" target="_blank"> <i class="web"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview worqleus">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/worqleus_web_sc.jpg" alt="Worqleus Web">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">18</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Worqleus Section End Here-->

            <!--BJP Section Start Here-->
            <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview bjp">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="bjp" src="<?= base_url(); ?>assets/images/portfolio1/bjplogo.png" alt="BJP Logo">
                            </div>
                            <div class="appinfo">An app designed & developed for the <span>WORLD’S LARGEST POLITICAL PARTY</span>- BJP of current Indian Prime Minister- <span>Mr. Narendra Modi.</span> App helps in listening to commoners’ voice and let them establishing <span>TRUSTABLE</span> connection.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <div class="comingsoon">Enterprise</div>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview bjp">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/bjp_app_screen.png" alt="BJP App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">19</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--BJP Section End Here-->

            <!--Dilooni Section Start Here-->
            <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview dilooni">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="dilooni" src="<?= base_url(); ?>assets/images/portfolio1/dilooni_logo.png" alt="Dilooni Logo">
                            </div>
                            <div class="appinfo">Techugo crafted a <span>FREE DATING APP,</span> for Druze community to connect with their soul mate. Dilooni breaks down the unspoken rule of dating, and <span>MATCHES</span> you with someone who <span>PIQUES</span> your <span>INTEREST.</span></div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <a href="https://apps.apple.com/in/app/dilooni/id1343272966" target="_blank"><i
                                        class="ios"></i></a>
                                <a href="https://play.google.com/store/apps/details?id=com.dilooni.android"
                                    target="_blank"><i class="android"></i></a>
                                <a href="https://yalladilooni.com/" target="_blank"> <i class="web"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview dilooni">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/dilooni_app_screen.png" alt="Dilooni App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress wd49"></div>
                                <span class="numposleft">20</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Dilooni Section End Here-->

              <!--Snrakshak Section Start Here-->
              <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview snrakshak">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="snrakshak" src="<?= base_url(); ?>assets/images/portfolio1/solar_sense_logo.png" alt="Snrakshak Logo">
                            </div>
                            <div class="appinfo"><span>Indian Oil</span>- subsidiary venture is providing a fast, professional, and secure alternative of manual inspection with Snrakshak. It improves the operational capabilities of the Oil & Gas industry, and has brought a <span>SMART MANAGEMENT</span> system into the market.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <div class="comingsoon">COMING SOON</div>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview snrakshak">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/solar_sense_app.png" alt="Snrakshak App" />
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">21</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
              </section>
            <!--Snrakshak Section End Here-->

            <!--Airtel Section Start Here-->
            <section class="section winheight">
                <div class="portfoliowrap">
                    <div class="portleftview airtel">
                        <div class="appContentviewdetails">
                            <div class="logorw">
                                <img class="airtel" src="<?= base_url(); ?>assets/images/portfolio1/airtellogoapp.png" alt="Airtel Logo">
                            </div>
                            <div class="appinfo"><span>Fortune India 500</span> and <span>Global 2,000 company</span>-Airtel, got the event app designed & developed by Techugo. Airtel Connect’s versatility made event-planning, <span>CONVENIENT</span> for both event attendees and event planners.</div>
                        </div>
                        <div class="leftbtmbg">
                            <div class="applinkrow">
                                <div class="comingsoon">Enterprise</div>
                            </div>
                        </div>
                    </div>
                    <div class="portrightview airtel">
                        <div class="appviewbox">
                            <img src="<?= base_url(); ?>assets/images/portfolio1/airtel_app_screen.png" alt="Airtel App">
                        </div>
                    </div>
                    <div class="rtbtmbg">
                        <div class="navigationview">
                            <div class="progressline">
                                <div class="selectprogress"></div>
                                <span class="numposleft">22</span>
                                <span class="numposright">22</span>
                            </div>
                            <i class="fa fa-angle-down fp-controlArrow fp-next slider-next"></i>
                            <i class="fa fa-angle-up fp-controlArrow fp-prev slider-prev"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!--Airtel Section End Here-->

            </section>
            <!--Portfolio Page Content End Here-->