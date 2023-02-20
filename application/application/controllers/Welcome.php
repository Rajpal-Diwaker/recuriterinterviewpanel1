<?php
header_remove("X-Powered-By");
header('X-Frame-Options: DENY'); 
header("X-XSS-Protection: 0");
header('Strict-Transport-Security: max-age=31536000');
 
/*
$headerCSP = "Content-Security-Policy:".
        "connect-src 'self' https://va.tawk.to https://vsb14.tawk.to https://vsb31.tawk.to https://tawk.to;". // XMLHttpRequest (AJAX request), WebSocket or EventSource.
        "default-src 'self';". // Default policy for loading html elements
        "frame-ancestors 'self' ;". //allow parent framing - this one blocks click jacking and ui redress
        "frame-src 'self' https://va.tawk.to;". // vaid sources for frames
        "media-src 'self' http://www.googletagmanager.com http://www.google-analytics.com;". // vaid sources for media (audio and video html tags src)
        "img-src 'self' http://www.googletagmanager.com http://www.google-analytics.com https://googleads.g.doubleclick.net https://cdn.jsdelivr.net https://stats.g.doubleclick.net https://www.google.com https://www.google.co.in;". 
        "object-src 'none'; ". // valid object embed and applet tags src
    //    "report-uri https://example.com/violationReportForCSP.php;". //A URL that will get raw json data in post that lets you know what was violated and blocked
        "script-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com code.jquery.com https://www.googletagmanager.com http://www.google-analytics.com https://cdnjs.cloudflare.com https://www.googleadservices.com/pagead/conversion_async.js https://cdn.jsdelivr.net https://googleads.g.doubleclick.net https://embed.tawk.to;". // allows js from self, jquery and google analytics.  Inline allows inline js
        "style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://fonts.googleapis.com https://static-v.tawk.to https://cdn.jsdelivr.net https://googleads.g.doubleclick.net https://embed.tawk.to;".// allows css from self and inline allows inline css
        "font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com https://static-v.tawk.to;";
//Sends the Header in the HTTP response to instruct the Browser how it should handle content and what is whitelisted
//Its up to the browser to follow the policy which each browser has varying support
header($headerCSP); */

class Welcome extends CI_Controller {
	
	 function __construct(){
        parent::__construct();
        //load our second db and put in $db2
        $this->db2 = $this->load->database('blog', TRUE);
        $this->load->model('Contact_model');
        $this->load->helper(array('cookie', 'url'));
        set_cookie('counters','ok','999600');
    }

	public function index()
	{

		$result = $this->Contact_model->visitorIp();
        if($result===false){
        	header('location: '.'https://www.google.com/');
        }else{
        	$data = array(
				'page_title'=> 'Top Mobile App Development Company In USA & India | Techugo',
				'description'=>'Techugo is one of the top mobile application development company in USA, UAE, Canada & India. Being an Android and iOS mobile app development company, we utilize modern technologies like blockchain. With our team of developers, we deliver great solutions as per the need of business.',
				'keywords'=>'top mobile app development company,top mobile application development company in india,mobile app development company in india,mobile app development companies in india,mobile app development services,list of top mobile app development companies',
				'og'=>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:title" content="Top Mobile App Development Company In USA & India | Techugo"/><meta property="og:description" content="Techugo is one of the top mobile application development company in USA, UAE, Canada & India. Being an Android and iOS mobile app development company, we utilize modern technologies like blockchain. With our team of developers, we deliver great solutions as per the need of business."/><meta property="og:url" content="https://www.techugo.com/" /><meta property="og:image" content="https://www.techugo.com/assets/images/techugo_home.jpg" /> <meta property="og:image:alt" content="Top Mobile App Development Company In USA & India | App Developers in USA & India Techugo" /><meta itemprop="description" content="Techugo is one of the top mobile application development companies in India and USA. Being an Android and iOS mobile app development company, we utilize modern technologies like blockchain. With our team of developers, we deliver great solutions as per the need of business."/>'
				);
			$this->load->view('templates/header',$data);
			$this->load->view('pages/home');
			$this->load->view('templates/footer');
        }
		
	}
	public function home()
	{
		$data = array(
		'page_title'=> 'Top Mobile App Development Company In USA & India | Techugo',
		'description'=>'Techugo is one of the top mobile application development company in USA, UAE, Canada & India. Being an Android and iOS mobile app development company, we utilize modern technologies like blockchain. With our team of developers, we deliver great solutions as per the need of business.',
		'keywords'=>'top mobile app development company,top mobile application development company in india,mobile app development company in india,mobile app development companies in india,mobile app development services,list of top mobile app development companies',
		'og'=>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:title" content="Top Mobile App Development Company In USA & India | Techugo"/><meta property="og:description" content="Techugo is one of the top mobile application development company in USA, UAE, Canada & India. Being an Android and iOS mobile app development company, we utilize modern technologies like blockchain. With our team of developers, we deliver great solutions as per the need of business."/><meta property="og:url" content="https://www.techugo.com/" /><meta property="og:image" content="https://www.techugo.com/assets/images/techugo_home.jpg" /> <meta property="og:image:alt" content="Top Mobile App Development Company In USA & India | App Developers in USA & India Techugo" /><meta itemprop="description" content="Techugo is one of the top mobile application development companies in India and USA. Being an Android and iOS mobile app development company, we utilize modern technologies like blockchain. With our team of developers, we deliver great solutions as per the need of business."/>'
		);
		$this->load->view('templates/header',$data);
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$data = array(
		'page_title'=> 'A team of award-winning technocrats, designers, and strategists.',
			'description'=>'We craft iPhone & Android mobile development along with emerging technologies for Fortune 500 companies and next-generation startups.',
		'keywords'=>'',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/about" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="A team of award-winning technocrats | designers | and strategists | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="We craft iPhone & Android mobile development along with emerging technologies for Fortune 500 companies and next-generation startups."/><meta property="og:url" content="https://www.techugo.com/about" /><meta property="og:image" content="https://www.techugo.com/assets/images/peak_line_img.jpg" /> <meta property="og:image:alt" content="A team of award-winning technocrats | designers | and strategists | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/aboutus');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function portfolio()
	{
		$data = array(
		'page_title'=> 'Get a glimpse of our successful mobile apps | Portfolio | Techugo',
			'description'=>'Take a look at Techugo mobile app\'s portfolio and check the different types of technologies and the industries served by us. We implement the best UI design methodologies in each of our developed product, which creates a seamless passage for your audience to access your services through an app.',
		'keywords'=>'',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/portfolio.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Get a glimpse of our successful mobile apps | Portfolio | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Take a look at Techugo mobile app\'s portfolio and check the different types of technologies and the industries served by us. We implement the best UI design methodologies in each of our developed product, which creates a seamless passage for your audience to access your services through an app."/><meta property="og:url" content="https://www.techugo.com/portfolio.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/portfolio/trailblazer_app_view.png" /> <meta property="og:image:alt" content="Get a glimpse of our successful mobile apps | Portfolio | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/portfolio');
		$this->load->view('templates/footer'); 
	}
	public function privacy_policy()
	{
		$data = array(
		'page_title'=> 'Check how we process your personal data| Privacy Policy | Techugo',
			'description'=>'We very well understand the importance of security of your data, hence we have created a policy to help you understand. Our Services are very diverse, leading us to practice sometimes additional terms or product requirements may apply.  You are requested to go through the policy.',
		'keywords'=>'',
		'canonical_tag'=>''
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/privacy_policy');
		$this->load->view('templates/footer');
	}
	public function sitemap()
	{	
		//echo $_SERVER['DOCUMENT_ROOT'];die;
		$data = array(
		'page_title'=> 'Find out the guide to access Techugo website | Site Map | Techugo',
		'description'=>'Get a full-fledged site map of Techugo, and find the easiest ways to reach its services, about us, case-study and expertise conveniently.',
		'keywords'=>'',
		'canonical_tag'=>''
		);
		
		$this->load->view('templates/header1');
		$this->load->view('pages/sitemap',$data);		
		
	}
	public function android_application_development()
	{
		$data = array(
		'page_title'=> 'Android Application Development Company - Android App Developer Companies | Techugo',
		'description'=>'Techugo is one of best android application development companies, offering great android app design & android app development with 	 			team the of android app developer. Get the best solution for your business through one of the best android application development companies in 			the world',
		'keywords'=>'android app development company, android application development services, top android app development companies',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/android-application-development.php" />',
		'og'=>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Android Application Development Company - Android App Developer Companies | Techugo"/><meta property="og:description" content="Techugo is one of best android application development companies, offering great android app design & android app development with team the of android app developer. Get the best solution for your business through one of the best android application development companies in the world"/><meta property="og:url" content="https://www.techugo.com/android-application-development.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/ios_rt_ban.jpg" /> <meta property="og:image:alt" content="Android Application Development Company - Android App Developer Companies | Techugo" />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/android_development');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function ios_application_development()
	{
		$data = array(
		'page_title'=> 'iOS App Developer Companies | Iphone Application Development Company | Techugo',
		'description'=>'Techugo-iPhone application development company gives best iOS app development with a team of deft iOS App developers. This iPhone app development company, offer incredible iPhone app design & magnificent iPhone app development services. Their robust team consists of ios app developer, helps them to become one of the best iPhone app development companies worldwide.',
		'keywords'=>'iphone app development company, iphone application development company, ios app development company, iphone app development services',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/iphone-application-development.php" />',
		'og'=>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="iOS App Developer Companies | Iphone Application Development Company | Techugo"/><meta property="og:description" content="Techugo-iPhone application development company gives best iOS app development with a team of deft iOS App developers. This iPhone app development company, offer incredible iPhone app design & magnificent iPhone app development services. Their robust team consists of ios app developer, helps them to become one of the best iPhone app development companies worldwide."/><meta property="og:url" content="https://www.techugo.com/iphone-application-development.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/theatre_show_app.png" /> <meta property="og:image:alt" content="iOS App Developer Companies | Iphone Application Development Company | Techugo" />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/ios_development');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function ionic_development()
	{
		$data = array(
		'page_title'=> 'Ionic Framework Application Development Company | Techugo',
		'description'=>'Hire best ionic developers to secure a great mobile apps. Techugo is app adevelopment company leveraging its framework capabilities to deliver hybrid application development services. Get our assistance.',
		'keywords'=>'Ionic Development	ionic apps,build ionic app,ionic development company,ionic development services,ionic application,ionic platform,ionic build ios,ionic build android,ionic mobile developer,ionic mobile app builder,ionic framework',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/ionic-development" />',
			'og' =>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Ionic Framework Application Development Company | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Hire best ionic developers to secure a great mobile apps. Techugo is app adevelopment company leveraging its framework capabilities to deliver hybrid application development services. Get our assistance."/><meta property="og:url" content="https://www.techugo.com/ionic-development" /><meta property="og:image" content="https://www.techugo.com/assets/images/nodejsban.png" /> <meta property="og:image:alt" content="Ionic Framework Application Development Company | Techugo" />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/ionic_development');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function nodejs_development()
	{
		$data = array(
		'page_title'=> 'Best PHP and Node JS Development Services In India & USA | Techugo ',
	    'description'=>'Looking for PHP development company? Reach Techugo, it has a team of best developers that offers high-quality app and web creation services. Besides, js developers are implementing programming standards to deliver wonderful applications.',
		'keywords'=>'PHP/NodeJS	PHP development company,php web development,php web development services,custom php development,best php development company,node js agency,node js development companies,top node js developers,node js development company,hire node js developer',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/php-development.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Best PHP and Node JS Development Services In India & USA | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Looking for PHP development company? Reach Techugo, it has a team of best developers that offers high-quality app and web creation services. Besides, js developers are implementing programming standards to deliver wonderful applications."/><meta property="og:url" content="https://www.techugo.com/php-development.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/nodejs_globimg.jpg" /> <meta property="og:image:alt" content="Best PHP and Node JS Development Services In India & USA | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/nodejs_development');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function ui_ux_development()
	{
		$data = array(
		'page_title'=> 'Best Creative UI/UX Design & Development Company | Techugo',
		'description'=>'Hiring UI UX designer is the first step in order to achieve an incredible mobile app design. To secure wonderful outlook for your app, reach Techugo, its designers utilize best  strategies and deliver amazing mobile applications and websites.',
		'keywords'=>'Ui/ux design,ui ux design company,ui ux development company,app design agency,best UX design company,best UI design company,UX design agency,best User interface design,apps with best ux,ux for web applications,web design ui',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/ui-ux-development" />',
			'og'=>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Best Creative UI/UX Design & Development Company | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Hiring UI UX designer is the first step in order to achieve an incredible mobile app design. To secure wonderful outlook for your app, reach Techugo, its designers utilize best strategies and deliver amazing mobile applications and websites."/><meta property="og:url" content="https://www.techugo.com/ui-ux-development" /><meta property="og:image" content="https://www.techugo.com/assets/images/ui_design_methodologies.png" /> <meta property="og:image:alt" content="Best Creative UI/UX Design & Development Company | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/ui_ux_development');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function quality_assurance()
	{
		$data = array(
		'page_title'=> 'Best QA and Software Testing Company | App Testing Services | Techugo',
		'description'=>'Looking for QA and software testing company? Contact Techugo- App quality assurance service provider with experienced testers, offering beta, Alpha, automation, ad-hoc, usability testing and more.',
		'keywords'=>'software testing,Manual testing,QA testing,All about software testing,Testing QA process',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/qa-process-design.php" />',
			'og'=>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Best QA and Software Testing Company | App Testing Services | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Looking for QA and software testing company? Contact Techugo- App quality assurance service provider with experienced testers, offering beta, Alpha, automation, ad-hoc, usability testing and more."/><meta property="og:url" content="https://www.techugo.com/qa-process-design.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/testing_banner.png" /> <meta property="og:image:alt" content="Best QA and Software Testing Company | App Testing Services | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/quality_assurance');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function react_development()
	{
		$data = array(
		'page_title'=> 'React Native Mobile App Development Company in India & USA | Techugo',
		'description'=>'Want more interactive apps? Reach react native mobile app development company- Techugo, delivering iOS and Android Applications with intuitive UX UI design created through the native widgets and hot reload features of this framework',
		'keywords'=>'Create React Native apps,react native technology,react native development,native development,native apps',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/react-native-development" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="React Native Mobile App Development Company in India & USA | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Want more interactive apps? Reach react native mobile app development company- Techugo, delivering iOS and Android Applications with intuitive UX UI design created through the native widgets and hot reload features of this framework"/><meta property="og:url" content="https://www.techugo.com/react-native-development" /><meta property="og:image" content="https://www.techugo.com/assets/images/react_development_apps_ban.jpg" /> <meta property="og:image:alt" content="React Native Mobile App Development Company in India & USA | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/react_development');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function wearables()
	{
		$data = array(
		'page_title'=> 'Wearable Application Development Company For Great App Solutions | Techugo',
		'description'=>'Need wearable application to engage more users? Reach Techugo- Wearable Design and development company that aims to deliver apps for devices both iOS and Android, leveraging this technology to offer futuristic user-experience.',
		'keywords'=>'wearables, Wearable technology, wearable app development company,wearable application development,wearable mobile apps,wearable application',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/wearables" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Wearable Application Development Company For Great App Solutions | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Need wearable application to engage more users? Reach Techugo- Wearable Design and development company that aims to deliver apps for devices both iOS and Android, leveraging this technology to offer futuristic user-experience."/><meta property="og:url" content="https://www.techugo.com/wearables" /><meta property="og:image" content="https://www.techugo.com/assets/images/wearables_banner.png" /> <meta property="og:image:alt" content="Wearable Application Development Company For Great App Solutions | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/wearables');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function blockchain()
	{
		$data = array(
		'page_title'=> 'Blockchain Technology | Blockchain App Development Company | Techugo',
		'description'=>'Want a highly secured app with blockchain technology? Seek help of Techugo, an app development company delivering applications with distributed system, trading platforms and for more, such as ico creation, smart contract.',
		'keywords'=>'blockchain apps,blockchain app development,blockchain mobile app,blockchain app development services,blockchain development services,blockchain app development company,blockchain development company,blockchain development companies in india,blockchain software development company,blockchain software development company,Blockchain technology',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/blockchain" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Blockchain Technology | Blockchain App Development Company | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Want a highly secured app with blockchain technology? Seek help of Techugo, an app development company delivering applications with distributed system, trading platforms and for more, such as ico creation, smart contract."/><meta property="og:url" content="https://www.techugo.com/blockchain" /><meta property="og:image" content="https://www.techugo.com/assets/images/blockchain_header_ban.png" /> <meta property="og:image:alt" content="Blockchain Technology | Blockchain App Development Company | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/blockchain');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function vr_development()
	{
		$data = array(
		'page_title'=> 'VR Application Development Company | Virtual Reality Solution | Techugo',
		'description'=>'Want a VR Technology powered application with unmatched UI experience? Get Techugo assistance- integrating virtual reality and augmented reality in mobile apps that can offer 3D encounter to users.',
		'keywords'=>'best vr apps iphone,vr apps for kids,virtual reality apps for android,top vr apps for android,virtual reality mobile apps,virtual reality android apps,virtual reality iOS apps,vr apps,best virtual reality apps',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/vr-development" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="VR Application Development Company | Virtual Reality Solution | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Want a VR Technology powered application with unmatched UI experience? Get Techugo assistance- integrating virtual reality and augmented reality in mobile apps that can offer 3D encounter to users."/><meta property="og:url" content="https://www.techugo.com/vr-development" /><meta property="og:image" content="https://www.techugo.com/assets/images/vr_banner_theam_bg.png" /> <meta property="og:image:alt" content="VR Application Development Company | Virtual Reality Solution | Techugo " />'
		
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/vr_development');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function augmented_reality()
	{
		$data = array(
		'page_title'=> 'AR Technology | Augmented Reality App Development Company | Techugo',
		'description'=>'Techugo is an augmented reality application development company, delivering outstanding AR technology powered apps with exceptional UX UI experience. Reach  us for securing app with augmented object, interactive GPS, 3D object tracking, smart glass support, chatbot and more.',
		'keywords'=>'augmented reality apps for education,augmented reality app development,augmented reality apps for business,augmented reality app development company,augmented reality in education and training,augmented reality apps for android,ar apps for iphone,best ar apps ios,ar apps for education,ar for android',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/augmented-reality" />',
			'og'=>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="AR Technology | Augmented Reality App Development Company | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Techugo is an augmented reality application development company, delivering outstanding AR technology powered apps with exceptional UX UI experience. Reach us for securing app with augmented object, interactive GPS, 3D object tracking, smart glass support, chatbot and more."/><meta property="og:url" content="https://www.techugo.com/augmented-reality" /><meta property="og:image" content="https://www.techugo.com/assets/images/augmented_reality_globimg.jpg" /> <meta property="og:image:alt" content="AR Technology | Augmented Reality App Development Company | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/augmented_reality');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function internet_of_things()
	{
		$data = array(
		'page_title'=> 'Internet Of Things Based App Development Company | IoT Developers | Techugo',
		'description'=>'Get applications integrated with Internet of things. IoT Developers at Techugo, leveraging this technology to deliver great solutions such as smart homes, retails, solution for mobile connected cars and more. To get an IoT application, reach us.',
		'keywords'=>'iot development, iot app development, iot application development, iot development company, iot app development company,iot technology,iot developer',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/internet-of-things" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Internet Of Things Based App Development Company | IoT Developers | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Get applications integrated with Internet of things. IoT Developers at Techugo, leveraging this technology to deliver great solutions such as smart homes, retails, solution for mobile connected cars and more. To get an IoT application, reach us."/><meta property="og:url" content="https://www.techugo.com/internet-of-things" /><meta property="og:image" content="https://www.techugo.com/assets/images/iot_banner.png" /> <meta property="og:image:alt" content="Internet Of Things Based App Development Company | IoT Developers | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/iot');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function artificial_intelliegence()
	{
		$data = array(
		'page_title'=> 'AI Technology | Artificial Intelligence Development Company | Techugo',
		'description'=>'Want to secure a smart app powered by AI technology? Reach Techugo- Artificial Intelligence development company using machine, deep learning, NLP, Speech recognition and more to deliver futuristic solutions.',
		'keywords'=>'ai based applications,ai powered mobile apps,learning ai app,best artificial intelligence app for android,artificial intelligence in mobile applications,learning ai app,artificial intelligence camera app,artificial intelligence app,artificial intelligence applications,application of artificial intelligence in business',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/artificial-intelliegence" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="AI Technology | Artificial Intelligence Development Company | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Want to secure a smart app powered by AI technology? Reach Techugo- Artificial Intelligence development company using machine, deep learning, NLP, Speech recognition and more to deliver futuristic solutions."/><meta property="og:url" content="https://www.techugo.com/artificial-intelliegence" /><meta property="og:image" content="https://www.techugo.com/assets/images/ai_mobile_view.png" /> <meta property="og:image:alt" content="AI Technology | Artificial Intelligence Development Company | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/artificial_intelliegence');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function chatbots()
	{
		$data = array(
		'page_title'=> 'Chatbots Application Development Company | Chatbots App Developers | Techugo',
		'description'=>'Want to integrate chatbots in your business app? Hire developers from Techugo- Application Development Company leveraging AI technology and machine learning to make it more interactive.',
		'keywords'=>'chatbot development,chatbot development companies,chatbot development services,chatbot app development,chatbot builder,chatbot maker,chatbot android app,chatbot iOS app,best chatbot for website,best chatbot online,Chatbot developer',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/chatbots" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Chatbots Application Development Company | Chatbots App Developers | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Want to integrate chatbots in your business app? Hire developers from Techugo- Application Development Company leveraging AI technology and machine learning to make it more interactive."/><meta property="og:url" content="https://www.techugo.com/chatbots" /><meta property="og:image" content="https://www.techugo.com/assets/images/chatbot_business.jpg" /> <meta property="og:image:alt" content="Chatbots Application Development Company | Chatbots App Developers | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/chatbots');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	public function mobile_app_development()
	{
		$data = array(
		'page_title'=> 'Mobile Application Development Company - App Development Companies | Techugo',
		'description'=>'Techugo is one of the best mobile application development companies, with deft team of app developers offering best mobile app design and app development services to a larger number of businesses and industries. Reach this mobile app development companies today and scale higher on your business revenue model.',
		'keywords'=>'mobile app development company, mobile app design, mobile application development company, mobile app development services, mobile app development companies',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company.php" />',
		'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/>					<meta property="og:title" content="Mobile Application Development Company - App Development Companies | Techugo"/><meta 				property="og:description" content="Techugo is one of the best mobile application development companies, with deft team of app developers offering best mobile app design and app development services to a larger number of businesses and industries. Reach this mobile app development companies today and scale higher on your business revenue model."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-ban.png" /> <meta property="og:image:alt" content="Mobile Application Development Company - App Development Companies | Techugo" />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/mobile_app_development');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}

	/***************Country Pages ****************/

	public function dubai()
	{
		$data = array(
		'page_title'=> 'Top Mobile Application Development Company in Dubai | Techugo',
		'description'=>'With Techugo a leading Mobile App Development Company in Dubai, you can Hire experienced mobile app developers in Dubai, Abu Dhabi, Sharjah, Al Ain for your app needs.',
		'keywords'=>'mobile application development company in Dubai',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-dubai.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile Application Development Company in Dubai | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="With Techugo a leading Mobile App Development Company in Dubai, you can Hire experienced mobile app developers in Dubai, Abu Dhabi, Sharjah, Al Ain for your app needs."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-dubai.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-dubai-banner.png" /> <meta property="og:image:alt" content="Top Mobile Application Development Company in Dubai | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/dubai');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}

	public function australia()
	{
		$data = array(
		'page_title'=> 'Top Mobile Application Development Company in Melbourne, Australia | Techugo',
		'description'=>'Receive phenomenal mobile app development services for iOS app development & android app development from Techugo and get skilled mobile app developer in Australia.',
		'keywords'=>'mobile app development australia, mobile application development australia, app developer australia, mobile app design australia, mobile website development australia, mobile app development company australia',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-australia.php" />',
			'og'=>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile Application Development Company in Melbourne, Australia | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Receive phenomenal mobile app development services for iOS app development & android app development from Techugo and get skilled mobile app developer in Australia."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-australia.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-australia-banner.png" /> <meta property="og:image:alt" content="Top Mobile Application Development Company in Melbourne, Australia | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/australia');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}

	public function germany()
	{
		$data = array(
		'page_title'=> 'Top Mobile App Development Company in Germany | Techugo',
		'description'=>'Leading Mobile App Development Company in Germany. We provide mobile application development services with our experienced mobile app developers.',
		'keywords'=>'mobile app development germany, mobile application development germany, app developer germany, mobile app design germany, mobile website development germany, mobile app development company germany',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-germany.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile App Development Company in Germany | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Leading Mobile App Development Company in Germany. We provide mobile application development services with our experienced mobile app developers."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-germany.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-germany-banner.png" /> <meta property="og:image:alt" content="Top Mobile App Development Company in Germany | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/germany');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}

	public function bahrain()
	{
		$data = array(
		'page_title'=> 'Top Mobile Application Development Company in Bahrain | Techugo',
		'description'=>'Techugo is the best Mobile App Development Company in Bahrain, offering winning mobile application development services with experienced brood of mobile app developers.',
		'keywords'=>'Techugo is the best Mobile App Development Company in Bahrain, offering winning mobile application development services with experienced brood of mobile app developers.',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-bahrain.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile Application Development Company in Bahrain | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Techugo is the best Mobile App Development Company in Bahrain, offering winning mobile application development services with experienced brood of mobile app developers."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-bahrain.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-bahrain-banner.png" /> <meta property="og:image:alt" content="Top Mobile Application Development Company in Bahrain | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/bahrain');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}

	public function canada()
	{
		$data = array(
		'page_title'=> 'Top Mobile Application Development Company in Canada | Techugo',
		'description'=>'Reach best iOS app development company in Canada & get best app builder, app creator & app designers for winning Android app development in Canada to boost your revenue.',
		'keywords'=>'mobile app development canada, mobile application development canada, app developer canada, mobile app design canada, mobile website development canada, mobile app development company canada',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-canada.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile Application Development Company in Canada | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Reach best iOS app development company in Canada & get best app builder, app creator & app designers for winning Android app development in Canada to boost your revenue."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-canada.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-canada-banner.pngg" /> <meta property="og:image:alt" content="Top Mobile Application Development Company in Canada | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/canada');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	
	public function ireland()
	{
		$data = array(
		'page_title'=> 'Top Mobile Application Development Company in Ireland | Techugo',
		'description'=>'Techugo is the best Mobile App Development Company in Ireland, offering astounding mobile application development services from an experienced mobile app developers team.',
		'keywords'=>'mobile app development ireland, mobile application development ireland, app developer ireland, mobile app design ireland, mobile website development ireland, mobile app development company ireland',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-ireland.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile Application Development Company in Ireland | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Techugo is the best Mobile App Development Company in Ireland, offering astounding mobile application development services from an experienced mobile app developers team."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-ireland.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-ireland-banner.png" /> <meta property="og:image:alt" content="Top Mobile Application Development Company in Ireland | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/ireland');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}

	public function kuwait()
	{
		$data = array(
		'page_title'=> 'Top Mobile Application Development Company in Kuwait | Techugo',
		'description'=>'Techugo proffers mobile app development in Kuwait, best mobile app developer & mobile app design for your iOS app development & mobile application development process.',
		'keywords'=>'mobile app development kuwait, mobile application development kuwait, app developer kuwait, mobile app design kuwait, mobile website development kuwait, mobile app development company kuwait',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-kuwait.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile Application Development Company in Kuwait | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="echugo proffers mobile app development in Kuwait, best mobile app developer & mobile app design for your iOS app development & mobile application development process."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-kuwait.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-kuwait-banner.png" /> <meta property="og:image:alt" content="Top Mobile Application Development Company in Kuwait | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/kuwait');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}

	public function qatar()
	{
		$data = array(
		'page_title'=> 'Top Mobile Application Development Company in Qatar | Techugo',
		'description'=>'Techugo offers skilled mobile app developer to create your own app with best ios app development & mobile app design. Reach for impeccable mobile app development in Qatar.',
		'keywords'=>'mobile app development qatar, mobile application development qatar, app developer qatar, mobile app design qatar, mobile website development qatar, mobile app development company qatar',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-qatar.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile Application Development Company in Qatar | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Techugo offers skilled mobile app developer to create your own app with best ios app development & mobile app design. Reach for impeccable mobile app development in Qatar."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-qatar.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-qatar-banner.png" /> <meta property="og:image:alt" content="Top Mobile Application Development Company in Qatar | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/qatar');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}

	public function uae()
	{
		$data = array(
		'page_title'=> 'Top Mobile Application Development Company in UAE | Techugo',
		'description'=>'Reach Techugo a leading Mobile App Development Company in UAE to get impressive mobile application development services with our experienced mobile app developers team.',
		'keywords'=>'app developer uae, mobile app design uae, mobile app development company uae',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-uae.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile Application Development Company in UAE | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Reach Techugo a leading Mobile App Development Company in UAE to get impressive mobile application development services with our experienced mobile app developers team."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-uae.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-uae-banner.png" /> <meta property="og:image:alt" content="Top Mobile Application Development Company in UAE | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/uae');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}

	public function uk()
	{
		$data = array(
		'page_title'=> 'Top Mobile Application Development Company in UK | Techugo',
		'description'=>'Techugo is a top mobile application development agency, filled with skilled app builder, app creator & app designers in UK, offering incredible app development process.',
		'keywords'=>'mobile app development agency in uk, mobile application development uk, app developer uk, mobile app design uk, mobile website development uk, mobile app development company uk',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-uk.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile Application Development Company in UK | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Techugo is a top mobile application development agency, filled with skilled app builder, app creator & app designers in UK, offering incredible app development process."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-uk.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-uk-banner.png" /> <meta property="og:image:alt" content="Top Mobile Application Development Company in UK | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/uk');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}

	public function us()
	{
		$data = array(
		'page_title'=> 'Top Mobile Application Development Company in Dulles, Virginia, USA',
		'description'=>'Attain best mobile app development in USA from Techugo & get quality iOS application development & android app development services filled with unique mobile app design.',
		'keywords'=>'mobile app development usa, mobile application development usa, app developer usa, mobile app design usa, mobile website development usa, mobile app development company usa, mobile app development New York City, mobile app development San Francisco, mobile app development Washington, mobile app development Chicago, mobile app development Boston, mobile app development Austin, mobile app development Los Angeles, mobile app development Denver, mobile app development Houston, mobile app development Portland, mobile app development Philadelphia, mobile app development Dallas, mobile app development Atlanta, mobile app development Las Vegas',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-united-states.php" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Top Mobile Application Development Company in Dulles, Virginia, USA"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Attain best mobile app development in USA from Techugo & get quality iOS application development & android app development services filled with unique mobile app design."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-united-states.php" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-usa-banner.png" /> <meta property="og:image:alt" content="Top Mobile Application Development Company in Dulles, Virginia, USA " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/usa');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer');
	}
	
	public function mauritius()
	{
		$data = array(
		'page_title'=> 'best app development company delivering amazing user experiences',
		'description'=>'We transform businesses with digital solutions and help to unlock the opportunities of tomorrow.',
		'keywords'=>'mobile app development mauritius',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/mobile-app-development-company-mauritius.php" />',
		'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Best App Development Company Delivering Amazing User Experiences | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="We transform businesses with digital solutions and help to unlock the opportunities of tomorrow."/><meta property="og:url" content="https://www.techugo.com/mobile-app-development-company-mauritius" /><meta property="og:image" content="https://www.techugo.com/assets/images/mobile-app-development-company-mauritius-banner.png" /> <meta property="og:image:alt" content="Best App Development Company Delivering Amazing User Experiences | Techugo " />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/mauritius');
		$this->load->view('templates/commoncontent');
		$this->load->view('templates/footer'); 
	}
	
	public function sitemap_test()
    {
       $links = [
		'https://www.techugo.com/mobile-app-development-company-canada.php',
		'https://www.techugo.com/mobile-app-development-company-bahrain.php',
		'https://www.techugo.com/mobile-app-development-company-uk.php',
		'https://www.techugo.com/mobile-app-development-company-qatar.php',
		'https://www.techugo.com/mobile-app-development-company-germany.php',
		'https://www.techugo.com/mobile-app-development-company-united-states.php',
		'https://www.techugo.com/mobile-app-development-company-mauritius',
		'https://www.techugo.com/mobile-app-development-company-uae.php',
		'https://www.techugo.com/mobile-app-development-company-dubai.php',
		'https://www.techugo.com/mobile-app-development-company-australia.php',
		'https://www.techugo.com/mobile-app-development-company-ireland.php',
		'https://www.techugo.com/mobile-app-development-company-kuwait.php',
		'https://www.techugo.com/',
		'https://www.techugo.com/android-application-development.php',
		'https://www.techugo.com/iphone-application-development.php',
		'https://www.techugo.com/mobile-app-development-company.php',
		'https://www.techugo.com/ionic-development',
		'https://www.techugo.com/php-development.php',
		'https://www.techugo.com/ui-ux-development',
		'https://www.techugo.com/qa-process-design.php',
		'https://www.techugo.com/react-native-development',
		'https://www.techugo.com/wearables',
		'https://www.techugo.com/blockchain',
		'https://www.techugo.com/vr-development',
		'https://www.techugo.com/augmented-reality',
		'https://www.techugo.com/internet-of-things',
		'https://www.techugo.com/artificial-intelliegence',
		'https://www.techugo.com/chatbots',
		'https://www.techugo.com/sitemap',
		'https://www.techugo.com/policies'];
		 
	 $query = $this->db2->query("SELECT wpp.post_title, wpp.guid, REPLACE( REPLACE( REPLACE( REPLACE( wpo.option_value, '%year%', DATE_FORMAT(wpp.post_date,'%Y') ), '%monthnum%', DATE_FORMAT(wpp.post_date, '%m') ), '%day%', DATE_FORMAT(wpp.post_date, '%d') ), '%postname%', wpp.post_name ) AS permalink FROM wp_posts wpp JOIN wp_options wpo ON wpo.option_name = 'permalink_structure' WHERE wpp.post_type = 'post' AND wpp.post_status = 'publish' ORDER BY wpp.post_date DESC");
	 $result = $query->result_array();
		
		for($i=0; $i<count($result);$i++){
			$last= count($links);
			$links[$last] = 'https://www.techugo.com/blog'.$result[$i]['permalink'];
		}
		
		 //echo "<pre>"; print_r($links); die;
		date_default_timezone_set("Asia/Calcutta");  
		 $date = date('Y-m-d'); 
        $time = date('H:i:s');
        $current_date = $date.'T'.$time.'+00:00';
         $url = 'https://www.techugo.com/';
           header("Content-Type: application/xml; charset=utf-8");
         $sitemap = '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;
         $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
            $sitemap .= '<url>'. PHP_EOL;
            $sitemap .= '<loc>'.$url.'</loc>'. PHP_EOL;
            $sitemap .= '<lastmod>'.$current_date.'</lastmod>'. PHP_EOL;
            $sitemap .= '</url>'. PHP_EOL;
		
		foreach($links as $item) { 
		 		$sitemap .= '<url>'. PHP_EOL;
                $sitemap .= '<loc>'.$item.'</loc>'.PHP_EOL;
                $sitemap .= '<lastmod>'.$current_date.'</lastmod>'.PHP_EOL;
                $sitemap .= '</url>'. PHP_EOL;  
		}

		$sitemap .= '</urlset>'. PHP_EOL;
		
		$myfile = fopen($_SERVER['DOCUMENT_ROOT']."/sitemap.xml", "w") or die("Unable to open file!");
		fwrite($myfile, $sitemap);
		fclose($myfile);
		redirect('sitemap');
		
    }

	public function thankyou()
	{
		$data = array(
		'page_title'=> 'Thank You - Techugo',
		'description'=>'Thank You - Techugo',
		'keywords'=>''
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/thank_you');
		$this->load->view('templates/footer');
	}
	
	public function techtalks()
	{
		$data = array(
		'page_title'=> 'Techtalks by Techugo',
		'description'=>'Tech-talks aims to help you unleash the layers of technology, to make you smarter, more productive and simply happier. Produced by the technocrats of Techugo, this technology podcast & vlogs delivers short snippets of tech news and updates. A great treat for hardcore tech enthusiasts!',
		'keywords'=>'Techuo podcast, Techugo vlog',
		'og'=>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Techtalks by Techugo"/><meta property="og:description" content="Tech-talks aims to help you unleash the layers of technology, to make you smarter, more productive and simply happier. Produced by the technocrats of Techugo, this technology podcast & vlogs delivers short snippets of tech news and updates. A great treat for hardcore tech enthusiasts!"/><meta property="og:image" content="https://www.techugo.com/assets/images/podcast_ban.jpg" /> <meta property="og:image:alt" content="Techtalks by Techugo" />'
		);
		$config['base_url'] = BASEURL.'/techtalks';
        $config['per_page'] = 10;
        $config['enable_query_strings'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;
         // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
       
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="'.$config['base_url'].'?per_page=0">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $searchKEY = $this->input->get('search');
        $data['searchFor'] = $searchKEY ? $searchKEY : NULL;
        $data['page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $data['podcastArr'] = $this->Contact_model->getPodcast($config["per_page"], $data['page'],$data['searchFor']);
        $config['total_rows'] = $this->Contact_model->count_List($config["per_page"], $data['page'],$data['searchFor']); 
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links(); 
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/podcast',$data);
		$this->load->view('templates/footer');
	} 


	public function techtalks_detail()
	{
		$url = $this->uri->segment(2);
		$result['podcastArr'] = $this->Contact_model->techtalks_detail($url);
		
		//print_r($result['podcastArr']);die;
		$data = array(
		'page_title'=> $result['podcastArr']['podcast_title'],
		'description'=>$result['podcastArr']['podcast_content'],
		'keywords'=>'Techuo podcast, Techugo vlog',
			'canonical_tag'=>'<link rel="canonical" href="https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'" />',
		'og'=>'<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="'.$result['podcastArr']['podcast_title'].'"/><meta property="og:url" content="https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'" /><meta property="og:description" content="'.$result['podcastArr']['podcast_content'].'"/><meta property="og:image" content="'.$result['podcastArr']['podcast_thumbnail'].'" /> <meta property="og:image:alt" content="'.$result['podcastArr']['podcast_title'].'" />'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/techtalks_detail',$result);
		$this->load->view('templates/footer'); 
	}
	
	
	 public function external(){
	 	$fileurl = $this->uri->segment(2);
	 	$files = array(
			'analytics.js' => 'https://www.google-analytics.com/analytics.js',
			'jquery.validate.min.js' => 'https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js',
			'pro.js' => 'https://s3.buysellads.com/ac/pro.js'
		);

		if(isset($files[$fileurl])) {
			if ($files[$fileurl] == 'analytics.js'){
				header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + ((60 * 60) * 48))); // 2 days for GA
			} else {
				header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60))); // Default set to 1 hour
			}

			echo file_get_contents($files[$fileurl]);
		}
	 }
	 
	 public function portfolio1()
	{
		$data = array(
		'page_title'=> 'Get a glimpse of our successful mobile apps | Portfolio | Techugo'
		
		);
		//print_r($data);die; 
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/portfolio1');		
		$this->load->view('templates/footer'); 
	}
	
  
}
