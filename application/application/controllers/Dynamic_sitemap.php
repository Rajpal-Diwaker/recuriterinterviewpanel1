<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_sitemap extends CI_Controller {
 function __construct(){
        parent::__construct();
        //load our second db and put in $db2
        $this->db2 = $this->load->database('blog', TRUE);
    }

	public function index()
	{
		//print_r(1);die;
		$links = [
		'https://www.techugo.com/mobile-app-development-company-canada.php',
		'https://www.techugo.com/mobile-app-development-company-bahrain.php',
		'https://www.techugo.com/mobile-app-development-company-uk.php',
		'https://www.techugo.com/mobile-app-development-company-qatar.php',
		'https://www.techugo.com/mobile-app-development-company-germany.php',
		'https://www.techugo.com/mobile-app-development-company-united-states.php',
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
		$data = array (
		'links' => $links
		);
	
	 $this->load->view('pages/dynamic_sitemap',$data);	
	}
 
}
?>