<?php
class Contact_model extends CI_Model
{

    // Method to Insert contact form data from get in touch
    function insert_data($data){
	//	print_r($data);die;
        $this->db->insert('contact_us',$data);
        return 1;
    }
    
    function insert_subscriber($data){
    //  print_r($data);die;
        $this->db->insert('subscriber_form',$data);
        return 1;
    }


    function getPodcast($limit, $start,$search = ""){
		$this->db->select('podcast_id,podcast_title,podcast_content,podcast_media,podcast_thumbnail,youtube_id,podcast_url,meta_keywords,meta_description,type,podcast_status,created_on,created_by');
		$this->db->where('podcast_status','active');
		if (!empty($search)) {
			$this->db->where("podcast_title LIKE '%".$this->db->escape_like_str($search)."%'"); 
		} 
		$this->db->order_by('podcast_id','desc');
		$this->db->limit($limit, $start);
		$query=$this->db->get('w_podcast');
		//echo $this->db->last_query(); die;
	  $result = $query->result_array();
	  foreach ($result as $value) { 
	  		if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/public/podcast/" . $value['podcast_media']) && $value['podcast_media'] != ""){
	            $podcast_media=FILEURL.$value['podcast_media'];           
	        }elseif(!empty($value['podcast_media'])){
	            $podcast_media = $value['podcast_media'];
	        }else{
	            $podcast_media ='';
	        }
	        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/public/podcast/" . $value['podcast_thumbnail']) && $value['podcast_thumbnail'] != ""){
	            $podcast_thumbnail=FILEURL.$value['podcast_thumbnail'];           
	        }elseif(!empty($value['podcast_thumbnail'])){
	            $podcast_thumbnail = $value['podcast_thumbnail'];
	        }else{
	            $podcast_thumbnail ='';
	        }
	        $addedon = date('j M Y',strtotime($value['created_on']));
	        $data[] = [
	            'podcast_id' => $value['podcast_id'],
	            'podcast_title' => $value['podcast_title'],
	            'podcast_content' => $value['podcast_content'],
	            'podcast_media' => $podcast_media,
	            'podcast_thumbnail' =>  $podcast_thumbnail,
	            'youtube_id' => $value['youtube_id'],
	            'meta_keywords' => $value['meta_keywords'],
	            'meta_description' => $value['meta_description'],
	            'type' =>  $value['type'],
	            'created_on' => $addedon,
	            'created_by' => $value['created_by']
	        ];
	    }
	    return $data;
	}

	function count_List($limit, $start,$search = ""){
	  $this->db;
	  $this->db->where('podcast_status','active'); 
	  if (!empty($search)) {
	      $this->db->where("podcast_title LIKE '%".$this->db->escape_like_str($search)."%'"); 
	  }  
	  $query=$this->db->get('w_podcast');
	  return $query->num_rows();  
	}

    function techtalks_detail($url){
		$this->db->select('podcast_id,podcast_title,podcast_content,podcast_media,podcast_thumbnail,youtube_id,podcast_url,meta_keywords,meta_description,type,podcast_status,created_on,created_by');
		$this->db->where('podcast_status','active');
		$this->db->where('podcast_url',$url);
		$query=$this->db->get('w_podcast');
	  $result = $query->result_array();
	 
	  foreach ($result as $value) { 
	  		if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/public/podcast/" . $value['podcast_media']) && $value['podcast_media'] != ""){
	            $podcast_media=FILEURL.$value['podcast_media'];           
	        }elseif(!empty($value['podcast_media'])){
	            $podcast_media = $value['podcast_media'];
	        }else{
	            $podcast_media ='';
	        }
	        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/public/podcast/" . $value['podcast_thumbnail']) && $value['podcast_thumbnail'] != ""){
	            $podcast_thumbnail=FILEURL.$value['podcast_thumbnail'];           
	        }elseif(!empty($value['podcast_thumbnail'])){
	            $podcast_thumbnail = $value['podcast_thumbnail'];
	        }else{
	            $podcast_thumbnail ='';
	        }
	        $addedon = date('j M Y',strtotime($value['created_on']));
	        $data = [
	            'podcast_id' => $value['podcast_id'],
	            'podcast_title' => $value['podcast_title'],
	            'podcast_content' => $value['podcast_content'],
	            'podcast_media' => $podcast_media,
	            'podcast_thumbnail' =>  $podcast_thumbnail,
	            'youtube_id' => $value['youtube_id'],
	            'meta_keywords' => $value['meta_keywords'],
	            'meta_description' => $value['meta_description'],
	            'type' =>  $value['type'],
	            'created_on' => $addedon,
	            'created_by' => $value['created_by']
	        ];
	    }
	    return $data;
	}

}
?>
