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
<div id="fullpage"> 
<!--Sterkla Section Start Here-->
<section class="section slidenumber sterklawrap">
  <div class="wishtreeConbox">
    <div class="row clearfix">
        <div class="col-sm-5 col-md-6">
        <div class="sterklaleftCon fadeInLeftBig animated" data-wow-duration="1000ms" data-wow-delay="200ms">
          <div class="applogorw">
            <div class="sterklalogo"></div>
          </div>
          <div class="appNamerw">
            <div class="showAppnm">STERKLA</div>
          </div>
          <div class="appinfodetailsrow">An app bringing the <strong>WORLD</strong> of coaching <strong>ACCESSIBLE, FLEXIBLE</strong> and <strong>MOBILE</strong> to users.</div>
          <div class="apponeword">S</div> 
          <div class="technology_icon_row">
            <a href="https://apps.apple.com/us/app/id1472511908" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
            <a href="https://play.google.com/store/apps/details?id=com.sterkla.app" target="_blank"> <i class="fa fa-android" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/watch?v=BQBUl5duAMU" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            </div> 
        </div>
        </div>
        <div class="col-sm-7 col-md-6 hideConview">
          <div class="sterklaAppviewbox">
            <div class="sterklaAppscreen1"></div>
            <div class="sterklaAppscreen2"></div>
          </div>
        </div>
    </div>
  </div>
</section>

<!--Sterkla Section End Here-->

<!--Browzly Section Start Here-->
<!-- <section class="section slidenumber browzlywrap">
  <div class="wishtreeConbox">
    <div class="row clearfix">
        <div class="col-sm-5 col-md-6">
        <div class="browzlyleftCon">
          <div class="applogorw">
            <div class="browzlylogo"></div>
          </div>
          <div class="appNamerw">
            <div class="showAppnm">Browzly</div>
          </div>
          <div class="appinfodetailsrow">A <strong>UNIQUE</strong> app concept helping the schools to increase reading network & transform into more <strong>SOCIAL, ACCESSIBLE AND MEASURABLE.</strong></div>
          <div class="apponeword">B</div> 
          <div class="technology_icon_row">
          <a href="https://itunes.apple.com/in/app/browzly/id1226401549?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
          <a href="https://browzly.com/" target="_blank"> <i class="web"></i></a>
          </div> 
        </div>
        </div>
        <div class="col-sm-7 col-md-6 hideConview">
          <div class="browzlyAppviewbox">
            <div class="browzlyAppscreen1"></div>
            <div class="browzlyAppscreen2"></div>
          </div>
        </div>
    </div>
  </div>
</section> -->

<!--Browzly Section End Here-->

<!--Bumboo/DILOONI Taxi Section Start Here-->
<section class="section slidenumber bumbootaxi">
    <div class="wishtreeConbox">
        <div class="row clearfix">
            <div class="col-sm-5 col-md-6">
            <div class="bumbooleftCon">
              <div class="applogorw">
                <div class="bumbootaxi_logo"></div>
              </div>
              <div class="appNamerw">
                <div class="showAppnm">DILOONI</div>
              </div>
              <div class="appinfodetailsrow">A <strong>FREE DRUZE DATING APP </strong>, connecting you with your soul mate with just a click on the Smartphone.</div>
              <div class="apponeword">D</div> 
              <div class="technology_icon_row">
              <a href="https://itunes.apple.com/in/app/dilooni/id1343272966?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
              <a href="https://play.google.com/store/apps/details?id=com.dilooni.android" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
              <a href="https://yalladilooni.com/" target="_blank"><i class="web"></i></a>
              </div> 
            </div>
            </div>
            <div class="col-sm-7 col-md-6 hideConview">
              <div class="bumbooAppviewbox">
                  <div class="bumbooApp_screen1"></div>
                  <div class="bumbooApp_screen2"></div>
              </div>
            </div>
        </div>
      </div>
</section>

<!--Bumboo/DILOONI Taxi Section End Here-->

<!--Bono Section Start Here-->

<section class="section slidenumber bonowrap">
    <div class="wishtreeConbox">
    <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
        <div class="bonoleftCon">
          <div class="applogorw">
            <div class="bonologo"></div>
          </div>
          <div class="appNamerw">
            <div class="showAppnm">BONO</div>
          </div>
          <div class="appinfodetailsrow"><strong>WORLD'S 1ST </strong>community-based <strong>CARPOOLING APP </strong>with an aim to save the environment.</div>
          <div class="apponeword">B</div> 
          <div class="technology_icon_row">
          <a href="https://itunes.apple.com/in/app/bono-carpool-bikepool/id1253365104?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
          <a href="https://play.google.com/store/apps/details?id=com.techugo.buno&hl=en" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
          
          </div> 
        </div>
        </div>
        <div class="col-sm-7 col-md-6 hideConview">
          <div class="bonoAppviewbox">
              <div class="bonoAppscreen1"></div>
              <div class="bonoAppscreen2"></div>
          </div>
        </div>
    </div>
  </div>
</section>

<!--Bono Section End Here-->

<!--Waki Section Start Here-->
<section class="section slidenumber wakiwrap">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="wakileftCon">
        <div class="applogorw">
          <div class="wakilogo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">WAKI MARKETPLACE</div>
        </div>
        <div class="appinfodetailsrow">A <strong>REVOLUTIONARY</strong> eCommerce portal bridging the gap between <strong>QUALITY</strong> and <strong>EXCELLENCE</strong> in online services.</div>
        <div class="apponeword">W</div> 
        <!-- <div class="technology_icon_row">
            <i class="fa fa-apple" aria-hidden="true"></i>
            <i class="fa fa-android" aria-hidden="true"></i>
            <i class="web"></i>
        </div>  -->

        <div class="comingsoon">COMING SOON</div>
         </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
        <div class="wakiAppviewbox">
            <div class="wakiAppscreen1"></div>
            <div class="wakiAppscreen2"></div>
        </div>
          <div class="wakiicons hearts"></div>
          <div class="wakiicons location"></div>
          <div class="wakiicons box"></div>
      </div>
  </div>

  <!--Section icons Start Here-->
  <div class="wakiicons stores"></div>
  <!--Section icons End Here-->
</div>
</section>

<!--Waki Section End Here-->

<!--Trailblazer Section Start Here-->

<section class="section slidenumber trailblazerAppSection">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="trailAppleftCon">
        <div class="applogorw">
          <div class="trailApplogo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">Trailblazer</div>
        </div>
        <div class="appinfodetailsrow">A mobile app designed and developed for <strong>Fortune 500</strong> company, offering an interesting platform to manage and view all the sales and achievement targets, within different departments, such as sales, purchase, manufacturing and others. </div>
        <div class="apponeword">T</div> 
        <!-- <div class="technology_icon_row">
            <i class="fa fa-apple" aria-hidden="true"></i>
            <i class="fa fa-android" aria-hidden="true"></i>
        </div> -->
        <div class="comingsoon">ENTERPRISE APPLICATION</div> 
      </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
        <div class="trailAppviewbox">
            <div class="trailAppscreen1"></div>
            <div class="trailAppscreen2"></div>
        </div>
      </div>
  </div>
</div>
</section>

<!--Trailblazer Section End Here-->

<!--Alballam Section Start Here-->

<section class="section slidenumber alballamwrap">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="alballamleftCon">
        <div class="applogorw">
          <div class="alballamlogo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">Group Al-Ballam</div>
        </div>
        <div class="appinfodetailsrow">We designed & developed an app for <strong>Mr. Hasan Al-Ballam-</strong> a known and most popular <strong>Kuwaiti actor.</strong> App comes with a feature of <strong>Chromecast,</strong> letting users to watch TV episodes and movies with the best experience anywhere, anytime.  </div>
        <div class="apponeword">A</div> 
        <div class="technology_icon_row">
       
        </div> 
      </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
        <div class="alballamAppviewbox">
          <div class="alballamCircle1"></div>
          <div class="alballamCircle2"></div>
            <div class="alballamAppscreen"></div>
        </div>
      </div>
  </div>
</div>

</section>
<!--Alballam Section End Here-->

<!--Aj Dahua Section Start Here-->

<section class="section slidenumber ajdahuaAppSection">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="ajdahuaAppleftCon">
        <div class="applogorw">
          <div class="ajApplogo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">Dahua</div>
        </div>
        <div class="appinfodetailsrow">An app portal utilized by <strong>DAHUA</strong> team to offer the extra <strong>GIFTS /REWARDS/CREDITS</strong> to customers on buying from specific vendors. This leads to efficient services and creates a communication passage between DAHUA & their customers.</div>
        <div class="apponeword">D</div> 
        <!-- <div class="technology_icon_row">
            <i class="fa fa-apple" aria-hidden="true"></i>
            <i class="fa fa-android" aria-hidden="true"></i>
            <i class="web"></i>
        </div>  -->
        <div class="comingsoon">ENTERPRISE APPLICATION</div>
      </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
        <div class="ajAppviewbox">
            <div class="ajAppscreen1"></div>
            <div class="ajAppscreen2"></div>
        </div>
      </div>
  </div>
</div>
</section>

<!--Aj Dahua Section End Here-->

<!--Buddy Flight Section Start Here-->

<section class="section slidenumber buddyflightAppSection">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="buddyflightAppleftCon">
        <div class="applogorw">
          <div class="buddyflightApplogo"></div>
        </div>

        <div class="appNamerw">
          <div class="showAppnm">Buddy Flight</div>
        </div>

        <div class="appinfodetailsrow">A portal to connect with <strong>COMMERCIAL PILOTS</strong> for sharing a flight or ride-along, event, study group, or just for fun.</div>
        <div class="apponeword">B</div> 
        <div class="technology_icon_row">
       
        </div> 
      </div>
      </div>

      <div class="col-sm-7 col-md-6 hideConview">
        <div class="buddyflightAppviewbox">
            <div class="buddyflightAppscreen1"></div>
            <div class="buddyflightAppscreen2"></div>
        </div>
      </div>
  </div>
</div>

</section>

<!--Buddy Flight Section End Here-->

<!--Indofil Section Start Here-->

<section class="section slidenumber indofilAppSection">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="indofilleftCon">
        <div class="applogorw">
          <div class="indofillogo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">Indofil</div>
        </div>
        <div class="appinfodetailsrow">An enterprise app solution built for<strong> FORTUNE 500</strong> company to <strong>BOOST WORK PRODUCTIVITY.</strong></div>
        <div class="apponeword">I</div> 
        <!-- <div class="technology_icon_row">
            <i class="fa fa-apple" aria-hidden="true"></i>
            <i class="fa fa-android" aria-hidden="true"></i>
            <i class="web"></i>
        </div>  -->

        <div class="comingsoon">ENTERPRISE APPLICATION</div>
        </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
          <div class="indofilAppviewbox">
              <div class="indofillscreen1"></div>
              <div class="indofillscreen2"></div>
          </div>
      </div>
  </div>
</div>
</section>

<!--Indofil Section End Here-->

<!--Parts/Prozata Hub Section Start Here-->

<section class="section slidenumber partshubAppSection">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="partshubleftCon">
        <div class="applogorw">
          <div class="prozatalogo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">PROZATA</div>
        </div>
        <div class="appinfodetailsrow">A networking mobile application, for GIVING or ASKING REFERENCES within social network.</div>
        <div class="apponeword">P</div> 
        <div class="technology_icon_row">
        <a href="https://itunes.apple.com/in/app/prozata/id1449141264?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
        <a href="https://play.google.com/store/apps/details?id=com.prozata.app" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
        </div> 
      </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
        <div class="partshubAppviewbox">
            <div class="partshubAppscreen1"></div>
            <div class="partshubAppscreen2"></div>
        </div>
      </div>
  </div>
</div>
</section>

<!--Parts/Prozata Hub Section End Here-->

<!--BATALHA FUNK Section Start Here-->
<section class="section slidenumber batalhafunkAppSection">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="batalhafunkleftCon">
        <div class="applogorw">
          <div class="batalhalogo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm"><span>Batalha</span>FUNK</div>
        </div>
        <div class="appinfodetailsrow">An app for <strong>RECORDING VOICE/MUSIC, POSTING </strong>and CHALLENGING other followers.</div>
        <div class="apponeword">B</div> 
        <!-- <div class="technology_icon_row">
            <i class="fa fa-apple" aria-hidden="true"></i>
            <i class="fa fa-android" aria-hidden="true"></i>
            <i class="web"></i>
        </div> -->

        <div class="comingsoon">COMING SOON</div> 
      </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
        <div class="batalhafunkAppviewbox">
            <div class="batalhafunkappsc1"></div>
            <div class="batalhafunkappsc2"></div>
        </div>
      </div>
  </div>
</div>
</section>

<!--BATALHA FUNK Section Start Here-->

<!--My Follow UP Section Start Here-->
<section class="section slidenumber myfollowupSection">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="myfollowupleftCon">
        <div class="applogorw">
          <div class="myfollowupApp_logo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">My Follow Up</div>
        </div>
        <div class="appinfodetailsrow">An app designed for the Doctors from <strong> TOP INDIAN HOSPITALS </strong>to build stronger relationship with their patients.</div>
        <div class="apponeword">M</div> 
        <div class="technology_icon_row">
        <a href="https://itunes.apple.com/in/app/myfollowup/id1144895524?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
        <a href="https://play.google.com/store/apps/details?id=com.virtualmediconnect.app" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
        </div> 
      </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
        <div class="myfollowAppviewbox">
            <div class="myfollowApp_screen1"></div>
            <div class="myfollowApp_screen2"></div>
        </div>
      </div>
  </div>
</div>
</section>

<!--My Follow UP Section End Here-->

<!--BJP Section Start Here-->
<section class="section slidenumber bjpAppSection">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="bjpleftCon">
        <div class="applogorw">
          <div class="bjplogo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">BJP</div>
        </div>
        <div class="appinfodetailsrow">Techugo is proud to be a <strong>TECHNOLOGY PARTNER </strong>for the<strong> WORLD’S LARGEST </strong>political party.</div>
        <div class="apponeword">B</div>
        <!-- <div class="technology_icon_row">
            <i class="fa fa-apple" aria-hidden="true"></i>
            <i class="fa fa-android" aria-hidden="true"></i>
            <i class="web"></i>
        </div> -->
        <div class="comingsoon">ENTERPRISE APPLICATION</div> 
      </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
          <div class="bjpAppviewbox">
              <div class="alballamCircle1"></div>
              <div class="alballamCircle2"></div>
              <div class="bjpAppscreen1"></div>
          </div>
      </div>
  </div>
</div>
</section>

<!--BJP Section Start Here-->

<!--Wishtree Section Start Here-->
<section class="section slidenumber wishtreeSection">
  <div class="wishtreeConbox">
    <div class="row clearfix">
        <div class="col-sm-5 col-md-6">
        <div class="wishtreeleftCon">
          <div class="applogorw">
            <div class="wish_tree_logo"></div>
          </div>
          <div class="appNamerw">
            <div class="showAppnm">WISHTREE</div>
          </div>
          <div class="appinfodetailsrow">An app platform, allowing users to pick the gift items of their choice from their guests, to avoid the unwanted gifts trail to be passed on to others. It is a <strong>HAVEN</strong> for <strong>SECRET WISHES</strong> to come true.</div>
          <div class="apponeword">W</div> 
          <div class="technology_icon_row">
          <a href="https://itunes.apple.com/us/app/wishtree/id1386714548?mt=8&ign-mpt=uo%3D4" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
          <a href="https://play.google.com/store/apps/details?id=com.wishtree.app" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
          </div> 
        </div>
        </div>
        <div class="col-sm-7 col-md-6 hideConview">
          <div class="wishtreeAppviewbox">
            <div class="wishtreeapp_screen1"></div>
            <div class="wishtreeapp_screen2"></div>
          </div>
          <div class="wishtreesecicons diwali"></div>
          <div class="wishtreesecicons light"></div>
          <div class="wishtreesecicons farewell"></div>
        </div>
    </div>

    <!--Whole Page icons Section Start Here-->
    <div class="wishtreesecicons thanksgiving"></div>
    <div class="wishtreesecicons babyshower"></div>
    <!--Whole Page icons Section End Here-->
  </div>
</section>

<!--Wishtree Section End Here-->

<!--Airtel Section Start Here-->
<section class="section slidenumber airtelwrap">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="airtelleftCon">
        <div class="applogorw">
          <div class="airtellogo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">AIRTEL CONNECT</div>
        </div>
        <div class="appinfodetailsrow">An event app crafted for the <strong>FORTUNE INDIA 500 </strong> and <strong> GLOBAL 2,000 COMPANY.</strong></div>
        <div class="apponeword">A</div> 
        <!-- <div class="technology_icon_row">
            <i class="fa fa-apple" aria-hidden="true"></i>
            <i class="fa fa-android" aria-hidden="true"></i>
            <i class="web"></i>
        </div>  -->
        <div class="comingsoon">ENTERPRISE APPLICATION</div>
      </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
        <div class="airtelAppviewbox">
            <div class="airtelAppscreen1"></div>
            <div class="airtelAppscreen2"></div>
            <div class="airtelAppscreen4"></div>
            <div class="airtelAppscreen3"></div>
        </div>
      </div>
  </div>
</div>
</section>

<!--Airtel Section End Here-->

<!--Chatkazam Section Start Here-->
<section class="section slidenumber chatkazamSection">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="chatkazamleftCon">
        <div class="applogorw">
          <div class="chatkazamApp_logo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">Chatkazam</div>
        </div>
        <div class="appinfodetailsrow">A <strong> SOCIAL NETWORKING </strong>app , which is a perfect match for FRIENDS and the LOCAL BUSINESSES.</div>
        <div class="apponeword">C</div> 
        <div class="technology_icon_row">
           <a href="https://www.youtube.com/watch?v=r8FxR_RC2qg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        </div> 
      </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
        <div class="chatkazamAppviewbox">
            <div class="chatkazam_screen1"></div>
            <div class="chatkazam_screen2"></div>
        </div>
      </div>
  </div>
</div>
</section>
<!--Chatkazam Section End Here-->

<!--Noida Deaf Society Section Start Here-->

<section class="section slidenumber worldcoinwrap">
  <div class="wishtreeConbox">
  <div class="row clearfix">
      <div class="col-sm-5 col-md-6">
      <div class="worldcoinleftCon">
        <div class="applogorw">
          <div class="worldcoinlogo"></div>
        </div>
        <div class="appNamerw">
          <div class="showAppnm">Noida Deaf Society</div>
        </div>
        <div class="appinfodetailsrow">Noida Deaf Society is a not-for-profit organization working for the upliftment and empowerment of Speech and Hearing Impaired (SHI) Children and Youth in India <strong>(supported by donors; Tech Mahindra Foundation, Ford Foundation, Jindal Stainless Foundation, HCL Foundation, Hindustan Zinc Limited, Adobe, among others).</strong></div>
        <div class="apponeword">N</div>
        <div class="technology_icon_row">
        <a href="http://www.noidadeafsociety.org/" target="_blank"><i class="web"></i></a>
        </div> 
      </div>
      </div>
      <div class="col-sm-7 col-md-6 hideConview">
        <div class="worldcoinAppviewbox">
            <div class="worldcoinAppscreen1">
              <img src="<?php echo base_url('assets/images/portfolio/nds_screen.png'); ?>" alt="nds_screen" />
            </div>
        </div>
      </div>
  </div>
</div>
</section>
<!--Noida Deaf Society Section Start Here-->
</div>
</div>


<link href="<?php echo base_url('assets/css/jquery.fullPage.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/animate.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/workcase.css'); ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/js/jquery.fullPage.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.easings.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/workcase.js'); ?>"></script>
</body>
</html>
