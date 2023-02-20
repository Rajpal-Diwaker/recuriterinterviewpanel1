<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Podcastmodel extends CI_Model {

//Website Post Listing
function podcast_management($limit, $start, $search = "", $orderField, $orderDirection){
	$query=$this->db->select('podcast_id,podcast_title,podcast_content,podcast_media,podcast_thumbnail,podcast_url,youtube_id,meta_keywords,type,podcast_status,created_by')
          ->or_like('podcast_title', $search)
          ->limit($limit, $start)
          ->order_by($orderField, $orderDirection)
          ->order_by($orderField, $orderDirection)
          ->order_by('podcast_id', 'DESC')
          ->get('w_podcast');
	return $query->result();
}
//Website Post Listing count
function count_podcast_management($limit, $start, $search = "", $orderField, $orderDirection){
    $query = $this->db->or_like('podcast_title', $search)->order_by($orderField, $orderDirection)->get('w_podcast');
    return $query->num_rows();
}
//Change post status 
function changeStatus(){
    if($_POST['type']==1){
      $data = ['podcast_status' => 'active','updated_on' => date('Y-m-d H:m:s')];
    }else{
      $data = ['podcast_status' => 'inactive','updated_on' => date('Y-m-d H:m:s')];
    }
    $this->db->where('podcast_id',$_POST['post_id'])
          ->update('w_podcast',$data);
    if ($this->db->affected_rows() > 0) {
      echo 1; die;
    }else{
      echo 0; die;
    }
}
//Post Detail
function podcastDetail($postid){
  $query=$this->db->select('podcast_id,podcast_title,podcast_content,podcast_media,podcast_thumbnail,podcast_url,type,podcast_status,created_by')
          ->where('podcast_id',$postid)
          ->get('w_podcast');
  $result = $query->result_array();
  foreach ($result as $value) {
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/public/podcast/" . $value['podcast_media']) && $value['podcast_media'] != ""){
            $podcast_media=FILEURL.$value['podcast_media'];           
        }else{
            $podcast_media ='';
        }
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/public/podcast/" . $value['podcast_thumbnail']) && $value['podcast_thumbnail'] != ""){
            $podcast_thumbnail=FILEURL.$value['podcast_thumbnail'];           
        }else{
            $podcast_thumbnail ='';
        }
        if($value['type']=='video'){
          $videourl = $value['podcast_media'];
          $videoimg = $value['podcast_thumbnail'];
        }
        $data = [
            'podcast_id' => $value['podcast_id'],
            'podcast_title' => $value['podcast_title'],
            'podcast_content' => $value['podcast_content'],
            'podcast_media' => $podcast_media,
            'podcast_thumbnail' =>  $podcast_thumbnail,
            'youtube_url' => $videourl,
            'created_by' => $value['created_by'],
            'type' =>  $value['type']
        ];
    }
    return $data;
}


//Add Podcast Process
function addPodcastprocess($array){
  if(!empty($array['post_title'])){
      $title = trim($array['post_title']);
      $urlTitle1 = str_replace(array( '\'', '"', ',' , ';', '<', '>','?','+' ), '', $title); 
      $urlTitle2 = preg_replace('/[^A-Za-z0-9\. -]/', '-', $urlTitle1); 
      $urlTitle =  preg_replace('/\s+/', '-', $urlTitle2);
      $newurl = strtolower($urlTitle);
      if(substr($newurl, -1)=='-' || substr($newurl, -1)=='.'){
        $url = substr_replace($newurl ,"",-1);
      }else{
        $url = $newurl;
      }
      //echo $url; die;
      $checkquery = $this->db->select('podcast_id')
              ->where('podcast_url',$url)
              ->get('w_podcast');
      if($checkquery->num_rows()>0){
        $coursecount = $this->total_blogcount();
        $newurl = $url.$coursecount;
      }else{
        $newurl = $url;
      }
     // $adminid=$this->session->userdata('admin_id');
      if($array['type'] =='audio'){
         $data = [
            'podcast_title' => $array['post_title'],
            'podcast_content' => $array['post_content'],
            'podcast_media' => $array['audiofile'],
            'podcast_thumbnail' => $array['audiothumb'],
            'podcast_url' => $newurl,
            'type' => $array['type'],
            'created_by' => $array['created_by'],
            'created_on' => date('Y-m-d H:i:s')
            ];
      }else{
          $data = [
            'podcast_title' => $array['post_title'],
            'podcast_content' => $array['post_content'],
            'podcast_media' => $array['youtube_url'],
            'podcast_thumbnail' => 'https://img.youtube.com/vi/'.$array['youtube_id'].'/sddefault.jpg',
            'youtube_id' => $array['youtube_id'],
            'podcast_url' => $newurl,
            'type' => $array['type'],
            'created_by' => $array['created_by'],
            'created_on' => date('Y-m-d H:i:s')
            ];
      }
   //   echo "<pre>"; print_r($data); die; 
      $this->db->insert('w_podcast',$data);
      if ($this->db->affected_rows() > 0) {
          header('location: '.ADMINURL.'Podcast/podcast_management');
      }else{
          header('location: '.ADMINURL.'Podcast/podcast_management');
      }
  }else{
    header('location: '.ADMINURL.'Podcast/addPodcast');
  }
}
/*
function editPodcastprocess($array){
  $title = trim($array['post_title']);
  $urlTitle1 = str_replace(array( '\'', '"', ',' , ';', '<', '>','?','+' ), '', $title); 
  $urlTitle2 = preg_replace('/[^A-Za-z0-9\. -]/', '-', $urlTitle1); 
  $urlTitle =  preg_replace('/\s+/', '-', $urlTitle2);
  $newurl = strtolower($urlTitle);
  if(substr($newurl, -1)=='-' || substr($newurl, -1)=='.'){
    $url = substr_replace($newurl ,"",-1);
  }else{
    $url = $newurl;
  }
  $data = ['podcast_url' => $url];
   $this->db->where('podcast_id',$array['podcast_id'])
        ->update('w_podcast',$data);
} */

function editPodcastprocess($array){
 // $adminid=$this->session->userdata('admin_id');
  if($array['type'] =='audio'){
    if(!empty($array['audiofile']) && !empty($array['audiothumb'])){
        $data = [
        'podcast_title' => $array['post_title'],
        'podcast_content' => $array['post_content'],
        'podcast_media' => $array['audiofile'],
        'podcast_thumbnail' => $array['audiothumb'],
        'type' => $array['type'],
        'created_by' => $array['created_by'],
        'created_on' => date('Y-m-d H:i:s')
        ];
    }elseif(empty($array['audiofile']) && !empty($array['audiothumb'])){
        $data = [
          'podcast_title' => $array['post_title'],
          'podcast_content' => $array['post_content'],
          'podcast_thumbnail' => $array['audiothumb'],
          'type' => $array['type'],
          'created_by' => $array['created_by'],
          'updated_on' => date('Y-m-d H:i:s')
          ];
    }elseif(!empty($array['audiofile']) && empty($array['audiothumb'])){
        $data = [
          'podcast_title' => $array['post_title'],
          'podcast_content' => $array['post_content'],
          'podcast_media' => $array['audiofile'],
          'type' => $array['type'],
          'created_by' => $array['created_by'],
          'updated_on' => date('Y-m-d H:i:s')
          ];
    }else{
        $data = [
          'podcast_title' => $array['post_title'],
          'podcast_content' => $array['post_content'],
          'type' => $array['type'],
          'created_by' => $array['created_by'],
          'updated_on' => date('Y-m-d H:i:s')
          ];
    }
  }else{
      $data = [
        'podcast_title' => $array['post_title'],
        'podcast_content' => $array['post_content'],
        'podcast_media' => $array['youtube_url'],
        'podcast_thumbnail' => 'https://img.youtube.com/vi/'.$array['youtube_id'].'/sddefault.jpg',
        'youtube_id' => $array['youtube_id'],
        'type' => $array['type'],
        'created_by' => $array['created_by'],
        'updated_on' => date('Y-m-d H:i:s')
        ];
  }
  //echo "<pre>"; print_r($data); die; 
  $this->db->where('podcast_id',$array['podcast_id'])
        ->update('w_podcast',$data);
  if ($this->db->affected_rows() > 0) {
      header('location: '.ADMINURL.'Podcast/podcast_management');
  }else{
      header('location: '.ADMINURL.'Podcast/podcast_management');
  }
}

function total_blogcount() {
  $query = $this->db->query("SELECT COUNT(podcast_id) as podcast from w_podcast");
  $blogArrs = $query->result_array();
  $totalcount = $blogArrs[0]['podcast'];
  return $totalcount;
}

function getAuthor(){
  $query = $this->db->query("SELECT DISTINCT created_by FROM `w_podcast`");
  $result = $query->result_array();
  return $result;
}







}
   