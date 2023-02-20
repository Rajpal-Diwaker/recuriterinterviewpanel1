<?php 

function sanitize_output2($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
    //    '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output2");
?>

  <!--Android Application Development Start Here--> 
  <!--Android Banner Start Here-->
  <div class="mobileappdevebanwrap iosdevlopment android clearfix">
    <div class="iosripple android" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
    <div class="theatre_show_app bookscreen" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
    <div class="alltv_show android" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="finding_feet" data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0"></span></div>
    <div class="leftdescriptionbx"> <span class="iosBrand android"><span class="apple"></span></span>
      <h1 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Android Application <br>
        Development</h1>
      <div class="sminfotbx" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Android covers the majority of the smartphone market globally. This shows the importance of the Android platform for the businesses to create a connection between the brands and the customers.  </div>
      <div class="iostheame android">ANDROID</div>
    </div>
  </div>
  <!--Android Banner End Here--> 

  <!--Helping your Business to Grow Globally Start Here-->
  <div class="growGloballywrap android">
    <div data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><h2>Building Exceptional Android App Solutions</h2></div>
    <div class="smtinfo" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">It is the most popular and preferred platform for mobile application development. Not just because it covers the major part of the smartphone market, but it also provides numerous benefits such as faster development, enhanced security, versatility, scalability, and customization. With the Android platform, you can build a unique app solution that perfectly fits your business needs.    </div>
  </div>
  <!--Helping your Business to Grow Globally End Here--> 

  <!--Why iOS Section Start Here-->
  <div class="whyiossection androidApp clearfix">
    <div class="whyiosrtbox">
      <div class="first_circle" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="300">
        <div class="second_circle" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="400">
          <div class="imgbxx" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="500"></div>
        </div>
      </div>
    </div>
    <div class="whysiOSContentbx">
      <div class="iosshapeCon android"> </div>
      <div class="iosdetailsbx android">
      <h3 data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">How Your Business Would Benefit From An </h3>
        <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><h2>ANDROID APP?</h2></div>
        <div class="smtinfo">
          <p data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Android platform is the best choice for the businesses because it holds a huge user base all across the globe. This platform allows businesses to reach their potential users quickly and effectively.</p>
          <p data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">It increases your business visibility and brings a lot of information about your customers. With those important insights, businesses can easily figure out their product specification, new features, prices, promotions, and special discounts.</p>
          <p data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">If you are really looking forward to beating your competition then you must integrate this amazing technology to be an inevitable part of your business mechanism.</p>
        </div>
      </div>
    </div>
  </div>
  <!--Why iOS Section End Here--> 

  <!--Unrivaled Advantages of iPhone Start Here-->
  <div class="advantages_iphone android">
    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><h3>The unrivaled advantages of Android apps include:</h3></div>
    <div class="advantages_Options"> <span class="clrdrop"></span><span class="clrdrop top33H"></span><span class="clrdrop top66H"></span><span class="clrdrop top80H"></span> <span class="clrdrop rtpos"></span><span class="clrdrop top33H rtpos"></span><span class="clrdrop top66H rtpos"></span><span class="clrdrop top80H rtpos"></span>
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 col-md-3"><span class="chainbdr_lt"><i class="top0"></i><i class="top50"></i><i class="top100"></i></span></div>
        <div class="col-sm-8 col-md-6">
          <div class="unrivaledchecksbx">
            <div class="checkoprw">
              <div class="adchecknm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="flawless_app_features"></span>Experience  Higher ROI</div>
              <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
            </div>
            <div class="checkoprw">
              <div class="adchecknm" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="impeccable_hardware"></span>Perfect for the BYOD model</div>
              <div class="downline" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
            </div>
            <div class="checkoprw">
              <div class="adchecknm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="high-end-security"></span>Effortless Customization</div>
              <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
            </div>
            <div class="checkoprw">
              <div class="adchecknm" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="features_supports"></span>Seamless Security</div>
               <div class="downline" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
            </div>
            <div class="checkoprw">
              <div class="adchecknm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="flawless_app_features"></span>Reduce TTM (Time To Market)</div>
               <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
            </div>
            <div class="checkoprw">
              <div class="adchecknm" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="impeccable_hardware"></span>Scope for Innovation</div>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-3"><span class="chainbdr_rt"><i class="top0"></i><i class="top50"></i><i class="top100"></i></span></div>
      </div>
    </div>
  </div>

  <!--Unrivaled Advantages of iPhone End Here--> 

  <!--How Techugo Can I Help u Start Here-->
  <div class="techugo_revolutionize iphonebx android">
    <div class="imagebx"><img src=" <?php echo base_url('assets/images/pick_techugo.png'); ?>" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0" alt="pick_techugo" />
      <div class="sectiontitle">
        <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><div class="mainheadingbx">Why To Pick Techugo?</div></div>
      </div>
    </div>
    <div class="smtinfo" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0">
      <p>The wide spectrum of Android mobile applications requires the right methods to build the best solution through the right technology. Techugo is the Android application development company, fits the bill as your trusted development partner.</p>
      <p>The working methodology of Techugo is not based on the conventional perspective. It is a successful mix of creativity, innovation, and passion to combine together to build a masterpiece.</p>
      <p>We offer our Android application development service to various brands and startups. We are dedicated to creating unique mobile application experiences for our users, according to their specific requirements. We utilize the different sets of methodologies in the working methods, such as:</p>
    </div>
  </div>

  <!--How Techugo Can I Help u End Here--> 

  <!--Iconography Section Start Here-->
  <div class="iconographywrap android">
    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><div class="iconographyheading">Iconography</div></div>
    <div class="smtinfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">We keep evolving your skills and creativity to build a great Android app solution for your business. We keep an eyes on the trending technologies and methodologies.</div>
    <div class="iconographybx">
      <div class="sideicon" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="iconbx"><i class="clock"></i></span><span class="stargroup"></span>
        <div class="la-ball-scale-pulse la-dark la-3x">
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="sideicon rtsmtop" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="iconbx"><i class="mobile"></i></span><span class="stargroup"></span>
        <div class="la-ball-scale-pulse la-dark la-3x">
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="sideicon ltsmtop" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="iconbx"><i class="usrp"></i></span><span class="stargroup"></span>
        <div class="la-ball-scale-pulse la-dark la-3x">
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="sideicon rtbtm" data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="iconbx"><i class="cap"></i></span><span class="stargroup"></span>
        <div class="la-ball-scale-pulse la-dark la-3x">
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="iconography_circle" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
        <div class="iconography_innercircle"> <span class="starbx"><i></i></span> <span class="wallets"><i></i>
          </span> <span class="ai"><i></i></span> <span class="user"><i></i></span> <span class="starwithline"><i></i></span></div>
      </div>
      <div class="iconography_innersmcircle" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"> <span class="candle"><i></i></span> <span class="documents"><i></i></span> <span class="staruser"><i></i></span> </div>
      <div class="circlertskydark"></div>
      <div class="la-ball-scale-pulse la-dark la-3x">
        <div></div>
        <div></div>
      </div>
      <a href="javascript:void(0);"><div class="lastCircle"><span><i class="tooltips">Visual representation</i></span></div></a>
    </div>
  </div>
  <!--Iconography Section End Here--> 

  <!--Screen Design Section Start Here-->
  <div class="screen_designs">
    <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Screen design</h3>
    <div class="smtinfo" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">We are known for adopting engaging and clear strategy while development. We integrate the right functionality and right technology, letting your end users get engage with the final app solution.</div>
    <div class="screendesignContent">
      <div class="rotationCircle"></div>
      <div class="rotationCircle1"></div>
      <div class="mutiplepoints">
        <div class="la-ball-grid-pulse la-dark">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="sliderSkewWrap androiddev">
        <div class="flipster">
          <ul>
            <li class="blockBox">
              <div class="sliderskewm advertisementscreen firstitem">
                <div class="skewCon">
                  <div class="textbox">
                    <h3>ADVERTISEMENT</h3>
                    <div class="smdt">
                      We craft apps, which make a difference! We help you promote your app, to help you maximize ROI for every size of businesses.</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="blockBox">
              <div class="sliderskewm advertisementscreen lfm">
                <div class="skewCon1">
                  <div class="textbox">
                    <h3>FIND FRIENDS</h3>
                    <div class="smdt">
                      With us, you not just get the technology partner, but we mingle with you well, so together we can do great things and will continue to innovate. </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!--Screen Design Section End Here--> 
  <!--iphone More Info Details Start Here-->

  <div class="mobileappdevewrap iphonepg">
    <div class="production_discussion iphone">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="pro_dis"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">We are Trend-Setters</h3>
            <div class="productiondetails" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">During every project,we pick a unique way for developing mobile app solutions for the businesses. Our Android app developers are highly flexible to shape our strategies according to your business needs. We love to face the challenges and set the trends for the other development companies.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="production_discussion iphone marketing_insights">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="marketing_insights"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">We are listeners</h3>
            <div class="productiondetails" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">Our motto is to give the best user experience to your end-users. We understand your business needs and listen to your customer's expectations. We always consider your valuable suggestions and feedback to build the best app solution for your business.</div>
          </div>
        </div>
      </div>
    </div>

    <div class="production_discussion iphone analysis_wireframing">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="wireframing"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">We are your trusted development partner</h3>
            <div class="productiondetails" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">We believe in building long lasting relationships with our clients. We are available for our clients to provide support regardless of the time and zone barrier.</div>
          </div>
        </div>
      </div>
    </div>

    <div class="production_discussion iphone designing">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="designing"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">We optimize the trending technologies</h3>
            <div class="productiondetails" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">
              <p>We don't settle for the tried and tested formula, that's why we keep evolving our skills to optimize the best trending technologies such as AR, AI, ML, IoT, etc. We hold the expertise in utilizing the latest technologies at their best.
                </p>
              <p>The latest technologies in the market become our skills in no time.</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--iphone More Info Details End Here--> 

  <div class="screen_designs androidpg">
    <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0" >OUR ANDROID APP DEVELOPMENT SKILLS</h3>
    <div class="smtinfo" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Our Android app developers and Android app designer are highly skilled and keep looking for the latest updates to attain the maximum benefits out of the mobile app platform. We build the application which is not just unique but highly scalable to help our client's business to gain an instant boost in the revenue generation.</div>
  </div>

  <!--App Development Strategies Section Start Here-->
  <div class="app_development_strategies android"> <span class="ltl"><i class="clrline"></i><i class="clrline top16H"></i><i class="clrline top32H"></i><i class="clrline top48H"></i><i class="clrline top64H"></i><i class="clrline top80H"></i></span> <span class="ltl rtl"><i class="clrline"></i><i class="clrline top16H"></i><i class="clrline top32H"></i><i class="clrline top48H"></i><i class="clrline top64H"></i><i class="clrline top80H"></i></span>
    <div class="appStrategiesCon"> <span class="ltl leftalign"><i class="clrline"></i><i class="clrline top50H"></i><i class="clrline top100H"></i></span> <span class="ltl rtl rightalign"><i class="clrline"></i><i class="clrline top50H"></i><i class="clrline top100H"></i></span>
      <div class="appStrow firstrw" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="2000">
        <div class="row clearfix">
          <div class="iosappoption appConcept">
            <ul class="leftOpt">
              <li><span></span>Understand the concept and how it fits the business needs</li>
              <li><span></span>Unleash the business needs </li>
              <li><span></span>Design the Prototype</li>
            </ul>
          </div>
          <div class="halfCirclebox">
            <div id="numberbx"><span class="numbx">01</span>
              <div class="halfclipCircle">
                <div class="halfcircle clippedCircle"> </div>
              </div>
              <div class="halfcircle fixedCircle"> </div>
            </div>
            <div class="halfCircle">
              <div class="lefthalfCircle"></div>
            </div>
          </div>
          <div class="headingrws">App Concept Analysis</div>
        </div>
      </div>
      <div class="appStrow secrw" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="2000">
        <div class="row clearfix">
          <div class="headingrws">App Development Cycle</div>
          <div class="halfCirclebox"> <div id="numberbx1"><span class="numbx">02</span>
              <div class="halfclipCircle">
                <div class="halfcircle clippedCircle"> </div>
              </div>
              <div class="halfcircle fixedCircle"> </div>
            </div>
            <div class="halfCircle">
              <div class="righthalfCircle"></div>
            </div>
          </div>
          <div class="iosappoption appdevelopment">
            <ul class="rightOpt">
              <li><span></span>Design the app layout</li>
              <li><span></span>Create the API</li>
              <li><span></span>Conduct the QA Testing process</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="appStrow thirdrw" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="2000">
        <div class="row clearfix">
          <div class="iosappoption">
            <ul class="leftOpt">
              <li><span></span>Identify the app bugs & crashes</li>
              <li><span></span>Test the app performance on the real-time network</li>
              <li><span></span>Asses the app health throughout to create a bug-free experience</li>
            </ul>
          </div>
          <div class="halfCirclebox"> <div id="numberbx2"><span class="numbx">03</span>
              <div class="halfclipCircle">
                <div class="halfcircle clippedCircle"> </div>
              </div>
              <div class="halfcircle fixedCircle"> </div>
            </div>
            <div class="halfCircle">
              <div class="lefthalfCircle1"></div>
            </div>
          </div>
          <div class="headingrws moreword">Vigorous testing process</div>
        </div>
      </div>

      <div class="appStrow fourth" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="2000">
        <div class="row clearfix">
          <div class="headingrws moreword">After App launch Support & Assistance</div>
          <div class="halfCirclebox toppad"> <div id="numberbx3"><span class="numbx">04</span>
              <div class="halfclipCircle">
                <div class="halfcircle clippedCircle"> </div>
              </div>
              <div class="halfcircle fixedCircle"> </div>
            </div>
            <div class="halfCircle">
              <div class="righthalfCircle1"></div>
            </div>
          </div>
          <div class="iosappoption afterapp">
            <ul class="rightOpt">
              <li><span></span>Assist in submitting the app on store</li>
              <li><span></span>Scan the mobile app closely</li>
              <li><span></span>Stay Accessible 24*7*365</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--App Development Strategies Section End Here--> 
<link href="<?php echo base_url('assets/css/jquery.flipster.css'); ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/js/jquery.flipster.js'); ?>"></script> 
<script>
$(function(){
	$(".flipster").flipster({ style: 'carousel', start: 0 });
});
</script>