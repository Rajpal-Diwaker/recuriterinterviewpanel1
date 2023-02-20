<!--Testing Content Start Here-->
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
<div class="mobileappdevebanwrap blc testing heightauto clearfix">

    <div class="appdevimgbx blockchain" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-duration="600"> <img src="<?php echo base_url('assets/images/testing_banner.png'); ?>" alt="testing_banner" /> </div>

    <div class="leftdescriptionbx blcchain">

      <h1 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">IMPARTING BUG-FREE APP <br>EXPERIENCE</h1>

      <div class="sminfotbx" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">The testing allows you to gauge an app's ability to handle the pressure and traffic, which is likely to increase from users on a regular basis. Also, it helps the UI/UX design to be complemented further by making it glitch-free.</div>

    </div>

  </div>

  

  <!--App Testing Info Start Here-->

  <div class="apptestingsection">

    <i class="fa fa-search" aria-hidden="true" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600"></i>

    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"><h2>Testing</h2></div>

    <div class="subheadingrow clearfix" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600">

      <div class="linesrow"></div>

      <div class="textbxrow">What It Is All About?</div>

      <div class="linesrow"></div>

    </div>

    <div class="smtinfo" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">

      <p>It is one of the most crucial stages of development, wherein every single error within the product is analyzed with the help of professional testers, who scrutinize the end-product from every angle possible to sieve out the bugs out of the seamless performance.

        </p>

      <p>Something which sets a successful solution different from a normal is all due to the seamless performance, which can be achieved only through the QA, as the final seal on the deal, predicting there is no glitch to be experienced by the users.</p>

    </div>

  </div>

  <!--App Testing Info End Here-->



  <!--Why App Testing Section Start Here-->

    <div class="whyiossection testing clearfix">

        <div class="whyiosrtbox testing">

          <div class="first_circle" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="300">

            <div class="second_circle" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="400">

              <div class="imgbxx" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="500"></div>

            </div>

          </div>

        </div>

        <div class="whysiOSContentbx">

          <div class="whyapptesting" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">

             <div class="testingheading">Why QA Is Not Optional?</div>

            <div class="smtinfo">The need of the QA does not need any introduction, as the existence of many businesses in today’s scenario, is only possible through the trending technology only. These products need to go through the rigid Quality Analysis process to confirm their compatibility with the users’ demands.</div>

          </div>

        </div>

      </div>

  <!--Why App Testing Section End Here--> 



  <!--Why Testing Number Row Start Here-->

      <div class="testingnumberrow">

        <div class="row equalHMWrap eqWrap clearfix">

          <div class="col-xs-6 col-sm-3 testingrtbd" data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="600">

            <div class="testingnumberbx">

              <div class="numberstroke">01</div>

              <div class="testnuminfo">It eliminates the risk of rejection due to low performance 

                </div>

            </div>

          </div>

          <div class="col-xs-6 col-sm-3 testingrtbd none" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">

            <div class="testingnumberbx">

              <div class="numberstroke">02</div>

              <div class="testnuminfo">Helps in garnering the quality, performance, & functionality

                </div>

            </div>

          </div>

          <div class="col-xs-6 col-sm-3 testingrtbd" data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="600">

            <div class="testingnumberbx">

              <div class="numberstroke">03</div>

              <div class="testnuminfo">Let it get an edge over competitors</div>

            </div>

          </div>

          <div class="col-xs-6 col-sm-3" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">

            <div class="testingnumberbx">

              <div class="numberstroke">04</div>

              <div class="testnuminfo">The app becomes a successful product due to efficient performance</div>

            </div>

          </div>

        </div>

      </div>

  <!--Why Testing Number Row End Here-->



  <!--Why Need Techugo Start Here-->



  <div class="picktechugobox testing"> <img src="<?php echo base_url('assets/images/pick_techugo.png'); ?>" alt="pick_techugo6" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="800" />

    <div class="container">

      <div class="headingbx" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Why You Need Techugo?</div>

      <div class="pickinfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"><p>At Techugo, we aim to transform each of our developed solutions to be successful and efficient enough to bring profits to your business. Our team has a dedicated team of experienced testers, who prefer software testing  on real devices utilizing the different methods of testing to deliver unmatchable user experience. </p>

      <p>The stack of our testing consists of:</p></div>

    </div>

  </div>

  <!--Why Need Techugo End Here--> 

  

  <!--Testing Type Listing Section Start Here-->

  <div class="testingtypelistsection">

    <div class="row clearfix">

      <div class="testingtypelistrow clearfix">

      <div class="col-sm-6">

        <div class="blcdvelopemtrow testing">

            <div class="blcdevCon">

              <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">1</div>

              <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Alpha Mode</h4>

              <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">Our testers imply the Alpha mode to identify the every minute defect or the bug , it might be conducted before the beta testing process. This helps in abundance as it saves the time for reworking on the product after the bugs could be reported at the Beta Quality Analysis process.</div>

            </div>

          </div>

      </div>

      <div class="col-sm-6 testmobileview">

		 

        <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_01" /></div>

      </div>

     </div>



     <div class="testingtypelistrow clearfix">

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_02" /></div>

        </div>

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">2</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Acceptance Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">We ensure to indulge our clients to share their views and opinion about any issue faced during the performance. Here the clients check and verify every bit of the functionality and the feature works in accordance with the expectations.</div>

              </div>

            </div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">3</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Ad-hoc Testing</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">We conduct this mode on the ad-hoc, letting the testing process not to be influenced by any case or documentation to get a fresh perspective on the methodology. However without the test case, it is a difficult task, but we do it, so any iota of the bug can be caught at this level.</div>

              </div>

            </div>

        </div>

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_03" /></div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_04" /></div>

        </div>

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">4</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Beta Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">This Real Environment process we follow, to ensure that product works as per its aimed requirements and the users’ expectations. Within this, we collect feedback from the real-time users and work on it, to help our end-product to grow successful further.</div>

              </div>

            </div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">5</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Back-end Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">Our team is well-equipped with the different methods and with back-end mode, we check the data stored in the front-end to understand the table structure, schema, and the data structure to name a few.</div>

              </div>

            </div>

        </div>

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_05" /></div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_06" /></div>

        </div>

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">6</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Browser Compatibility Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">We conduct the Browser Compatibility mode, for the web applications. It allows the QA team to be sure of the product’s compatibility with different browsers and OSs specific demands.  </div>

              </div>

            </div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">7</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Black Box Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">We carry out this mode to determine whether the internal system design of the mobile solution is fitting the needs of the users’ requirement.</div>

              </div>

            </div>

        </div>

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_07" /></div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_08" /></div>

        </div>

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">8</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Compatibility Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">Our QA team prefers to validate that how the solution runs and behaves in different environments. This helps us to realize that product runs effortlessly on different database and configuration without an issue.</div>

              </div>

            </div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">9</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">End-to-End Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">In this process, we cross-check and validate the complete mobile solution from tip-to-toe, excluding any type of error or bug within the product.</div>

              </div>

            </div>

        </div>

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_09" /></div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_10" /></div>

        </div>

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">10</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Example Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">Calling it an informal way is much accurate, at Techugo we test the flow of the solution and note down the changes with the help of documentation and test cases.

                  </div>

              </div>

            </div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">11</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Exploratory Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">We conduct this testing on the ad-hoc, letting the testing process not to be influenced by any case or documentation to get a fresh perspective on the testing methodology. However without the test case is a difficult task, but we do it, so any iota of the bug can be caught at the testing level.</div>

              </div>

            </div>

        </div>

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_11" /></div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_12" /></div>

        </div>

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">12</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Graphical User Interface (GUI) Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">As the name suggests, we test the Graphics utilized within the business solution fitting the business requirements, such as button size, input field on the screen, text-alignment, tables and content mentioned within the tables.</div>

              </div>

            </div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">13</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Gorilla Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">This strategy is conducted for a specific module or functionality, sieve thoroughly to bring out any glitch present in the solution.</div>

              </div>

            </div>

        </div>

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_13" /></div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_14" /></div>

        </div>

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">14</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Happy Path Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">This sort of strategy is conducted to ensure the valid and positive features of the solution, which can generate better revenue for your business.</div>

              </div>

            </div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">15</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Incremental Integration Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">We conduct this specific part, on the addition of new functionality within the product, to check its performance and compatibility on different levels.</div>

              </div>

            </div>

        </div>

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_15" /></div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_16" /></div>

        </div>

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">16</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Integration Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">Within this segment, we check the different modules, like: code modules, client/server applications on a specific network.</div>

              </div>

            </div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">17</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Integration Testing</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">Within this segment, we test the different app modules, like: code modules, client/ server applications on a specific network.</div>

              </div>

            </div>

        </div>

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_17" /></div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_18" /></div>

        </div>

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">18</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Load Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">This type is carried out to check that how much load a solution can bear without any performance degradation.</div>

              </div>

            </div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">19</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Monkey Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">This is the unique way to analyze that if there is any random input of value and data, that how far it can bear the pressure before crashing down.</div>

              </div>

            </div>

        </div>

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_19" /></div>

        </div>

       </div>



       <div class="testingtypelistrow clearfix">

        <div class="col-sm-6 testmobileview">

          <div class="testingicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"><img class="img-responsive" src=" <?php echo base_url('assets/images/testing_type_icon_01.png'); ?>" alt="testing_type_icon_20" /></div>

        </div>

        <div class="col-sm-6">

          <div class="blcdvelopemtrow testing">

              <div class="blcdevCon">

                <div class="numbx" data-aos="zoom-out-right" data-aos-easing="ease-in-sine" data-aos-duration="700">20</div>

                <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">Negative Mode</h4>

                <div class="blcdevesminfo" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700">Our QA team ensures not to leave any scope for non-performance. Hence we conduct the negative testing, where the invalid data is used to check whether the solution gives the error message as expected.</div>

              </div>

            </div>

        </div>

       </div>



    </div>

  </div>

  <!--Testing Type Listing Section End Here--> 



   <!--Testing Keyword Section Start Here-->

   <div class="rectkeywordswrap testing">

     <h3 data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">We are different from our competitors, as we don’t believe in one-size –fits-for-all, therefore we prefer manual testing of the products along with different other scenarios and not just one, to bring out the best out of your business solution.</h3>

    <div class="row clearfix"  data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">

      <div class="col-xs-12 col-sm-6 padzerow">

        <div class="keywordrow"><span></span>We have a well-equipped Quality Analysis lab, consisting the advanced tools and real devices coupled with simulators</div>

      </div>

      <div class="col-xs-12 col-sm-6 padzerow">

        <div class="keywordrow lastbdr"><span class="lightblue"></span>We have a large and the most proficient QA team </div>

      </div>

    </div>

    <div class="row clearfix"  data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">

      <div class="col-xs-12 col-sm-4 padzerow">

        <div class="keywordrow btmbdr"><span class="light_red"></span>We utilize the best tools in the market; Appium, Calabash, Selendroid, and Robotium to name a few.</div>

      </div>

      <div class="col-xs-12 col-sm-4 padzerow">

        <div class="keywordrow btmbdr"><span class="blued"></span>Our applications receive the MILLIONS of downloads due to their seamless performance and error-free user experience</div>

      </div>

      <div class="col-xs-12 col-sm-4 padzerow">

        <div class="keywordrow btmbdr lastbdr"><span class="light_purple"></span>We stay available for our client 24*7 for any support & maintenance.</div>

      </div>

    </div>

  </div>

<!--Testing Keyword Section End Here-->