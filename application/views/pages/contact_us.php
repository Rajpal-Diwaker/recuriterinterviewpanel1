<style>
div#message {
    text-align: center;
    margin-top: 10px;
    font-weight: bold;
    font-size: 17px;
}
</style>
<?php 
$server=$_SERVER['HTTP_HOST'];
?>
<!--Contact Page Content Start Here--> 

<!--Contact Form Section Start Here-->
<script type="text/javascript">
    var a = Math.ceil(Math.random() * 10);
    var b = Math.ceil(Math.random() * 10);       
    var c = a + b
    function DrawBotBoot()
    {
        document.write("What's <span class='captchtext captcha-num'>"+ a + " + " + b +" = </span>");
        document.write("<input id='capt' name='capt' autocomplete='off' type='text' maxlength='2' size='2'/>");
        document.write("<input id='res' name='res' type='hidden' value = "+(a+b)+" />");
    }    
    function ValidBotBoot(){
        var d = document.getElementById('capt').value;
        var result = document.getElementById('res').value;
        if (d == result){ 
          return true;
        }else{
            $('span.error').text('Captcha Validation is failed. please try again !!').show().fadeOut( 4000 );
          return false;
        }   
    }
    </script>
  <section class="section">
    <div class="letContentboxex">
      <div class="letConnectWrap">
        <h1 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Let’s CONNECT</h1>
        <form action="" method="POST" id ="myForm" enctype='multipart/form-data'>
          <div class="contactFormCon">
            <div class="row equalHMWrap eqWrap clearfix">
              <div class="col-sm-3 messagenone"> <span class="rtbdr"></span>
                <div class="sendmessagebx">
                  <div class="leftmessageicon" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"></div>
                  <h5 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">you are just this form away from getting the next</h5>
                  <h3 data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Revolutionary app </h3>
                  <h4 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">For your business</h4>
                </div>
              </div>
              <div class="col-sm-9 formwd100">
                <div class="row clearfix">
                  <div class="col-sm-6">
                    <div class="floating-form">
                      <div class="floating-label">
                        <input class="floating-input" name="fullname" id ="fullname" type="text"  placeholder=" ">
                        <label>Name</label>
                      </div>
                      <div class="floating-label">
                        <input class="floating-input" name="email" type="text"  placeholder=" ">
                        <label>Email</label>
                      </div>
                      <div class="floating-label">
                        <input class="floating-input" name="contact" type="text"  placeholder=" " onkeypress="return isNumberKey(event)">
                        <label>Phone No.</label>
                      </div>
                      <div class="floating-label">
                        <input class="floating-input" name="skypeId" type="text"  placeholder=" ">
                        <label>Skype ID</label>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-sm-6">
                    
                    <div class="form-group">
                      <div class="uploadfilesbx">
                        <div class="uploadtext">Upload File</div>

                        <div class="upload_file clearfix">
                            <input type="file" style="display:none;" onchange="readname(this);" name="filename" id="file"  required="">
                            <label for="file" class="uploadfile_icon icon_plus"> 
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <i class="fa fa-minus"  aria-hidden="true"></i>
                            </label>
                            <span class="filenmsave"></span>
                            <strong>Attach file</strong>
                      </div>
                      
                      </div>
						  <label class="error_show" style="display:none; color:#ff0000; font-weight: normal;" >File size should be less than 10 Mb.</label>
                    </div>
                    <div class="floating-label">
                      <textarea class="floating-input floating-textarea" placeholder=" "  name="query"></textarea>
                      <label>Query</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                <div class="ndachecks">
                    <input type="checkbox" id="disclose" name="nda">
                    <label for="disclose"></label> 
                  </div>
                  <div class="ndschecktxt">Request your copy of Non Disclosure Agreement.</div>
                  <div class="nxtlevel">Your idea is safe with us, we know the value of an idea.</div>
                </div>
              </div>
            </div>
            <div class="row padbt130 clearfix">
              <div class="col-sm-8 wd62">
                <div class="letstextrw">
                  <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">Let’s Discuss</h3>
                  <ul data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
                    <li><span class="landline"></span><a href="tel:1 360-322-4913">+1 360-322-4913</a></li>
                    <li><span class="mobile"></span><a href="tel:966-713-4400">+91 966-713-4400</a></li>
                    <li><span class="email"></span><a href="mailto:sales@techugo.com">sales@techugo.com</a></li>
                    <li><span class="web"></span><a href="https://www.techugo.com">www.techugo.com</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 wd38">
                <div class="robotbx">
                    <div class="captch-text">
                      <span class="error"></span>
                        <div class="captchsec"> 
                        <script type="text/javascript">DrawBotBoot()</script>
                                                 </div>
                      </div>
                </div>
                <div class="consubmitrw">
                  <button class="btn btn-primary conSubmit" name="submit" value="submit" onclick="JavaScript:return ValidBotBoot();"> Submit</button>
                </div>
				  <div id="message"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <!--Counter Section Start Here-->
    <div class="numericrw contactpg">
      <ul class="clearfix">
        <li data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0"> <span class="counter">475</span> <span class="plusicon">+</span>
          <div class="numtxt">Applications <span>Developed</span></div>
           </li>
        <li data-aos="fade-up"  data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0"><span class="plusicon">$</span> <span class="counter">64</span> <span class="plusicon">M+</span>
          <div class="numtxt">FUNDING <span>RAISED</span></div>
           </li>
        <li data-aos="fade-down"  data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0"> <span class="counter">157</span> <span class="plusicon">+</span>
          <div class="numtxt">COFFEE DRINKING <span>DAILY</span></div>
          </li>
      </ul>
    </div>
     <!--Counter Section End Here-->
    
  </section>
  <!--Contact Form Section End Here--> 
  
  
  <!--Let's Meet Section Start Here-->
  <section class="letsmeetwrap">
    <h3 data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">Tell us a bit about yourself. Nothing extraordinary, just the basics.</h3>
    <h4 data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">We'll get back to you within 2 hours!</h4>
    <!--Noida Office Section Start Here-->
    <div class="letmeetAddbx">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-6" data-aos="fade-right"  data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
          <div class="addressviewimgbx">
            <div class="addimgSh"><img class="img-responsive" src="<?php echo base_url('assets/images/india_gate.jpg'); ?>" alt="india_gate" /></div>
          </div>
        </div>
        <div class="col-sm-6" data-aos="fade-left"  data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
          <div class="companyaddressbx">
            <div class="comAddbx">
              <h3>Noida <small>(Headquarter)</small></h3>
              <div class="companyinfobx">We utilize this comfy and ever-creative office space in Noida, India and work closely with clients ranging from Fortune 500 to budding startups, who are looking forward to becoming industry leaders. Our office is situated next to some of the power-packed automobile leaders; BMW, which turns out to be one of our famous landmarks.</div>
              <div class="permanentAddrw clearfix">
                <div class="addiconf"><span class="delhi"></span></div>
                <div class="perAddwr">
                  <p>A-26, Sector-63, </p>
                  <p>Noida 201301, Uttar Pradesh, India</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Noida Office Section End Here--> 
    
    <!--Dubai Office Section Start Here-->
    <div class="letmeetAddbx dubai">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-6" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
          <div class="addressviewimgbx">
            <div class="addimgSh"><img class="img-responsive" src="<?php echo base_url('assets/images/dubai_add.jpg'); ?>" alt="dubai_add" /></div>
          </div>
        </div>
        <div class="col-sm-6" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
          <div class="companyaddressbx">
            <div class="comAddbx">
              <h3>Dubai</h3>
              <div class="companyinfobx">While our roots are in India, but a part of us belongs to the UAE as well. Our UAE office team has developers and designers, who are overly enthusiastic and have helped some of the biggest agencies in the UAE. With our UAE presence, we help clients take a big bite out of their revenue fruit.</div>
              <div class="permanentAddrw clearfix">
                <div class="addiconf"><span class="dubai"></span></div>
                <div class="perAddwr">
                  <p>Emaar Square, Boulevard Plaza </p>
                  <p>Tower 1, Dubai</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Noida Office Section End Here--> 
    
    <!--United States Office Section Start Here-->
    <div class="letmeetAddbx united_states">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-6" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
          <div class="addressviewimgbx">
            <div class="addimgSh"><img class="img-responsive" src="<?php echo base_url('assets/images/united_states_america.jpg'); ?>" alt="united_states_america" /></div>
          </div>
        </div>
        <div class="col-sm-6" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
          <div class="companyaddressbx">
            <div class="comAddbx">
              <h3>United States</h3>
              <div class="companyinfobx">We have beautifully captured the street of Virginia Atlantic. We are honored to work here in the Dulles, VA and are focusing towards creating the structured edge while bringing an elegant and refined aesthetic appeal. To cut the chaos short, you can't miss Techugo on VA streets. </div>
              <div class="permanentAddrw clearfix">
                <div class="addiconf"><span class="united_states"></span></div>
                <div class="perAddwr">
                  <p>22375 Broderick Dr, Suite 225, Dulles</p>
                  <p>VA 20166</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--United States Office Section End Here--> 

      <!--Canada Office Section Start Here-->
      <div class="letmeetAddbx canada_ads">
      <div class="row equalHMWrap eqWrap clearfix">
        <div class="col-sm-6" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
          <div class="addressviewimgbx">
            <div class="addimgSh"><img class="img-responsive" src="<?php echo base_url('assets/images/canada_add.jpg'); ?>" alt="Techugo Canada" /></div>
          </div>
        </div>
        <div class="col-sm-6" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
          <div class="companyaddressbx">
            <div class="comAddbx">
              <h3>Canada</h3>
              <div class="companyinfobx">We’re ever expanding and have extended our presence to Canada. Our Canada office has an elite team with zero compromises on quality, professionalism and timely deliveries. Our team is a bunch of techies who embrace their quirks and are passionate about the work.</div>
              <div class="permanentAddrw clearfix">
                <div class="addiconf"><span><img src="<?php echo base_url('assets/images/canada_icon_adss.png'); ?>" alt="Techugo Canada Address" /></span></div>
                <div class="perAddwr">
                  <p>139 Baroness Drive</p>
                  <p>Nepean ON K2G 6Z2</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Canada Office Section End Here--> 
    
  </section>
  <!--Let's Meet Section End Here--> 
  
  <!--Buzz Away Section Start Here-->
  <div class="buzzway">
    <div class="buzzawayCon">
      <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">Reach us as per your convenient mode…We are just a </h3>
      <h1 data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-offset="0">Buzz away!!!</h1>
    </div>
    <img class="img-responsive" src="<?php echo base_url('assets/images/google-map.png'); ?>" alt="google-map" /> </div>
  <!--Buzz Away Section End Here--> 
  
  <!--Footer Sitemap Start Here-->
  <div class="footerSitemapwrap"> <span class="topbdr"></span>
    <div class="sitemapmenu clearfix">
      <div class="menubox com_heading" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
         <h3>Company<span class="btmline"></span></h3>
        <ul class="nav navbar-nav com_heading">
          <li><a href="<?php echo base_url('about') ?>">About Us</a></li>
          <li><a href="<?php echo base_url('portfolio.php') ?>">Portfolio</a></li>
          <li><a href="<?php echo base_url('/blog') ?>">Blog</a></li>
          <li><a href="<?php echo base_url('contact-us.php'); ?>">Contact Us</a></li>
          <li><a href="<?php echo base_url('career'); ?>">Career</a></li>
        </ul>
      </div>
      <div class="menubox" data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <h3>Services <span class="btmline"></span></h3>
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url('android-application-development.php') ?>">Android Development</a></li>
          <li><a href="<?php echo base_url('iphone-application-development.php') ?>">iOS Development</a></li>
          <li><a href="<?php echo base_url('ionic-development') ?>">Ionic Framework</a></li>
          <li><a href="<?php echo base_url('php-development.php') ?>">PHP/Node.js Development</a></li>
          <li><a href="<?php echo base_url('ui-ux-development') ?>">UI/UX</a></li>
        </ul>
      </div>
      <div class="menubox" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <h3>&nbsp;</h3> 
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url('qa-process-design.php') ?>">Quality Assurance</a></li>
          <li><a href="<?php echo base_url('react-native-development') ?>">React Native <span>App</span> Development</a></li>
          <li><a href="<?php echo base_url('wearables') ?>">Wearable <span>App</span> Development</a></li>
          <li><a href="<?php echo base_url('blockchain') ?>">Blockchain <span>App</span> Development</a></li>
          <li><a href="<?php echo base_url('vr-development') ?>">Virtual Reality</a></li>
        </ul>
      </div>
      <div class="menubox" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <h3 class="serheadinng">&nbsp;</h3>
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url('augmented-reality') ?>">Augmented Reality</a></li>
          <li><a href="<?php echo base_url('internet-of-things') ?>">Internet Of Things</a></li>
          <li><a href="<?php echo base_url('artificial-intelliegence') ?>">Artificial Intelligence</a></li>
          <li><a href="<?php echo base_url('chatbots') ?>">Chatbots</a></li>
        </ul>
      </div>
    </div>
    <div class="footerguides">
      <h3 data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600">Guides <span class="btmline"></span></h3>
      <div class="row clearfix">
        <div class="col-sm-4 col-md-2" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">
           <h5><a href="<?php echo base_url('mobile-app-development-company.php') ?>">Mobile App Development</a></h5>
        </div>
        <div class="col-sm-8 col-md-10">
          <div class="linel"  data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600"></div>
        </div>
      </div>
    </div>
    <div class="copyrtrw" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
      <p>2019-2020 &copy; Techugo</p>
      <p><a href="<?php echo base_url('sitemap.php') ?>">SiteMap</a> | <a href="<?php echo base_url('policies') ?>">Privacy Policy</a></p>
    </div>
    <!-- <div class="littleinfo" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0">Locate us with an ease</div> -->
    <div class="dmcarw">
      <div class="row clearfix">
        <div class="col-sm-2 cenpos" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0"><img src="<?php echo base_url('assets/images/dmca.jpg'); ?>" width="100" height="50" alt="dmca" style="margin-top:10px;" /></div>
        <div class="col-sm-9">
          <div class="socialmediaiconsrow" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="0">
            <ul class="social-network social-circle" >
                <li><a href="https://www.linkedin.com/company/techugo-private-limited" class="icoLinkedin" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/techugo_apps" class="icoTwitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/techugo.apps/" class="icoFacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://dribbble.com/techugo" class="icodribble" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="https://www.instagram.com/techugo/" class="icoinstagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCEHjSuF8IhNx1NzuADlbMiA" class="icoyoutube" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://www.behance.net/Techugo" class="icobehance" title="Behance" target="_blank"><i class="fa fa-behance"></i></a></li>
                <li><a href="https://www.pinterest.com/techugo_/" class="icopinterest" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="mailto:sales@techugo.com" class="emails" title="Email"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-1">
          <div class="chaticonrw">
            <div class="chaticon"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Footer Sitemap End Here--> 
<!--Contact Page Content End Here--> 
<script src="<?php echo base_url('/assets/js/jquery.counterup.min.js')?>"></script>
<script src="<?php echo base_url('/assets/js/waypoints.min.js')?>"></script>

<script>
 AOS.init({
        easing: 'ease-in-out-sine'
 });
 $(function() {
 $('.counter').counterUp({
		  delay: 10,
		  time: 1000
    });
});
</script>
<script>
    function readname(input) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        console.log(fileName);
       // document.getElementsByClassName("filenmpnt")[0].innerText = fileName;
        input.parentElement.getElementsByTagName("div")[0].innerText = fileName;
    }
</script>


</body>
</html>

<script src= "https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script>
	$.validator.addMethod("myusername", function(value,element) {
    		return this.optional(element) ||
            /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(value);
			}, "Email format is incorrect.");
	$.validator.addMethod("noSpace", function(value, element) { 
		  return value == '' || value.trim().length != 0;  
		}, "No spaces allowed !! please don't leave it empty.");
	$.validator.addMethod("lettersonly", function(value, element) {
		 return this.optional(element) || /^[a-z\s]+$/i.test(value);},"Please enter letters only."
	  );
	
	$.validator.addMethod("mobile", function(phone_number, element) {
		phone_number = phone_number.replace(/\s+/g, ""); 
		return this.optional(element) || phone_number.length > 5 &&
		phone_number.match(/([0-9]{6})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/);
		}, "Phone number should be of 6 to 15 digits.");
	
	//$('#myForm input').bind("cut copy paste",function(e) {
	//e.preventDefault();
	//});
	
$(document).ready(function() {
    $("#myForm").validate({
        rules: {
            fullname:{
              required: true,
			 lettersonly:true,
              maxlength: 50,
			 noSpace:true
            }, 
            email: {
                required: true,
				myusername: true,
             noSpace:true
            },
             contact: {
                required: true,
				minlength:6,
				maxlength: 15,
              noSpace:true,
                mobile:true
            },
			query: {
                required: true
            },
            capt:{
              required: true
            },
			skypeId:{
				  maxlength: 50
			}
		  },
           messages: {
            fullname: {
              required:"Please enter your name",
              maxlength:"Name should be less than 50 characters"
              },            
            email: {
                required: "Please enter Email ID",
               },
           contact: {
                required: "Please enter contact number",
				 minlength:"Phone number should be of 6 to 15 digits.",
         maxlength:"Phone number should be of 6 to 15 digits. "
	            },
            query: {
                required: "Please enter your query"
            },
			 skypeId:{
				  maxlength: "Skype ID should be less than 50 characters"
			}
		   },
          submitHandler: function (form) {
            var formData = document.getElementById("myForm");
              var Data = new FormData(formData);
              //console.log(Data);
                var url = "<?php echo base_url('contact/contact_copy'); ?>";
              

                $.ajax({
                      type: "POST",
                      url: url,
                      data: Data, // serializes the form's elements.
                      cache: false,
                      contentType: false,
                      processData: false,
                      success: function(data)
                      {     
                        console.log(data);
                          if(data ==1){ 
							 window.location.href = "<?php echo base_url('/thankyou'); ?>";
                            }

                      }
                    });
                }
    });
  

	
	  $("#fullname").keypress(function(event){
var regex = new RegExp("^[a-zA-Z ]*$");
		console.log(regex);
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});
	
	$('#file').bind('change', function() {
		var a=(this.files[0].size);
		if(a > 10000000) {
	$('.error_show').show();
	$('#file').val('');
	$('span.fileinput-filename').text('');
		};
	});
});
	
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      
      }
    //Upload File
function readname(input) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  input.parentElement.getElementsByTagName("span")[0].innerText = fileName;
  input.parentElement.querySelector(".uploadfile_icon").classList.add("icon_minus");
  input.parentElement.querySelector(".uploadfile_icon").classList.remove("icon_plus");
  input.parentElement.querySelector("label").removeAttribute('for');
  input.parentElement.querySelector(".uploadfile_icon.icon_minus").addEventListener("click", removefile);
}
function removefile(){
  document.querySelector(".upload_file input").value='';
  document.querySelector(".upload_file span").innerText='';
  document.querySelector(".uploadfile_icon").classList.add("icon_plus");
  document.querySelector(".uploadfile_icon").classList.remove("icon_minus");
  setTimeout(function(){ document.querySelector(".upload_file label").setAttribute('for','file'); }, 00);  
}

</script>
