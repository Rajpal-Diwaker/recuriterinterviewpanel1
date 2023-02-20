<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminmodel extends CI_Model {

	function login($email,$password){
		$sql = "SELECT admin_id,fullname,email,password_hash FROM w_admin WHERE status='active' and email = ?";
		$query = $this->db->query($sql, array($email));
		$result = $query->result_array();
		if(verifyHashedPassword($password, $result[0]['password_hash'])){
			$user_id = $result[0]['admin_id'];
			$accesskey = md5($user_id.rand (1000000, 9999999));
			$accessdata = ['auth_token' => $accesskey,'created_on' => date('Y-m-d H:i:s')];
			$this->db->where('admin_id',$user_id);
			$this->db->update('w_admin_auth',$accessdata);
			return [
				'admin_id' => $result[0]['admin_id'],
				'fullname' => $result[0]['fullname'],
				'email' => $result[0]['email'],
				'token' => $accesskey
				];
		}
		else{
			return false;
		}
	}

	function adminprofile(){
		$adminid = $this->session->userdata('admin_id');
		$query = $this->db->select('admin_id,fullname,email,status')
					->where('admin_id',$adminid)
					->get('w_admin');
		$result = $query->result_array();
		return $result[0];
	}

	function update_admindata(){
		//print_r($_POST); die;
		$adminid = $this->session->userdata('admin_id');
		$data = ['fullname' => $_POST['fullname'],'email' =>  $_POST['email']];
		$this->db->where('admin_id',$adminid)
				->update('w_admin',$data);
		return true;
	}


	function change_password($oldpassword,$newpassword){
		$adminid = $this->session->userdata('admin_id');
		$sql = "SELECT admin_id,password_hash FROM w_admin WHERE admin_id = ?";
		$query = $this->db->query($sql, array($adminid));
		$result = $query->result_array();
		if(verifyHashedPassword($oldpassword, $result[0]['password_hash'])){
			$data = ['password_hash'=>getHashedPassword($newpassword)];
			$this->db->where('admin_id',$adminid)
					->update('w_admin',$data);
			if ($this->db->affected_rows() > 0) {
				echo 1; die;
			}else{
				echo 2; die;
			}
		}else{
			echo 2; die;
		}
	}

	function updateNewPassword($strpassword,$email){
		$data = ['password_hash'=>getHashedPassword($strpassword)];
		$this->db->where('email',$email)
				->update('w_admin',$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	function podcast_audio($year){
		$query = $this->db->query("SELECT Year(DATE_FORMAT(`created_on`, '%Y-%m-%d')) as Year, sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 1) as 'JAN', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 2) as 'FEB', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 3) as 'MAR', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 4) as 'APR', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 5) as 'MAY', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 6) as 'JUN', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 7) as 'JUL', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 8) as 'AUG', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 9) as 'SEP', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 10) as 'OCT', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 11) as 'NOV', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 12) as 'DEC', Count(*) As Users FROM `w_podcast` where type='audio' GROUP BY Year(`created_on`)");
		$users = $query->result_array();
		foreach($users as $value){
			if($value['Year'] == $year){
				$userdata = [
					array( 'y'=> 'January', 'a'=> $value['JAN'] ),
					array( 'y'=> 'February', 'a'=> $value['FEB'] ),
					array( 'y'=> 'March', 'a'=> $value['MAR'] ),
					array( 'y'=> 'April', 'a'=> $value['APR'] ),
					array( 'y'=> 'May', 'a'=> $value['MAY'] ),
					array( 'y'=> 'June', 'a'=> $value['JUN'] ),
					array( 'y'=> 'July', 'a'=> $value['JUL'] ),
					array( 'y'=> 'August', 'a'=> $value['AUG'] ),
					array( 'y'=> 'September', 'a'=> $value['SEP'] ),
					array( 'y'=> 'October', 'a'=> $value['OCT'] ),
					array( 'y'=> 'November', 'a'=> $value['NOV'] ),
					array( 'y'=> 'December', 'a'=> $value['DEC'] )
				];
			}else{
				continue;
			}
		}
		return $userdata;
	}

	function podcast_video($year){
		$query = $this->db->query("SELECT Year(DATE_FORMAT(`created_on`, '%Y-%m-%d')) as Year, sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 1) as 'JAN', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 2) as 'FEB', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 3) as 'MAR', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 4) as 'APR', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 5) as 'MAY', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 6) as 'JUN', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 7) as 'JUL', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 8) as 'AUG', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 9) as 'SEP', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 10) as 'OCT', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 11) as 'NOV', sum(month(DATE_FORMAT(`created_on`, '%Y-%m-%d')) = 12) as 'DEC', Count(*) As Users FROM `w_podcast` where type='video' GROUP BY Year(`created_on`)");
		$users = $query->result_array();
		foreach($users as $value){
			if($value['Year'] == $year){
				$userdata = [
					array( 'y'=> 'January', 'a'=> $value['JAN'] ),
					array( 'y'=> 'February', 'a'=> $value['FEB'] ),
					array( 'y'=> 'March', 'a'=> $value['MAR'] ),
					array( 'y'=> 'April', 'a'=> $value['APR'] ),
					array( 'y'=> 'May', 'a'=> $value['MAY'] ),
					array( 'y'=> 'June', 'a'=> $value['JUN'] ),
					array( 'y'=> 'July', 'a'=> $value['JUL'] ),
					array( 'y'=> 'August', 'a'=> $value['AUG'] ),
					array( 'y'=> 'September', 'a'=> $value['SEP'] ),
					array( 'y'=> 'October', 'a'=> $value['OCT'] ),
					array( 'y'=> 'November', 'a'=> $value['NOV'] ),
					array( 'y'=> 'December', 'a'=> $value['DEC'] )
				];
			}else{
				continue;
			}
		}
		return $userdata;
	}



}
   