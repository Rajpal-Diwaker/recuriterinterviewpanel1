<style>
.navbar-default{background-color: #fff;}
html, body {
    overflow-x: hidden !important;
}
</style>
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
<!--About Page Content Start Here-->

    <!--About Banner Section Start Here-->
    <section class="aboutbanner">
      <div class="aboutbantextbx clearfix">
        <h1 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Driven by everlasting passion</h1>
      </div>
    </section>

    <!--About Bannerp Section End Here--> 

    <!--About Middle Section Start Here-->
    <section class="aboutConbx clearfix">
      <div class="aboutcombx clearfix">
        <div class="aboutcomboxrw">
          <h2 data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">Our Journey</h2>
          <h3 data-aos="fade-up"  data-aos-easing="ease-in-sine" data-aos-duration="600">We’re EDGY and ever-expanding</h3>
          <div class="infoaboutus" data-aos="fade-up"  data-aos-easing="ease-in-sine" data-aos-duration="600">
            <p> We are a leading mobile app development company, with our headquarter based in Canada and off-shore centers in the USA, India & Dubai. We are a tech- startup, which kick-started its journey in the year 2015. To be précised we initiated our journey with a team of 3 passionate young minds. Techugo is now a family of 157+ developers, designers, marketers & testers. All these years, we have followed and delivered the assistance of business strategy, application design, and development services to our clients, who look forward to the digital invention to expand their businesses. </p>
            <p> Today, as a team we offer the quality-laden end-to-end solutions for app development for the responsive web and mobile applications, coupled with the latest technologies; React Native, Flutter,Artificial Intelligence, IoT, AR/ VR, and Blockchain to support the robust technical infrastructure of users’ demands.</p>
          </div>
        </div>
        <div class="aboutcomboxrw">
          <h2 data-aos="fade-up"  data-aos-easing="ease-in-sine" data-aos-duration="600">Our Process </h2>
          <h3 data-aos="fade-up"  data-aos-easing="ease-in-sine" data-aos-duration="600">We don’t settle for anything less than perfect</h3>
          <div class="infoaboutus" data-aos="fade-up"  data-aos-easing="ease-in-sine" data-aos-duration="600">
            <p>Techugo is a HUB of technocrats, where we don’t build the apps, but the dreams, you have always envisioned for your business. Our time gets spent in transforming the complexity of technology into an easy interface for the end-users. We don’t look forward to building the fanciest or most feature-filled app possible, as we very well comprehend; this is what not excites the users. Hence, we build a simple yet elegant solution, which drives results. We work closely with YOU to test, refine, and validate the concept, based on the real market and users’ expectations. Our focus remains in building WHAT USERS WANT and this is what makes Techugo different from others. </p>
          </div>
        </div>
      </div>
      <div class="circlerotate">
        <div id="rotatecirlce">
        <svg viewBox="0 0 100 100"><path d="M 50,50 m 0,-44 a 44,44 0 1 1 0,88 a 44,44 0 1 1 0,-88" stroke="#fff" stroke-width="1" fill-opacity="0"></path><path d="M 50,50 m 0,-44 a 44,44 0 1 1 0,88 a 44,44 0 1 1 0,-88" stroke="#439ff4" stroke-width="12" fill-opacity="0" style="stroke-dasharray: 276.499, 276.499; stroke-dashoffset: 0;"></path></svg>
        </div>
        <div class="tech-rebels" data-aos="fade-left"  data-aos-easing="ease-in-sine" data-aos-duration="600"><img class="img-responsive" src="<?php echo base_url('assets/images/tech-rebels.png'); ?>" alt="Techugo Family" /></div>
      </div>

    </section>

    <!--About Middle Section End Here--> 

    <!--Step Section Start Here-->

    <div class="stepsection">
      <ul class="nav nav-pills clearfix">
        <li class="active" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="300" data-aos-offset="0"><a href="javascript:void(0)" data-target="#firststep" data-hover="tab">
          <div class="circleboximg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600.86 578.36">
            <g data-name="Layer 2">
              <g  data-name="Layer 1">
                <path class="step-1" d="M289.16,103.4c-102.6,0-185.77,83.17-185.77,185.77H0C0,129.46,129.46,0,289.16,0S578.33,129.46,578.33,289.17H474.93C474.93,186.57,391.76,103.4,289.16,103.4Z"/>
                <path class="step-11" d="M526.46,214.8l-74.39,74.4h22.86c0,102.6-83.17,185.77-185.77,185.77S103.4,391.79,103.4,289.2H0C0,448.9,129.46,578.36,289.16,578.36S578.33,448.9,578.33,289.2h22.53Z"/>
              </g>
            </g>
            </svg> <span class="firststep"></span></div>
          </a></li>
        <li data-aos="fade-down"  data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="500" data-aos-offset="0"><a href="javascript:void(0)" data-target="#secondstep" data-hover="tab">
          <div class="circleboximg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600.86 578.36">
            <g data-name="Layer 2">
              <g data-name="Layer 1">
                <path class="step-1" d="M289.16,475c-102.6,0-185.77-83.17-185.77-185.77H0C0,448.9,129.46,578.36,289.16,578.36S578.33,448.9,578.33,289.2H474.93C474.93,391.79,391.76,475,289.16,475Z"/>
                <path class="step-11" d="M526.46,363.56l-74.39-74.39h22.87c0-102.6-83.17-185.77-185.77-185.77S103.39,186.57,103.39,289.17H0C0,129.46,129.46,0,289.16,0S578.33,129.46,578.33,289.17h22.53Z"/>
              </g>
            </g>
            </svg> <span class="secstep"></span></div>
          </a></li>

        <li data-aos="fade-up"  data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="700" data-aos-offset="0"><a href="javascript:void(0)" data-target="#thirdstep" data-hover="tab">
          <div class="circleboximg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600.86 578.36">
            <g data-name="Layer 2">
              <g data-name="Layer 1">
                <path class="step-1" d="M289.16,103.4c-102.6,0-185.77,83.17-185.77,185.77H0C0,129.46,129.46,0,289.16,0S578.33,129.46,578.33,289.17H474.93C474.93,186.57,391.76,103.4,289.16,103.4Z"/>
                <path class="step-11" d="M526.46,214.8l-74.39,74.4h22.86c0,102.6-83.17,185.77-185.77,185.77S103.4,391.79,103.4,289.2H0C0,448.9,129.46,578.36,289.16,578.36S578.33,448.9,578.33,289.2h22.53Z"/>
              </g>
            </g>
            </svg> <span class="thirdstep"></span></div>
          </a></li>
        <li data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="900" data-aos-offset="0"><a href="javascript:void(0)" data-target="#fourthstep" data-hover="tab">
          <div class="circleboximg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600.86 578.36">
            <g data-name="Layer 2">
              <g data-name="Layer 1">
                <path class="step-1" d="M289.16,475c-102.6,0-185.77-83.17-185.77-185.77H0C0,448.9,129.46,578.36,289.16,578.36S578.33,448.9,578.33,289.2H474.93C474.93,391.79,391.76,475,289.16,475Z"/>
                <path class="step-11" d="M526.46,363.56l-74.39-74.39h22.87c0-102.6-83.17-185.77-185.77-185.77S103.39,186.57,103.39,289.17H0C0,129.46,129.46,0,289.16,0S578.33,129.46,578.33,289.17h22.53Z"/>
              </g>
            </g>
            </svg> <span class="fourthstep"></span></div>
          </a></li>
        <li data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="1100" data-aos-offset="0"><a href="javascript:void(0)" data-target="#fifthstep" data-hover="tab">
          <div class="circleboximg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600.86 578.36">
            <g data-name="Layer 2">
              <g data-name="Layer 1">
                <path class="step-1" d="M289.16,103.4c-102.6,0-185.77,83.17-185.77,185.77H0C0,129.46,129.46,0,289.16,0S578.33,129.46,578.33,289.17H474.93C474.93,186.57,391.76,103.4,289.16,103.4Z"/>
                <path class="step-11" d="M526.46,214.8l-74.39,74.4h22.86c0,102.6-83.17,185.77-185.77,185.77S103.4,391.79,103.4,289.2H0C0,448.9,129.46,578.36,289.16,578.36S578.33,448.9,578.33,289.2h22.53Z"/>
              </g>
            </g>
            </svg> <span class="fifthstep"></span></div>
          </a></li>

        <li data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="1300" data-aos-offset="0"><a href="javascript:void(0)" data-target="#sixstep" data-hover="tab">
          <div class="circleboximg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600.86 578.36">
            <g data-name="Layer 2">
              <g data-name="Layer 1">
                <path class="step-1" d="M289.16,475c-102.6,0-185.77-83.17-185.77-185.77H0C0,448.9,129.46,578.36,289.16,578.36S578.33,448.9,578.33,289.2H474.93C474.93,391.79,391.76,475,289.16,475Z"/>
                <path class="step-11" d="M526.46,363.56l-74.39-74.39h22.87c0-102.6-83.17-185.77-185.77-185.77S103.39,186.57,103.39,289.17H0C0,129.46,129.46,0,289.16,0S578.33,129.46,578.33,289.17h22.53Z"/>
              </g>
            </g>
            </svg> <span class="sixstep"></span></div>
          </a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content well">
        <div class="tab-pane active" id="firststep">
          <div class="stepConbox firstStep" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
            <h3>Step - I</h3>
            <h4>Requirement Gathering</h4>
            <div class="stepinfo">
              <p>Yes, we are very inquisitive! We talk and discuss a lot before picking the app concept, as we strongly believe in generating new ideas via discussion. We always remain all EARS, when you share your requirements and expectations; we collect and work closely to match your expectations with the technological trends. Our analysis team jots down the requirements and in accordance with, open a bucket of suggestions to you, to transform the app into a much better product.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="secondstep" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
          <div class="stepConbox secStep">
            <h3>Step - II</h3>
            <h4>Contract Closure</h4>
            <div class="stepinfo">
              <p>We start a project with the complete documentation. We jot down your requirements and bring a final contract, which is further shared and taken final consent from your end. This contract includes our understanding of the project, your expectations and every required feature and the functionalities, where we take your final nod and then only proceed further with the contract closure. </p>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="thirdstep" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
          <div class="stepConbox thirdstep">
            <h3>Step - III</h3>
            <h4>Wireframing & Design</h4>
            <div class="stepinfo">
              <p>To help you understand the app navigation, we start with creating a wireframe for the app, which works as a blueprint for the app, it has no definite color or icon. After seeking your approval, our team of skilled designers absorbs the concept and figures out the best design strategy to give seamless navigation in the app portal through app design.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="fourthstep" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
          <div class="stepConbox fourthstep">
            <h3>Step - IV</h3>
            <h4>Development</h4>
            <div class="stepinfo">
              <p>Here we practice the agile methodologies to help in developing the mobile app, which helps in achieving the extraordinary end-product. Our team of developers, use the best logic and the technologies to support your app concept. We segregate the development journey into different milestones, and test and share every milestone build with you, before moving forward. </p>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="fifthstep"  data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
          <div class="stepConbox fifthstep">
            <h3>Step - V</h3>
            <h4>Deployment</h4>
            <div class="stepinfo">
              <p>Once the app development process gets completed, we proceed ahead with the deployment of the app on its respective stores. Here we follow and consider the specific guideline of every store, to help the app sail through without being rejected. We offer full support in deploying your app successfully.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="sixstep"  data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
          <div class="stepConbox sixstep">
            <h3>Step - VI</h3>
            <h4>Support & Maintenance</h4>
            <div class="stepinfo">
              <p>Once the app goes live, another journey starts, which requires constant tracking and updating from the experts. We keep a track on every activity of the app and make the necessary changes, where required. We follow an end to end process for this phase of the project. We offer a FREE period of after support for a specific time, to help your app grow popular.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Step Section End Here--> 

    <!--Sneak Pick Line Start Here-->

    <section class="sneakpiclinesection clearfix">
      <h2 data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">Smile With US</h2>
      <div class="eqWrap equalHMWrap clearfix">
        <div class="col-xs-6 padzeros">
          <div class="peacklinebigbx" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="600">
          <a href="<?php echo base_url('assets/images/peak_line_img.jpg'); ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img src="<?php echo base_url('assets/images/peak_line_img.jpg'); ?>" class="img-responsive" alt="Techugo Kufri Trip" /> </a> 
          </div>
        </div>
        <div class="col-xs-6 padzeros">
          <div class="galleryview">
            <ul>
              <li class="firstview" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="300" data-aos-offset="0"> <a href="<?php echo base_url('assets/images/about_gallery1.jpg'); ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img src="<?php echo base_url('assets/images/about_gallery1.jpg'); ?>" class="img-responsive" alt="Techugo Kufri Trip" /> </a> </li>
              <li class="secondview" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="450" data-aos-offset="0"> <a href="<?php echo base_url('assets/images/about_gallery2.jpg'); ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img src="<?php echo base_url('assets/images/about_gallery2.jpg'); ?>" class="img-responsive" alt="Techugo on Kufri Trip" /> </a> </li>
              <li class="thirdview" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="600" data-aos-offset="0"> <a href="<?php echo base_url('assets/images/about_gallery3.jpg'); ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img src="<?php echo base_url('assets/images/about_gallery3.jpg'); ?>" class="img-responsive" alt="Techugo Team Kufri Trip" /> </a> </li>
              <li class="fourthview" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="750" data-aos-offset="0"> <a href="<?php echo base_url('assets/images/about_gallery4.jpg'); ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img src="<?php echo base_url('assets/images/about_gallery4.jpg'); ?>" class="img-responsive" alt="Techugo Team Kufri Trip" /> </a> </li>
              <li class="fifthview" data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="900" data-aos-offset="0"> <a href="<?php echo base_url('assets/images/about_gallery5.jpg'); ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img src="<?php echo base_url('assets/images/about_gallery5.jpg'); ?>" class="img-responsive" alt="Techugo Annual Function 2018" /> </a> </li>
              <li class="sixview" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="1050" data-aos-offset="0"> <a href="<?php echo base_url('assets/images/about_gallery6.jpg'); ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img src="<?php echo base_url('assets/images/about_gallery6.jpg'); ?>" class="img-responsive" alt="Techugo Team Annual Function 2018" /> </a> </li>
              <li class="sevenview" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="1200" data-aos-offset="0"> <a href="<?php echo base_url('assets/images/about_gallery7.jpg'); ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img src="<?php echo base_url('assets/images/about_gallery7.jpg'); ?>" class="img-responsive" alt="Techugo Team on Annual Function 2018" /> </a> </li>
              <li class="eightview" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="1350" data-aos-offset="0"> <a href="<?php echo base_url('assets/images/about_gallery8.jpg'); ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img src="<?php echo base_url('assets/images/about_gallery8.jpg'); ?>" class="img-responsive" alt="Techugo Team on Annual Functions 2018" /> </a> </li>
              <li class="nineview" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="1500" data-aos-offset="0"> <a href="<?php echo base_url('assets/images/about_gallery9.jpg'); ?>" data-toggle="lightbox" data-gallery="example-gallery"> <img src="<?php echo base_url('assets/images/about_gallery9.jpg'); ?>" class="img-responsive" alt="Techugo Teams Annual Function 2018" /> </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--Sneak Pick Line End Here--> 
    <div class="ourculturerw viewmore" onclick="window.open('https://www.instagram.com/techugo/')">
      <div class="videoiconbx"><img src="<?php echo base_url('assets/images/instagram_icons.png'); ?>" width="28" height="28" alt="Techugo Instagram"></div>
      <div class="culstxt">&nbsp;&nbsp;View More</div>
    </div>
   
<link href="<?php echo base_url('assets/css/ekko-lightbox.css'); ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/js/ekko-lightbox.js'); ?>"></script>
<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
$(function() {
  $(document).off('click.bs.tab.data-api', '[data-hover="tab"]');
    $(document).on('mouseenter.bs.tab.data-api', '[data-toggle="tab"], [data-hover="tab"]', function () {
    $(this).tab('show');
    });
});

let previousScrollY = 0;
$(document).on('show.bs.modal', () => {
    previousScrollY = window.scrollY;
    $('html').addClass('modal-open').css({
        marginTop: -previousScrollY,
        overflow: 'hidden',
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
        position: 'fixed',
    });
}).on('hidden.bs.modal', () => {
    $('html').removeClass('modal-open').css({
        marginTop: 0,
        overflow: 'auto',
        left: 'auto',
        right: 'auto',
        top: 'auto',
        bottom: 'auto',
        position: 'static',
    });
    window.scrollTo(0, previousScrollY);
});
</script>