<!--Career Thank you box Modal Start Here-->
<div class="modal fade" id="thankyouhelp" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog thankyoubx">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal"></button>
                <div class="modal-body">
                    <div class="techugohelpbox">
                      <div class="thankyouiconrw">
                          <img src="<?php echo base_url('/assets/images/career/thank_you_icon.png')?>" alt="Thank You" />
                      </div>
                        <h3 class="text-center">Thank you! for submitting your resume </h3>
                        <h3 class="text-center">HR team will reach out to you shortly. </h3>

                        <div class="getconbtnbx">
                            <a href="https://www.techugo.com/"><div class="button raised hoverable">
                                <div class="anim"></div><span>GO TO HOME</span>
                            </div></a>
                        </div>
                        <div class="sociallinksboxmodalrw">
                            <div class="row clearfix">
                                <div class="col-md-8 socdivline carwds60">
                                    <div class="Sociallinksview">
                                        <h4>Social Links</h4>
                                        <ul class="cleafix">
                                        <li class="facebook"><a href="https://www.facebook.com/techugo.apps/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
                                        <li class="instagram"><a href="https://www.instagram.com/techugo/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                                        <li class="twitter"><a href="https://twitter.com/techugo_apps" title="Twitter" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li class="linkedin"><a href="https://www.linkedin.com/company/techugo-private-limited" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                                      </ul>
                                   </div>
                                </div>
                                <div class="col-md-4 carwds40">
                                    <div class="Sociallinksview">
                                    <h4>Technology</h4>
                                    <ul class="nerds clearfix">
                                        <li class="instagram"><a href="https://www.instagram.com/androidnerds" target="_blank"><i class="fa fa-instagram"></i>Android Nerds</a></li>
                                        <li class="instagram"><a href="https://www.instagram.com/iosnerds" target="_blank"><i class="fa fa-instagram" target="_blank"></i>iOS Nerds</a></li>
                                  </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              
            </div>
          </div>
         <!--Career Thank you box Modal End Here-->

<!--Career Page Start Here-->
      <div class="careerpgwrap">
         <!--Python Developer Section Start Here-->
            <div class="pythondeveloper_section">
                <div class="techlogo">
                    <img src="<?php echo base_url('assets/images/techugo_logo.png'); ?>" alt="Techugo Logo" />
                </div>
                <h2 class="text-center"><?php echo $heading; ?></h2>
            </div>
         <!--Python Developer Section Start Here-->

         <!--Career Description Start Here-->
           <?php echo $details; ?>
         <!--Career Description End Here-->
         <div class="cardivideline"></div>
 
         <!--Think you fit in Section Start Here-->
            <div class="thinkcareerfit_wrap">
                <h2>Think you fit in?</h2>
                <p>Please be sure to also submit a portfolio of your own original work to show us what you can create.</p>
                <div class="requiredfrw">*Required fields</div>
                <div class="personalinforw">Personal information</div>
                <div class="personalinfoform">
                    <form method="POST" id ="myForm" enctype='multipart/form-data'>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Full Name <span>*</span></label>
                                    <input class="form-control" name="id" type="hidden" placeholder="id" value=<?php echo $_GET['type'] ?> />
                                    <input class="form-control" name="full_name" type="text" placeholder="Type your Full Name" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span>*</span></label>
                                    <input class="form-control" name="email" type="text" placeholder="Type your Email ID" />
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Contact Number <span>*</span></label>
                                    <div class="row clearfix">
                                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 pdlz">
                                        <div class="countrycode">
                                             <input id="country_code" type="tel" class="form-control text-center" name="country_code">
                                              </div>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 col-md-9 col-lg-10">
                                            <input class="form-control" name="contact" type="text" placeholder="Contact Number" onkeypress="return isNumberKey(event)"/>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Import Resume File <span>*</span></label>
                                    
                                    <div id="upload_prev">
                                        <div class="fileUpload">
                                            <span>Attach file <i class="fa fa-paperclip" aria-hidden="true"></i></span>
                                            <input id="uploadBtn" name="resume" type="file" class="upload" accept="application/msword,text/plain, application/pdf,.doc, .docx" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Current Annual CTC (in ₹)<span>*</span></label>
                                    <input class="form-control number" name="current_ctc" type="text" placeholder="Type your current CTC" maxlength ="10" onkeypress="return isNumberKey(event)" required/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Expected Annual CTC (in ₹)<span>*</span></label>
                                    <input class="form-control number" name="expected_ctc" type="text" placeholder="Type your Expected CTC" maxlength ="10" onkeypress="return isNumberKey(event)" required/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
							<label>Last Company <span>*</span></label>
							<input class="form-control" name="lastCompany" type="text" placeholder="" required />
                        </div>
                    
                         <div class="form-group">
							<label>How much experience do you have (in years)? <span>*</span></label>
							<input class="form-control" name="experience" type="text" placeholder="" required />
                        </div>
                      
                            <div class="form-group">
                                <label>What is your designation/role in your current organization? <span>*</span></label>
                                <input class="form-control" name="designation" type="text" placeholder=""  required/>
                            </div>
                    
						<div class="form-group">
							<label>Do you manage a team in your current organization? <span>*</span></label>
							<!-- <input class="form-control" name="team_management" type="text" placeholder="" required /> -->
                        <div class="current_organization">
                            <input type="radio" id="teammanage" name="team_management" value="Yes">
                            <label for="teammanage">Yes</label>
                        </div>
                        <div class="current_organization">
                          <input type="radio" id="teammanage1" name="team_management" value="No" checked>
                          <label for="teammanage1">No</label>
                        </div>
                  </div>
                       
						<div class="form-group">
							<label>What are the programming languages you have used so far or most familiar with(Comma separated)? </label>
							<input class="form-control" name="languages" type="text" placeholder=""  />
                        </div>
                        
						<div class="form-group">
							<label>What frameworks you are expert in? Multiple frameworks can be comma separated.</label>
							<input class="form-control" name="framework" type="text" placeholder=""  />
						</div>
						<div class="form-group">
                            <label>What are the 3 major tasks that are most important in your current role? <span>*</span></label>
                            <textarea class="form-control" name="tasks" rows="4" cols="4" placeholder="" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>From where did you get to know about Techugo? <span>*</span></label>
                            <textarea class="form-control" name="get_to_know" rows="4" cols="4" placeholder="" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>What is your expectations from this role? <span>*</span></label>
                            <textarea class="form-control" name="role_expectation" rows="4" cols="4" placeholder="" required></textarea>
                        </div>
                        
                         <div class="form-group">
                                    <label>One Final Step and The Most Important one</label>
                                    <div id="upload_prev1">
                                        <div class="fileUpload">
                                            <span> Upload a video explaining why we should be hiring you, how can you help Techugo and what is it that you expect from Techugo. <i class="fa fa-paperclip" aria-hidden="true"></i></span>
                                            <input id="uploadBtn1" name="video" type="file" class="upload" <?php if($video_check == '1') { echo 'required'; } ?>/>
                                        </div>
                                    </div>
                                </div>
                        <div class="form-group">
                            <div class="submitApplicationrw">
                              
                                <button type="submit" name= "submit" value = "submit" class="submitApplication" id ="submitApplication">Submit Application <div class="loadingview" id="loadData">
                                 <div class="lds-hourglass"></div>
                              </div></button>
                           </div>
                           <!-- <div class="form-group text-center">
                              <div id='succ_message'></div>
                            </div> -->
                        </div>
                      </form>
				  </div>
                </div>
            </div>
         <!--Think you fit in Section End Here-->
         </div>
        <!--Career Page End Here-->

        <!--Footer Sitemap Start Here-->
  <div class="footerSitemapwrap"> <span class="topbdr"></span>
    <div class="sitemapmenu clearfix">
      <div class="menubox com_heading">
         <h3>Company<span class="btmline"></span></h3>
        <ul class="nav navbar-nav com_heading">
          <li><a href="<?php echo base_url('about') ?>">About Us</a></li>
          <li><a href="<?php echo base_url('portfolio.php') ?>">Portfolio</a></li>
          <li><a href="<?php echo base_url('/blog') ?>">Blog</a></li>
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
          <li><a href="<?php echo base_url('php-development.php') ?>">PHP/Node.js Development</a></li>
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
      <p>2019-2020 &copy; Techugo</p>
      <p><a href="<?php echo base_url('sitemap.php') ?>">SiteMap</a> | <a href="<?php echo base_url('policies') ?>">Privacy Policy</a></p>
    </div>
    <div class="dmcarw">
      <div class="row clearfix">
        <div class="col-sm-2 cenpos"><img src="<?php echo base_url('assets/images/dmca.jpg'); ?>" width="100" height="50" alt="dmca" style="margin-top:10px;" /></div>
        <div class="col-sm-9">
          <div class="socialmediaiconsrow">
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

    </div>
    <link href=<?php echo base_url('assets/css/career.css'); ?> rel="stylesheet" type="text/css">
    <link href=<?php echo base_url('assets/css/intlTelInput.css'); ?> rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="<?php echo base_url('/assets/js/intlTelInput.js') ?>"></script>
    <script>
//File Upload

$(document).on('click','.filebtnname span.closed',function(){
    $(this).parents('.filebtnname').remove();
    var element1= document.getElementById("upload_prev");
    element1.classList.remove("mystyle");
    var element3= document.getElementById("upload_prev1");
    element3.classList.remove("mystyle1");

});
document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};

document.getElementById("uploadBtn1").onchange = function () {
    document.getElementById("uploadFile1").value = this.value;
};

document.getElementById('uploadBtn').onchange = uploadOnChange;
document.getElementById('uploadBtn1').onchange = uploadOnChange1;
    
    function uploadOnChange() {
        var element = document.getElementById("upload_prev");
        element.classList.add("mystyle");
        var filename = this.value;
        var lastIndex = filename.lastIndexOf("\\");
        if (lastIndex >= 0) {
            filename = filename.substring(lastIndex + 1);
        }
        var files = $('#uploadBtn')[0].files;
        for (var i = 0; i < files.length; i++) {
        $("#upload_prev").append('<span class="filebtnname">'+files[i].name+'<span class="closed">X</span></span>');
        }
    }

    function uploadOnChange1() {
        var element2 = document.getElementById("upload_prev1");
        element2.classList.add("mystyle1");
        var filename = this.value;
        var lastIndex = filename.lastIndexOf("\\");
        if (lastIndex >= 0) {
            filename = filename.substring(lastIndex + 1);
        }
        var files = $('#uploadBtn1')[0].files;
        for (var i = 0; i < files.length; i++) {
        $("#upload_prev1").append('<span class="filebtnname">'+files[i].name+'<span class="closed">X</span></span>');
        }
    }
//File Upload End

</script>


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
            full_name:{
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
            }
		  },
           messages: {
            full_name: {
              required:"Please enter your name",
              maxlength:"Name should be less than 50 characters"
              },            
            email: {
                required: "Please enter Email Id",
               },
           contact: {
                required: "Please enter contact number",
				minlength:"Phone number should be of 6 to 15 digits.",
				maxlength:"Phone number should be of 6 to 15 digits. "
	            },
		   },
          submitHandler: function (form) {
            var formData = document.getElementById("myForm");
              var Data = new FormData(formData);
              //console.log(Data);
                var url = "<?php echo base_url('career/job_openings'); ?>";
               
                $("#loadData").show();
                document.getElementById("submitApplication").disabled = true;
                $.ajax({
                      type: "POST",
                      url: url,
                      data: Data, // serializes the form's elements.
                      cache: false,
                      contentType: false,
                      processData: false,
                      success: function(data)
                      {     
                        //console.log(data);
                        $('#succ_message').val('');
                         $('#myForm')[0].reset();
                         if(data == 1){ 
                          $('#thankyouhelp').modal('show');
                          $('html').addClass('thanksoverflow');
						  // $("#succ_message").html('<div class="thankstext">Thanks For Contacting!!!</div>').show();
                           $('.filebtnname').remove();
                           $('.mystyle .fileUpload, .mystyle1 .fileUpload').css({'display':'block'})
                           $("#loadData").hide();
							document.getElementById("submitApplication").disabled = false;
						  // setTimeout(function(){ $('#succ_message').fadeOut() }, 5000);
						  }
						  else{ 
							$("#succ_message").html('<div class="somethingwrong">Something went wrong!!!</div>').show();
							setTimeout(function(){ $('#succ_message').fadeOut() }, 5000);
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
  $('#thankyouhelp .close').click(function(){
    $('html').removeClass('thanksoverflow');
  });
});
	
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      
      }

var countryData = window.intlTelInputGlobals.getCountryData(),
  input = document.querySelector("#country_code"),
  addressDropdown = document.querySelector("#address-country");

// init plugin
var iti = window.intlTelInput(input, {
  allowDropdown: true,
      autoPlaceholder: "off",
      initialCountry: "india",
      //preferredCountries: ["kw", "in", "us", "gb"],
      separateDialCode: true,
});


    var number = iti.getNumber();
    var countryData1 = iti.getSelectedCountryData();
    var code = countryData1.dialCode;
    $("#country_code").val(code);


$(function(){
	$('input.number').keyup(function(event) {
	// skip for arrow keys
	if(event.which >= 37 && event.which <= 40) return;

	// format number
	$(this).val(function(index, value) {
	  return value
	  .replace(/\D/g, "")
	  .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
	  ;
	});
	});
})
 </script>


</body>

</html>
