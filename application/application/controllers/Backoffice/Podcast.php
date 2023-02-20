<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Podcast controller to manage website blog
class Podcast extends CI_Controller {

 	public $client;
 	private $data = array();
    function __construct() {
        parent::__construct();
        $this->load->model('Backoffice/Podcastmodel');
        $this->load->helper('text');
        $this->load->library('pagination');
        $login=$this->session->userdata('adminlogin');
        $checkaccess = $this->checkaccess();
        if($login!="true" && $checkaccess!=true){
            header('location: '.BASEURL.'Backoffice/Admin');
        }
    }
    //Check User auth token
    function checkaccess(){ 
        $auth= $this->session->userdata('token');
        $user_id = $this->session->userdata('admin_id'); 
        $authsql = "SELECT admin_id FROM w_admin_auth WHERE auth_token = ? and admin_id = ?";
        $authquerycheck = $this->db->query($authsql,[$auth,$user_id]);
        $authArr = $authquerycheck->result_array();
        if(empty($authArr)){
           header('location: '.BASEURL.'Backoffice/Admin');
        }else{
           return true;
        }
    }
    //Podcast Post Listing
	function podcast_management(){
        $data['page_title'] = 'Podcast Management';
        $config['base_url'] = base_url('Backoffice/Podcast/podcast_management');        
        $config['per_page'] = ($this->input->get('limitRows')) ? $this->input->get('limitRows') : 10;
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

        $data['page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $data['searchFor'] = ($this->input->get('query')) ? $this->input->get('query') : NULL;
        $data['orderField'] = ($this->input->get('orderField')) ? $this->input->get('orderField') : '';
        $data['orderDirection'] = ($this->input->get('orderDirection')) ? $this->input->get('orderDirection') : '';
        $data['postArr'] = $this->Podcastmodel->podcast_management($config["per_page"], $data['page'], $data['searchFor'], $data['orderField'], $data['orderDirection']);
        $config['total_rows'] = $this->Podcastmodel->count_podcast_management($config["per_page"], $data['page'], $data['searchFor'], $data['orderField'], $data['orderDirection']);
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('Backoffice/Common/header',$data);
        $this->load->view('Backoffice/Common/sidebar');
        $this->load->view('Backoffice/Podcast/podcast_management',$data);
        $this->load->view('Backoffice/Common/footer');
    }
    //Change post status 
    function changeStatus(){
    	$result = $this->Podcastmodel->changeStatus();	
    }
    //View Podcast Detail
    function viewPodcast(){
    	$id = $this->uri->segment(4);
    	$data['page_title'] = 'Podcast Detail';
	    $postid = base64_decode(urldecode($id));
	    $data['postArr']=$this->Podcastmodel->podcastDetail($postid);	
	    $this->load->view('Backoffice/Common/header',$data);
        $this->load->view('Backoffice/Common/sidebar');
        $this->load->view('Backoffice/Podcast/viewPodcast',$data);
        $this->load->view('Backoffice/Common/footer');
    }
    //Edit Podcast
    function editPodcast(){
		$id = $this->uri->segment(4);
	    $postid = base64_decode(urldecode($id));
	    $data['page_title'] = 'Edit Podcast';
        $data['authorArr']=$this->Podcastmodel->getAuthor();
	    $data['postArr']=$this->Podcastmodel->podcastDetail($postid);	
	    $this->load->view('Backoffice/Common/header',$data);
        $this->load->view('Backoffice/Common/sidebar');
        $this->load->view('Backoffice/Podcast/editPodcast',$data);
        $this->load->view('Backoffice/Common/footer');
	}
	//Edit Podcast
	function editPodcastprocess(){
	    if ($_FILES['audiofile']['error'] == '0' && $_FILES['audiofile']['name'] != '') {
            $path = $this->common->do_upload("podcast",'audiofile','audio');
            $this->data['audiofile'] = $path['name'];                      
        }     
        if ($_FILES['audiothumb']['error'] == '0' && $_FILES['audiothumb']['name'] != '') {
            $path = $this->common->do_upload("podcast",'audiothumb','thumb');
            $this->data['audiothumb'] = $path['name'];                      
        }  
        $this->data['post_title'] = $_POST['post_title'];
        $this->data['post_content'] = $_POST['post_content'];
        $this->data['type'] = $_POST['type'];
        $this->data['youtube_url'] = $_POST['youtube_url'];
        if(!empty($this->data['youtube_url'])){
            $this->data['youtube_id'] = $this->get_youtubeid($this->data['youtube_url']);
        }
        $this->data['created_by'] = $_POST['created_by'];
        $this->data['podcast_id'] = $_POST['podcast_id'];
        $result = $this->Podcastmodel->editPodcastprocess($this->data);
	}

    //Add Podcast
    function addPodcast(){
        $data['page_title'] = 'Add Podcast'; 
        $data['authorArr']=$this->Podcastmodel->getAuthor();   
        $this->load->view('Backoffice/Common/header',$data);
        $this->load->view('Backoffice/Common/sidebar');
        $this->load->view('Backoffice/Podcast/addPodcast',$data);
        $this->load->view('Backoffice/Common/footer');
    }
    //Add Podcast Process
    function addPodcastprocess(){
        if ($_FILES['audiofile']['error'] == '0' && $_FILES['audiofile']['name'] != '') {
            $path = $this->common->do_upload("podcast",'audiofile','audio');
            $this->data['audiofile'] = $path['name'];                      
        }     
        if ($_FILES['audiothumb']['error'] == '0' && $_FILES['audiothumb']['name'] != '') {
            $path = $this->common->do_upload("podcast",'audiothumb','thumb');
            $this->data['audiothumb'] = $path['name'];                      
        }  
        $this->data['post_title'] = $_POST['post_title'];
        $this->data['post_content'] = $_POST['post_content'];
        $this->data['type'] = $_POST['type'];
        $this->data['youtube_url'] = $_POST['youtube_url'];
        if(!empty($this->data['youtube_url'])){
            $this->data['youtube_id'] = $this->get_youtubeid($this->data['youtube_url']);
        }
        $this->data['created_by'] = $_POST['created_by'];
        $result = $this->Podcastmodel->addPodcastprocess($this->data);
    }

    function get_youtubeid($url){
        if (stristr($url,'youtu.be/'))
            {preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4]; }
        else 
            {@preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; }
    }
  
}
