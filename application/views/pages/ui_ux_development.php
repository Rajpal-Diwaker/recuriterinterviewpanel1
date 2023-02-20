
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
  <!--UIUX Developmentwrap Content Start Here-->

  <!--UI-UX Banner Start Here-->
  <div class="mobileappdevebanwrap iosdevlopment uiux clearfix">
	   
    <div class="appdevimgbx reactdev"> <img  data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0" src="<?php echo base_url('assets/images/uiux_ban.png'); ?>" alt="uiux_ban" />
        <span class="uiuxprosc" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></span>
        <span class="uiuxmobileview" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></span>
    </div>
    <div class="leftdescriptionbx"> <span class="iosBrand nodedevelopment"><span class="apple"></span></span>
      <h1 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">UI/UX Design</h1>
      <div class="sminfotbx uiux" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">The fusion of visually appealing and engaging app can only be possible with the right amount of UI/UX strategies integrated within the app. The success of a mobile app depends on UI/UX and Testing & QA process taken into consideration within the development journey of a mobile app.</div>
      <div class="iostheame" data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">UI/UX</div>
    </div>
  </div>
  <!--UI-UX Banner End Here-->
  
  <!--Helping your Business to Grow Globally Start Here-->
  <div class="growGloballywrap uiux">
      <div class="container">
    <div data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><h2>Creating Easier, Faster And More Engaging <br>App Experiences </h2></div>
    <div class="smtinfo" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
        <p >The worth of UI and UX can never be described in words, but to sum up it can be said that with the help of these two factors, you can win your end-users’ hearts with the app design and encourage them further to use our mobile app or website.</p>
        <p>You must not forget that a start-up or a small venture, can only carve its impression amongst the targeted audience, through the application, which would let the users enjoy the brand recognition.</p>
    </div>
   </div>
  </div>
  <!--Helping your Business to Grow Globally End Here--> 
    
 <!--UIUX keyword Section Start Here-->
    <div class="nodejskeywordwrap uiux">
        <div class="nodekeyrw clearfix">
            <div class="nodeglobbx uiux" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                <span class="pinkdashedbx"><i class="pinkdashed"></i><i class="gbb"></i></span>
                <span class="ndrtgr"></span>
                <span class="ndrtorange"></span>
                <span class="purpledashedbx uiux"><i class="gbb1"></i><i class="purpledashed"></i></span>
                <div class="globimgbx"></div>
            </div>
            <div class="nkeywordsoptions">
                <div class="unrivaledchecksbx">
                    <div class="checkoprw">
                      <div class="adchecknm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="flawless_app_features"></span>Information Architecture</div>
                      <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>
                    <div class="checkoprw">
                      <div class="adchecknm" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="impeccable_hardware"></span>Interaction Design</div>
                      <div class="downline" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>
                    <div class="checkoprw">
                      <div class="adchecknm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="high-end-security"></span>Usability</div>
                      <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>
                    <div class="checkoprw">
                      <div class="adchecknm" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="greensign"></span>Wireframing</div>
                        <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>
                    
                     <div class="checkoprw">
                      <div class="adchecknm" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="impeccable_hardware"></span>Visual Design</div>
                        <div class="downline" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>
                    
                    <div class="checkoprw">
                      <div class="adchecknm" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="features_supports"></span>Simplicity</div>
                      <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>

                    <div class="checkoprw">
                        <div class="adchecknm" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="flawless_app_features"></span>Impressive first impression</div>
                        <div class="downline" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                      </div>

                      <div class="checkoprw">
                        <div class="adchecknm" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="high-end-security"></span>User Privacy</div>
                        <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                      </div>

                      <div class="checkoprw">
                        <div class="adchecknm" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="greensign"></span>Extremely attractive</div>
                      </div>
                    
                  </div>
            </div>
        </div>
    </div>
 <!--UIUX keyword Section End Here-->

 <!--Techugo Revolutionize Start Here-->
 <div class="techugo_revolutionize uiux">
	 
        <div class="imagebx"><img src="<?php echo base_url('assets/images/pick_techugo1.png'); ?>" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0" alt="pick_techugo5" />
          <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
          <div class="sectiontitle">
            <div class="mainheadingbx">How Techugo Helps?</div>
          </div>
        </div>
        </div>
        <div class="smtinfo"  data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
            <p>Techugo is a leading UI/UX development company, wherein we help different organizations to build and enhance via the concepts of research, strategy, and design. We work with Fortune 500, Global 2000 and blooming startups to get the best app products.</p>
            <p>In order to present a user winning app acceptance, we ensure to integrate the innovation and creativity in our end-product. We very well understand that customer interaction can only be achieved through UI design, which can change the future of the mobile and provides the best user experience.</p>
        </div>
      </div>
      <!--Techugo Revolutionize End Here-->

      <!--UI UX Service Box Content Start Here-->
        <div class="uiuxserviceConbox">
          <div class="uiuxservicebox">
            <div class="row equalHMWrap eqWrap clearfix">
            <div class="col-sm-4 uiuxConinfo" data-aos="flip-left" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
                <div class="uiuxiconbxrw"><div class="uiuxsericonbx"><span class="product_strategy"></span></div></div>
                  <h3>Product Strategy</h3>
                  <div class="smtextinfo">Here we let our clients strategize their app’s roadmap to be clear enough to settle the best plan for their mobile product.</div>
                  <span class="btmline"></span>
            </div>
            <div class="col-sm-4 uiuxConinfo middle"  data-aos="flip-right" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
                <div class="uiuxiconbxrw"><div class="uiuxsericonbx"><span class="expections"></span></div></div>
                  <h3>We work with your expectations</h3>
                  <div class="smtextinfo">
                      Our UI/UX process is not purely the outcome of our thought process, but it totally comes out as a mutual-expectation outcome of our creativity and your imagination. We research, sketch, prototype, iterate and test solutions to ensure app UI/UX is simple, usable and delightful.</div>
                  <span class="btmline"></span>
            </div>
            <div class="col-sm-4 uiuxConinfo last"  data-aos="flip-left" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
                <div class="uiuxiconbxrw"><div class="uiuxsericonbx"><span class="research_testing"></span></div></div>
                  <h3>Research & Testing</h3>
                  <div class="smtextinfo">Our app designers’ team gets involved with the range of research methods to build a bridge to interact with the users through mobile application. </div>
                  <span class="btmline"></span>
            </div>
          </div>
          </div>
        </div>
       <!--UI UX Service Box Content End Here-->

        <!--Must Pic UI UX Designers Start Section-->
    <div class="mustpicuiux_section">
      <span class="bdrshow_divideline"></span>
      <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Why You Must Pick UI/UX Designers From Techugo?</h3>
      <div class="row clearfix">
        <div class="col-sm-4">
          <div class="picuiuxConbx">
            <div class="numrw" data-aos="flip-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="nmbx">01<i class="bullets_points"><i class="blupoints"></i></i></span></div>
            <div class="picuiuxdetailsbx">
            <div class="bxheading" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Discover</div>
            <div class="smtinfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">We involve the discovery process to understand that why and how a specific app would be utilized as per users’ behaviors and integrate their needs into our development approach.</div>
          </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="picuiuxConbx solve">
            <div class="numrw" data-aos="flip-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="nmbx">02<i class="bullets_points"><i class="blupoints"></i></i></span></div>
            <div class="picuiuxdetailsbx">
            <div class="bxheading" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Solve</div>
            <div class="smtinfo" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">We are a professional brood, who sketch, prototype, iterate, design and test the mobile app to experience the incredible user experiences.</div>
          </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="picuiuxConbx craft">
            <div class="numrw" data-aos="flip-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="nmbx">03<i class="bullets_points"><i class="blupoints"></i></i></span></div>
            <div class="picuiuxdetailsbx">
            <div class="bxheading" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Craft</div>
            <div class="smtinfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">We invest our time and passion for crafting clean code to bring out the UNIQUE end-product and consequently our application interface designs to life.</div>
          </div>
          </div>
        </div>
      </div>
    </div>
 <!--Must Pic UI UX Designers End Section-->

 <!--Methodologies Section Start Here-->
    <div class="methodologies_section clearfix">
      <div class="methodologieslCon">
        <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">UX  Methodologies</h3>
        <div class="smtextinfos" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Our UX  design strategy lets your business to experience the increased and efficient engagement to help you carve the immeasurable ROI on your business.</div>
      </div>
      <div class="methodologies_designbox">
        <div class="yearlybx"  data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="1100"  data-aos-offset="0">
          <div class="headings">Yearly</div>
          <div class="row clearfix">
            <div class="col-xs-4"><h5>Bag-1234</h5></div>
            <div class="col-xs-5"><h6>11-Nov  </h6></div>
            <div class="col-xs-3 text-right"><h6>13 Nov </h6></div>
          </div>
          <div class="row clearfix">
              <div class="col-xs-4"><h6>Quantity : 24</h6></div>
              <div class="col-xs-5"><h6>11-Nov <i class="fa fa-smile-o" aria-hidden="true"></i> <i class="fa fa-smile-o" aria-hidden="true"></i> &nbsp;&nbsp;<i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-up" aria-hidden="true"></i> 2</h6></div>
              <div class="col-xs-3 text-right"><h6>ONTIME </h6></div>
            </div>
        </div>
        <div class="yearlybx monthly"  data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="1100"  data-aos-offset="0">
          <div class="headings">Monthly</div>
          <div class="row clearfix">
            <div class="col-xs-4"><h5>Bag-1234</h5></div>
            <div class="col-xs-5"><h6>11-Nov  </h6></div>
            <div class="col-xs-3 text-right"><h6>13 Nov </h6></div>
          </div>
          <div class="row clearfix">
              <div class="col-xs-4"><h6>Quantity : 24</h6></div>
              <div class="col-xs-5"><h6>11-Nov <i class="fa fa-smile-o" aria-hidden="true"></i> <i class="fa fa-smile-o" aria-hidden="true"></i> &nbsp;&nbsp;<i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-up" aria-hidden="true"></i> 2</h6></div>
              <div class="col-xs-3 text-right"><h6>ONTIME </h6></div>
            </div>
        </div>
        <div class="yearlybx weekly" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="1100"  data-aos-offset="0">
          <div class="headings">Weekly</div>
          <div class="row clearfix">
            <div class="col-xs-4"><h5>Bag-1234</h5></div>
            <div class="col-xs-5"><h6>11-Nov  </h6></div>
            <div class="col-xs-3 text-right"><h6>13 Nov </h6></div>
          </div>
          <div class="row clearfix">
              <div class="col-xs-4"><h6>Quantity : 24</h6></div>
              <div class="col-xs-5"><h6>11-Nov <i class="fa fa-smile-o" aria-hidden="true"></i> <i class="fa fa-smile-o" aria-hidden="true"></i> &nbsp;&nbsp;<i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-arrow-up" aria-hidden="true"></i> 2</h6></div>
              <div class="col-xs-3 text-right"><h6>ONTIME </h6></div>
            </div>
        </div>
        <div class="designbg" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="500"  data-aos-offset="0"></div>
        <div class="methodologies_graph" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="800"  data-aos-offset="0"></div>
      </div>
    </div>
 <!--Methodologies Section End Here-->
  
  <!--UIUX Features Section Start Here-->
  <div class="basketwrap uiux">
    <div class="basketContent">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-4"><span class="chainbdr_rt"></span>
          <div class="basketinfobox uiuxfeatures">
            <div data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">
            <div class="basketiconbx">
            	<div class="ball-scale-ripple-multiple"><div></div><div></div><div></div></div>
                <div class="shiconbx">
                	<span class="cross-platform"></span>
                </div>
            </div>
          </div>
            <div class="basketdetails">
              <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">App strategy & advisory</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><span class="chainbdr_lt"></span><span class="chainbdr_rt"></span>
          <div class="basketinfobox uiuxfeatures">
          <div data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600">
            <div class="basketiconbx">
             <div class="ball-scale-ripple-multiple"><div></div><div></div><div></div></div>
                <div class="shiconbx">
                	<span class="nativeapp"></span>
                </div>
            </div>
          </div>
            <div class="basketdetails">
              <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">Process re-engineering & reduction</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-4"><span class="chainbdr_lt"></span></div>
        <div class="col-sm-4"><span class="chainbdr_lt"></span><span class="chainbdr_rt"></span>
          <div class="basketinfobox uiuxfeatures">
            <div data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">
            <div class="basketiconbx">
            <div class="ball-scale-ripple-multiple"><div></div><div></div><div></div></div>
                <div class="shiconbx">
                	<span class="codebase"></span>
                </div>
            </div>
              </div>
            <div class="basketdetails">
              <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">UX analysis & audit</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>
      </div>
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-4"><span class="chainbdr_rt"></span><span class="chainbdr_lt"></span>
          <div class="basketinfobox uiuxfeatures">
            <div data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">
            <div class="basketiconbx">
            	<div class="ball-scale-ripple-multiple"><div></div><div></div><div></div></div>
                <div class="shiconbx">
                	<span class="nativewidgets"></span>
                </div>
            </div>
            </div>
            <div class="basketdetails">
              <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">Competitor analysis</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><span class="chainbdr_lt"></span>
          <div class="basketinfobox uiuxfeatures">
          <div data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">
            <div class="basketiconbx">
            	<div class="ball-scale-ripple-multiple"><div></div><div></div><div></div></div>
                <div class="shiconbx">
                	<span class="liveupdates"></span>
                </div>
            </div>
          </div>
            <div class="basketdetails">
              <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">User analysis & persona creation</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-4"><span class="chainbdr_lt"></span></div>
        <div class="col-sm-4"><span class="chainbdr_lt"></span><span class="chainbdr_rt"></span>
          <div class="basketinfobox uiuxfeatures">
            <div data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">
            <div class="basketiconbx">
            	<div class="ball-scale-ripple-multiple"><div></div><div></div><div></div></div>
                <div class="shiconbx">
                	<span class="interface"></span>
                </div>
            </div>
            </div>
            <div class="basketdetails">
              <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">User Accessibility</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>
      </div>
      <div class="row equalHMWrap eqWrap clearfix">
            <div class="col-sm-4"><span class="chainbdr_rt"></span><span class="chainbdr_lt"></span>
              <div class="basketinfobox uiuxfeatures">
              <div data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                <div class="basketiconbx">
                    <div class="ball-scale-ripple-multiple"><div></div><div></div><div></div></div>
                    <div class="shiconbx">
                        <span class="hotreloading"></span>
                    </div>
                </div>
              </div>
                <div class="basketdetails">
                  <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">User Information architecture</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4"><span class="chainbdr_lt"></span>
              <div class="basketinfobox uiuxfeatures">
                <div data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                <div class="basketiconbx">
                    <div class="ball-scale-ripple-multiple"><div></div><div></div><div></div></div>
                    <div class="shiconbx">
                        <span class="applayouts"></span>
                    </div>
                </div>
                </div>
                <div class="basketdetails">
                  <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Design Analysis, testing & iteration</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row equalHMWrap eqWrap clearfix">
                <div class="col-sm-4"><span class="chainbdr_lt"></span></div>
                <div class="col-sm-4"><span class="chainbdr_lt"></span><span class="chainbdr_rt"></span>
                  <div class="basketinfobox uiuxfeatures">
                    <div data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                    <div class="basketiconbx">
                        <div class="ball-scale-ripple-multiple"><div></div><div></div><div></div></div>
                        <div class="shiconbx">
                            <span class="appwireframing"></span>
                        </div>
                    </div>
                    </div>
                    <div class="basketdetails">
                      <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">App Wireframing</h4>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4"></div>
              </div>
    </div>
  </div>
  <!--UIUX Features Section End Here--> 

  <!--UI Design Methodologies Start Here-->
    <div class="ui_design_methodologies">
      <h2 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">UI Methodologies</h2>
      <div class="smtextuiux" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">The UI/UX development methodologies we follow, help your application to create the impeccable visual outlook, which creates easy and near-frictionless experiences.</div>
        <div class="ui_design_methodologies_imgbx" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0"><img src="<?php echo base_url('assets/images/ui_design_methodologies.png'); ?>" alt="ui_design_methodologies" /></div>
		
      <div class="bluetheamebase"></div>
    </div>
  <!--UI Design Methodologies End Here-->

  <!--UIUX Design service Start-->
    <div class="uiuxdesignservice">
      <div class="uiuxdesignserviceCon">
        <div class="row clearfix">
          <div class="col-sm-4" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
            <div class="uiuxfeaturesmainbox front_end_programming">
              <div class="uiuxfeaturesbx clearfix">
                <div class="uiuxficon"><span class="user_interface"></span></div>
                <div class="uiuxfeaturesnm">User Interface (UI) design</div>
              </div>
              <span class="btmlineCl"></span>
              </div>
          </div>
          <div class="col-sm-4" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
              <div class="uiuxfeaturesmainbox appgrp">
            <div class="uiuxfeaturesbx app_graphic clearfix">
              <div class="uiuxficon"><span class="graphic_development"></span></div>
              <div class="uiuxfeaturesnm">App Graphic development</div>
            </div>
            <span class="btmlineCl"></span>
            </div>
        </div>
        <div class="col-sm-4" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
            <div class="uiuxfeaturesmainbox micro_interactions">
          <div class="uiuxfeaturesbx micro clearfix">
            <div class="uiuxficon"><span class="micro_interactions"></span></div>
            <div class="uiuxfeaturesnm">Micro-interactions</div>
          </div>
          <span class="btmlineCl"></span>
          </div>
      </div>
      <div class="col-sm-4" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
          <div class="uiuxfeaturesmainbox analytics_design">
        <div class="uiuxfeaturesbx analytics clearfix">
          <div class="uiuxficon"><span class="analytics_design"></span></div>
          <div class="uiuxfeaturesnm">BI/Analytics design</div>
        </div>
        <span class="btmlineCl"></span>
        </div>
    </div>
    <div class="col-sm-4" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
        <div class="uiuxfeaturesmainbox app_dashboard_design">
      <div class="uiuxfeaturesbx dashboard clearfix">
        <div class="uiuxficon"><span class="dashboard_design"></span></div>
        <div class="uiuxfeaturesnm"> Dashboard </div>
      </div>
      <span class="btmlineCl"></span>
      </div>
  </div>
  <div class="col-sm-4" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
      <div class="uiuxfeaturesmainbox app_brand_integration">
    <div class="uiuxfeaturesbx appbrand clearfix">
      <div class="uiuxficon"><span class="appbrand"></span></div>
      <div class="uiuxfeaturesnm"> Brand integration</div>
    </div>
    <span class="btmlineCl"></span>
    </div>
</div>
<div class="col-sm-4" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
    <div class="uiuxfeaturesmainbox app_prototyping">
  <div class="uiuxfeaturesbx appprototyping clearfix">
    <div class="uiuxficon"><span class="app_prototyping"></span></div>
    <div class="uiuxfeaturesnm"> Prototyping</div>
  </div>
  <span class="btmlineCl"></span>
  </div>
</div>
<div class="col-sm-4" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
    <div class="uiuxfeaturesmainbox front_end_programming">
  <div class="uiuxfeaturesbx frontend clearfix">
    <div class="uiuxficon"><span class="front_end_programming"></span></div>
    <div class="uiuxfeaturesnm">Front-end programming</div>
  </div>
  <span class="btmlineCl"></span>
  </div>
</div>
<div class="col-sm-4"  data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-offset="0">
    <div class="uiuxfeaturesmainbox multi_channel_integration">
  <div class="uiuxfeaturesbx multichannel clearfix">
    <div class="uiuxficon"><span class="multi_channel_integration"></span></div>
    <div class="uiuxfeaturesnm">Multi-channel integration</div>
  </div>
  <span class="btmlineCl"></span>
  </div>
</div>


        </div>
      </div>
    </div>
  <!--UIUX Design service End-->
