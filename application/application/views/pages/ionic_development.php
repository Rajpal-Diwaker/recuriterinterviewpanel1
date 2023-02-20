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

<!--Nodejs Developmentwrap Content Start Here-->
  <div class="mobileappdevebanwrap iosdevlopment nodejs clearfix">
    <div class="appdevimgbx reactdev" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="600"> <img src="<?php echo base_url('assets/images/nodejsban.png'); ?>" alt="nodejsban" /><span class="ioniclogo" data-aos="zoom-in-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></span></div>
    <div class="leftdescriptionbx"> <span class="iosBrand ionicdev"><span class="apple"></span></span>
      <h1 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">IONIC FRAMEWORK</h1>
      <div class="sminfotbx" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">We always ensure to keep a track on every new technology and the innovation to deliver advanced mobile and web solutions. With the Ionic framework, you get various and crucial benefits, to change the face of your business. </div>
      <div class="iostheame">IONIC</div>
    </div>
  </div>
  
  <!--Building Real-Time Application Start Here-->
  <div class="react_business_mustpic nodejsbx ionic">
    <div class="mainheadingbx" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">INCREDIBLE APP SOLUTIONS</div>
    <div class="smtinfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">It is the leading cross-platform and hybrid mobile application development framework, which majorly focuses on the look and feel of the mobile application along with the UI interface, transforming the users' experience with your application. This framework uses HTML5 and AngularJS. It further utilizes further technologies like HTML5, CSS3, SASS, JavaScript, AngularJS in developing solutions with this framework.</div>
  </div>
  <!--Building Real-Time Application End Here--> 
    
  <!--Ionic Framework Help Section Start Here-->
        <div class="ionicframeworkhelp">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">How Does Ionic Framework Help</h3>
            <h2 data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Your Business?</h2>
            <div class="smtinfo">
                <p data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">There are multiple benefits of developing mobile apps using this framework, In the current era, where the technology runs in our daily schedule, an elegant mobile application, which flows seamlessly on different platforms and devices, is nothing but a blessing for any business.</p>
                <p data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">This is easy to be discovered with an Ionic platform enabled mobile app your business, which caters the enterprise-grade Ionic app development service. It helps your businesses to unveil the potential of your business and its specific genre.</p>
                <p data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">It allows your application to receive quality and performance, to serve the needs of the global clients. Also, you let your end-users to experience and cherish the high-quality and seamlessly performing solutions fitting your business needs.</p>
            </div>
       </div>
  <!--Ionic Framework Help Section End Here-->
    
 <!--Nodejs keyword Section Start Here-->
    <div class="nodejskeywordwrap">
        <div class="nodekeyrw ionickey clearfix">
           <div class="ionicleftkeyp">
                <div class="roundCirclef" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0" data-aos-delay="100"></div>
               <div class="roundCircleS" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0" data-aos-delay="400"></div>
               <div class="globimgbxs" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0" data-aos-delay="600"></div>
            </div>
            <div class="nkeywordsoptions">
                <div class="unrivaledchecksbx">
                    <div class="checkoprw">
                      <div class="adchecknm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="flawless_app_features"></span>An open source framework.</div>
                      <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>
                    <div class="checkoprw">
                      <div class="adchecknm" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="impeccable_hardware"></span>It has the various pre-generated app setups, allows building mobile apps with a simple layout.</div>
                      <div class="downline" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>
                    <div class="checkoprw">
                      <div class="adchecknm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="high-end-security"></span>
                        It offers the in-built integration with PhoneGap and Cordova, compiled together to build the perfect solutions.
                        </div>
                      <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>
                    <div class="checkoprw">
                      <div class="adchecknm" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="greensign"></span>It is an independent platform for iOS and Android, letting the development process to turn into highly possible with a single codebase.</div>
                        <div class="downline" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>
                    
                     <div class="checkoprw">
                      <div class="adchecknm" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="impeccable_hardware"></span>It is based on AngularJS, wherein the produced code is extremely efficient on mobile devices.  </div>
                        <div class="downline" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                    </div>
                    
                    <div class="checkoprw">
                      <div class="adchecknm" data-aos="zoom-out-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><span class="features_supports"></span>You can get the multiple device resolution issues effortlessly utilizing this Framework and SASS.</div>
                    </div>
                    
                  </div>
            </div>
        </div>
    </div>
 <!--Nodejs keyword Section End Here-->
    
 <!--Techugo Revolutionize Start Here-->
  <div class="techugo_revolutionize nodejsbox ionicbx">
	   
    <div class="imagebx"><img src="<?php echo base_url('assets/images/pick_techugo.png'); ?>" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0" alt="pick_techugo2" />
      <div class="sectiontitle">
        <div class="mainheadingbx" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">How Techugo Helps?</div>
      </div>
    </div>
    <div class="smtinfo" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
        <p>The interesting and engaging framework requirements of this framework, fit the need of the hour and help Techugo team to be the ideal partner for the various known brands and budding startups across the globe.</p>
      <p>We are highly efficient and well-versed with HTML5, CSS, JS, SASS, AngularJS, and we constantly improve our expertise and ensure to utilize the Ionic Framework or PHP/Node JS development, in the most incredible way within the mobile app development platform. We have a stronger brood of developers, who work towards enhancing their knowledge and garnering huge experience, to achieve the new milestones in the development field.</p>
      </div>
      
            <div class="ionic_develoment_features">
                <div class="ionicdevrow">
                    <div class="ionicmainbx">
                    <div class="ionicdev" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                        <div class="iconicdeviconbx"><span class="ionic_widget_development"></span></div>
                         <div class="la-ball-elastic-dots la-dark">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><div class="ionicservices" >Widget Development</div></div>
                    </div>
                </div>
                <div class="ionicdevrow">
                    <div class="ionicmainbx">
                    <div class="ionicdev" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                        <div class="iconicdeviconbx"><span class="hybrid_app_development"></span></div>
                         <div class="la-ball-elastic-dots la-dark">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                        <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><div class="ionicservices">Hybrid App Development</div></div>
                    </div>
                </div>
                <div class="ionicdevrow">
                    <div class="ionicmainbx">
                    <div class="ionicdev" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                        <div class="iconicdeviconbx"><span class="ionic_app_integration"></span></div>
                         <div class="la-ball-elastic-dots la-dark">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                        <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><div class="ionicservices">App Integration</div></div>
                    </div>
                </div>
                 <div class="ionicdevrow">
                    <div class="ionicmainbx">
                    <div class="ionicdev" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                        <div class="iconicdeviconbx"><span class="enterprise_app_development"></span></div>
                         <div class="la-ball-elastic-dots la-dark">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                        <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"> <div class="ionicservices">Enterprise App Development</div></div>
                    </div>
                </div>
                 <div class="ionicdevrow">
                    <div class="ionicmainbx">
                    <div class="ionicdev" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                        <div class="iconicdeviconbx"><span class="ionic_migration_services"></span></div>
                         <div class="la-ball-elastic-dots la-dark">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                     </div>
                        <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><div class="ionicservices">Migration Services</div></div>
                     </div>
                </div>
                 <div class="ionicdevrow">
                     <div class="ionicmainbx">
                        <div class="ionicdev" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                            <div class="iconicdeviconbx"><span class="ionic_support_maintenance"></span></div>
                        </div>
                         <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><div class="ionicservices"> Support and Maintenance</div></div>
                     </div>
                </div>
            </div>
  </div>
  <!--Techugo Revolutionize End Here-->
    
<!--Hire Ionic Developers Start Here-->
  <div class="reconizationbx hireionicdev" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="600">
    <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Why You Must hire Ionic developers</h4>
    <h2 data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">From Techugo?</h2>
  </div>
  <!--Hire Ionic Developers Start End Here--> 
    
  <!--Ionic Development Service Section Start Here-->
        <div class="ionicdevelopmentservice">
            <div class="devserrows clearfix" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                <div class="ionicsericonbxx">
                    <div class="firstbck"></div>
                    <div class="secondbck"></div>
                    <div class="la-ball-scalebx"> </div>
                    <div class="iconsboxes"><span class="ionicdevser"></span></div>
                </div>
                <div class="iconicdetails">
                    <h3>Ionic App Development</h3>
                    <div class="sminfos">Our expertise lies in the Ionic and AngularJS technologies and we craft the intuitive apps, using the Ionic framework, which is both robust and scalable. The forte of our team is focused on open source mobile SDK to develop the rapid prototype.</div>
                </div>
            </div>
            
             <div class="devserrows clearfix" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                <div class="ionicsericonbxx">
                    <div class="firstbck"></div>
                    <div class="secondbck"></div>
                    <div class="la-ball-scalebx"> </div>
                    <div class="iconsboxes"><span class="highly_experienced"></span></div>
                </div>
                <div class="iconicdetails">
                    <h3>Our team is highly experienced</h3>
                    <div class="sminfos">Our team possesses extensive years of experience in crafting some of the most successful mobile applications for the established brands globally, utilizing the Ionic platform mobile app development. Our team holds the technologies like AngularJS, JavaScript, CSS, HTML and is highly-equipped with Ionic Frontend SDK.</div>
                </div>
            </div>
            
             <div class="devserrows clearfix" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                <div class="ionicsericonbxx">
                    <div class="firstbck"></div>
                    <div class="secondbck"></div>
                    <div class="la-ball-scalebx"> </div>
                    <div class="iconsboxes"><span class="single_codebase"></span></div>
                </div>
                <div class="iconicdetails">
                    <h3>Single Codebase</h3>
                    <div class="sminfos">We prove our worth by developing Apps using Ionic Framework, wherein only a single codebase works on multiple platforms efficiently. With this technology, you cut down the pain of development process.</div>
                </div>
            </div>
            
             <div class="devserrows clearfix" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                <div class="ionicsericonbxx">
                    <div class="firstbck"></div>
                    <div class="secondbck"></div>
                    <div class="la-ball-scalebx"> </div>
                    <div class="iconsboxes"><span class="communication"></span></div>
                 </div>
                <div class="iconicdetails">
                    <h3>Sheer Mode of Communication</h3>
                    <div class="sminfos">We ensure to stay available to our clients since the inception of the project and keep our clients updated about every advancement made in the project. Our clients get every information about their product and its every related progress.</div>
                </div>
            </div>
            
            <div class="devserrows clearfix" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                <div class="ionicsericonbxx">
                    <div class="firstbck"></div>
                    <div class="secondbck"></div>
                    <div class="la-ball-scalebx"> </div>
                    <div class="iconsboxes"><span class="maintenance_system"></span></div>
                </div>
                <div class="iconicdetails">
                    <h3>Our Support & Maintenance System</h3>
                    <div class="sminfos">Our team ensures to offer the complete support & maintenance for your apps. Also, our expert technocrats optimize every aspect of your mobile application to help you experience the best possible solution.</div>
                </div>
            </div>
            
             <div class="devserrows clearfix" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                <div class="ionicsericonbxx">
                    <div class="firstbck"></div>
                    <div class="secondbck"></div>
                    <div class="la-ball-scalebx"> </div>
                    <div class="iconsboxes"><span class="materialmodel"></span></div>
                 </div>
                <div class="iconicdetails">
                    <h3>Time & Material Model (T&M)</h3>
                    <div class="sminfos">This model is a perfect choice for the projects which have the varied demands, which need to be completed in a specific time only. In this model, there can be Monthly & Hourly rates, which is the ideal choice for long-term projects.</div>
                </div>
            </div>
            
             <div class="devserrows clearfix" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                <div class="ionicsericonbxx">
                    <div class="firstbck"></div>
                    <div class="secondbck"></div>
                    <div class="la-ball-scalebx"> </div>
                    <div class="iconsboxes"><span class="teammodel"></span></div>
                </div>
                <div class="iconicdetails">
                    <h3>Dedicated Team Model (DTM)</h3>
                    <div class="sminfos">We work as per our client’s specific business demands, and ensure to offer cost-effective resource & flexibility, to meet the goal. We work in the DTM process to help the concept to win the hearts of the users, without a fail.</div>
                </div>
            </div>
            
       </div>
  <!--Ionic Development Service Section End Here-->

  <!--Theatre Show Section Start Here-->
    <div class="ionicTheatreShow">
        <div data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><div class="theatreShowtheame">THEATRE <span>SHOW</span></div></div>
        <div class="showdetails">
            <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Some of our beautiful creations</h3>
            <div class="showsminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Our built solutions are not just about creating the aesthetic appeal to your end-users, but we ensure to offer the functionality in its best possible manner to the audience, through app solution. </div>
        </div>
        <div class="theatre_show_appScreen" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
    </div>
  <!--Theatre Show Section End Here-->