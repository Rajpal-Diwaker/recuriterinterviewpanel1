<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

 	public $client;
 	private $data = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Backoffice/Adminmodel');
        $this->load->library('session');
        $this->load->helper('url');  
        $this->load->helper('my');       
    }
	
    function index($msg=NULL) {
    	$login=$this->session->userdata('adminlogin');
        if($login=="true" && $this->checkaccess()===true){ 
        	$this->dashboard();
        }else{
        	$data['page_title'] = 'Techugo Backoffice';
	        $data['msg'] = $msg;
	        $this->load->view('Backoffice/Common/header',$data);
	        $this->load->view('Backoffice/login');
        }        
    }

    function checkaccess(){ 
        $auth= $this->session->userdata('token');
        $user_id = $this->session->userdata('admin_id'); 
        $authsql = "SELECT admin_id FROM w_admin_auth WHERE auth_token = ? and admin_id = ?";
        $authquerycheck = $this->db->query($authsql,[$auth,$user_id]);
        $authArr = $authquerycheck->result_array();
        if(empty($authArr)){
           header('location: '.BASEURL.'/Backoffice/Admin');
        }else{
           return true;
        }
    }
	
    //User Login Process
    public function login(){
        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        if(!empty($email) && !empty($password)){
            $checkemail = $this->common->checkrecord('w_admin', 'email', $email);
            if(true === $checkemail){
                $rows=$this->Adminmodel->login($email,$password);
                if($rows === false){
                    $msg="Invalid Password";
                    $this->index($msg);
                }else{
                    $userdata = [
                        'admin_id' => $rows['admin_id'],
                        'fullname' => $rows['fullname'],
                        'email' => $rows['email'],
                        'adminlogin'=>'true',
                        'token' => $rows['token']
                        ];
                    $this->session->set_userdata($userdata);
                    header('location: '.BASEURL.'/Backoffice/Admin/dashboard/');
                }
            }else{
                $msg="Invalid Email";
                $this->index($msg);
            }
        }else{
            header('location: '.BASEURL.'/Backoffice/Admin');
        }
    }	

    //Edit Admin 
    public function editProfile($msg = NULL){
        $login=$this->session->userdata('adminlogin');
        if($login=="true" && $this->checkaccess()===true){ 
            $data['page_title'] = 'Edit Profile';    
            $data['userArr']=$this->Adminmodel->adminprofile();      
            $data['msg'] = $msg;
            $this->load->view('Backoffice/Common/header',$data);
            $this->load->view('Backoffice/Common/sidebar');
            $this->load->view('Backoffice/editProfile',$data);
            $this->load->view('Backoffice/Common/footer');
        }else{
            header('location: '.BASEURL.'/Backoffice/Admin');
        }
    }

    //Admin Profile Update 
    public function update_profiledata(){
        $login=$this->session->userdata('adminlogin');
        if($login=="true" && $this->checkaccess()===true){ 
            $result=$this->Adminmodel->update_admindata();   
            if($result === true){
                $msg="Updated Successfully";
                $this->editProfile($msg);
            } 
        }else{
            header('location: '.BASEURL.'/Backoffice/Admin');
        }     
    }
	
	//User Logout Process
    public function do_logout(){
        $this->session->sess_destroy();
		header('location: '.BASEURL.'/Backoffice/Admin');

    }	
	
	public function dashboard(){
        $login=$this->session->userdata('adminlogin');
        if($login=="true" && $this->checkaccess()===true){  
            $url = $_GET['year'];
            if(!empty($url)){
                $year = $url;
            }else{
                $year = date('Y');
            }
            $data['filter'] = ['year' => $year];
            $data['audiodata']=$this->Adminmodel->podcast_audio($year);
            $data['videodata']=$this->Adminmodel->podcast_video($year);
            $data['page_title'] = 'Dashboard';
            $this->load->view('Backoffice/Common/header',$data);
            $this->load->view('Backoffice/Common/sidebar');
            $this->load->view('Backoffice/dashboard',$data);
            $this->load->view('Backoffice/Common/footer');
        }else{
            header('location: '.BASEURL.'/Backoffice/Admin');
        }
    }


    public function check_email_exists(){
        $login=$this->session->userdata('adminlogin');
        if($login=="true"){
        $user_id = $this->session->userdata('admin_id');
        $email = $this->security->xss_clean($this->input->post('email')); 
        $checkuser = $this->common->checkrecordid('w_admin', 'email', $email, 'admin_id', $user_id);
        if(true === $checkuser){ echo 1; die; }else{
            $checkemail = $this->common->checkrecord('w_admin', 'email', $email);
            if(false === $checkemail){
                echo 1; die;
            }else{
                echo 2; die;
            }
        }
        }else{
            header('location: '.BASEURL.'/Backoffice/Admin');
        }
    }

    public function changepassword(){
        $login=$this->session->userdata('adminlogin');
        if($login=="true"){
            $oldpassword = $this->security->xss_clean($this->input->post('oldpwd'));
            $newpassword = $this->security->xss_clean($this->input->post('newpwd'));
            $result=$this->Adminmodel->change_password($oldpassword,$newpassword);     
        }else{
            header('location: '.BASEURL.'/Backoffice/Admin');
        }      
    }

    public function forgotpassword(){
        $email = $this->security->xss_clean($this->input->post('email'));
        $checkEmail = $this->common->checkrecord('w_admin', 'email', $email);
        if(true === $checkEmail){
            $strpassword = $this->common->generateRandomString();
            $subject = "Password recovery email Admin.";
            $message = '<p>Greetings,<br>Your New Password: <strong>'.$strpassword.'</strong><br>Please login with given password and update your profile<br>Thanks<br> Techugo Team';
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
            $result = $this->Adminmodel->updateNewPassword($strpassword,$email);
            if(false === $result ){
                echo 3; die;
            }
            else{ 
            $this->load->library('email');
            $mailresult = $this->email
                    ->from('info@worqleus.com')
                    ->to($email)
                    ->subject($subject)
                    ->message($body)
                    ->send();
            echo 1; die;
           }            
        }else{echo 2; die;}
    }


}