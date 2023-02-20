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
<!--Mobile App Development Content Start Here-->
  <div class="mobileappdevebanwrap mobileapp clearfix">
    <div class="appdevimgbx" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><img src="<?php echo base_url('assets/images/mobile-app-development-ban.png'); ?>" width="900" height="937" alt="mobile-app-development-ban" /></div>
    <div class="leftdescriptionbx">
      <h1 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Why Every Business Needs <br>
        Digital Platform</h1>
      <div class="sminfotbx" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Mobile app holds the potential to help your business to reach pinnacle of success and garner the attention of larger user - base globally.</div>
    </div>
  </div>
  <div class="mobileappdevewrap devcom">
    <h2 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Mobile App Development Service</h2>
    <div class="mobileinfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">We very well comprehend that app technology is not merely sufficed to integrate the coding, but it is spread over the vast spectrum of incredible design and testing process, to make app product grow successful and unique in many ways. We hold a full-stack team of app developers, app designers, app marketers and QA testers, who invest the successful mélange of their expertise and skills in every application.</div>
    <div class="production_discussion">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="flip-left" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="pro_dis"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Product Discussion</h3>
            <div class="productiondetails" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">This phase helps the mediocre app to get separated from a great app and helps in positioning the app right in the market through valid user research and robust competitive analysis. Our product strategy reflects the beautiful fusion of our design, development, and marketing strategies, helping us to create a successful app product and consequently let your business to experience the difference.</div>
            <ul class="clearfix">
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We comprehend your app idea </li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We deploy the best and experienced resources </li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We conduct 3 layers of testing</li>
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We offer full-fledged after app launch support</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="production_discussion marketing_insights">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="flip-right" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="marketing_insights"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Marketing Insights</h3>
            <div class="productiondetails" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">This step helps the app to grow widely popular. From the minute your app concept and design get the final nod from your end, we plan to figure out the way to entice the ideal users and encourage them to download the app. Our developed strategies include; landing page best practices, app store optimization, referral marketing, and paid media to help your mobile app to stand out and survive cutthroat market competition with flying colors.</div>
            <ul class="clearfix">
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We assess opportunities & threats </li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We create devising marketing strategies</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We drive app downloads number </li>
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We identify the audience and convert them into users</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="production_discussion analysis_wireframing">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="flip-up" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="wireframing"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Analysis & Wireframing</h3>
            <div class="productiondetails" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">We analyze your app concept thoroughly and create a wireframe, which creates a screen blueprint; a visual guide representing the skeletal framework of a mobile app.  It helps you to understand how the application will work and function with different screens. This creates a symphony in your app idea and technical discipline, and finally brings the world-class app into existence.</div>
            <ul class="clearfix">
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We help you understand the app flow</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We ease down the woes of transition </li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We help in reducing the overall development cost </li>
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We give you a visual representation of the concept </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="production_discussion designing">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="flip-down" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="designing"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Designing</h3>
            <div class="productiondetails" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">A design speaks volume about the mobile app and clearly indicates how an app interacts with its users. The design holds benefits in the abundance,  the virtual effects and definitions shown within the design represent the real aim of the app concept. Our designers arrange the application design according to the app content, so the best infrastructure can be experienced. </div>
            <ul class="clearfix">
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We analyze your app’s concept</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We maximize the app’s visual sense </li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We keep the audience demand in mind </li>
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We create a story through our design</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="production_discussion development">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="flip-left" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="development"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Development</h3>
            <div class="productiondetails"  data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">We include the latest technologies like Flutter, React Native to name a few to help users get an easy and engaging app interface. We experiment with the latest technologies and imbibe them as a part of our development methodologies and this is where we get an edge over our competitors. Be it the Android or iOS app development process, we being the best mobile app development company, keep our focus intact in implementing the latest technology trends in development strategy.</div>
            <ul class="clearfix">
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>	We analyze the app idea</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We create a wireframe </li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We develop with the help of experts</li>
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We test app from every possible angle </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="production_discussion testing">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="flip-right" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="testing"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Testing</h3>
            <div class="productiondetails" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">We strongly believe in creating the extraordinary app solutions which are infused with the trending technologies in a way, so users can experience the best app experience,  without being bugged by the technical glitches. Our testing process ensures to cut-down the chaos of complexity of technology into our developed app solution, letting the users enjoy the best experience in every possible manner. </div>
            <ul class="clearfix">
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We perform syntax testing</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>	We follow Automation Methodology </li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We integrate Test Cases Management & Strategy</li>
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>We sift down the app to eliminate the glitch </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="production_discussion">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-2 lt_rt_bdr text-center">
          <div class="discussion_icon_bx" data-aos="flip-down" data-aos-easing="ease-in-sine" data-aos-duration="600"> <span class="pro_dis"></span> </div>
        </div>
        <div class="col-sm-10 rt_row_bdr">
          <div class="productionCon clearfix">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Deployment</h3>
            <div class="productiondetails" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">
                We pick the manual efforts filled with complexity to take out the human error out of application deployment. Our team invests their time and passion for deploying an incredible app solution to your end-users. We include the reliable deployment strategies; copying, configuring and enabling your application to a specific store, to attain further success.</div>
            <ul class="clearfix deployment">
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>Understand & review the guidelines</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>Keep our app updated with the guidelines</li>
              <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>Sift the app to make it glitch-free</li>
              <li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><span></span>Deploy app successfully </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

