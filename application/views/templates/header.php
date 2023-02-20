<?php
function sanitize_output($buffer) {
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
ob_start("sanitize_output");

?>
<!doctype html>
<html lang="en" itemscope itemtype="https://schema.org/WebPage">
<head>
<meta charset="utf-8">
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $description; ?>"/>
<meta name="keywords" content="<?php echo $keywords; ?>">
<link rel="canonical" href="https://www.techugo.com"/>
<meta name="robots" content="index, follow"/>
<meta name="language" content="english"/>
<!-- <meta http-equiv="content-language" content="en-us"> -->
<meta name="rating" content="general"/>
<meta name="expires" content="Never"/>
<meta name="distribution" content="global">
<meta itemprop="name" content=" Techugo "/>
	<?= $og; ?>
<meta itemprop="description" content="<?php echo $description; ?>"/>
<!--Pinterest Verification Code-->
<meta name="p:domain_verify" content="29b1ef35918e9207a386ff3bb0183ca4"/>
<!--Pinterest Verification Code Ends-->

<!--Google Webmaster Verification Code-->
<meta name="google-site-verification" content="x7wNosQ22oLS2ZV2FekXK9ViW6ix7HvYk2DyAdtz1uc" />
<!--Google Webmaster Verification Code Ends-->

<!--Yandex Webmaster Verification Code-->
<meta name="yandex-verification" content="e13f3a3cc5c951b1" />
<!--Yandex Webmaster Verification Code Ends-->

<!--Bing Webmaster Verification Code | AH 24/05/2016-->
<meta name="msvalidate.01" content="416CC95A72E96F962F58F0D8F6D0E9F6" />
<!--Bing Webmaster Verification Code Ends-->

<!--Google Analytic Code -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-64476188-1', 'auto');
ga('send', 'pageview');
</script> 
<!--End Google Analytic Code-->

<script type="application/ld+json">{
"@context": "https://www.schema.org",
"@type": "Organization",
"name": "<?php echo $page_title; ?>",
"url": "<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
 echo $actual_link; ?>",
"telephone": "+1 360-322-4913",
"priceRange": "$",
"description": "<?php echo $description; ?>",
"address": {
"@type": "PostalAddress",
"streetAddress": "22375 Broderick Dr, Suite 225, Dulles VA 20166",
"addressLocality": "Dulles",
"addressRegion": "Virginia",
"postalCode": "20166",
"addressCountry": "USA"
},
"geo": {
"@type": "GeoCoordinates",
"latitude": "38.996780",
"longitude": "-77.446190"
},
"openingHours": "Mo -,Tu -,We -,Th -,Fr -,Sa -,Su -,",
"sameAs": [
"https://www.linkedin.com/company/techugo-private-limited",
"https://www.facebook.com/techugo.apps",
"https://twitter.com/techugo_apps",
"https://www.instagram.com/techugo/",
"https://www.youtube.com/channel/UCEHjSuF8IhNx1NzuADlbMiA"
]
}</script>

<!-- Google Tag Manager 
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WP5CMJC');
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-704403671"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-704403671');
</script> -->
	
	
	<!-- Event snippet for Leads conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-704403671/DLL5COKf868BENex8c8C',
      'event_callback': callback
  });
  return false;
}
</script>
	
	<script>
window.addEventListener('load',function(){
if(window.location.pathname.match('/thankyou')){

if(document.referrer.indexOf('https://www.techugo.com/contact-us.php')>-1){
gtag('event', 'conversion', {'send_to': 'AW-704403671/BNFxCPytrLABENex8c8C'});
}

if(document.referrer == 'https://www.techugo.com/'){
gtag('event', 'conversion', {'send_to': 'AW-704403671/8KyrCL6CtbABENex8c8C'});
}
}


if(window.location.pathname.match('/mobile-app-development-company-united-states.php')){
jQuery('[type="submit"]').click(function(){
gtag('event', 'conversion', {'send_to': 'AW-704403671/o65mCK-xrLABENex8c8C'});
})
}
}) 
</script> 
<link rel="icon" href="<?php echo base_url('/assets/images/favicon.ico')?>"  type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo base_url('/assets/images/favicon.ico') ?>" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/homepg.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
<style>
  body{
    font-family: 'Raleway', sans-serif;
  }
</style>
</head>

<body>
  <div id="wrapper">
	   <!-- Google Tag Manager (noscript) 
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP5CMJC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
End Google Tag Manager (noscript) -->
    <!--Header Section Start Here-->
    <nav class="navbar navbar-default navbar-fixed-top nav-down">
      <div class="container">
        <div class="navbar-header">
         <div class="button_container" id="toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
          </div>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Techugo logo</a>
        </div>
        <div class="getconbtnbx">
        <div class="callusSalesOpenbox dropdown">
          <div class="callusSales hideslidecalls dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-phone" aria-hidden="true"></i> </div>
          <div class="dropdown-menu">
           <div class="callusrow">
             <div class="callusrtype sales"></div>
             <div class="callusrdetails">
               <div class="callheading">Sales</div>
               <div class="callnum"><a href="tel:966-713-4400">+91 966-713-4400</a></div>
               <div class="emailsrw"><a href="mailto:sales@techugo.com">sales@techugo.com</a></div>
               <div class="callheading">HR</div>
               <div class="callnum"><a href="tel:950-444-5188">+91 950-444-5188</a></div>
             </div>
           </div>
        </div>  
        </div>
          <a href="<?php echo base_url('contact-us.php')?>"><div class="button raised hoverable">
            <div class="anim"></div><span>Get In Touch!</span>
          </div></a>
        
        </div>
        <div id="navbar" class="navbar-collapse collapse  js-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="hideview"><a href="<?php echo base_url('contact-us.php') ?>">Contact Us</a></li>
            <li class="fs28wd"><a href="<?php echo base_url('about') ?>">About Us</a></li>
            <li class="dropdown mega-dropdown fs28wd"><a href="javascript:void(0);" class="dropdown-toggle"
                data-toggle="dropdown">Services </a>
              <!--Services Menu Start Here-->
              <ul class="dropdown-menu mega-dropdown-menu">
                <div class="servicemenuwrap">
                  <div class="menuwrap">
                    <div class="row clearfix">
                      <div class="col-sm-4">
                        <ul>
                          <li><a href="<?php echo base_url('android-application-development.php') ?>"><span class="icon androiddev"></span><span
                                class="technm">Android <i>Development</i></span></a></li>
                          <li><a href="<?php echo base_url('iphone-application-development.php') ?>"><span class="icon iosdev"></span><span class="technm">iOS
                                <i>Development</i></span></a></li>
                          <li><a href="<?php echo base_url('ionic-development') ?>"><span class="icon ionicdev"></span><span
                                class="technm">Ionic <i>Development</i></span></a></li>
                          <li><a href="<?php echo base_url('blockchain') ?>"><span class="icon blcdev"></span><span
                                class="technm">Blockchain <i>Development</i></span></a></li>
                          <li><a href="<?php echo base_url('ui-ux-development') ?>"><span class="icon uiux"></span><span class="technm">UI/UX
                               <i> Design</i></span></a></li>
                        </ul>
                      </div>
                      <div class="col-sm-4">
                        <ul>
                          <li><a href="<?php echo base_url('php-development.php') ?>"><span class="icon phpnodedev"></span><span
                                class="technm">PHP/Node <i>JS Development</i></span></a></li>
                          <li><a href="<?php echo base_url('qa-process-design.php') ?>"><span class="icon testing"></span><span
                                class="technm">Testing & QA</span></a></li>
                          <li><a href="<?php echo base_url('react-native-development') ?>"><span class="icon reactdev"></span><span
                                class="technm">React <i>Development</i></span></a></li>
                          <li><a href="<?php echo base_url('wearables') ?>"><span class="icon wearabledev"></span><span
                                class="technm">Wearables</span></a></li>
                          <li><a href="<?php echo base_url('vr-development') ?>"><span class="icon vrdev"></span><span class="technm">VR
                                Development</span></a></li>
                        </ul>
                      </div>
                      <div class="col-sm-4">
                        <ul>
                          <li><a href="<?php echo base_url('augmented-reality') ?>"><span class="icon augmentedreality"></span><span
                                class="technm">Augmented <i>Reality</i></span></a></li>
                          <li><a href="<?php echo base_url('internet-of-things') ?>"><span class="icon iotdev"></span><span
                                class="technm">IOT</span></a></li>
                          <li><a href="<?php echo base_url('artificial-intelliegence') ?>"><span class="icon aidev"></span><span
                                class="technm">AI<i></i></span></a></li>
                          <li><a href="<?php echo base_url('chatbots') ?>"><span class="icon chatbotsdev"></span><span
                                class="technm">Chatbots<i></i></span></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="socialmediaiconsrow">
                      <ul class="social-network social-circle">
                        <li><a href="https://www.linkedin.com/company/techugo-private-limited" class="icoLinkedin"
                            title="LinkedIn" target="_blank" data-pjax-state=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/techugo_apps" class="icoTwitter" title="Twitter"
                            target="_blank" data-pjax-state=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/techugo.apps/" class="icoFacebook" title="Facebook"
                            target="_blank" data-pjax-state=""><i class="fa fa-facebook"></i></a></li>
                 
                        <li><a href="https://dribbble.com/techugo" class="icodribble" title="Dribbble" target="_blank"
                            data-pjax-state=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="https://www.instagram.com/techugo/" class="icoinstagram" title="Instagram"
                            target="_blank" data-pjax-state=""><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCEHjSuF8IhNx1NzuADlbMiA" class="icoyoutube"
                            title="Youtube" target="_blank" data-pjax-state=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://www.behance.net/Techugo" class="icobehance" title="Behance" target="_blank"
                            data-pjax-state=""><i class="fa fa-behance"></i></a></li>
                        <li><a href="https://in.pinterest.com/techugo_/" class="icopinterest" title="Pinterest"
                            target="_blank" data-pjax-state=""><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="mailto:sales@techugo.com" class="emails" title="Email" data-pjax-state=""><i
                              class="fa fa-envelope"></i></a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </ul>
              <!--Services Menu End Here-->
            </li>
            <li><a href="<?php echo base_url('portfolio.php') ?>">Portfolio</a></li>
            <li><a href="<?php echo base_url('career'); ?>">Career</a></li>
            <li><a href="<?php echo base_url('blog') ?>">Blog</a></li>
            <li><a href="<?php echo base_url('techtalks'); ?>">TechTalks</a></li>
          </ul>
        </div>
      </div>
      <div class="overlaybg"></div>
      <!--Mobile Navigation Start Here-->
      <div class="overlay" id="overlay">
          <nav class="overlay-menu">
            <ul>
            <li><a href="<?php echo base_url('contact-us.php') ?>">Contact Us</a></li>
            <li><a href="<?php echo base_url('about') ?>">About Us</a></li>
            <li class="viewservicemenu"><a href="javascript:void(0);">Services <span class="fa fa-angle-down"></span></a>
            <div class="servicemenuwrap">
                  <div class="menuwrap">
                        <ul>
                          <li><a href="<?php echo base_url('android-application-development.php') ?>"><span class="icon androiddev"></span><span
                                class="technm">Android <i>Development</i></span></a></li>
                          <li><a href="<?php echo base_url('iphone-application-development.php') ?>"><span class="icon iosdev"></span><span class="technm">iOS
                                <i>Development</i></span></a></li>
                          <li><a href="<?php echo base_url('ionic-development') ?>"><span class="icon ionicdev"></span><span
                                class="technm">Ionic <i>Development</i></span></a></li>
                          <li><a href="<?php echo base_url('blockchain') ?>"><span class="icon blcdev"></span><span
                                class="technm">Blockchain <i>Development</i></span></a></li>
                          <li><a href="<?php echo base_url('ui-ux-development') ?>"><span class="icon uiux"></span><span class="technm">UI/UX
                               <i> Design</i></span></a></li>
                               <li><a href="<?php echo base_url('php-development.php') ?>"><span class="icon phpnodedev"></span><span
                                class="technm">PHP/Node <i>JS Development</i></span></a></li>
                          <li><a href="<?php echo base_url('qa-process-design.php') ?>"><span class="icon testing"></span><span
                                class="technm">Testing & QA</span></a></li>
                          <li><a href="<?php echo base_url('react-native-development') ?>"><span class="icon reactdev"></span><span
                                class="technm">React <i>Development</i></span></a></li>
                          <li><a href="<?php echo base_url('wearables') ?>"><span class="icon wearabledev"></span><span
                                class="technm">Wearables</span></a></li>
                          <li><a href="<?php echo base_url('vr-development') ?>"><span class="icon vrdev"></span><span class="technm">VR
                                Development</span></a></li>
                                <li><a href="<?php echo base_url('augmented-reality') ?>"><span class="icon augmentedreality"></span><span
                                class="technm">Augmented <i>Reality</i></span></a></li>
                          <li><a href="<?php echo base_url('internet-of-things') ?>"><span class="icon iotdev"></span><span
                                class="technm">IOT</span></a></li>
                          <li><a href="<?php echo base_url('artificial-intelliegence') ?>"><span class="icon aidev"></span><span
                                class="technm">AI<i></i></span></a></li>
                          <li><a href="<?php echo base_url('chatbots') ?>"><span class="icon chatbotsdev"></span><span
                                class="technm">Chatbots<i></i></span></a></li>
                        </ul>
                   
                  </div>

                </div>
          </li>
            <li style="clear:both"></li>
            <li><a href="<?php echo base_url('portfolio.php') ?>">Portfolio</a></li>
            <li><a href="<?php echo base_url('career'); ?>">Career</a></li>
            <li><a href="<?php echo base_url('blog') ?>">Blog</a></li>
            <li><a href="<?php echo base_url('techtalks'); ?>">TechTalks</a></li>
          </ul>
          </nav>
        </div>
         <!--Mobile Navigation End Here-->
    </nav>
    <!--Header Section End Here-->

  
