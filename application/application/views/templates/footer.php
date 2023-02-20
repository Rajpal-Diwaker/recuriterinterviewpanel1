      <!--Lets Talk About Projects Start Here-->
      <section class="section letstalkAboutprojects normalheight">
        <div class="letstalkprojectsCon">
          <div class="row clearfix">
            <div class="col-sm-7 col-md-8">
              <div class="letstalkpCon">
                <div class="letstheading">You have made <span>this far!<i></i></span></div>
                <div class="simpletxt">
                  <p>How about a Coffee together!</p>
                  <p>Spill the beans – Share your idea</p>
                  <p>And get a blueprint of your product, for free!</p>
                </div>
                <div class="gettingtouchbox">
                  <div class="row clearfix">
                    <div class="col-md-6">
                          <div class="touchrw"> <span class="mobile"></span><a href="tel:966-713-4400"><i>+91 966-713-4400</i>
                          (Sales)</a> &nbsp;&nbsp;&nbsp; <a href="tel:1-360-322-4913"><i>+1 360-322-4913</i></a> </div>
                    </div>
                    <div class="col-md-6">
                      <div class="touchrw"> <span class="emails"></span><a
                          href="mailto:sales@techugo.com">sales@techugo.com</a><i>,</i><br> <a
                          href="mailto:hr@techugo.com">hr@techugo.com</a></div>
                    </div>
                    <div class="col-md-6">
                      <div class="touchrw"> <span class="number"></span><a href="tel:950-444-5188"><i>+91 950-444-5188</i>
                          (HR)</a> </div>
                    </div>
                    <div class="col-md-6">
                      <div class="touchrw"> <span class="website"></span><a
                          href="https://www.techugo.com/">www.techugo.com</a> </div>
                    </div>
                  </div>
                </div>
                <div class="addressrws">
                  <div class="row rows6 clearfix">
                  <div class="col-xs-6 col-md-3 cols6th">
                      <div class="country_add"><span class="canadaflag"></span> <i class="count_office_add"><i>139</i> Baroness Drive
                          Nepean ON <i>K2G 6Z2</i></i></div>
                    </div>
                    <div class="col-xs-6 col-md-3 cols6th">
                      <div class="country_add"><span class="indiaflag"></span> <i class="count_office_add"><i>A-26,</i> Sector
                      <i>- 63,</i> Noida, U.P, <i>201301</i></i></div>
                    </div>
                    <div class="col-xs-6 col-md-3 cols6th">
                      <div class="country_add"><span class="usaflag"></span> <i class="count_office_add"><i>22375</i> Broderick
                          Dr, Suite <i>225,</i> Dulles VA <i>20166</i></i></div>
                    </div>
                    <div class="col-xs-6 col-md-3 cols6th">
                      <div class="country_add"><span class="uaeflag"></span> <i class="count_office_add">Emaar Square,
                          Boulevard Plaza Tower <i>1,</i> Dubai</i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-5 col-md-4">
              <div class="connectwclients" id="showForm">
              <h3 class="headingbx">GET IN TOUCH</h3>
                <div class="underlinerw"></div>
                <div class="cF" id="hideForm">
                  <form id="cForm" method="POST" novalidate="novalidate">
                    <div class="input__wrap">
                      <h4>Why don't we start with your name?</h4>
                      <input autocomplete="off" class="form-control stagger hst0" minlength="2" placeholder="Type your name here" id="fromName" type="text" name="name" required>
                        <input type="hidden" class="current_url" name="url" value=<?php $record_num = end($this->uri->segment_array()); echo $record_num;?> /> 
                      <div class="form-group hiddens">
                        <label id="fromEmaill" for="fromEmail">Your E-Mail</label>
                        <input class="form-control" placeholder="Your E-Mail Address" id="fromEmail" type="text" name="email" required>
                      </div>
                      <div class="form-group hiddens">
                        <label for="fromPhone">Your Mobile No.</label>
                        <input class="form-control" placeholder="Your Mobile Number" id="fromPhone" type="text" name="contact" onkeypress="return isNumberKey(event)" required>
                      </div>
                      <div class="form-group hiddens1">
                        <label id="fromMessagel" for="message">What's on your mind? </label>
                        <textarea class="form-control" placeholder="Tell us a little bit about your concept!" rows="2" cols="46" id="message" name="message"></textarea>
                      </div>
                      <div class="form-group">
                      <div class="ndachecks">
                          <input type="checkbox" id="disclose" name="nda">
                          <label for="disclose"></label> 
                        </div>
                        <div class="ndschecktxt">Request your copy of Non Disclosure Agreement.</div>
                      </div>
                      <div class="form-group hiddens2">
                        <button class="consubmitbtns" type="submit" name="submit" value="submit"><span class="hdm">Get in touch!</span><span class="shm">Submit</span></button>
                      </div>
                     
                    </div>
                  </form>
                  <div id='succ_message'></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Lets Talk About Projects End Here-->

      <!--Home Page Content End Here-->

      <!--Footer Sitemap Start Here-->
      <section class="section normalheight">
        <div class="footerSitemapwrap">
          <div class="sitemapmenu clearfix">
            <div class="menubox com_heading">
              <h3>Company<span class="btmline"></span></h3>
              <ul class="nav navbar-nav com_heading">
				  <li><a href="<?php echo base_url('about') ?>">About Us</a></li>
				  <li><a href="<?php echo base_url('portfolio.php') ?>">Portfolio</a></li>
				  <li><a href="https://www.techugo.com/blog" onClick="window.open('https://www.techugo.com/blog', '_self')">Blog</a></li>
				  <li><a href="<?php echo base_url('contact-us.php'); ?>">Contact Us</a></li>
				  <li><a href="<?php echo base_url('career'); ?>">Career</a></li>
			</ul>
            </div>
            <div class="menubox">
              <h3>Services <span class="btmline"></span></h3>
               <ul class="nav navbar-nav">
				  <li><a href="<?php echo base_url('android-application-development.php') ?>">Android Development</a></li>
				  <li><a href="<?php echo base_url('iphone-application-development.php') ?>">iOS Development</a></li>
				  <li><a href="<?php echo base_url('ionic-development') ?>">Ionic Framework</a></li>
				  <li><a href="<?php echo base_url('php-development.php') ?>">PHP/Node<span>.js</span> Development</a></li>
				  <li><a href="<?php echo base_url('ui-ux-development') ?>">UI/UX</a></li>
				</ul>
            </div>
            <div class="menubox">
              <h3>&nbsp;</h3>
             <ul class="nav navbar-nav">
			  <li><a href="<?php echo base_url('qa-process-design.php') ?>">Quality Assurance</a></li>
			  <li><a href="<?php echo base_url('react-native-development') ?>">React Native <span>App</span> Development</a></li>
			  <li><a href="<?php echo base_url('wearables') ?>">Wearable <span>App</span> Development</a></li>
			  <li><a href="<?php echo base_url('blockchain') ?>">Blockchain <span>App</span> Development</a></li>
			  <li><a href="<?php echo base_url('vr-development') ?>">Virtual Reality</a></li>
			</ul>
            </div>
            <div class="menubox">
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
            <h3>Guides <span class="btmline"></span></h3>
            <div class="row clearfix">
              <div class="col-sm-4 col-md-2">
                <h5><a href="<?php echo base_url('mobile-app-development-company.php') ?>">Mobile App Development</a></h5>
              </div>
              <div class="col-sm-8 col-md-10">
                <div class="linel"></div>
              </div>
            </div>
          </div>
          <div class="copyrtrw">
            <p><a href="<?php echo base_url('sitemap.php') ?>">SiteMap</a> | <a href="<?php echo base_url('policies') ?>">Privacy Policy</a></p>
            <p>2019-2020 (c) Techugo</p>
          </div>
          <div class="dmcarw">
            <div class="row clearfix">
              <div class="col-sm-1 cenpos"><img src="<?php echo base_url(); ?>assets/images/dmca.png" width="100" height="50" alt="DMCA Certificate" title="DMCA" /></div>
              <div class="col-sm-10">
                <div class="socialmediaiconsrow">
                  <ul class="social-network social-circle">
                    <li><a href="https://www.linkedin.com/company/techugo-private-limited" class="icoLinkedin"
                        title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/techugo_apps" class="icoTwitter" title="Twitter" target="_blank"><i
                          class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/techugo.apps/" class="icoFacebook" title="Facebook"
                        target="_blank"><i class="fa fa-facebook"></i></a></li>
                   
                    <li><a href="https://dribbble.com/techugo" class="icodribble" title="Dribbble" target="_blank"><i
                          class="fa fa-dribbble"></i></a></li>
                    <li><a href="https://www.instagram.com/techugo/" class="icoinstagram" title="Instagram"
                        target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCEHjSuF8IhNx1NzuADlbMiA" class="icoyoutube"
                        title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://www.behance.net/Techugo" class="icobehance" title="Behance" target="_blank"><i
                          class="fa fa-behance"></i></a></li>
                    <li><a href="https://in.pinterest.com/techugo_/" class="icopinterest" title="Pinterest"
                        target="_blank"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="mailto:sales@techugo.com" class="emails" title="Email"><i
                          class="fa fa-envelope"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-1">
                <div class="chaticonrw">
                  <!-- <div class="chaticon"></div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Footer Sitemap End Here-->
      
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
  <script>
  $("#cForm").submit(function(e){
    e.preventDefault(e);
  })
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
	$('#cForm input').bind("cut copy paste",function(e) {
	e.preventDefault();
	});
	
$(document).ready(function() {
    $("#cForm").validate({
        rules: {
            name:{
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
            message: {
                required: true
            }
        },
           messages: {
            name: {
              required:"Please enter your name",
              maxlength:"Name should be less than 50 characters"
              },            
            email: {
                required: "Please enter Email id",
               },
                contact: {
                required: "Please enter contact number",
				 minlength:"Phone number should be of 6 to 15 digits.",
				maxlength:"Phone number should be of 6 to 15 digits. "
	            },
            message: {
                required: "Please enter your query",
            }
           
          },
		submitHandler: function(form) {
      var formData = document.getElementById("cForm");
	    var Data = new FormData(formData);
         $.ajax({
           type: "POST",
           url: "<?php echo base_url('contact/footer'); ?>",
           data: Data,
		       cache: false,
           contentType: false,
           processData: false,
           success: function(data)
           { 			 
              console.log(data);
            $('#fromName').val('');
            $('#fromEmail').val('');
            $('#message').val('');
            $('input#fromPhone').val('');
            $('#succ_message').val('');
            $("#disclose").prop("checked", false);
              if(data == 1){ 
               $("#succ_message").html('<div class="thankstext">Thanks For Contacting!!!</div>').show();
               setTimeout(function(){ $('#succ_message').fadeOut() }, 5000);
              }
              else{ 
                $("#succ_message").html('<div class="somethingwrong">Something went wrong!!!</div>').show();
                setTimeout(function(){ $('#succ_message').fadeOut() }, 5000);
              }
           }
         });
		}
    });

    
    
    $(document).on('keypress', '#fromName', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});
	
});


$("#subscriberBtn").on('click', function(event) {
      var formStatus = true;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      if ($( "#subscriberemail" ).val() === "") {
        $("#subscriberemail").css({"border-color": "red", 
             "border-width":"1px", 
             "border-style":"solid"});
             $("#subscriberemail-error").text("Please Enter Email Address").show();
             setTimeout(function(){ $('#subscriberemail-error').fadeOut() }, 5000);
        formStatus = false;
      }else if (!emailReg.test($( "#subscriberemail" ).val())) {
          formStatus = false;
          $("#subscriberemail").css({"border-color": "red", 
             "border-width":"1px", 
             "border-style":"solid"});
              $("#subscriberemail-error").text("Invalid Email Address").show();
              setTimeout(function(){ $('#subscriberemail-error').fadeOut() }, 5000);
      }else{
        if (!formStatus) {
            event.preventDefault();
        }else{
          $("#subscriberemail").css({"border-color": "#e1e1e1", 
             "border-width":"1px", 
             "border-style":"solid"});
          var email = $("#subscriberemail").val();
            $.ajax({
                type:"post",
                url: "<?php echo base_url('contact/subscribe'); ?>",
                data:{ email:email},
                success:function(response)
                {
                  $("#subscriberemail").val('');
                    if (response == 1) 
                    {
                      $("#subscriberemail-success").text("We'll get back to you within 2 hours!").show();
                      setTimeout(function(){ $('#subscriberemail-success').fadeOut() }, 5000);
                    }
                    else 
                    {
                      $("#subscriberemail-success").text('Something went wrong').show();
                      setTimeout(function(){ $('#subscriberemail-success').fadeOut() }, 5000);
                    }  
                }
            }); 
          }
        }
      });
      
      
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/580df494e808d60cd0721d3e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

</script>
<!--End of Tawk.to Script-->

<?php                   
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    if($path == '/'){

?>
  <script src="<?php echo base_url(); ?>assets/js/home.js"></script>
<?php } else {  ?>
	<script>
	AOS.init({
        easing: 'ease-in-out-sine',
        once: true
 });</script>
  <?php } ?>
  
</body>
</html>
