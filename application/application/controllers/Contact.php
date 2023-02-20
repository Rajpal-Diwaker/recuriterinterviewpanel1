<?php
header_remove("X-Powered-By");
header('X-Frame-Options: DENY'); 
header("X-XSS-Protection: 0");
header('Strict-Transport-Security: max-age=31536000');
//header("Content-Security-Policy: default-src 'self'");
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Contact_model');
		$this->load->library('session');
		 $this->load->helper('cookie');
		$this->load->helper('url');
		$this->load->library("pagination");
		
	}

	public function index()
	{
		$data = array(
		'page_title'=> 'Contact Techugo for Mobile App Development & Design Services | Techugo',
		'description'=>'Contact us to hire our expert mobile app development company. Techugo is a top rated mobile app design and development company in USA,UAE & India.'
		);
		$this->load->view('templates/header1',$data);
		$this->load->view('pages/contact_us');
	}

	//In Use
	public function contact_copy()
	{

		if($_POST['submit']){
			$from_email='sales@techugo.com';
			$fullname= ucwords($this->input->post('fullname'));
			$email= $this->input->post('email');
			$contact= $this->input->post('contact');
			$skypeId= $this->input->post('skypeId');
			$query= $this->input->post('query');
			$nda = $this->input->post('nda');
			$file='';
			
			$date = date("d/m/Y");
			   	$number = time();
				 $this->load->helper('url');
				 $base_url =  base_url();
				  
				//Load the library
				$this->load->library('Html2pdf');
			
				$this->html2pdf->folder('./assets/nda/');
				
				//Set the filename to save/download as
				$this->html2pdf->filename($number.'_nda.pdf');
				
				//Set the paper defaults
				$this->html2pdf->paper('a4', 'portrait');
				
	    
			$data = array(
				'title' => 'PDF Created',
				'message' => 'Hello World!',
				'base_url' => $base_url,
				'name' => $fullname,
				'date'=>$date
			);
		
			$returndata = array('page'=>'NDA','data'=>$data);
			 $this->html2pdf->html($this->load->view('nda',$returndata,true));
	    
	    if($this->html2pdf->create('save')) {
	    	//PDF was successfully saved or downloaded
	    	//echo 'PDF saved';
			$location = 'nda';
			$file_name = $number.'_nda.pdf';
		}
			if (!empty($_FILES['filename']['name']))
			{
			    $this->load->library('upload');
				$images = $_FILES['filename']['name'];
				$file = rand(100000, 999999) . '-' . $images;
				$config['upload_path'] = './uploads/files/';
				$config['allowed_types'] = '*';
				$config['overwrite'] = true;
				$config['file_name'] = $file;
				if (!is_dir('uploads/files'))
				{
					mkdir('./uploads/files/', 0777, TRUE);
				}

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('filename'))
				{
					$uploadData = $this->upload->data();
					$file = $uploadData['file_name'];
				}
				else
				{
					echo $this->upload->display_errors();
				}
				$requestmessage = '<p>Hello,<br><br>Here are the Details to contact<br></br></br>
				Name : '.$fullname.'</br></br>
				Email : '.$email.'</br> </br>
				Contact Number: '.$contact.'</br> </br>
				Skype Id: '.$skypeId.'</br></br>
				Query: '.$query.'</br></br>
				Attachment Link - <a href='.base_url().'/uploads/files/'.$file.'>View Attachment</a></br></br>
				Form Source: Get in touch</br></br><br><br>Thanks and Regards,<br><p>'.$fullname.'</p>';
			}else{
				$requestmessage = '<p>Hello,<br><br>Here are the Details to contact<br></br></br>
				Name : '.$fullname.'</br></br>
				Email : '.$email.'</br> </br>
				Contact Number: '.$contact.'</br> </br>
				Skype Id: '.$skypeId.'</br></br>
				Query: '.$query.'</br></br>
				Form Source: Get in touch</br></br><br><br><br>Thanks and Regards,<br><p>'.$fullname.'</p>';
			}
			$requestsubject = "New Collaboration";
			$to_email  = "sales@techugo.com";  
			
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
		//	echo $requestbody; die;
			$headers = 'From:'.$from_email."\r\n".
			'Reply-To: '.$from_email. "\n" .
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'X-Mailer: PHP/' . phpversion();
	       
	       	
			$sendingemail = $this->send_mail($requestsubject,$from_email,$to_email,$headers,$requestbody);
			//$send_mail = mail($to_email, $requestsubject, $requestbody, $headers);
			
			//print_r($send_mail);die;
			$insertData= array(
				"name"=>$fullname?$fullname:'',
				"email"=>$email?$email:'',
				"contact_no"=>$contact?$contact:'',
				"skype_id"=>$skypeId?$skypeId:'',
				"budget"=>$contact_budget?$contact_budget:'',
				"source"=>$source?$source:'',
				"file"=>$file?$file:'',
				"query"=>$query?$query:'',
				"form_source"=>'get_in_touch',
			);
			//print_r($insertData);die;
			
			$response = $this->Contact_model->insert_data($insertData);
			
			if(1 == $response){
				$response_subject = "New Collaboration with Techugo | $fullname";
				$response_message = '<div style="max-width:800px; margin:auto; font-size:20px; line-height:24px; font-family:Arial, Helvetica, sans-serif">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				 
				  <tr>
					<td height="16"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">Hello <strong>'.$fullname.',</strong></td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">It\'s great to see your message. We are glad that you have considered one of the fastest-growing firms for your product development.</td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">We believe you and your family are safe indoors amidst this pandemic.</td>
				  </tr>
				  <tr>
					<td height="10"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">We are analysing your query along with our specialised architects.</td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">You will receive an email very soon from our <strong>Collaboration Team.</strong></td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">Meanwhile, please take a look at our <strong>Portfolio</strong> and jazz up with some of our innovative creations. <br><a href="https://www.techugo.com/portfolio.php" target="_blank" style="color:#000;">https://www.techugo.com/portfolio.php</a></td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">And if you wish to see the kind of team we are, check us out on<strong> Instagram.</strong> We are creative hooligans.</td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;"><strong>Techugo -</strong> <a href="https://www.instagram.com/techugo" target="_blank" style="color:#000">https://www.instagram.com/techugo/</a></td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;"><strong>Techugo Team -</strong> <a href="https://www.instagram.com/techugoteam" target="_blank" style="color:#000">https://www.instagram.com/techugoteam</a></td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>';
								if($nda == 'on'){
							$response_message .='<tr>
					<td height="10" style="padding-left:10px;">Also, as requested by you, please <a href = "'.$base_url.'assets/nda/'.$file_name.'" target="_blank" download>click here </a> to download the <strong>Non-Disclosure agreement</strong></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">&nbsp;</td>
				  </tr>';
						}
				$response_message .='<tr>
					<td height="10" style="padding-left:10px;">Thank you so much for your patience in advance</td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">&nbsp;</td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">&nbsp;</td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">Cheers!</td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">Team Techugo</td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">&nbsp;</td>
				  </tr>
				  </table>

				</div>';
				$to_email1  = $email;  
				$headers1 = "From:sales@techugo.com\r\n".
				'Reply-To: sales@techugo.com' . "\n" .
				'Content-type: text/html; charset=iso-8859-1' . "\r\n".
				'X-Mailer: PHP/' . phpversion(); 
				$response_body =
					'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
						<title>'.html_escape($response_subject).'</title>
						<style type="text/css">
							body {
								font-family: Arial, Verdana, Helvetica, sans-serif;
								font-size: 16px;
							}
						</style>
					</head> 
					<body>
					'.$response_message.'
					</body>
					</html>';

					$fromemail1 = 'sales@techugo.com';
					$sendemail1 = $this->send_mail($response_subject,$fromemail1,$to_email1,$headers1,$response_body);
					//$send_mail = mail($to_email1, $response_subject, $response_body, $headers1);
					echo'1';
			}  
		}
		else
		{
		$data = array(
		'page_title'=> 'Contact Techugo for Mobile App Development & Design Services | Techugo',
		'description'=>'Contact us to hire our expert mobile app development company. Techugo is a top rated mobile app design and development company in USA,UAE & India.'
		);
		$this->load->view('templates/header',$data);
		}
	}

	
	
	public function footer()
	{
			//print_r($_POST);die;
			$name= ucwords($this->input->post('name'));
			$email= $this->input->post('email');
			$phone= $this->input->post('contact');
			$query= $this->input->post('message');
			$form_value =$this->input->post('url');
			$nda = $this->input->post('nda');
			$file='';
			
			$date = date("d/m/Y");
			   	$number = time();
				 $this->load->helper('url');
				 $base_url =  base_url();
				  
				//Load the library
				$this->load->library('Html2pdf');
			
				$this->html2pdf->folder('./assets/nda/');
				
				//Set the filename to save/download as
				$this->html2pdf->filename($number.'_nda.pdf');
				
				//Set the paper defaults
				$this->html2pdf->paper('a4', 'portrait');
				
	    
			$data = array(
				'title' => 'PDF Created',
				'message' => 'Hello World!',
				'base_url' => $base_url,
				'name' => $name,
				'date'=>$date
			);
		
			$returndata = array('page'=>'NDA','data'=>$data);
			 $this->html2pdf->html($this->load->view('nda',$returndata,true));
	    
	    if($this->html2pdf->create('save')) {
	    	//PDF was successfully saved or downloaded
	    	//echo 'PDF saved';
			$location = 'nda';
			$file_name = $number.'_nda.pdf';
		}
		    if(empty($name)||empty($email)||empty($query)){
				echo 'empty';
			}
			else{
		    if($form_value=='/'){$form_value='home';}
			$subject = "New Collabration";
			$message = '<p>Hello,<br><br>Here are the Details to contact<br></br></br>
			Name : '.$name.'</br></br>
			Email : '.$email.'</br> </br>
			Mobile : '.$phone.'</br> </br>
			Query: '.$query.'</br></br>
			Form Source: '.$form_value.'</br></br>
			<br><br><br>Thanks and Regards,<br><p>'.$name.'</p>';
			$body =
			'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
				<title>'.html_escape($subject).'</title>
				<style type="text/css">
					body {
						font-family: Arial, Verdana, Helvetica, sans-serif;
						font-size: 16px;
					}
				</style>
			</head>
			<body>
			'.$message.'
			</body>
			</html>';
			$to_email  = "sales@techugo.com"; 
			    
				 //proceed with PHP email.
			$headers = "From:".$email."\r\n".
			'Reply-To: '.$email.'' . "\n" .
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'X-Mailer: PHP/' . phpversion();
			//$body = $message_body;
    

			$from_email='sales@techugo.com';
			$sendingemail = $this->send_mail($subject,$from_email,$to_email,$headers,$body);
			//$send_mail = mail($to_email, $subject, $body, $headers);

						
			$insertData= array(
				"name"=>$name?$name:'',
				"email"=>$email?$email:'',
				"contact_no"=>$phone?$phone:'',
				"query"=>$query?$query:'',
				"form_source"=>$form_value?$form_value:'',
			);
			$response = $this->Contact_model->insert_data($insertData);
			$response_subject = "New Collaboration with Techugo | $name";
				$response_message = '<div style="max-width:800px; margin:auto; font-size:20px; line-height:24px; font-family:Arial, Helvetica, sans-serif">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				 
				  <tr>
					<td height="16"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">Hello <strong>'.$name.',</strong></td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">It\'s great to see your message. We are glad that you have considered one of the fastest-growing firms for your product development.</td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">We believe you and your family are safe indoors amidst this pandemic.</td>
				  </tr>
				  <tr>
					<td height="10"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">We are analysing your query along with our specialised architects.</td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">You will receive an email very soon from our <strong>Collaboration Team.</strong></td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">Meanwhile, please take a look at our <strong>Portfolio</strong> and jazz up with some of our innovative creations. <br><a href="https://www.techugo.com/portfolio.php" target="_blank" style="color:#000;">https://www.techugo.com/portfolio.php</a></td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">And if you wish to see the kind of team we are, check us out on<strong> Instagram.</strong> We are creative hooligans.</td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;"><strong>Techugo -</strong> <a href="https://www.instagram.com/techugo" target="_blank" style="color:#000">https://www.instagram.com/techugo/</a></td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;"><strong>Techugo Team -</strong> <a href="https://www.instagram.com/techugoteam" target="_blank" style="color:#000">https://www.instagram.com/techugoteam</a></td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>';
								if($nda == 'on'){
							$response_message .='<tr>
					<td height="10" style="padding-left:10px;">Also, as requested by you, please <a href = "'.$base_url.'assets/nda/'.$file_name.'" target="_blank" download>click here </a> to download the <strong>Non-Disclosure agreement</strong></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">&nbsp;</td>
				  </tr>';
						}
				$response_message .='<tr>
					<td height="10" style="padding-left:10px;">Thank you so much for your patience in advance</td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">&nbsp;</td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">&nbsp;</td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">Cheers!</td>
				  </tr>
				  <tr>
					<td height="15"></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">Team Techugo</td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">&nbsp;</td>
				  </tr>
				  </table>

				</div>';
				$to_email1  = $email;  
			$headers1 = "From:sales@techugo.com\r\n".
			'Reply-To: sales@techugo.com' . "\n" .
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'X-Mailer: PHP/' . phpversion(); 
			$response_body =
					'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
						<title>'.html_escape($response_subject).'</title>
						<style type="text/css">
							body {
								font-family: Arial, Verdana, Helvetica, sans-serif;
								font-size: 16px;
							}
						</style>
					</head> 
					<body>
					'.$response_message.'
					</body>
					</html>';
					$fromemail1 = 'sales@techugo.com';
					$sendemail1 = $this->send_mail($response_subject,$fromemail1,$to_email1,$headers1,$response_body);
					//$send_mail = mail($to_email1, $response_subject, $response_body, $headers1);
			echo $response; 
		}
	}
		
	public function popup()
	{
		if($_POST['submit']){
			$name= $this->input->post('name');
			$email= $this->input->post('email');
			$contact= $this->input->post('contact');
			$query= $this->input->post('query');
			$country= $this->input->post('country');
			$form_value =$this->input->post('url');

			$subject = "New Collaboration";
			$message = '<p>Hello,<br><br>Here are the Details to contact<br></br></br>
			Name : '.$name.'</br></br>
			Email : '.$email.'</br> </br>
			Contact Number: '.$contact.'</br> </br>
			Query: '.$query.'</br></br>
			Form Source: '.$form_value.'</br></br>
		
			<br><br><br>Thanks and Regards,<br><p>'.$name.'</p>';
			$body =
			'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
				<title>'.html_escape($subject).'</title>
				<style type="text/css">
					body {
						font-family: Arial, Verdana, Helvetica, sans-serif;
						font-size: 16px;
					}
				</style>
			</head>
			<body>
			'.$message.'
			</body>
			</html>';
			
			$to_email  = "sales@techugo.com"; 
				 //proceed with PHP email.
			$headers = "From:".$email."\r\n".
			'Reply-To: '.$email.'' . "\n" .
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'X-Mailer: PHP/' . phpversion();

			$from_email='sales@techugo.com';
			$sendingemail = $this->send_mail($subject,$from_email,$to_email,$headers,$body);
			//$send_mail = mail($to_email, $subject, $body, $headers);
			
			$insertData= array(
				"name"=>$name?$name:'',
				"email"=>$email?$email:'',
				"country"=>$country?$country:'',
				"contact_no"=>$contact?$contact:'',
				"source"=>$source?$source:'',
				"query"=>$query?$query:'',
				"form_source"=>$form_value?$form_value:'',
			);
			//print_r($insertData);die;
			$response = $this->Contact_model->insert_data($insertData);
			
			if(1 == $response){
			//$cookie= array(
           //'visited'   => 'yes'
			//);
			///$this->input->set_cookie($cookie);
			
				echo'1';
			}
		}
		else
		{
		echo '2';
		}
	}


 public function subscribe()
	{
		$email= $this->input->post('email');
		if(!empty($email)){
					$subject = "New Collabration";
			$message = '<p>Hello,<br><br>Here are the Details to contact<br></br></br>
			Email : '.$email.'</br> </br>
			<br><br><br>Thanks and Regards,<br><p>'.$email.'</p>';
			$body =
			'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
				<title>'.html_escape($subject).'</title>
				<style type="text/css">
					body {
						font-family: Arial, Verdana, Helvetica, sans-serif;
						font-size: 16px;
					}
				</style>
			</head>
			<body>
			'.$message.'
			</body>
			</html>';
			
			$to_email  = "sales@techugo.com"; 
			    
				 //proceed with PHP email.
			$headers = "From:".$email."\r\n".
			'Reply-To: '.$email.'' . "\n" .
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'X-Mailer: PHP/' . phpversion();
			//$body = $message_body;
    
			$from_email='sales@techugo.com';
			$sendingemail = $this->send_mail($subject,$from_email,$to_email,$headers,$body);
			//$send_mail = mail($to_email, $subject, $body, $headers);

			
			if(!empty($email)){
				$userIp = $_SERVER['REMOTE_ADDR'];
				$insertData= array(
					"user_ip"=> $userIp,
					"user_email"=>$email?$email:'',
					"added_on"=>date('Y-m-d H:i:s'),
				);
				$response = $this->Contact_model->insert_subscriber($insertData);
				
				$from_email1='sales@techugo.com';
				
				$responsemessage = $this->load->view('EmailTemplate/reply_to_subscriber', $data, true);
				$responsesubject = "Techugo | App & Website Development Company";
				$to_email  = $email;  
			
			
	       
				$this->load->library('email');
							$result = $this->email
									->from($from_email1)
									->to($email)
									->subject($responsesubject)
									->message($responsemessage)
									->send();
				echo $response; die;
			}	

		}
	
	}


function send_mail($subject,$fromemail,$toemail,$header,$msgbody){
$this->load->library('email');

// $this->email->initialize($config);
$this->email->set_header('Header',$header);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");
$this->email->reply_to($fromemail);
$this->email->from($fromemail);
$this->email->to($toemail);
$this->email->subject($subject);
$this->email->message($msgbody);
$this->email->send();
//	$this->email->clear(TRUE);
//	return true;
}




		
}
