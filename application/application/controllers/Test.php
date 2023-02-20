
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		
	}


	public function index()
	{
		
			$name= ucwords('tripti bhardwaj');
			
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
	        //$getmail=$this->mail_pdf($location,$file_name,$email);	   
	    }
			$subject = "New Collaboration";
			$response_message = '
				<div style="max-width:800px; margin:auto; font-size:20px; line-height:24px; font-family:Arial, Helvetica, sans-serif">
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
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">Also, as requested by you, please please <a href = "'.$base_url.'assets/nda/'.$file_name.'" target="_blank" download>click here </a> to download the <strong>Non-Disclosure agreement</strong></td>
				  </tr>
				  <tr>
					<td height="10" style="padding-left:10px;">&nbsp;</td>
				  </tr>
				  <tr>
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
			$requestbody =
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
					'.$response_message.'
					</body>
					</html>';
		//	echo $requestbody; die;
			$headers = 'From:'.$email.'\r\n'.
			'Reply-To: '.$email. "\n" .
			'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'X-Mailer: PHP/' . phpversion();
	       	
		
			$to_email  = "sales@techugo.com"; 
			$send_mail = mail($to_email, $subject, $requestbody, $headers);
			
			
			if(!$send_mail)
			{
				echo "Failure";

			}
			else{
				echo "Mail Sent";
			}
			
	}

}
