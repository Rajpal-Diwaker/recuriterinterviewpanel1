<?php
header_remove("X-Powered-By");
header('X-Frame-Options: DENY'); 
header("X-XSS-Protection: 0");
header('Strict-Transport-Security: max-age=31536000');
//header("Content-Security-Policy: default-src 'self'");
defined('BASEPATH') OR exit('No direct script access allowed');
class Career extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Contact_model');
		$this->load->library('user_agent');
	    $this->load->library("S3");
		
	}

	public function index()
	{
		
		//print_r('sdsdsd');die;
		$response = $this->Contact_model->get_all_jobs();
		$data = array(
			'result_data' =>$response,
		'page_title'=> 'Your career journey starts here | Techugo',
		'description'=>'Are you ready to be a part of forward thinkers where you can create something remarkable? Join Techugo in turning future visions into meaningful technology!',
		'keywords'=>'',
		'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/career" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Your career journey starts here | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Are you ready to be a part of forward thinkers where you can create something remarkable? Join Techugo in turning future visions into meaningful technology!"/><meta property="og:url" content="https://www.techugo.com/career" /><meta property="og:image" content="https://www.techugo.com/assets/images/career/discover_ban.jpg" /> <meta property="og:image:alt" content="Your career journey starts here | Techugo" />'
		);
	
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/careers');
	}
	
	
	public function job_openings()
	{
		if($_POST['submit']){
			
			//print_r($_POST);die;
				$from_email='sales@techugo.com';
				
				$fullname= ucwords($this->input->post('full_name'));
				$email= $this->input->post('email');
				$country_code= $this->input->post('country_code');
				$contact= $this->input->post('contact');
				$current_ctc= $this->input->post('current_ctc');
				$expected_ctc= $this->input->post('expected_ctc');
				$experience= $this->input->post('experience');
				$designation= $this->input->post('designation');
				$team_management= $this->input->post('team_management');
				$languages= $this->input->post('languages');
				$framework= $this->input->post('framework');
				$tasks= $this->input->post('tasks');
				$get_to_know= $this->input->post('get_to_know');
				$role_expectation= $this->input->post('role_expectation');
				$lastCompany= $this->input->post('lastCompany');
				$resume='';
				$video_file='';
				$id= $this->input->post('id');

				
				if(empty($_FILES['video']['name'])) 
				{
					$video_file = "";
				}
				else{
					$filename = str_replace(' ', '', $_FILES['video']['name']);
					$ext = end(explode('.', $filename));
					$video=time().'@'.$filename;
					
					$tmp_name=str_replace(' ', '', $_FILES['video']['tmp_name']);
					
					$check=$this->s3->putObjectFile($tmp_name, "techugocoms3", 'video/'.$video, S3::ACL_PUBLIC_READ);
					
					$video_file = S3URL.'video/'.$video;
				}
				
				if(empty($_FILES['resume']['name'])) 
				{
					$resume = "";
				}
				else{
					$filename1 = str_replace(' ', '', $_FILES['resume']['name']);
					$ext1 = end(explode('.', $filename1));
					$resume=time().'@'.$filename1;
					
					$tmp_name=str_replace(' ', '', $_FILES['resume']['tmp_name']);
					
					$check=$this->s3->putObjectFile($tmp_name, "techugocoms3", 'resume/'.$resume, S3::ACL_PUBLIC_READ);
										
					$resume = S3URL.'resume/'.$resume;
				}
				
				$requestmessage = '<p>Hello,<br><br>Here are the Details to contact<br></br></br>
				Name : '.$fullname.'</br></br>
				Email : '.$email.'</br> </br>
				Contact Number: '.$country_code.'-'.$contact.'</br> </br> 
				Current CTC: '.$current_ctc.'</br></br>
				Expected CTC: '.$expected_ctc.'</br></br>
				How much experience do you have (in years)? : '.$experience.'</br></br>
				What is your designation/role in your current organization? : '.$designation.'</br></br>
				Do you manage a team in your current organization? : '.$team_management.'</br></br>
				What are the programming languages you have used so far or most familiar with(Comma separated)? : '.$languages.'</br></br>
				What frameworks you are expert in? Multiple frameworks can be comma separated. : '.$framework.'</br></br>
				What are the 3 major tasks that are most important in your current role? : '.$tasks.'</br></br>
				From where did you get to know about Techugo? : '.$get_to_know.'</br></br>
				What is your expectations from this role? : '.$role_expectation.'</br></br>';
				if($resume!=''){
				$requestmessage .= 'Resume Attachment Link - <a href='.$resume.'>View Attachment</a></br></br>';
				}if($video_file!=''){
				$requestmessage .='Video Attachment Link - <a href='.$video_file.'>View Attachment</a></br></br>';
				}
				$requestmessage .='</br></br><br><br>Thanks and Regards,<br><p>'.$fullname.'</p>';
			
			$requestsubject = "Job Opening Request";
			$to_email  = "career@techugo.com";  
			
			$requestbody =
			'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
						<title>'.html_escape($requestsubject).'</title>
						<style type="text/css">
							body {
								font-family: Arial, Verdana, Helvetica, sans-serif;
								font-size: 16px;
							}
						</style>
					</head> 
					<body>
					'.$requestmessage.'
					</body>
					</html>';
		
			$headers = 'From:'.$from_email."\r\n".
			'Reply-To: '.$from_email. "\n" .
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'X-Mailer: PHP/' . phpversion();
	       
	       	
			
			$sendingemail = $this->send_mail($requestsubject,$from_email,$to_email,$headers,$requestbody);
			
			$insertData= array(
				"fullname"=>$fullname?$fullname:'',
				"email"=>$email?$email:'',
				"country_code"=>$country_code?$country_code:'',
				"contact_no"=>$contact?$contact:'',
				"resume"=>$resume?$resume:'',
				"current_ctc"=>$current_ctc?$current_ctc:'',
				"expected_ctc"=>$expected_ctc?$expected_ctc:'',
				"experience"=>$experience?$experience:'',
				"designation"=>$designation?$designation:'',
				"team_management"=>$team_management?$team_management:'',
				"languages"=>$languages?$languages:'',
				"framework"=>$framework?$framework:'',
				"tasks"=>$tasks?$tasks:'',
				"get_to_know"=>$get_to_know?$get_to_know:'',
				"role_expectation"=>$role_expectation?$role_expectation:'',				
				"resume"=>$resume?$resume:'',
				"video"=>$video_file?$video_file:''
			);

			
			$insertResumeData= array(
				"jobId"=>$id?$id:'',
				"email"=>$email?$email:'',
				"name"=>$fullname?$fullname:'',
				"mobile"=>$contact?$contact:'',
				"totalExperince"=>$experience?$experience:'',			
				"lastCompany"=>$lastCompany?$lastCompany:'',			
				"resume"=>$resume?$resume:'',
				"video"=>$video_file?$video_file:'',
				"current_ctc"=>$current_ctc?$current_ctc:'',
				"expected_ctc"=>$expected_ctc?$expected_ctc:'',
			);

			//print_r($insertResumeData);die;
			$insertResumeQuestions= array(
				"manageTeam"=>$team_management?$team_management:'',
				"programingLanguage"=>$languages?$languages:'',
				"framework"=>$framework?$framework:'',
				"majorTask"=>$tasks?$tasks:'',
				"knowTechugo"=>$get_to_know?$get_to_know:'',
				"expectationRole"=>$role_expectation?$role_expectation:'',	
			);
			//print_r($insertData);die;
			
			$response = $this->Contact_model->insert_job($insertData);
			$response1 = $this->Contact_model->save_resume_data($insertResumeData,$insertResumeQuestions);

			
			if(1 == $response){
				$from_email1='career@techugo.com';
				$job_data = $this->Contact_model->get_job_by_id($id);
				$job_data['name'] = $fullname;
				$data['job_data'] = $job_data;
				
				
				$responsemessage = $this->load->view('EmailTemplate/reply_to_candidate', $data, true);
				$responsesubject = "Techugo : Thank you For Applying";
				$to_email  = $email;  
			
			
	       
	       	$this->load->library('email');
						$result = $this->email
								->from($from_email1)
								->to($email)
								->subject($responsesubject)
								->message($responsemessage)
								->send();
			
				echo'1';
			}
			else
			{
			echo '2';
			}
			
		}else{
			
			$type = $_GET['type'];
			
			$response = $this->Contact_model->get_job_by_id($type);
			if(!empty($response)){
					$heading = $response['0']['title']." (".$response['0']['minExp']."-".$response['0']['maxExp']." years)";
					$details ='<div class="career_description">
					<div class="career_descriptionCon">
					<div class="row clearfix">
					 <div class="col-sm-6"><h3>Description</h3></div>
					 <div class="col-sm-6">
						<div class="sharelinkrow">
						 <span class="shareontxt">Share on</span>
							<a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url='.current_url(). '?' .$_SERVER['QUERY_STRING'].'&source=LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
							<a class="twitter" href="http://www.twitter.com/share?url='.current_url(). '?' .$_SERVER['QUERY_STRING'].'" target="_blank"><i class="fa fa-twitter"></i></a>
							<a class="paperclip" href="https://www.facebook.com/sharer/sharer.php?u='.current_url(). '?' .$_SERVER['QUERY_STRING'].'" target="_blank"><i class="fa fa-paperclip"></i></a>
						 </div>
					 </div>
					</div>'.$response['0']['description'].'					
					<h5>Skills</h5>
				   <ul>
				   '.$response['0']['skills'].'
				   </ul>
				   <h5>Responsibilities</h5>
				   <ul>
				   '.$response['0']['responsiblity'].'
				   </ul>
					</div>
				  </div>
				</div>';
				$video_check = $response['0']['isVideos'];
		
			$data = array(
			'page_title'=> 'Your career journey starts here | Techugo',
			'description'=>'Are you ready to be a part of forward thinkers where you can create something remarkable? Join Techugo in turning future visions into meaningful technology!',
			'keywords'=>'',
			'canonical_tag'=>'<link rel="canonical" href="https://www.techugo.com/career" />',
			'og' => '<meta property="og:locale" content="en_US"/><meta property="og:type" content="website"/><meta property="og:site_name" content="Techugo"/><meta property="og:title" content="Your career journey starts here | Techugo"/><meta itemprop="name" content=" Techugo "/><meta property="og:description" content="Are you ready to be a part of forward thinkers where you can create something remarkable? Join Techugo in turning future visions into meaningful technology!"/><meta property="og:url" content="https://www.techugo.com/career" /><meta property="og:image" content="https://www.techugo.com/assets/images/career/discover_ban.jpg" /> <meta property="og:image:alt" content="Your career journey starts here | Techugo" />',
			'details'=>$details,
			'heading'=>$heading,
			'video_check'=>$video_check
			);
			$this->load->view('templates/header1',$data);
			$this->load->view('pages/job_opening');
		}else
		{
			redirect('/career', 'refresh');
			}
		}
	} 
	
	function send_mail($subject,$fromemail,$toemail,$header,$msgbody){
			$this->load->library('email');
			$this->email->set_header('Header',$header);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");
			$this->email->reply_to($fromemail);
			$this->email->from($fromemail);
			$this->email->to($toemail);
			$this->email->subject($subject);
			$this->email->message($msgbody);
			$this->email->send();
		}
}
	
?>
