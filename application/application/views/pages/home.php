
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
$server=$_SERVER['HTTP_HOST'];
?>
    <div id="mainfullpage">
    <h2 class="topmostkeyword">Top Mobile Application Development Company In USA, UAE, Canada & India</h2>
      <!--Home Page Content Start Here-->

      <!--Home Pg First Slide Section Start Here-->
      <section class="section hpgbanbg">
        <div class="sparksimaginationwrap">
          <div class="sparksimagination">
            <h1>Driven <i>26M+</i> downloads  <span>& still counting...</span></h1>
            <div class="letstogetherrow">
              <div class="letstxt">Let's grow together</div>
              <div class="letsline"></div>
            </div>
            <div class="letsemailtalkrw">
              <div class="row clearfix">
                <div class="col-sm-8 col-md-7">
                  <input class="form-control" type="text" placeholder="Enter your email address" name="subscriberemail" id="subscriberemail" />
                   <span id="subscriberemail-error"></span>
                  <span id="subscriberemail-success"></span>
                </div>
                <div class="col-sm-4 col-md-3">
                  <div class="letstalkbtn">
                    <button type="button" id="subscriberBtn">Let’s talk</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="maskingbannerbox">
            <div class="maskingimg3"><img src="<?php echo base_url(); ?>assets/images/techugo-mask-img2.jpg" width="210" height="417" alt="Mobile App Development" title="Techugo Banner" /></div>
            <div class="maskingimg2"><img src="<?php echo base_url(); ?>assets/images/techugo-mask-img1.jpg" width="220" height="658" alt="Mobile App Development" title="Techugo Banner" /></div>
            <div class="maskingimg1"><img src="<?php echo base_url(); ?>assets/images/techugo-mask-img.jpg" width="230" height="704" alt="Mobile App Development" title="Techugo Banner" /></div>
          </div>
        </div>
      </section>
      <!--Home Pg First Slide Section End Here-->

      <!--We Stole Some Lime Light Start Here-->
      <section class="section westolelime normalheight">
        <div class="westoleCon">
          <h6 class="hideheading">&nbsp;</h6>
          <div class="row clearfix">
            <div class="col-sm-9">
              <div class="stoleheading">Our Recognition <span>Reflects passion & commitment <i></i></span></div>
              <div class="simpletxt">Honored but never satisfied until we've gone beyond expectations.</div>
            </div>
            <div class="col-sm-3">
              <div class="numpos1">
                <img src="<?php echo base_url(); ?>assets/images/appinfo/number-one-position.png" width="260" height="219" alt="Techugo Number One Positions" title="Techugo Number One Position" />
              </div>
            </div>
          </div>
          <div class="companyreviews">
            <div id="posreviews" class="owl-carousel comreviews owl-theme">
              <div class="item clearfix">
                <div class="comreviewcardsbox">
                  <div class="comreviewlogorow">
                    <div class="row clearfix">
                      <div class="col-xs-8">
                        <div class="youtstorylogo"></div>
                      </div>
                      <div class="col-xs-4"></div>
                    </div>
                  </div>
                  <div class="comrevsmtxt">“Glad to be recognized as the innovative startup of the year by YourStory- India's biggest and definitive platform for startups and entrepreneurs related stories, resources, research reports and analysis.”</div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="comreviewcardsbox">
                  <div class="comreviewlogorow">
                    <div class="row clearfix">
                      <div class="col-xs-8">
                        <div class="clutch"></div>
                      </div>
                      <div class="col-xs-4">
                        <div class="onepos">
                          <img src="<?php echo base_url(); ?>assets/images/num_pos_one.png" width="60" height="60" alt="Techugo number one position"  title="Techugo number one" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="comrevsmtxt">“Ranked as Top development company in UAE and India by Global Search engine, through Clutch- a renowned data-driven field guide for B2B buying and hiring decisions for leading IT, marketing, and business services companies.”</div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="comreviewcardsbox">
                  <div class="comreviewlogorow">
                    <div class="row lineHH clearfix">
                      <div class="col-xs-8">
                        <div class="goodfirms"></div>
                      </div>
                      <div class="col-xs-4">&nbsp;</div>
                    </div>
                  </div>
                  <div class="comrevsmtxt">“Recognized as one of the Top 10 developers in USA & India by Global Ranking Platform, GoodFirms- World's Best IT Companies & Software, trusted by bigger brands & B2B research platforms.”</div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="comreviewcardsbox">
                  <div class="comreviewlogorow">
                    <div class="row lineHH clearfix">
                      <div class="col-xs-8">
                        <div class="appfutura"></div>
                      </div>
                      <div class="col-xs-4">&nbsp;</div>
                    </div>
                  </div>
                  <div class="comrevsmtxt">“Earned the title of Top mobile app development company by worldwide app review community- AppFutura, where accessing the best mobile app developers, software development companies and digital marketing agencies with verified reviews is possible.”</div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="comreviewcardsbox">
                  <div class="comreviewlogorow">
                    <div class="row lineHH clearfix">
                      <div class="col-xs-8">
                        <div class="extract"></div>
                      </div>
                      <div class="col-xs-4">&nbsp;</div>
                    </div>
                  </div>
                  <div class="comrevsmtxt">“Ranked #1 mobile app development company by a leading Review & Search Platform Extract.”</div>
                </div>
              </div>

              <div class="item clearfix">
              <div class="comreviewcardsbox">
                <div class="comreviewlogorow">
                  <div class="row lineHH overfl clearfix">
                    <div class="col-xs-8">
                      <a href="https://develop4u.co/company/techugo-inc" target="_blank"><div class="develop4u"></div> </a>
                    </div>
                    <div class="col-xs-4">&nbsp;</div>
                  </div>
                </div>
                <div class="comrevsmtxt">“Develop4u is a full-fledged review rating platform, helping users to find out best and trusted mobile app development company across the globe.”</div>
              </div>
              </div>

              <div class="item clearfix">
              <div class="comreviewcardsbox">
                <div class="comreviewlogorow">
                  <div class="row lineHH overfl clearfix">
                    <div class="col-xs-8">
                      <div class="topdevelopers"></div>
                    </div>
                    <div class="col-xs-4">&nbsp;</div>
                  </div>
                </div>
                <div class="comrevsmtxt">“TopDevelopers.co is a dedicated directory of IT service providers, and is a trusted B2B research platform with verified IT companies profiles”</div>
              </div>
              </div>

              <div class="item clearfix">
              <div class="comreviewcardsbox">
                <div class="comreviewlogorow">
                  <div class="row lineHH overfl clearfix">
                    <div class="col-xs-8">
                      <a href="https://www.topdevelopers.biz/topdeveloper/top-mobile-app-development-companies-2/" target="_blank"><div class="topdevelopers_biz"></div></a>
                    </div>
                    <div class="col-xs-4">&nbsp;</div>
                  </div>
                </div>
                <div class="comrevsmtxt">“Ranked as a top app development company in UAE by Topdevelopers.biz- a platform where Web and Mobile app development Companies get an equal chance to do global profiling for their IT business and increase their chances of getting hired.”</div>
              </div>
              </div>

            </div>
          </div>

        </div>
      </section>
      <!--We Stole Some Lime Light End Here-->

      <!--Clients Brands Section Start Here-->
      <section class="section clientsbrandsSection godfreyappview normalheight">
       <h6 class="hideheading">&nbsp;</h6>
        <div class="slide slide-one">
          <div class="clientsbrandsConbox">
            <div class="row clearfix">
              <div class="col-md-6 fulwdlength">
                <div class="clientsbrandsleftCon">
                  <div class="brandsheading">Exceptional Results <span>for great clients<i></i></span></div>
                  <div class="simpletxt">Partnered with great brands and entrepreneurs all over the world; Fortune
                  <span>500,</span> Fortune <span>200,</span> Global <span>2000</span> companies and world’s largest
                    political party of current Indian Prime Minister- Mr. Narendra Modi. </div>
                  <div class="gettouchnwbtnrw">
                    <a class="touchbtns butteff blubtn fp-controlArrow fp-next" href="javascript:void(0);">See more
                      <span class="arrow"></span></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
              <div class="techugologoAnim">
              <img src="<?php echo base_url(); ?>assets/images/techugo_anim_style.png"
                      alt="Techugo Airtel Logo" width="600" height="437" title="Techugo Animation Design" />
                   </div>
            </div>
          </div>
          <div class="clientsbrandingscroll">
              <div id="clientsbrands" class="owl-carousel clientsbrands owl-theme">
                <div class="item clearfix">
                  <div class="clientsbrandingbox"><img src="<?php echo base_url(); ?>assets/images/brands/techugo-airtel-logo.png"
                      alt="Techugo Airtel Logo" width="144" height="80" title="Airtel" /></div>
                </div>
                <div class="item clearfix">
                  <div class="clientsbrandingbox"><img src="<?php echo base_url(); ?>assets/images/brands/techugo-dhanuka-logo.png"
                      alt="Techugo Dhanuka Logo" width="121" height="80"  title="Dhanuka" /></div>
                </div>
                <div class="item clearfix">
                  <div class="clientsbrandingbox"><img src="<?php echo base_url(); ?>assets/images/brands/techugo-godfrey-phillips.png"
                      alt="Techugo Godfrey Phillips Logo" width="96" height="80" title="Techugo Godfrey Phillips" /></div>
                </div>
                <div class="item clearfix">
                  <div class="clientsbrandingbox"><img src="<?php echo base_url(); ?>assets/images/brands/techugo-indofil-logo.png"
                      alt="Techugo Indofil Logo" width="150" height="80" title="Indofil" /></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slide slide-two">
          <div class="clientsbrandsConbox flwd50">
            <div class="clientsbrandsleftCon">
              <div class="gettouchnwbtnrw top0">
                <a class="touchbtns butteff blubtn fp-controlArrow fp-prev" href="javascript:void(0);"><span
                    class="arrow"></span> </a>
              </div>
              <div class="brandsinfodetails" id="godfreyphilps" style="display: block;">
                <div class="brandsheading">Godfrey Philips <em></em></div>
                <div class="brandslogoimgrow">
                  <img src="<?php echo base_url(); ?>assets/images/brands/techugo-godfrey-phillips.png" width="100" height="83" alt="Godfrey Phillips" title="Godfrey Phillips App" />
                </div>
                <div class="simpletxt">Designed & developed an app for a Fortune 500 company, Godfrey Phillips, serving 8+Lac retailers, to boost work productivity on the enterprise level.</div>
                <div class="gettouchnwbtnrw">
                  <a class="touchbtns butteff blubtn" href="javascript:void(0);">View case study </a>
                </div>
              </div>
              <div class="brandsinfodetails" id="techugoAirtel">
                <div class="brandsheading">Airtel <em></em></div>
                <div class="brandslogoimgrow">
                  <img src="<?php echo base_url(); ?>assets/images/brands/techugo-airtel-logo.png" width="180" height="100" alt="Airtel"  title="Airtel App" />
                </div>
                <div class="simpletxt">Crafted an app solution for the world’s largest telecom industry, and a Fortune India 500, Global 2,000 Company Bharti Airtel, serving 303.08 M users.</div>
                <div class="gettouchnwbtnrw">
                  <a class="touchbtns butteff blubtn" href="javascript:void(0);">View case study </a>
                </div>
              </div>
              <div class="brandsinfodetails" id="dhankaconview">
                <div class="brandsheading">Dhanuka <em></em></div>
                <div class="brandslogoimgrow">
                  <img src="<?php echo base_url(); ?>assets/images/brands/techugo-dhanuka-logo.png" width="180" height="118" alt="Dhanuka App" title="Dhanuka" />
                </div>
                <div class="simpletxt">Built an app solution for Fortune 200-Dhanuka, serving 10 million Indian farmers.</div>
                <div class="gettouchnwbtnrw">
                  <a class="touchbtns butteff blubtn" href="javascript:void(0);">View case study </a>
                </div>
              </div>
              <div class="brandsinfodetails" id="indofilconview">
                <div class="brandsheading">Indofil <em></em></div>
                <div class="brandslogoimgrow">
                  <img src="<?php echo base_url(); ?>assets/images/brands/techugo-indofil-logo.png" width="180" height="96" alt="Indofil" title="Indofil App" />
                </div>
                <div class="simpletxt">Helped Indofil- A subsidiary venture of Godfrey Phillips- a Fortune 500 Company, enhancing work efficiency via an enterprise app.</div>
                <div class="gettouchnwbtnrw">
                  <a class="touchbtns butteff blubtn" href="javascript:void(0);">View case study </a>
                </div>
              </div>
              <div class="clientsbrandingscroll">
                <div id="clientsbrands1" class="owl-carousel clientslogosl owl-theme">
                  <div class="item clearfix">
                    <div class="clientsbrandingbox airtelview" onclick="tabbrands('techugoAirtel')"><img
                        src="<?php echo base_url(); ?>assets/images/brands/techugo-airtel-logo.png" alt="Techugo Airtel Logo" title="Airtel" /></div>
                  </div>
                  <div class="item clearfix">
                    <div class="clientsbrandingbox dhanukaview" onclick="tabbrands('dhankaconview')"><img src="<?php echo base_url();?>assets/images/brands/techugo-dhanuka-logo.png"
                        alt="Techugo Dhanuka Logo" title="Dhanuka" /></div>
                  </div>
                  <div class="item clearfix">
                    <div class="clientsbrandingbox godfreyviewapp" onclick="tabbrands('godfreyphilps')"><img
                        src="<?php echo base_url(); ?>assets/images/brands/techugo-godfrey-phillips.png" alt="Techugo Godfrey Phillips Logo" title="Godfrey Phillips" />
                    </div>
                  </div>
                  <div class="item clearfix">
                    <div class="clientsbrandingbox indofilviewapp"  onclick="tabbrands('indofilconview')"><img src="<?php echo base_url(); ?>assets/images/brands/techugo-indofil-logo.png"
                        alt="Techugo Indofil Logo" title="Indofil" /></div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="brandsApprightSection">
            <div class="appviewbrands godfreyappview">
              <img src="<?php echo base_url(); ?>assets/images/brands-app-views1.png" width="520" height="794" alt="Godfrey Philips" title="Godfrey Philips App" />
            </div>
            <div class="appviewbrands airtelappview">
              <img src="<?php echo base_url(); ?>assets/images/brands-app-views2.png" width="520" height="794" alt="Airtel" title="Airtel App" />
            </div>
            <div class="appviewbrands dhanukaview">
              <img src="<?php echo base_url(); ?>assets/images/brands-app-views3.png" width="520" height="794" alt="Dhanuka" title="Dhanuka App" />
            </div>
            <div class="appviewbrands indofil">
              <img src="<?php echo base_url(); ?>assets/images/brands-app-views4.png" width="520" height="794" alt="Indofil" title="Indofil App" />
            </div>
          </div>

        </div>
      </section>
      <!--Clients Brands Section End Here-->

      <!--Building More Than Just Apps Start Here-->
      <section class="section buildingapps normalheight">
       <h6 class="hideheading">&nbsp;</h6>
        <div class="buildingappsCon">
          <div class="row clearfix">
            <div class="col-md-7">
              <div class="buildleftCon">
                <h2>We're <span>Qualified for success<i></i></span></h2>
                <div class="simpletxt">We turn traffic into clients and clicks into customers. We've crafted <span>475+</span> apps,
                  that have acquired <span>22+</span> million users, some won Bett2020 award, got <span>$1.5 M</span> funding, featured in Daily
                  Star UK & Gulf News, received <span>5K</span> downloads on the second day of launch. So on and so forth... </div>
                <div class="gettouchnwbtnrw viewblock">
                  <a class="touchbtns butteff" href="<?php echo base_url('contact-us.php'); ?>">Get in touch now</a>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="numericrw">
                <ul class="clearfix">
                  <li> <span class="counter">22</span><span class="counter counter-value" data-count="22">0</span> <span class="plusicon">+</span>
                    <div class="numtxt">Nations <span>Served</span></div>
                  </li>
                  <li> <span class="counter">150</span> <span class="counter counter-value" data-count="150">0</span> <span class="plusicon">+</span>
                    <div class="numtxt">Brands <span>assisted</span></div>
                  </li>
                  <li> <span class="plusicon">$</span><span class="counter">64</span> <span class="counter counter-value" data-count="64">0</span> <span class="plusicon">M</span>
                    <span class="plusicon">+</span>
                    <div class="numtxt">Funding <span>Raised</span></div>
                  </li>
                  <li class="text-right"> <span class="counter">157</span> <span class="counter counter-value" data-count="157">0</span> <span class="plusicon">+</span>
                    <div class="numtxt">Coffee drinking <span>Daily</span></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="gettouchnwbtnrw viewhidedesktop">
            <a class="touchbtns butteff" href="<?php echo base_url('contact-us.php'); ?>">Get in touch now</a>
          </div>
        </div>
        <div class="buildappdesignpat"><img src="<?php echo base_url(); ?>assets/images/buildappbg.png" width="1000" height="212" alt="Techugo Theme View" title="Techugo Theme" /></div>
      </section>
      <!--Building More Than Just Apps End Here-->

      <section class="section infoappSection normalheight">
      <h6 class="hideheading">&nbsp;</h6>
        <div class="infoappsConwrap">
          <div class="o-line -v -r"></div>
          <div class="arrowCircle"></div>
          <div class="arrowTopCircle"></div>
           <button class="c-aside-link js-animate" type="button" onclick="window.location.href='<?php echo base_url('contact-us.php'); ?>'">
            <span>Start Your Projects</span>
          </button>
            <header class="c-carousel-header-wrap" data-module="CarouselHeader">
              <div class="c-carousel-header js-carouselheader">
                <div class="c-carousel-header_slide js-carouselheader-slide">
                  <div class="c-carousel-header_background-wrap o-background js-animate" data-speed="-1"
                    data-position="top" data-target=".js-carouselheader">
                    <div class="c-carousel-header_background o-background"
                      style="background-image: url('<?php echo base_url(); ?>assets/images/appinfo/sterkla_appsc.jpg');">
                    </div>
                    <div class="c-carousel-header_container -overflow o-container">
                      <div class="c-carousel-header_background-small o-background"
                        style="background-image: url('<?php echo base_url(); ?>assets/images/appinfo/sterkla_appsc.jpg');">
                      </div>
                    </div>
                  </div>
                  <div class="c-carousel-header_container -opacity o-container">
                    <div class="c-carousel-header_layout o-layout -full -relative">
                      <div class="c-carousel-header_layout_item o-layout_item u-1/2@from-medium"> </div>
                      <div class="c-carousel-header_layout_item c-carousel-header_item o-layout_item u-1/2@from-medium">
                        <blockquote class="c-carousel-header_quote">
                          <div class="c-carousel-header_quote_main">
                            <div class="c-carousel-header_quote_text">
                              <div class="applogoviews">
                                <img src="<?php echo base_url(); ?>assets/images/appinfo/sterkla_logo.png" width="783" height="129" alt="Sterkla logo" title="Sterkla logo" />
                              </div>
                            </div>
                            <p class="c-carousel-header_quote_text">
                              "Received 3K + downloads in just a week of app launch; Sterkla is a spell-bounding coaching app for Global market.”
                            </p>
                          </div>
                          <div class="c-carousel-header_quote_author">
                            <a href="javascript:void(0)" class="sterkla">View case study <span><i></i></span></a>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="c-carousel-header_slide js-carouselheader-slide">
                  <div class="c-carousel-header_background-wrap o-background js-animate" data-speed="-1"
                    data-position="top" data-target=".js-carouselheader">
                    <div class="c-carousel-header_background o-background"
                      style="background-image: url('<?php echo base_url(); ?>assets/images/appinfo/blixerappscreen.jpg');">
                    </div>
                    <div class="c-carousel-header_container -overflow o-container">
                      <div class="c-carousel-header_background-small o-background"
                        style="background-image: url('<?php echo base_url(); ?>assets/images/appinfo/blixerappscreen.jpg');">
                      </div>
                    </div>
                  </div>
                  <div class="c-carousel-header_container -opacity o-container">
                    <div class="c-carousel-header_layout o-layout -full -relative">
                      <div class="c-carousel-header_layout_item o-layout_item u-1/2@from-medium">

                      </div>
                      <div class="c-carousel-header_layout_item c-carousel-header_item o-layout_item u-1/2@from-medium">
                        <blockquote class="c-carousel-header_quote">
                          <div class="c-carousel-header_quote_main">
                            <div class="c-carousel-header_quote_text">
                              <div class="applogoviews">
                                <img src="<?php echo base_url(); ?>assets/images/appinfo/blixerlogo.png" width="783" height="129" alt="Blixer logo" title="Blixer App" />
                              </div>
                            </div>
                            <p class="c-carousel-header_quote_text">
                              “Daily Star UK featured Blixr- a dating app for UK & India market.”
                            </p>
                          </div>
                          <div class="c-carousel-header_quote_author">
                            <a href="javascript:void(0)" class="blixer">View case study <span><i></i></span></a>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="c-carousel-header_slide js-carouselheader-slide">
                  <div class="c-carousel-header_background-wrap o-background js-animate" data-speed="-1"
                    data-position="top" data-target=".js-carouselheader">
                    <div class="c-carousel-header_background o-background"
                      style="background-image: url('<?php echo base_url(); ?>assets/images/appinfo/bjpappscreen.jpg');">
                    </div>
                    <div class="c-carousel-header_container -overflow o-container">
                      <div class="c-carousel-header_background-small o-background"
                        style="background-image: url('<?php echo base_url(); ?>assets/images/appinfo/bjpappscreen.jpg');">
                      </div>
                    </div>
                  </div>
                  <div class="c-carousel-header_container -opacity o-container">
                    <div class="c-carousel-header_layout o-layout -full -relative">
                      <div class="c-carousel-header_layout_item o-layout_item u-1/2@from-medium">

                      </div>
                      <div class="c-carousel-header_layout_item c-carousel-header_item o-layout_item u-1/2@from-medium">
                        <blockquote class="c-carousel-header_quote">
                          <div class="c-carousel-header_quote_main">
                            <div class="c-carousel-header_quote_text">
                              <div class="applogoviews">
                                <img src="<?php echo base_url(); ?>assets/images/appinfo/bjp_logo.png" width="783" height="129" alt="BJP logo" title="BJP App" />
                              </div>
                            </div>
                            <p class="c-carousel-header_quote_text">
                              “An app designed & developed for the world’s largest political party- BJP of current Indian Prime Minister- Mr. Narendra Modi”
                            </p>
                          </div>
                          <div class="c-carousel-header_quote_author">
                            <a href="javascript:void(0)" class="bjp">View case study <span><i></i></span></a>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="c-carousel-header_slide js-carouselheader-slide">
                  <div class="c-carousel-header_background-wrap o-background js-animate" data-speed="-1"
                    data-position="top" data-target=".js-carouselheader">
                    <div class="c-carousel-header_background o-background"
                      style="background-image: url('<?php echo base_url(); ?>assets/images/appinfo/dhanuka_appscreen.jpg');">
                    </div>
                    <div class="c-carousel-header_container -overflow o-container">
                      <div class="c-carousel-header_background-small o-background"
                        style="background-image: url('<?php echo base_url(); ?>assets/images/appinfo/dhanuka_appscreen.jpg');">
                      </div>
                    </div>
                  </div>
                  <div class="c-carousel-header_container -opacity o-container">
                    <div class="c-carousel-header_layout o-layout -full -relative">
                      <div class="c-carousel-header_layout_item o-layout_item u-1/2@from-medium">

                      </div>
                      <div class="c-carousel-header_layout_item c-carousel-header_item o-layout_item u-1/2@from-medium">
                        <blockquote class="c-carousel-header_quote">
                          <div class="c-carousel-header_quote_main">
                            <div class="c-carousel-header_quote_text">
                              <div class="applogoviews">
                                <img src="<?php echo base_url();?>assets/images/appinfo/dhanuka_logo.png" width="783" height="129" alt="Dhanuka logo" title="Dhanuka App" />
                              </div>
                            </div>
                            <p class="c-carousel-header_quote_text">
                              “10 million Indian farmers benefitting for an app built for Fortune 200 company Dhanuka.”
                            </p>
                          </div>
                          <div class="c-carousel-header_quote_author">
                            <a href="javascript:void(0)" class="dhanuka">View case study <span><i></i></span></a>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="c-carousel-header_slide js-carouselheader-slide">
                  <div class="c-carousel-header_background-wrap o-background js-animate" data-speed="-1"
                    data-position="top" data-target=".js-carouselheader">
                    <div class="c-carousel-header_background o-background"
                      style="background-image: url('<?php echo base_url(); ?>assets/images/appinfo/visionrpro_appsc.jpg');">
                    </div>
                    <div class="c-carousel-header_container -overflow o-container">
                      <div class="c-carousel-header_background-small o-background"
                        style="background-image: url('<?php echo base_url(); ?>assets/images/appinfo/visionrpro_appsc.jpg');">
                      </div>
                    </div>
                  </div>
                  <div class="c-carousel-header_container -opacity o-container">
                    <div class="c-carousel-header_layout o-layout -full -relative">
                      <div class="c-carousel-header_layout_item o-layout_item u-1/2@from-medium">

                      </div>
                      <div class="c-carousel-header_layout_item c-carousel-header_item o-layout_item u-1/2@from-medium">
                        <blockquote class="c-carousel-header_quote">
                          <div class="c-carousel-header_quote_main">
                            <div class="c-carousel-header_quote_text">
                              <div class="applogoviews">
                                <img src="<?php echo base_url(); ?>assets/images/appinfo/visionpro_logo.png" width="783" height="129" alt="VisionR Pro logo"  title="VisionR Pro logo" />
                              </div>
                            </div>
                            <p class="c-carousel-header_quote_text">
                              “70 000 € raised by Vision R Pro- app based on Google Glass for Global Market.”
                            </p>
                          </div>
                          <div class="c-carousel-header_quote_author">
                            <a href="javascript:void(0)" class="visionrpro">View case study <span><i></i></span></a>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="c-carousel-header-arrow -prev js-carouselheader-prev u-anim -delay-2" type="button">
                <span class="arrow prev"></span>
              </button>
              <button class="c-carousel-header-arrow -next js-carouselheader-next u-anim -delay-3" type="button">
                <span class="arrow"></span>
              </button>
            </header>
        </div>
      </section>

      <!--Digital Services Expertise Start Here-->
      <section class="section digitalserviceSec normalheight">
      <h6 class="hideheading">&nbsp;</h6>
        <div class="digitalServices">
          <div class="buildleftCon">
            <div class="digitalheading">Experience<span>Bleeding edge technology<i></i></span></div>
            <div class="simpletxt">From colocation to co-creation of your product; transparency, honesty, and real talk
              are part of our DNA. Let us help you increase sales, attract clients & grow successfully.</div>
          </div>
          <div class="digitalserviceslider">
            <div id="digitalservice" class="owl-carousel digitalser owl-theme">
              <div class="item clearfix">
                <a href="https://www.techugo.com/react-native-development">
                <div class="digitalserbox customer_experince">
                  <div class="servicebxheading">React Native <span>Development</span></div>
                  <span class="digitalsertype">R</span>
                </div>
                 </a>
              </div>
              <div class="item clearfix">
              <a href="https://www.techugo.com/iphone-application-development.php">
                <div class="digitalserbox digimar">
                  <div class="servicebxheading"> iOS App <span>Development</span></div>
                  <span class="digitalsertype">I</span>
                </div>
                </a>
              </div>
              <div class="item clearfix">
              <a href="https://www.techugo.com/android-application-development.php">
                <div class="digitalserbox mobappdev">
                  <div class="servicebxheading"> Android App <span>Development</span></div>
                  <span class="digitalsertype">A</span>
                </div>
                </a>
              </div>
              <div class="item clearfix">
              <a href="https://www.techugo.com/blockchain">
                <div class="digitalserbox dataai">
                  <div class="servicebxheading">Blockchain <span>Development</span></div>
                  <span class="digitalsertype">B</span>
                </div>
              </a>
              </div>
              <div class="item clearfix">
              <a href="https://www.techugo.com/artificial-intelliegence">
                <div class="digitalserbox greydigitalbg">
                  <div class="servicebxheading">Artificial <span>Intelligence</span></div>
                  <span class="digitalsertype">A</span>
                </div>
              </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Digital Services Expertise Start Here-->

      <!--Clients Reviews Start Here-->
      <section class="section clientsreviews normalheight">
      <h6 class="hideheading">&nbsp;</h6>
        <div class="clientsreviwssection">
          <div class="row clearfix">
            <div class="col-xs-12 col-sm-7 col-md-8">
              <div class="buildleftCon">
                <div class="digitalheading">80% of our clients<span>Recommend us to others<i></i></span></div>
                <div class="simpletxt">Every code, every image, every product we create is purposefully crafted to
                  inspire and spark results.</div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-4">
              <div class="clientscolumnbr">
                <img src="<?php echo base_url(); ?>assets/images/client_reviews_colun.png" width="260" height="207" alt="Clients Reviews" title="Reviews" />
              </div>
            </div>
          </div>
          <div class="clientsreviewsSlider">
            <div id="clientsreviewslider" class="owl-carousel reviewslider owl-theme">
              <div class="item clearfix">
                <div class="clientreviewconbox sterklaviewtest clearfix">
                  <div class="clientsreviwcon">
                    <div class="revicllogo workleus">
                      <i class="sterkla"></i>
                    </div>
                    <div class="clientsreviewtxt">“Techugo delivered high quality and accountability through effective project management & exceptional communication.”</div>
                    <div class="clientsAuthorrow">
                      <div class="row clearfix">
                        <div class="col-xs-8 col-sm-7">
                          <div class="authornm">Gavin Lund <span>South Africa</span></div>
                        </div>
                        <div class="col-xs-4 col-sm-5">
                          <div class="revicol">
                          <img src="<?php echo base_url(); ?>assets/images/clientrevrt.png" width="90" height="71" alt="clients Views" title="Views" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clientreviewclientsimgbx gavinlund"></div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="clientreviewconbox mycarbsviewbx clearfix">
                  <div class="clientsreviwcon">
                    <div class="revicllogo">
                      <span class="osa"></span>
                    </div>
                    <div class="clientsreviewtxt">“Techugo holds comprehensive range of knowledge, expertise, and services. They are expert in finding a better solution.”</div>
                    <div class="clientsAuthorrow">
                      <div class="row clearfix">
                        <div class="col-xs-8 col-sm-7">
                          <div class="authornm">Osama Asaad <span>Canada</span></div>
                        </div>
                        <div class="col-xs-4 col-sm-5">
                          <div class="revicol">
                             <img src="<?php echo base_url(); ?>assets/images/clientrevrt.png" width="90" height="71" alt="clients Views" title="Views" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clientreviewclientsimgbx osama_asaad"></div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="clientreviewconbox purevibestheme clearfix">
                  <div class="clientsreviwcon">
                  <div class="revicllogo">
                  <span class="purevibes"></span>
                    </div>
                    <div class="clientsreviewtxt">“The staff that worked on my project, went above and beyond, putting their heart and soul into their work.”</div>
                    <div class="clientsAuthorrow">
                      <div class="row clearfix">
                        <div class="col-xs-8 col-sm-7">
                          <div class="authornm">Mikhail Davis <span>Colombia</span></div>
                        </div>
                        <div class="col-xs-4 col-sm-5">
                          <div class="revicol">
                            <img src="<?php echo base_url(); ?>assets/images/clientrevrt.png" width="90" height="71" alt="clients Views" title="Views" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clientreviewclientsimgbx mikhil"></div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="clientreviewconbox alabraviewtest clearfix">
                  <div class="clientsreviwcon">
                    <div class="revicllogo">
                    <span class="waki"></span>
                    </div>
                    <div class="clientsreviewtxt">“Techugo’s  collaborative approach and sense of responsibility were notable strengths, to fill my app with advanced technologies.”</div>
                    <div class="clientsAuthorrow">
                      <div class="row clearfix">
                        <div class="col-xs-8 col-sm-7">
                          <div class="authornm">Abdulmohsen Alabra <span>Saudi Arabia</span></div>
                        </div>
                        <div class="col-xs-4 col-sm-5">
                          <div class="revicol">
                            <img src="<?php echo base_url(); ?>assets/images/clientrevrt.png" width="90" height="71" alt="clients Views" title="Views" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clientreviewclientsimgbx abdulmohsen"></div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="clientreviewconbox alicahardin clearfix">
                  <div class="clientsreviwcon">
                    <div class="revicllogo alicahardin">
                      <span class="alicahardin"></span>
                    </div>
                    <div class="clientsreviewtxt">“Techugo team is well-versed and experienced in various areas, and they managed and executed the project flexibly and reliably.”</div>
                    <div class="clientsAuthorrow">
                      <div class="row clearfix">
                        <div class="col-xs-8 col-sm-7">
                          <div class="authornm">Alicia Hardin <span>USA</span></div>
                        </div>
                        <div class="col-xs-4 col-sm-5">
                          <div class="revicol">
                            <img src="<?php echo base_url(); ?>assets/images/clientrevrt.png" width="90" height="71" alt="clients Views" title="Views" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clientreviewclientsimgbx alicia-hardin"></div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="clientreviewconbox asimit clearfix">
                  <div class="clientsreviwcon">
                    <div class="revicllogo">
                    <span class="asmi"></span>
                    </div>
                    <div class="clientsreviewtxt">“If I didn’t understand something, they were always open to communicate with me. They delivered on time and stayed on the budget.”</div>
                    <div class="clientsAuthorrow">
                      <div class="row clearfix">
                        <div class="col-xs-8 col-sm-7">
                          <div class="authornm">Ashish Mittal <span>India</span></div>
                        </div>
                        <div class="col-xs-4 col-sm-5">
                          <div class="revicol">
                            <img src="<?php echo base_url(); ?>assets/images/clientrevrt.png" width="90" height="71" alt="clients Views" title="view" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clientreviewclientsimgbx ashis_mittal"></div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="clientreviewconbox myfollowapptheame clearfix">
                  <div class="clientsreviwcon">
                    <div class="revicllogo workleus">
                    <i class="myfollowup"></i>
                    </div>
                    <div class="clientsreviewtxt">“I just had an idea and they gave their suggestions and feedback. The value they gave to the project helps me to sell the app now.”</div>
                    <div class="clientsAuthorrow">
                      <div class="row clearfix">
                        <div class="col-xs-8 col-sm-7">
                          <div class="authornm">Sanjeev Bhatia <span>India</span></div>
                        </div>
                        <div class="col-xs-4 col-sm-5">
                          <div class="revicol">
                          <img src="<?php echo base_url(); ?>assets/images/clientrevrt.png" width="90" height="71" alt="clients Views" title="Views" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clientreviewclientsimgbx sanjeev_bhatia"></div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="clientreviewconbox pendingapp clearfix">
                  <div class="clientsreviwcon">
                    <div class="revicllogo">
                    <span class="pending"></span>
                    </div>
                    <div class="clientsreviewtxt">“The Techugo team was very communicative throughout the process and was quick to answer to any of my concerns with possible solutions.”</div>
                    <div class="clientsAuthorrow">
                      <div class="row clearfix">
                        <div class="col-xs-8 col-sm-7">
                          <div class="authornm">Allison Fulbright <span>USA</span></div>
                        </div>
                        <div class="col-xs-4 col-sm-5">
                          <div class="revicol">
                          <img src="<?php echo base_url(); ?>assets/images/clientrevrt.png" width="90" height="71" alt="clients Views" title="views" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clientreviewclientsimgbx allison_fulbright"></div>
                </div>
              </div>
              <div class="item clearfix">
                <div class="clientreviewconbox workleusbox clearfix">
                  <div class="clientsreviwcon">
                    <div class="revicllogo workleus">
                      <i class="worqleus"></i>
                    </div>
                    <div class="clientsreviewtxt">“They're a client-oriented, dedicated, and accommodating group. I’m impressed with their customer support and open communication.”</div>
                    <div class="clientsAuthorrow">
                      <div class="row clearfix">
                        <div class="col-xs-8 col-sm-7">
                          <div class="authornm">Ahmad Alshibli <span>Canada</span></div>
                        </div>
                        <div class="col-xs-4 col-sm-5">
                          <div class="revicol">
                          <img src="<?php echo base_url(); ?>assets/images/clientrevrt.png" width="90" height="71" alt="clients Views" title="views" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clientreviewclientsimgbx ahmad_alshibli"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Clients Reviews End Here-->




