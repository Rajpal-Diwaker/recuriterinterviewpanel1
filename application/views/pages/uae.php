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
    <!--Mobile App Development Company UAE Page Content Start Here-->

        <!--Banner Start Here-->
        <div class="mobileappdevebanwrap iosdevlopment nodejs countrypg clearfix">
            <div class="appdevimgbx reactdev" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="600"> <img src="<?= base_url(); ?>assets/images/mobile-app-development-company-uae-banner.png" alt="Mobile App Development Company UK" /></div>
            <div class="leftdescriptionbx">
                <h1 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">MOBILE APP DEVELOPMENT <br>
        COMPANY IN <span class="countrynm">UAE</span></h1>
                <div class="sminfotbx" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">WE TURN IDEAS INTO SUCCESSFUL PRODUCTS.</div>
                <div class="iostheame">UAE</div>
            </div>
        </div>
        <!--Banner Start Here-->

        <div class="countrypgContentwrap">
            <!--NUMBERS AND ACCOLADES Start Here-->
            <div class="number_accolades_wrap clearfix">
                <div class="accoladesnumsection">
                    <div class="firstnumcol">
                        <div class="accolnumwtbx">
                            <span class="iconsbox"><span class="satisfied_clients"></span></span>
                            <div class="numericrw satisfied">
                                <ul class="clearfix">
                                    <li> <span class="counter" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">100</span> <span class="plusicon">+</span>
                                        <div class="numtxt">SATISFIED CLIENTS</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="accolnumwtbx coun_served">
                            <span class="iconsbox"><span class="countries_served"></span></span>
                            <div class="numericrw served">
                                <ul class="clearfix">
                                    <li> <span class="counter" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">22</span> <span class="plusicon">+</span>
                                        <div class="numtxt">NATION SERVED</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="secondnumcol">
                        <div class="accolnumwtbx appdev">
                            <span class="iconsbox"><span class="mobappsdelivered"></span></span>
                            <div class="numericrw appdev">
                                <ul class="clearfix">
                                    <li> <span class="counter" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">350</span> <span class="plusicon">+</span>
                                        <div class="numtxt">MOBILE <span>APPS DEVELOPED</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="accolnumwtbx expertsprojects">
                            <span class="iconsbox"><span class="expprojects"></span></span>
                            <div class="numericrw exproj">
                                <ul class="clearfix">
                                    <li> <span class="counter" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">157</span> <span class="plusicon">+</span>
                                       <div class="numtxt">COFFEE DRINKING <span>DAILY</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="countclbtn"></div>
                <div class="accoladesnuminfodetailsbox">
                    <div class="detailsinfobx">
                        <h4>PARTNER WITH A LEADING </h4>
                        <h3>MOBILE APPLICATION DEVELOPMENTCOMPANY</h3>
                        <div class="smtinfo"><p>Techugo is a top mobile app development company in UAE and all over the world. We manage the complex functionality of mobile app development strategy from ideation to distribution in a simple and the interactive way. Our expertise lies in multi-lingual mobile applications on all the mobile platforms for any industry.</p> 
                        <p>Our clients gain advantage of our technical expertise through our mobile app development services in UAE and our developed mobile apps are matchless. We at Techugo, propose our pertinent experiences with our clients to develop the process of successful mobile app development for your business.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--NUMBERS AND ACCOLADES End Here-->
          <!--Our Process Start Here-->
            <div class="counpgprocess">
                <div class="counprogressCircle"><span class="wtCir"></span></div>
                <div class="countitleheadingrw">Our Process</div>
                <div class="countitlesubheadingrw">We don’t settle for anything less than perfect</div>
                <div class="smtinfo">Techugo is a HUB of technocrats, where we don’t build the apps, but the dreams, you have always envisioned for your business. Our time gets spent in transforming the complexity of technology into an easy interface for the end-users. We don’t look forward to building the fanciest or most feature-filled app possible, as we very well comprehend; this is what not excites the users. Hence, we build a simple yet elegant solution, which drives results. We work closely with YOU to test, refine, and validate the concept, based on the real market and users’ expectations. Our focus remains in building WHAT USERS WANT and this is what makes Techugo different from others.</div>
            </div>
            <!--Our Process End Here-->

            <!--Mobile App Development Step Content Start Here-->
            <div class="mobiledevStepwrap">
                <div class="mobilestep_devrow clearfix">
                    <div class="stepleftbx">
                        <div class="steplogobx">
                            <div class="movecwrp">
                                <span class="movesmCircle"><span class="smwtC"></span></span>
                            </div>
                            <div class="stepiconbx">
                                <div class="stwtbg">
                                    <span class="stepicon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="stepdropline"></div>
                    </div>
                    <div class="stepinfodetailsCon">
                        <div class="steph">Step - I</div>
                        <div class="stepmainheading">Requirement Gathering</div>
                        <div class="smtinfo">At Techugo, we know that there are many different ways to capture the information, from a simple Word document, spreadsheet or presentation to sophisticated modeling diagrams, but our prime model remains to access the information your app project has in it. We recommend that the initial high-level brainstorming and requirements discovery, this helps us to crystallize the idea clearly on the board, and drill-down the functional requirements in smaller milestone groups to be delivered on time.</div>
                    </div>
                </div>
                <div class="mobilestep_devrow closure clearfix">
                    <div class="stepleftbx">
                        <div class="steplogobx">
                            <div class="movecwrp">
                                <span class="movesmCircle"><span class="smwtC"></span></span>
                            </div>
                            <div class="stepiconbx">
                                <div class="stwtbg">
                                    <span class="stepicon closure"></span>
                                </div>
                            </div>
                        </div>
                        <div class="stepdropline"></div>
                    </div>
                    <div class="stepinfodetailsCon">
                        <div class="steph">Step - II</div>
                        <div class="stepmainheading">Contract Closure</div>
                        <div class="smtinfo">Our very next step after the requirement gathering is to write don the requirements in one place and give a shape of the final contract. This document is shared and taken final consent from your end. We include our understanding of the project, your expectations and every required feature and the functionalities. We seek your final nod and then only proceed further with the contract closure</div>
                    </div>
                </div>

                <div class="mobilestep_devrow wireframing clearfix">
                    <div class="stepleftbx">
                        <div class="steplogobx">
                            <div class="movecwrp">
                                <span class="movesmCircle"><span class="smwtC"></span></span>
                            </div>
                            <div class="stepiconbx">
                                <div class="stwtbg">
                                    <span class="stepicon wireframing"></span>
                                </div>
                            </div>
                        </div>
                        <div class="stepdropline"></div>
                    </div>
                    <div class="stepinfodetailsCon">
                        <div class="steph">Step - III</div>
                        <div class="stepmainheading">Wireframing & Design</div>
                        <div class="smtinfo">Our motive is to bring convenience for your end users, hence in order to make you understand the app navigation, we begin with creating a wireframe for the app, which works as a blueprint for the app, it has no definite color or icon. After taking your approval, our team of skilled designers relishes the concept and identify the best design strategies to accentuate your app portal through app design.</div>
                    </div>
                </div>

                <div class="mobilestep_devrow development clearfix">
                    <div class="stepleftbx">
                        <div class="steplogobx">
                            <div class="movecwrp">
                                <span class="movesmCircle"><span class="smwtC"></span></span>
                            </div>
                            <div class="stepiconbx">
                                <div class="stwtbg">
                                    <span class="stepicon development"></span>
                                </div>
                            </div>
                        </div>
                        <div class="stepdropline"></div>
                    </div>
                    <div class="stepinfodetailsCon">
                        <div class="steph">Step - IV</div>
                        <div class="stepmainheading">Development</div>
                        <div class="smtinfo">We are very rigid in following only the agile methodologies to help you in developing the mobile app, which helps ultimately to achieve the extraordinary end-product. Our team of developers, use the best logic and the technologies to support your app concept. We plan the development journey into different milestones, and test and share every milestone build with you, before taking the next step further in the development phase.</div>
                    </div>
                </div>

                <div class="mobilestep_devrow deployment clearfix">
                    <div class="stepleftbx">
                        <div class="steplogobx">
                            <div class="movecwrp">
                                <span class="movesmCircle"><span class="smwtC"></span></span>
                            </div>
                            <div class="stepiconbx">
                                <div class="stwtbg">
                                    <span class="stepicon deployment"></span>
                                </div>
                            </div>
                        </div>
                        <div class="stepdropline"></div>
                    </div>
                    <div class="stepinfodetailsCon">
                        <div class="steph">Step - V</div>
                        <div class="stepmainheading">Deployment</div>
                        <div class="smtinfo">We integrate the unique deployment strategy , wherein we follow and consider the specific guideline of every store, to help the app sail through without being rejected. We provide complete support in deploying your app successfully.</div>
                    </div>
                </div>

                <div class="mobilestep_devrow maintenance clearfix">
                    <div class="stepleftbx">
                        <div class="steplogobx">
                            <div class="movecwrp">
                                <span class="movesmCircle"><span class="smwtC"></span></span>
                            </div>
                            <div class="stepiconbx">
                                <div class="stwtbg">
                                    <span class="stepicon maintenance"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stepinfodetailsCon">
                        <div class="steph">Step - VI</div>
                        <div class="stepmainheading">Support & Maintenance</div>
                        <div class="smtinfo">Our association with you goes longer, where once the app goes live, another journey starts, which requires constant tracking and updates from the experts. We follow an end to end process for this phase of the project. We offer a FREE period of after support for a specific time, to help your app grow popular.</div>
                    </div>
                </div>
            </div>
            <!--Mobile App Development Step Content End Here-->

           <!--Technologies That we use Section Start Here-->
            <div class="technologies_weuse_wrap">
                <div class="counprogressCircle"><span class="wtCir"></span></div>
                <div id="techthatweuse" class="owl-carousel counmobileapp owl-theme">
                    <div class="item clearfix">
                        <div class="technologies_weuseCon clearfix">
                            <div class="technologiesCirbox">
                                <div class="technoCirConbx">
                                    <div class="techrelimgbx">
                                        <div class="techthatweuse ios"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="countclbtn"></div>
                            <div class="technologiesinfodetailsbx">
                                <div class="countitleheadingrw">Technologies</div>
                                <div class="countitlesubheadingrw">iOS</div>
                                <div class="smtinfo">
								 <p>Techugo has carved a spot for itself in the overwhelmed commercial center of iOS app development services. iOS has become an inevitable requirement of clients over the period of time. Techugo team is a pack of expert iOS app developers to offer a wide and innovative array of applications.</p>
								 <p>Our team of experts includes experienced and passionate app developers who bring innovative change in clients’ revenue goal. We look into the unending conceivable outcomes and provide best iPhone app development services to offer you some assistance with achieving significant results.</p>
								 <p>Each step of the our development strategy, helps you create most extreme benefits and guarantee business development for you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item clearfix">
                        <div class="technologies_weuseCon clearfix">
                            <div class="technologiesCirbox">
                                <div class="technoCirConbx next1">
                                    <div class="techrelimgbx">
                                        <div class="techthatweuse android"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="technologiesinfodetailsbx">
                                <div class="countitleheadingrw">Technologies</div>
                                <div class="countitlesubheadingrw">ANDROID</div>
                                <div class="smtinfo">
								<p>Since the origination of Techugo, we have been developing applications for Android, as the top android app development company.  The android app development platform has been expanding its wings among hardware and has been mobile and tablet friendly. </p>
                                <p>Techugo is well balanced destination of technology and innovation in the android application development domain, which covers the spectrum of an Android application. The Techugo process begins and completes with the client. From first contact and discussion of your idea till making it live on Google Play, while keeping the client’s requirement as the priority.  </p>
                                <p>We are the top mobile app development company and android app development company in India and worldwide. </p>
																  
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item clearfix">
                        <div class="technologies_weuseCon clearfix">
                            <div class="technologiesCirbox">
                                <div class="technoCirConbx next2">
                                    <div class="techrelimgbx">
                                        <div class="techthatweuse html ardev"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="technologiesinfodetailsbx">
                                <div class="countitleheadingrw">Technologies</div>
                                <div class="countitlesubheadingrw">AUGMENTED</div>
                                <div class="smtinfo">
                                  <p>The beauty of technology is further enhanced with the newest invention in the tech domain, this mesmerizing list is further added with Augmented technology. As the name suggests this very technology allows users to experience the objects in an augmented view. At Techugo we have developed some of the most promising business solutions through our Augmented app technology solution.</p>
                                 <p>We help businesses to put that app to good use and generate revenue for your business either directly or indirectly by helping to improve some of the business processes. Techugo is a top android app development.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item clearfix">
                        <div class="technologies_weuseCon clearfix">
                            <div class="technologiesCirbox">
                                <div class="technoCirConbx next3">
                                    <div class="techrelimgbx">
                                        <div class="techthatweuse html nodejs"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="technologiesinfodetailsbx">
                                <div class="countitleheadingrw">Technologies</div>
                                <div class="countitlesubheadingrw">NODEJS</div>
                                <div class="smtinfo">
                                   
							<p>Our Node JS/PHP developers have the skills and the expertise to develop state-of-the-art technology solutions. We always keep our eyes open for new technologies, so that our offered solutions are always compatible with the latest versions of all operating systems.</p>

							<p>Moreover, we have a vast experience creating applications and can handle complicated projects that require integration with back-end systems that use PHP and MySQL. Backend expertise is the forte of Techugo and we create impressive technology solutions with our top-notch experienced team.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item clearfix">
                        <div class="technologies_weuseCon clearfix">
                            <div class="technologiesCirbox">
                                <div class="technoCirConbx next4">
                                    <div class="techrelimgbx">
                                        <div class="techthatweuse html ionic"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="technologiesinfodetailsbx">
                                <div class="countitleheadingrw">Technologies</div>
                                <div class="countitlesubheadingrw">IONIC</div>
                                <div class="smtinfo">
                                  <p>Techugo is popular ionic app development company and is well-versed with the know-how related to this specific technology, hence we at Techugo, very well understand how to create interesting and easiest interface, storage footprint, and data access to the users.</p> 

								<p>We are well-equipped with every required and trending technology, and we can build efficient solutions for any mobile platform that interact with client’s requirements.</p>

								<p>Techugo has created uncountable custom solutions for our clients. Techugo Ionic development service, has extended to all major mobile platforms, including iPhone, iPad, Android, along with wearable technology like Apple Watch and Android Wear. Don’t wait and experience the difference with Techugo.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item clearfix">
                        <div class="technologies_weuseCon clearfix">
                            <div class="technologiesCirbox">
                                <div class="technoCirConbx next5">
                                    <div class="techrelimgbx">
                                        <div class="techthatweuse html applewatch"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="technologiesinfodetailsbx">
                                <div class="countitleheadingrw">Technologies</div>
                                <div class="countitlesubheadingrw">WEARABLE</div>
                                <div class="smtinfo">
                                   <p>Technology ecosystem is ever-expanding and is offering a vast range of different services to the users, that help them to experience the best in their pockets. At Techugo we don’t just create an app for the sake of using the technology, rather we do it to try different modes of technologies to be a part of a ready-solution for the users.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item clearfix">
                        <div class="technologies_weuseCon clearfix">
                            <div class="technologiesCirbox">
                                <div class="technoCirConbx next6">
                                    <div class="techrelimgbx">
                                        <div class="techthatweuse html blockchain"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="technologiesinfodetailsbx">
                                <div class="countitleheadingrw">Technologies</div>
                                <div class="countitlesubheadingrw">BLOCKCHAIN</div>
                                <div class="smtinfo">
                                  <p>Blockchain is the most adored technology available in the market and its user-base is only going to increase. So, it is essential for your business to have an application on this platform which offers enormous potential for adding new customers.</p>
                                  <p>Techugo team develops app for Blockchain technology as well as cater the services for the necessary tools to publish or share your application on different app portals. Indeed, Blockchain app development with Techugo , is a fast and responsive experience. Our designing team has solutions to maximize app’s functionality and create a perfect user experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item clearfix">
                        <div class="technologies_weuseCon clearfix">
                            <div class="technologiesCirbox">
                                <div class="technoCirConbx next7">
                                    <div class="techrelimgbx">
                                        <div class="techthatweuse html"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="technologiesinfodetailsbx">
                                <div class="countitleheadingrw">Technologies</div>
                                <div class="countitlesubheadingrw"> REACT</div>
                                <div class="smtinfo">
                                   <p>Techugo team is ready to embark you with powerful, customized and economical React native mobile app solutions, to make it work grow your business model to a large extent. The popularity of React Native is ruling global markets and has further enforced the React Native development services for the customers.</p>
                                     <p>We understand your business needs to make a pace with the immense popularity of on going technical trends, to meet the competitive business goals. Our exclusive React app development services are trusted by customers to deliver world class applications for the React technology.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item clearfix">
                        <div class="technologies_weuseCon clearfix">
                            <div class="technologiesCirbox">
                                <div class="technoCirConbx next8">
                                    <div class="techrelimgbx">
                                        <div class="techthatweuse html iotdev"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="technologiesinfodetailsbx">
                                <div class="countitleheadingrw">Technologies</div>
                                <div class="countitlesubheadingrw">IoT</div>
                                <div class="smtinfo">
                                     <p>The trending technology IoT, is a very much in demand, and is already carving a niche for itself, by offering the incredible technology solutions. Now it becomes highly convenient for you to access the light of your living room, set the temperature of AC and much more, just by tapping on your smartphone. Techugo has successfully delivered the IoT solutions to many industries and businesses across the globe.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--Technologies That we use Section End Here-->

            <!--We Build Products For Start Here-->
            <div class="webuildproducts">
                <div class="counprogressCircle"><span class="wtCir"></span></div>
                <div class="buildheading">We build products for </div>
                <div class="subbuildheading">a multitude of device types</div>
                <div class="smtinfo">Our services are not meant for one specific genre and one specific user types, rather we build technical solution for each type user-base with a plethora of devices. Our built solutions are optimized on target audience and their devices, to help them to gain the most out of it.</div>

                <!--Build Tabs Section Start Here-->
                <ul class="nav nav-tabs appdev">
                    <span class="dottedlinesrow"></span>
                    <span class="dottedlinesrow btm"></span>
                    <li class="phonetablet active"><a data-toggle="tab" href="#phone_tablet"><span class="txtblc">Phone & Tablet</span><span class="numcircleviewbox"><span class="numviewbx">01</span></span> </a></li>
                    <li class="wearables"><a data-toggle="tab" href="#wearables"><span class="txtblc">Wearables</span><span class="numcircleviewbox"><span class="numviewbx">02</span></span></a></li>
                    <li class="smarttv"><a data-toggle="tab" href="#smarttv"><span class="txtblc">Smart TV</span><span class="numcircleviewbox"><span class="numviewbx">03</span></span></a></li>
                    <li class="vrar "><a data-toggle="tab" href="#vrar"><span class="txtblc">VR & AR</span><span class="numcircleviewbox"><span class="numviewbx">04</span></span></a></li>
                    <li class="voiceiot"><a data-toggle="tab" href="#voiceiot"><span class="txtblc">Voice & IOT</span><span class="numcircleviewbox"><span class="numviewbx">05</span></span></a></li>
                    <li class="webdev"><a data-toggle="tab" href="#web"><span class="txtblc">Web</span><span class="numcircleviewbox"><span class="numviewbx">06</span></span></a></li>
                </ul>
                <div class="tab-content">
                    <div id="phone_tablet" class="tab-pane fade in active">
                        <div class="builddevdetailsCon">
                            <div class="tabConbuild clearfix">
                                <div class="buildlogo"><img src="<?= base_url(); ?>assets/images/phone_tab_dev_icon.png" alt="Phone & Tablet" /></div>
                                <div class="buildmoreinfo">
                                    <h4>Phone & Tablet</h4>
                                    <div class="smtinfo">We very well know the complexities involved in the dimension and size of both phone & tablet. Hence we ensure to optimize or devleopemtn strategies and build the incredible solution.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="wearables" class="tab-pane fade">
                        <div class="builddevdetailsCon">
                            <div class="tabConbuild clearfix">
                                <div class="buildlogo"><img src="<?= base_url(); ?>assets/images/wearables_mobile_app_dev.png" alt="wearables" /></div>
                                <div class="buildmoreinfo">
                                    <h4>Wearables</h4>
                                    <div class="smtinfo">We carve out the applications for the wearables to bring high mobility, live access to data, and context-awareness. Our developed solutions are built specially for a great variety of these devices.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="smarttv" class="tab-pane fade">
                        <div class="builddevdetailsCon">
                            <div class="tabConbuild clearfix">
                                <div class="buildlogo"><img src="<?= base_url(); ?>assets/images/smart_tv_app_dev.png" alt="Smart TV" /></div>
                                <div class="buildmoreinfo">
                                    <h4>SMART TV</h4>
                                    <div class="smtinfo">The smart TV mobile application development service is offered by Techugo team, wherein we invest our technical expertise and exposure to build engaging user interface.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vrar" class="tab-pane fade">
                        <div class="builddevdetailsCon">
                            <div class="tabConbuild clearfix">
                                <div class="buildlogo"><img src="<?= base_url(); ?>assets/images/buildicon_arvr.png" alt="VR AR" /></div>
                                <div class="buildmoreinfo">
                                    <h4>virtual reality & augmented reality</h4>
                                    <div class="smtinfo">The turf of technology is getting smarter and engaging with time, and Techugo team very well understand to make the most out of it by utilizing the magnificent functionalities of VR and AR development.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="voiceiot" class="tab-pane fade">
                        <div class="builddevdetailsCon">
                            <div class="tabConbuild clearfix">
                                <div class="buildlogo"><img src="<?= base_url(); ?>assets/images/voice_and_iot_icon.png" alt="Voice & IOT" /></div>
                                <div class="buildmoreinfo">
                                    <h4>Voice & IOT</h4>
                                    <div class="smtinfo">Get access of trending technology if voice recognition and IoT with Techugo. We strive to offer the most promising and engaging apps filled with the trending technologies.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="web" class="tab-pane fade">
                        <div class="builddevdetailsCon">
                            <div class="tabConbuild clearfix">
                                <div class="buildlogo"><img src="<?= base_url(); ?>assets/images/web_dev_icon.png" alt="Web Development" /></div>
                                <div class="buildmoreinfo">
                                    <h4>Web</h4>
                                    <div class="smtinfo">The website for your business is not less than a direct communication passage, which allows users to interact with you. We at Techugo practice the trending web development strategies and help your business to grow.</div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <!--Build Tabs Section Start Here-->
            </div>
            <!--We Build Products For End Here-->

             <!-- Portfolio Section Start Here-->
          <div class="count_portfolio_section">
                  <div class="portfoliotxt">PORTFOLIO<span class="portnm">PORTFOLIO</span></div>
                  <div class="smtinfo">Some of the remarkable work we have done for our clients is scribbled here within. Take a quick look at our breathtaking work in our Portfolio section.</div>
              </div>
            <!-- Portfolio Section End Here-->

        </div>

      <!--Laundry Concept Start Here-->
        <div class="laundry_concept">
            <div class="blcsc"></div>
            <div class="whitesc"></div>
            <div class="laundryheading">Laundry Concept</div>
            <div id="counportfolio" class="owl-carousel countport owl-theme">
                <div class="item clearfix">
                    <div class="laundryContentbx bonoapp">
                        <div class="paginationrwbx">
                            <span class="bulletspoint active">1</span>
                            <span class="bulletspoint next1"></span>
                            <span class="bulletspoint next2"></span>
                            <span class="bulletspoint next3"></span>
                            <span class="bulletspoint next4"></span>
                            <span class="bulletspoint next5"></span>
                        </div>
                        <div class="laundryContent">
                            <div class="apprelscbx"></div>
                            <div class="application_nm">
                                <div class="appslinum">01</div>
                                <div class="applnmrw">Bono application</div>
                            </div>
                            <div class="smtinfo">A peer to peer ride sharing platform that allows people, to share a collective vision of saving the environment, to travel together. It is a location-based mobile app that facilitates sharing by resolving the fundamental issues of security and privacy. It enables users to understand the quantum of their overall contribution to the environment if they shift from “exclusivity” to “sharing”. </div>
                            <div class="applicationlogofixbx">
                                <div class="logocover">
                                    <div class="logoinnercover"><img src="<?= base_url() ?>assets/images/bono_dev_app_logo.png" alt="Bono App Logo" /></div>
                                </div>
                            </div>
                            <div class="application_onstore"><span class="begline"></span><span class="onstoretxt">Available on stores</span> <a href="https://itunes.apple.com/in/app/bono-carpool-bikepool/id1253365104?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a> <a href="https://play.google.com/store/apps/details?id=com.techugo.buno&hl=en" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="item clearfix">
                    <div class="laundryContentbx laundit">
                        <div class="paginationrwbx">
                            <span class="bulletspoint"></span>
                            <span class="bulletspoint next1 active">2</span>
                            <span class="bulletspoint next2"></span>
                            <span class="bulletspoint next3"></span>
                            <span class="bulletspoint next4"></span>
                            <span class="bulletspoint next5"></span>
                        </div>
                        <div class="laundryContent">
                            <div class="apprelscbx"></div>
                            <div class="application_nm">
                                <div class="appslinum">02</div>
                                <div class="applnmrw">Laundit application</div>
                            </div>
                            <div class="smtinfo">Laundit offers the convenience at its best, by making it quick and easy for laundry service providers to market their services, special offers, reach new customers and grow their business via our platform. At the same time, users get the convenience of laundry services at their doorsteps.</div>
        
                            <div class="applicationlogofixbx">
                                <div class="logocover">
                                    <div class="logoinnercover"><img src="<?= base_url() ?>assets/images/laundit_logo.png" alt="Laundit App Logo" /></div>
                                </div>
                            </div>
                            <div class="application_onstore"><span class="begline"></span><span class="onstoretxt">Coming Soon</span> <i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
        
                <div class="item clearfix">
                    <div class="laundryContentbx alballam">
                        <div class="paginationrwbx">
                            <span class="bulletspoint"></span>
                            <span class="bulletspoint next1"></span>
                            <span class="bulletspoint next2 active">3</span>
                            <span class="bulletspoint next3"></span>
                            <span class="bulletspoint next4"></span>
                            <span class="bulletspoint next5"></span>
                        </div>
                        <div class="laundryContent">
                            <div class="apprelscbx"></div>
                            <div class="application_nm">
                                <div class="appslinum">03</div>
                                <div class="applnmrw">Alballam Group</div>
                            </div>
                            <div class="smtinfo">An app designed & developed for Mr. Hassan AlBallam- a known and most popular Kuwaiti actor. App comes with a feature of Chromecast, letting users to watch TV episodes and movies with the best experience anywhere, anytime. </div>
                            <div class="applicationlogofixbx">
                                <div class="logocover">
                                    <div class="logoinnercover"><img src="<?= base_url() ?>assets/images/portfolio/alballam_logo.png" alt="Alballam Group" /></div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
        
                <div class="item clearfix">
                    <div class="laundryContentbx waki">
                        <div class="paginationrwbx">
                            <span class="bulletspoint"></span>
                            <span class="bulletspoint next1"></span>
                            <span class="bulletspoint next2"></span>
                            <span class="bulletspoint next3 active">4</span>
                            <span class="bulletspoint next4"></span>
                            <span class="bulletspoint next5"></span>
                        </div>
                        <div class="laundryContent">
                            <div class="apprelscbx"></div>
                            <div class="application_nm">
                                <div class="appslinum">04</div>
                                <div class="applnmrw">Waki</div>
                            </div>
                            <div class="smtinfo">A revolutionary ecommerce portal in Saudi Arabia, helping in transmuting the way users access the technology to buy different products online. It caters to everyone and encompasses every need of the users ranging from apparels, fashion, food, gadgets electronics and everything else under the sun.</div>
        
                            <div class="applicationlogofixbx">
                                <div class="logocover">
                                    <div class="logoinnercover"><img src="<?= base_url() ?>assets/images/portfolio/waki_logo.png" alt="Waki" /></div>
                                </div>
                            </div>
                            <div class="application_onstore"><span class="begline"></span><span class="onstoretxt">Coming Soon</span> <i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
        
                <div class="item clearfix">
                    <div class="laundryContentbx syncare">
                        <div class="paginationrwbx">
                            <span class="bulletspoint"></span>
                            <span class="bulletspoint next1"></span>
                            <span class="bulletspoint next2"></span>
                            <span class="bulletspoint next3"></span>
                            <span class="bulletspoint next4 active">5</span>
                            <span class="bulletspoint next5"></span>
                        </div>
                        <div class="laundryContent">
                            <div class="apprelscbx"></div>
                            <div class="application_nm">
                                <div class="appslinum">05</div>
                                <div class="applnmrw">Syncare</div>
                            </div>
                            <div class="smtinfo">It is basically an instant communication and task management tool for healthcare professionals. Syncare helps the clinical team members to collaborate the workflow during on-call, clinical rounds, hospital at nights and handover meetings to deliver the best patient care.</div>
                            <div class="applicationlogofixbx">
                                <div class="logocover">
                                    <div class="logoinnercover"><img src="<?= base_url() ?>assets/images/syncare_logo.png" alt="Syncare" /></div>
                                </div>
                            </div>
                            <div class="application_onstore"><span class="begline"></span><span class="onstoretxt">Coming Soon</span> <i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
        
                <div class="item clearfix">
                    <div class="laundryContentbx browzly">
                        <div class="paginationrwbx">
                            <span class="bulletspoint"></span>
                            <span class="bulletspoint next1"></span>
                            <span class="bulletspoint next2"></span>
                            <span class="bulletspoint next3"></span>
                            <span class="bulletspoint next4"></span>
                            <span class="bulletspoint next5 active">6</span>
                        </div>
                        <div class="laundryContent">
                            <div class="apprelscbx"></div>
                            <div class="application_nm">
                                <div class="appslinum">06</div>
                                <div class="applnmrw">Browzly</div>
                            </div>
                            <div class="smtinfo">Browzly promotes and encourages reading in schools. It is creates a reading network for the users to transform the reading into more social, accessible and measurable, hence it can be relished. It helps connecting students, teachers and parents and makes them read, review, swap, inspire & share school posts and updates with ease.</div>
                            <div class="applicationlogofixbx">
                                <div class="logocover">
                                    <div class="logoinnercover"><img src="<?= base_url() ?>assets/images/portfolio/browzly_logo.png" alt="Browzly" /></div>
                                </div>
                            </div>
                            <div class="application_onstore"><span class="begline"></span><span class="onstoretxt">Available on App Store</span>
                                <a href="https://itunes.apple.com/in/app/browzly/id1226401549?mt=8" target="_blank"> <i class="fa fa-apple" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
        <!--Laundry Concept Start Here-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="<?php echo base_url('/assets/js/jquery.counterup.min.js')?>"></script>
<script src="<?php echo base_url('/assets/js/waypoints.min.js')?>"></script>
<script>
    $(function() {
        $('#techthatweuse').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: false,
        animateOut: 'fadeOut',
        mouseDrag: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    });

    $('#counportfolio').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: false,
        animateOut: 'fadeOut',
        mouseDrag: false,
        paginationNumbers: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    });
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});
</script>
