<?php

class RecuriterModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('Common_model', 'commonModel');
    }

    function send_mail($subject, $fromemail, $toemail, $header, $msgbody)
    {
        $from_email = 'career@techugo.com';
        $this->load->library('email');
        $this->email->set_header('Header', $header);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->reply_to($fromemail);
        $this->email->from($fromemail);
        $this->email->to($toemail);
        $this->email->subject($subject);
        $this->email->message($msgbody);
        $this->email->send();
    }

    public function login($postdata)
    {
        $this->db->select('*');
        $this->db->from('tblUser as t1');
        $this->db->where('t1.deleted', '1');
        $this->db->where('t1.role', '0');
        $this->db->where('email', $postdata['email']);
        $this->db->where('password', $postdata['password']);
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $this->db->last_query();

        if (!empty($result)) {
            $userdata = ['email' => $result[0]['email'], 'userId' => $result[0]['id']];
            $this->session->set_userdata($userdata);
            return;
        } else {
            return;
        }
    }

    public function saveOtp($email)
    {
        $otp = rand(1000, 9999);
        // $otp = '1234';
        $this->db->where('email', $email);
        $this->db->where('role', '0');
        $this->db->update('tblUser', array('otp' => $otp));

        $subject = 'Techugo Login OTP for Recruiter Panel';
        $data['otp'] = "Please use OTP - $otp to login to Your recruiter panel.";
        $data['adminName'] = "Hello HR,";
        $message = $this->load->view('EmailTemplate/otp', $data, true);
        // $this->commonModel->sendEmail($email, $message, $subject);

        $from_email = 'career@techugo.com';
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
                <title>' . html_escape($subject) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
                font-size: 16px;}</style></head><body>' . $message . '</body></html>';
        $headers = 'From:' . $from_email . "\r\n" .
            'Reply-To: ' . $from_email . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $this->send_mail($subject, $from_email, $email, $headers, $body);

        return true;
    }


    public function CheckOTP($postdata)
    {

        $this->db->select('*');
        $this->db->from('tblUser as t1');
        $this->db->where('t1.deleted', '1');
        $this->db->where('t1.role', '0');
        $this->db->where('email', $postdata['email']);
        $this->db->where('otp', $postdata['otp']);
        $query = $this->db->get();
        $result = $query->result_array();
        if (!empty($result)) {

            $userdata = ['adminEmail' => $result[0]['email'], 'adminId' => $result[0]['id']];

            $this->session->set_userdata($userdata);

            return '1';
        } else {

            return '0';
        }
    }
    public function getProfile()
    {
        $this->db->select('*');
        $this->db->from('tblProfile as t1');
        $this->db->where('t1.deleted', '1');
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function getAdminEmail()
    {
        $this->db->select('email');
        $this->db->from('tblUser as t1');
        $this->db->where('t1.role', '0');
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $this->db->last_query();
        if (!empty($result)) return $result[0]['email'];
        else return "rajpal@techugo.com";
    }

    public function saveJob($postdata)
    {
        $data['result'] = $postdata;
        unset($postdata['profileName2']);
        $this->db->insert('tblJob', $postdata);

        $email = $this->getAdminEmail();
        $subject = 'Job Posted on Techugo ';
        $message = $this->load->view('EmailTemplate/profilePost', $data, true);
        // $this->commonModel->sendEmail($email, $message, $subject);

        $from_email = 'career@techugo.com';
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
                <title>' . html_escape($subject) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
                font-size: 16px;}</style></head><body>' . $message . '</body></html>';
        $headers = 'From:' . $from_email . "\r\n" .
            'Reply-To: ' . $from_email . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $this->send_mail($subject, $from_email, $email, $headers, $body);

        return;
    }

    function getjobOpeningList($postData)
    {
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length'];
        // Rows display per page
        $columnIndex = $postData['order'][0]['column'];
        // Column index
        $columnName = $postData['columns'][$columnIndex]['data'];

        $columnSortOrder = $postData['order'][0]['dir'];
        // asc or desc
        $searchValue = $postData['search']['value'];
        // Search value
        $search_arr = array();
        $searchQuery = '';
        if ($searchValue != '') {
            $search_arr[] = "(LOWER(t1.askedby) like LOWER('%" . $searchValue . "%') or LOWER(title) like LOWER('%" . $searchValue . "%') ) ";
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(' and ', $search_arr);
        }

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $select = $this->db->select("t1.*,DATE_FORMAT(t1.createdDate,'%d %M %Y') AS createdDate,title AS profile,(SELECT COUNT(id) FROM `tblResumes`  WHERE jobId=t1.id  AND reject IS NULL AND accept IS NULL )AS totalResume,
                    (SELECT COUNT(id) FROM `tblResumes`  WHERE jobId=t1.id  AND reject IS NOT NULL)AS totalReject,
                    (SELECT COUNT(id) FROM `tblResumes` WHERE jobId=t1.id AND accept IS NOT NULL)AS totalHired,
                    (SELECT COUNT(id) FROM `tblOffer` WHERE jobId=t1.id )AS totalOffered,
                    IFNULL(DATE_FORMAT((SELECT interviewDate FROM `tblRound`  AS tr JOIN `tblResumes`  AS trr ON
                    tr.resumeId=trr.id WHERE jobId=t1.id ORDER BY tr.id DESC  LIMIT 1), '%d %M %Y'),
                    DATE_FORMAT(t1.createdDate, '%d %M %Y')) AS lastactivity ")
            ->join('tblProfile as t2', 't1.profile=t2.id')
            ->get('tblJob as t1');


        $records = $select->result();
        $totalRecords = $select->num_rows();

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        ## Total number of record with filtering
        $select1 = $this->db->select("t1.*,DATE_FORMAT(t1.createdDate,'%d %M %Y') AS createdDate,title AS profile,
                (SELECT COUNT(id) FROM `tblResumes` WHERE jobId=t1.id AND reject IS NOT NULL)AS totalReject,
                (SELECT COUNT(id) FROM `tblResumes` WHERE jobId=t1.id AND accept IS NOT NULL)AS totalHired,
                (SELECT COUNT(id) FROM `tblOffer` WHERE jobId=t1.id )AS totalOffered,
                (SELECT COUNT(id) FROM `tblResumes`  WHERE jobId=t1.id  AND reject IS NULL AND accept IS NULL)AS totalResume,
                IFNULL(DATE_FORMAT((SELECT interviewDate FROM `tblRound`  AS tr JOIN `tblResumes`  AS trr ON
                tr.resumeId=trr.id WHERE jobId=t1.id ORDER BY tr.id DESC  LIMIT 1), '%d %M %Y'),
                DATE_FORMAT(t1.createdDate, '%d %M %Y')) AS lastactivity ")
            ->join('tblProfile as t2', 't1.profile=t2.id')
            ->get('tblJob as t1');

        // echo $this->db->last_query();
        // die;

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $records = $select1->result();
        $totalRecordwithFilter = $select1->num_rows();

        ## Fetch records
        $this->db->select("t1.*,DATE_FORMAT(t1.createdDate,'%d %M %Y') AS createdDate,title AS profile,
                (SELECT COUNT(id) FROM `tblResumes`  WHERE jobId=t1.id  AND reject IS NULL AND accept IS NULL)AS totalResume,
                (SELECT COUNT(id) FROM `tblResumes` WHERE jobId=t1.id AND reject IS NOT NULL)AS totalReject,
                (SELECT COUNT(id) FROM `tblResumes` WHERE jobId=t1.id AND accept IS NOT NULL)AS totalHired,
                (SELECT COUNT(id) FROM `tblOffer` WHERE jobId=t1.id )AS totalOffered,
                IFNULL(DATE_FORMAT((SELECT interviewDate FROM `tblRound`  AS tr JOIN `tblResumes`  AS trr ON
                tr.resumeId=trr.id WHERE jobId=t1.id ORDER BY tr.id DESC  LIMIT 1), '%d %M %Y'),
                DATE_FORMAT(t1.createdDate, '%d %M %Y')) AS lastactivity ")
            ->join('tblProfile as t2', 't1.profile=t2.id');

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $select2 = $this->db->get('tblJob as t1');

        $records = $select2->result();

        $data = array();
        $no = $_POST['start'];
        foreach ($records as $record) {
            $no++;

            // $startInterView = '<button type="button" onClick="startInterview(' . $record->id . ',' . $record->id . ');"> Start Interview </button>';
            $profile = '<a href="' . base_url() . 'Recruiter/interviewr/' . $record->id . '">' . $record->profile . '</button>';

            if ($record->deleted == '1') {

                $user_status = ' <div class="togglebox"> <label class="switch" >
                        <input id="slider_' . $record->id . '" type="checkbox" onclick="disableJob(' . $record->id . ')" checked>
                        <span class="slider round"></span>
                        </label></div>';
            } else {
                $st1 = "" . $record->deleted;

                $user_status = ' <div class="togglebox"> <label class="switch" >
                <input id="slider_' . $record->id . '" type="checkbox" onclick="disableJob(' . $record->id . ')" >
                <span class="slider round"></span></label></div>';
            }

            $data[] = array(
                'SNO' => $no,
                'id' => $record->id,
                'profile' => $profile,
                'exp' => ($record->minExp . '-' . $record->maxExp) . ' Yrs',
                'startDate' => $record->createdDate,
                'askedby' => $record->askedby,
                'lastActivity' => $record->lastactivity,
                'totalResume' => $record->totalResume,
                'hired' => $record->totalHired,
                'rejeted' => $record->totalReject,
                'offered' => $record->totalOffered,
                'status' => $user_status,
            );
        }

        ## Response
        $response = array(
            'draw' => intval($draw),
            'iTotalRecords' => $totalRecords,
            'iTotalDisplayRecords' => $totalRecordwithFilter,
            'aaData' => $data
        );

        return $response;
    }

    public function disableJob($id)
    {
        $case = [];
        $result = $this->db->select('deleted')->from('tblJob')
            ->where('id', $id)->get()->result_array();
        if ($result[0]['deleted'] == '0') {
            $case = "1";
        } else {
            $case = "0";
        }

        $saveData = array('updatedDate' => Date('Y-m-d h:i:s'), 'deleted' => $case);
        $this->db->where('id', $id);
        $this->db->update('tblJob', $saveData);
        // echo $this->db->last_query();
        // die;
        return true;
    }

    public function disableUser($id)
    {
        $case = [];
        $result = $this->db->select('deleted')->from('tblUser')
            ->where('id', $id)->get()->result_array();
        if ($result[0]['deleted'] == '0') {
            $case = "1";
        } else {
            $case = "0";
        }

        $saveData = array('updatedDate' => Date('Y-m-d h:i:s'), 'deleted' => $case);
        $this->db->where('id', $id);
        $this->db->update('tblUser', $saveData);
        // echo $this->db->last_query();
        // die;
        return true;
    }

    public function deleteRound($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tblRound');
        // echo $this->db->last_query();
        // die;
        return true;
    }

    public function getJobDetails($id)
    {
        $sql = $this->db->select("t1.*,(SELECT title FROM tblProfile WHERE id=(SELECT profile FROM tblJob
                    WHERE id=t1.id)) as profile")
            ->where('id', $id)->get('tblJob as t1');
        $result = $sql->result_array();
        return $result;
    }



    function getjobInterviewerList($postData)
    {
        $jobId = $postData['jobId'];
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length'];
        // Rows display per page
        $columnIndex = $postData['order'][0]['column'];
        // Column index
        $columnName = $postData['columns'][$columnIndex]['data'];

        $columnSortOrder = $postData['order'][0]['dir'];
        // asc or desc
        $searchValue = $postData['search']['value'];
        // Search value
        $search_arr = array();
        $searchQuery = '';
        if ($searchValue != '') {
            $search_arr[] = "(LOWER(t1.name) like LOWER('%" . $searchValue . "%') or LOWER(t1.lastCompany) like LOWER('%" . $searchValue . "%') ) ";
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(' and ', $search_arr);
        }

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $select = $this->db->select("t1.*,(SELECT title FROM tblProfile WHERE id=(SELECT profile FROM tblJob
         WHERE id=t1.jobId)) as profile")->where('deleted', '1')->where('reject IS NULL')->where('accept IS NULL')->where('jobId', $jobId)->get('tblResumes as t1');

        $records = $select->result();
        $totalRecords = $select->num_rows();

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        ## Total number of record with filtering
        $select1 = $this->db->select("t1.*,(SELECT title FROM tblProfile WHERE id=(SELECT profile FROM tblJob
        WHERE id=t1.jobId)) as profile")->where('deleted', '1')->where('reject IS NULL')->where('accept IS NULL')->where('jobId', $jobId)->get('tblResumes as t1');

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $records = $select1->result();
        $totalRecordwithFilter = $select1->num_rows();

        ## Fetch records
        $this->db->select("t1.*,DATE_FORMAT(t1.createdDate,'%d %M %Y') AS createdDate,(SELECT title FROM tblProfile WHERE id=(SELECT profile FROM tblJob
        WHERE id=t1.jobId)) as profile,(SELECT MAX(ROUND) FROM tblRound WHERE resumeId=t1.id) as maxRound")->where('deleted', '1')->where('reject IS NULL')->where('accept IS NULL')->where('jobId', $jobId);

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $select2 = $this->db->get('tblResumes as t1');
        $records = $select2->result();

        $data = array();
        $no = $_POST['start'];
        foreach ($records as $record) {
            $no++;

            $round1 = $this->round1($record->id);

            if (!empty($round1)) $round11 = '<p style="color:#41aff8";>' . $round1[0]['interviewer'] . '</p><br> <p style="color:blue";>' .
                $round1[0]['recommendation']  . '</p>';
            else  $round11 = 'Pending';

            $round2 = $this->round2($record->id);
            if (!empty($round2)) $round22 = '<p style="color:#41aff8";>' . $round2[0]['interviewer'] . '</p><br><p style="color:blue";>' .
                $round2[0]['recommendation'] . '</p>';
            else  $round22 = 'Pending';

            $round3 = $this->round3($record->id);
            if (!empty($round3)) $round33 = '<p style="color:#41aff8";>' . $round3[0]['interviewer'] . '</p><br><p style="color:blue";>' .
                $round3[0]['recommendation'] . '</p>';
            else  $round33 = 'Pending';

            $round4 = $this->round4($record->id);
            if (!empty($round4)) $round44 = '<p style="color:#41aff8";>' . $round4[0]['interviewer'] . '</p><br><p style="color:blue";>' .
                $round4[0]['recommendation'] . '</p>';
            else  $round44 = 'Pending';

            $round5 = $this->round5($record->id);
            if (!empty($round5)) $round55 = '<p style="color:#41aff8";>' . $round5[0]['interviewer'] . '</p><br><p style="color:blue";>' .
                $round5[0]['recommendation'] . '</p>';
            else  $round55 = 'Pending';

            $action = '';


            if ($round11 == 'Pending') {
                $action .= '<button type="button" onclick="getResumeDetails(' . $record->id . ',1)">Schedule Interview </button>';
            } else {
                if ($round22 == 'Pending') {
                    if (empty($round1[0]['recommendation'])) {
                        $action .= '<button type="button" style="border: 1px solid #999999;background-color: #cccccc;color: #666666;" disabled>Schedule Interview </button>';
                    } else {
                        $action .= '<button type="button" onclick="getResumeDetails(' . $record->id . ',2)">Schedule Interview </button>';
                    }
                } else {
                    if ($round33 == 'Pending') {
                        if (empty($round2[0]['recommendation'])) {
                            $action .= '<button type="button" style="border: 1px solid #999999;background-color: #cccccc;color: #666666;" disabled>Schedule Interview </button>';
                        } else {
                            $action .= '<button type="button" onclick="getResumeDetails(' . $record->id . ',3)">Schedule Interview </button>';
                        }
                        // $action .= '<button type="button" onclick="getResumeDetails(' . $record->id . ',3)">Schedule interview </button>';
                    } else {
                        if ($round44 == 'Pending') {
                            if (empty($round3[0]['recommendation'])) {
                                $action .= '<button type="button" style="border: 1px solid #999999;background-color: #cccccc;color: #666666;" disabled>Schedule Interview </button>';
                            } else {
                                $action .= '<button type="button" onclick="getResumeDetails(' . $record->id . ',4)">Schedule Interview </button>';
                            }
                            // $action .= '<button type="button" onclick="getResumeDetails(' . $record->id . ',4)">Schedule interview </button>';
                        } else {
                            if ($round55 == 'Pending') {
                                if (empty($round4[0]['recommendation'])) {
                                    $action .= '<button type="button" style="border: 1px solid #999999;background-color: #cccccc;color: #666666;" disabled>Schedule Interview </button>';
                                } else {
                                    $action .= '<button type="button" onclick="getResumeDetails(' . $record->id . ',5)">Schedule Interview </button>';
                                }
                            }
                        }
                    }
                }
            }

            // reject case
            $action .= '<button type="button" onclick="openReasonModal(' . $record->id . ')">Reject</button><br>';

            // Offer
            $action .= '<button type="button" onclick="offerModal(' . $record->id . ')">Offer</button>';

            // Joing
            $action .= '<button type="button" onclick="joiningModal(' . $record->id . ')">Joined</button><br>';
            $name = '<a href="' . base_url() . 'Recruiter/viewResume/' . $jobId . '/' . $record->id . '">' . $record->name . '</a>';

            $data[] = array(
                // 'id' => $record->id,
                'id' => $no,
                'name' =>  $name,
                'mobile' => $record->mobile,
                'lastCompany' => $record->createdDate,
                'totalExp' => $record->totalExperince,
                'lastActivity' => $record->createdDate,
                'Action' => $action,
                'round1' => $round11,
                'round2' => $round22,
                'round3' => $round33,
                'round4' => $round44,
                'round5' => $round55,
                'maxRound' => $record->maxRound
            );
        }

        ## Response
        $response = array(
            'draw' => intval($draw),
            'iTotalRecords' => $totalRecords,
            'iTotalDisplayRecords' => $totalRecordwithFilter,
            'aaData' => $data
        );

        return $response;
    }

    public function resumeData($resumeId)
    {

        $sql = "SELECT *, ( SELECT title FROM tblProfile  WHERE id = ( SELECT PROFILE FROM tblJob WHERE id = tblResumes.jobId ) ) AS position
            FROM tblResumes WHERE deleted = '1' and id = '$resumeId'";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function round1($resumeId)
    {
        $sql = "SELECT(SELECT NAME FROM tblUser WHERE id=t1.interviewerId) AS interviewer,
        (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END )AS recommendation FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id=t2.roundId
        WHERE t1.resumeId='" . $resumeId . "' AND  t1.round='1'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function round2($resumeId)
    {
        $sql = "SELECT(SELECT NAME FROM tblUser WHERE id=t1.interviewerId) AS interviewer,
        (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END )AS recommendation FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id=t2.roundId
        WHERE t1.resumeId='" . $resumeId . "' AND  t1.round='2'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function round3($resumeId)
    {
        $sql = "SELECT(SELECT NAME FROM tblUser WHERE id=t1.interviewerId) AS interviewer,
        (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END )AS recommendation FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id=t2.roundId
        WHERE t1.resumeId='" . $resumeId . "' AND  t1.round='3'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function round4($resumeId)
    {
        $sql = "SELECT(SELECT NAME FROM tblUser WHERE id=t1.interviewerId) AS interviewer,
        (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END )AS recommendation FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id=t2.roundId
        WHERE t1.resumeId='" . $resumeId . "' AND  t1.round='4'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function round5($resumeId)
    {
        $sql = "SELECT(SELECT NAME FROM tblUser WHERE id=t1.interviewerId) AS interviewer,
        (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END )AS recommendation FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id=t2.roundId
        WHERE t1.resumeId='" . $resumeId . "' AND  t1.round='5'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    public function resumeQuestion($resumeId)
    {
        $sql = "SELECT * FROM tblResumeQuestion  WHERE resumeId = '$resumeId' AND deleted = '1'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function roundDetails1($resumeId)
    {
        $sql = "SELECT t2.*, ( SELECT name FROM tblUser WHERE id = t1.interviewerId ) AS interviewerName,
            ( SELECT title FROM tblDesignation WHERE deleted = '1' AND id = ( SELECT  designatin FROM tblUser WHERE id = t1.interviewerId ) )AS designation,
            ( CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2' THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4' THEN 'Strongly Hire'  END )AS recommendation
            FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE t2.resumeId = '$resumeId' AND round = '1' AND interviewTaken = '1'";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();

        return $result;
    }

    public function roundDetails2($resumeId)
    {
        $sql = "SELECT t2.*, ( SELECT name FROM tblUser WHERE id = t1.interviewerId ) AS interviewerName,
            ( SELECT title FROM tblDesignation WHERE deleted = '1' AND id = ( SELECT  designatin FROM tblUser WHERE id = t1.interviewerId ) )AS designation,
            ( CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2' THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4' THEN 'Strongly Hire'  END )AS recommendation
            FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE t2.resumeId = '$resumeId' AND round = '2' AND interviewTaken = '1'";

        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function roundDetails3($resumeId)
    {
        $sql = "SELECT t2.*, ( SELECT name FROM tblUser WHERE id = t1.interviewerId ) AS interviewerName,
            ( SELECT title FROM tblDesignation WHERE deleted = '1' AND id = ( SELECT  designatin FROM tblUser WHERE id = t1.interviewerId ) )AS designation,
            ( CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2' THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4' THEN 'Strongly Hire'  END )AS recommendation
            FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE t2.resumeId = '$resumeId' AND round = '3' AND interviewTaken = '1'";

        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function roundDetails4($resumeId)
    {
        $sql = "SELECT t2.*, ( SELECT name FROM tblUser WHERE id = t1.interviewerId ) AS interviewerName,
            ( SELECT title FROM tblDesignation WHERE deleted = '1' AND id = ( SELECT  designatin FROM tblUser WHERE id = t1.interviewerId ) )AS designation,
            ( CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2' THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4' THEN 'Strongly Hire'  END )AS recommendation
            FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE t2.resumeId = '$resumeId' AND round = '4' AND interviewTaken = '1'";

        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function roundDetails5($resumeId)
    {
        $sql = "SELECT t2.*, ( SELECT name FROM tblUser WHERE id = t1.interviewerId ) AS interviewerName,
            ( SELECT title FROM tblDesignation WHERE deleted = '1' AND id = ( SELECT  designatin FROM tblUser WHERE id = t1.interviewerId ) )AS designation,
            ( CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2' THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4' THEN 'Strongly Hire'  END )AS recommendation
            FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE t2.resumeId = '$resumeId' AND round = '5' AND interviewTaken = '1'";

        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    function getInterviewrList($postData)
    {
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length'];
        // Rows display per page
        $columnIndex = $postData['order'][0]['column'];
        // Column index
        $columnName = $postData['columns'][$columnIndex]['data'];

        $columnSortOrder = $postData['order'][0]['dir'];
        // asc or desc
        $searchValue = $postData['search']['value'];
        // Search value
        $search_arr = array();
        $searchQuery = '';
        if ($searchValue != '') {
            $search_arr[] = "(LOWER(name) like LOWER('%" . $searchValue . "%') or LOWER(title) like LOWER('%" . $searchValue . "%') ) ";
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(' and ', $search_arr);
        }

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $select = $this->db->select("t11.id,name,t11.deleted,DATE_FORMAT(t11.createdDate,'%d %M %Y ') AS createdDate,title AS department,
            (SELECT COUNT(t1.id) FROM tblRound AS t1 WHERE interviewTaken = '0' AND interviewerId=t11.id) AS activeInterview,
            (SELECT COUNT(t1.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE interviewTaken = '1' AND interviewerId=t11.id) AS totalInterview,
            (SELECT COUNT(t2.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE interviewTaken = '1' AND interviewerId=t11.id AND t2.recommendation IN ('1','4') AND t2.createdBy=t11.id) AS totalHire,
            (SELECT COUNT(t2.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE interviewTaken = '1' AND interviewerId=t11.id AND t2.recommendation='2' AND t2.createdBy=t11.id) AS totalRejected,
            (SELECT COUNT(t2.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE interviewTaken = '1' AND interviewerId=t11.id AND t2.recommendation='3' AND t2.createdBy=t11.id) AS totalHold,")
            ->join('tblDepartment as t2', 't11.department=t2.id ')->where('role', '1')->get('tblUser as t11');
        // echo $this->db->last_query();
        // die;

        $records = $select->result();
        $totalRecords = $select->num_rows();

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        ## Total number of record with filtering
        $select1 = $this->db->select("t11.id,name,t11.deleted,DATE_FORMAT(t11.createdDate,'%d %M %Y ') AS createdDate,title AS department,
        (SELECT COUNT(t1.id) FROM tblRound AS t1 WHERE interviewTaken = '0' AND interviewerId=t11.id) AS activeInterview,
        (SELECT COUNT(t1.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE interviewTaken = '1' AND interviewerId=t11.id AND t2.createdBy=t11.id) AS totalInterview,
        (SELECT COUNT(t2.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE  interviewTaken = '1' AND interviewerId=t11.id AND t2.recommendation IN ('1','4') AND t2.createdBy=t11.id) AS totalHire,
        (SELECT COUNT(t2.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE  interviewTaken = '1' AND interviewerId=t11.id AND t2.recommendation='2' AND t2.createdBy=t11.id) AS totalRejected,
        (SELECT COUNT(t2.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE  interviewTaken = '1' AND interviewerId=t11.id AND t2.recommendation='3' AND t2.createdBy=t11.id) AS totalHold,")
            ->join('tblDepartment as t2', 't11.department=t2.id ')->where('role', '1')->get('tblUser as t11');

        // echo $this->db->last_query();
        // die;

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $records = $select1->result();
        $totalRecordwithFilter = $select1->num_rows();

        ## Fetch records
        $this->db->select("t11.id,name,t11.deleted,DATE_FORMAT(t11.createdDate,'%d %M %Y ') AS createdDate,title AS department,
        (SELECT COUNT(t1.id) FROM tblRound AS t1 WHERE interviewTaken = '0' AND interviewerId=t11.id) AS activeInterview,
        (SELECT COUNT(t1.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE interviewTaken = '1' AND interviewerId=t11.id AND t2.createdBy=t11.id) AS totalInterview,
        (SELECT COUNT(t2.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE  interviewTaken = '1' AND interviewerId=t11.id AND t2.recommendation IN ('1','4') AND t2.createdBy=t11.id) AS totalHire,
        (SELECT COUNT(t2.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE  interviewTaken = '1' AND interviewerId=t11.id AND t2.recommendation='2' AND t2.createdBy=t11.id) AS totalRejected,
        (SELECT COUNT(t2.id) FROM tblRound AS t1 JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE  interviewTaken = '1' AND interviewerId=t11.id AND t2.recommendation='3' AND t2.createdBy=t11.id) AS totalHold,")
            ->join('tblDepartment as t2', 't11.department=t2.id ')->where('role', '1');

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $select2 = $this->db->get('tblUser as t11');

        $records = $select2->result();

        $data = array();
        $no = $_POST['start'];
        foreach ($records as $record) {
            $no++;

            $user_status = '';
            if ($record->deleted == '1') {

                $user_status = ' <div class="togglebox"> <label class="switch" >
                        <input id="slider_' . $record->id . '" type="checkbox" onclick="disableUser(' . $record->id . ')" checked>
                        <span class="slider round"></span>
                        </label></div>';
            } else {
                $user_status = ' <div class="togglebox"> <label class="switch" >
                    <input id="slider_' . $record->id . '" type="checkbox" onclick="disableUser(' . $record->id . ')" >
                    <span class="slider round"></span></label></div>';
            }

            $action = '<a href="" class="delete fa fa-edit" style="margin-right:17px;" data-toggle="modal" data-target="#EditInterviewModal" onclick="viewData(' . $record->id . ');"></a>';

            // $action = '<a href="" class="delete fa fa-edit" style="margin-right:17px;" data-toggle="modal" data-target="#EditInterviewModal" onclick="viewData(' . $record->id . ');">
            // </a>&nbsp;<br><a href="" class="delete fa fa-trash" onclick="deleteInterviewr(' . $record->id . ')" style="color:#8e2424"></a>';

            $name = '<a href="' . base_url('Recruiter/viewIntervierDetailsList/' . $record->id) . '">' . $record->name . '</a>';

            $data[] = array(
                'SNO' => $no,
                'id' => $record->id,
                'name' =>  $name,
                'department' => $record->department,
                'enrolleDate' => $record->createdDate,
                'totalInterview' => $record->totalInterview,
                'activeInterview' => $record->activeInterview,
                'hired' => $record->totalHire,
                'rejeted' => $record->totalRejected,
                'hold' => $record->totalHold,
                'status' => $user_status,
                'action' => $action,
            );
        }

        ## Response
        $response = array(
            'draw' => intval($draw),
            'iTotalRecords' => $totalRecords,
            'iTotalDisplayRecords' => $totalRecordwithFilter,
            'aaData' => $data
        );

        return $response;
    }

    public function getDesignation()
    {
        $this->db->select('*');
        $this->db->from('tblDesignation as t1');
        $this->db->where('t1.deleted', '1');
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function getDepartment()
    {
        $this->db->select('*');
        $this->db->from('tblDepartment as t1');
        $this->db->where('t1.deleted', '1');
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function saveInterViewer($postdata)
    {

        $this->db->insert('tblUser', $postdata);
        $data['result'] = $postdata;

        $email = $data['result']['email'];
        $subject = 'Congratulations for being selected as an Interviewer of Techugo';
        $message = $this->load->view('EmailTemplate/addInterviwer', $data, true);
        // $this->commonModel->sendEmail($data['result']['email'], $message, $subject);

        $from_email = 'career@techugo.com';
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
                <title>' . html_escape($subject) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
                font-size: 16px;}</style></head><body>' . $message . '</body></html>';
        $headers = 'From:' . $from_email . "\r\n" .
            'Reply-To: ' . $from_email . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $this->send_mail($subject, $from_email, $email, $headers, $body);


        return;
    }

    public function saveInterViewer2($postdata)
    {
        $id = $postdata['id'];
        unset($postdata['id']);
        $this->db->where('id', $id);
        $this->db->update('tblUser', $postdata);

        $data['result'] = $postdata;
        $email = $data['result']['email'];
        $subject = 'Congratulations for being selected as an Interviewer of Techugo';
        $message = $this->load->view('EmailTemplate/addInterviwer', $data, true);
        // $this->commonModel->sendEmail($data['result']['email'], $message, $subject);

        $from_email = 'career@techugo.com';
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
                <title>' . html_escape($subject) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
                font-size: 16px;}</style></head><body>' . $message . '</body></html>';
        $headers = 'From:' . $from_email . "\r\n" .
            'Reply-To: ' . $from_email . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $this->send_mail($subject, $from_email, $email, $headers, $body);

        return;
    }

    public function deleteInterviewr($postdata)
    {

        $this->db->where('createdBy', $postdata['id']);
        $this->db->delete('tblFeedback');

        $this->db->where('createdBy', $postdata['id']);
        $this->db->delete('tblRound');

        $this->db->where('id', $postdata['id']);
        $this->db->delete('tblUser');
        return;
    }

    function getscheduleInterview($postData)
    {
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length'];
        $columnIndex = $postData['order'][0]['column'];
        $columnName = $postData['columns'][$columnIndex]['data'];
        $columnSortOrder = $postData['order'][0]['dir'];
        $searchValue = $postData['search']['value'];
        $search_arr = array();
        $searchQuery = '';
        if ($searchValue != '') {
            $search_arr[] = "(LOWER(t3.name) like LOWER('%" . $searchValue . "%') or LOWER(t2.name) like LOWER('%" . $searchValue . "%') ) ";
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(' and ', $search_arr);
        }

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $select = $this->db->select("t1.id,interviewerId,t1.deleted,resumeId,
        CONCAT(DATE_FORMAT(interviewDate,'%d %M %Y') , '  ' ,interviewTime)AS interviewDateTime,
        t2.name as interviewer,t3.name,(SELECT MAX(round)  FROM tblRound WHERE resumeId=t1.resumeId) AS rounds,
        (SELECT title FROM tblProfile WHERE id =(SELECT profile  FROM tblJob WHERE id=(SELECT jobId FROM tblResumes WHERE id=resumeId))) AS profile")
            ->join('tblUser as t2', 't1.interviewerId=t2.id ')
            ->join('tblResumes as t3', 't1.resumeId=t3.id ')
            ->where('interviewtaken', '0')
            ->get('tblRound as t1');


        $records = $select->result();
        $totalRecords = $select->num_rows();

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        ## Total number of record with filtering
        $select1 = $this->db->select("t1.id,interviewerId,t1.deleted,resumeId,
        CONCAT(DATE_FORMAT(interviewDate,'%d %M %Y') , '  ',interviewTime)AS interviewDateTime,
        t2.name as interviewer,t3.name,(SELECT MAX(round)  FROM tblRound WHERE resumeId=t1.resumeId) AS rounds,
        (SELECT title FROM tblProfile WHERE id =(SELECT profile  FROM tblJob WHERE id=(SELECT jobId FROM tblResumes WHERE id=resumeId))) AS profile")
            ->join('tblUser as t2', 't1.interviewerId=t2.id ')
            ->join('tblResumes as t3', 't1.resumeId=t3.id ')
            ->where('interviewtaken', '0')
            ->get('tblRound as t1');

        // echo $this->db->last_query();
        // die;

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $records = $select1->result();
        $totalRecordwithFilter = $select1->num_rows();

        ## Fetch records
        $this->db->select("t1.id,interviewerId,t1.deleted,resumeId,
            CONCAT(DATE_FORMAT(interviewDate,'%d %M %Y') , '  ' ,interviewTime)AS interviewDateTime,
            t2.name as interviewer,t3.name,(SELECT MAX(round)  FROM tblRound WHERE resumeId=t1.resumeId) AS rounds,
            (SELECT title FROM tblProfile WHERE id =(SELECT profile  FROM tblJob WHERE id=(SELECT jobId FROM tblResumes WHERE id=resumeId))) AS profile")
            ->join('tblUser as t2', 't1.interviewerId=t2.id ')
            ->join('tblResumes as t3', 't1.resumeId=t3.id ')
            ->where('interviewtaken', '0');

        // echo $this->db->last_query();
        // die;
        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $select2 = $this->db->get('tblRound as t1');

        $records = $select2->result();

        $data = array();
        $no = $_POST['start'];
        foreach ($records as $record) {
            $no++;

            // // $startInterView = '<button type="button" onClick="startInterview(' . $record->id . ',' . $record->id . ');"> Start Interview </button>';
            $name = '<a href="' . base_url() . 'Recruiter/viewResume/' . $record->resumeId . '/' . $record->resumeId . '">' . $record->name . '</button>';

            $action = '<span class="iconbox"><i class="fa fa-pencil" onclick="viewDetails(' . $record->id . ')"></i></span>
            <span class="iconbox"><i class="fa fa-trash" onclick="deleteRound(' . $record->id . ')";></i></span>';


            $data[] = array(
                'SNO' => $no,
                'id' => $record->id,
                'name' => $name,
                'interviewer' => $record->interviewer,
                'profile' => $record->profile,
                'round' => $record->rounds,
                'date' => $record->interviewDateTime,
                'action' => $action,
            );
        }

        ## Response
        $response = array(
            'draw' => intval($draw),
            'iTotalRecords' => $totalRecords,
            'iTotalDisplayRecords' => $totalRecordwithFilter,
            'aaData' => $data
        );

        return $response;
    }

    function getInterviewerList()
    {
        $this->db->select('id,name');
        $this->db->from('tblUser as t1');
        $this->db->where('t1.deleted', '1');
        $this->db->where('t1.role', '1');
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    function getRoundDetails($data)
    {
        $this->db->select('t1.id, interviewerId, t1.deleted,interviewDate,resumeId,interViewTime,SUBSTRING(interViewTime,1,CHAR_LENGTH(interViewTime) - 2) AS interViewTime,
        RIGHT(interViewTime, 2) AS fromat,
        SUBSTRING(interViewTime, 1, CHAR_LENGTH(interViewTime) - 6) AS hours,
        SUBSTRING(interViewTime, 4, CHAR_LENGTH(interViewTime) - 6) AS mintues2, ');
        $this->db->from('tblRound as t1');
        $this->db->where('t1.id', $data['id']);
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result[0];
    }

    function editRound($postdata)
    {

        $this->db->select('*')->from('tblRound as t1')->where('id', $postdata['id']);
        $query = $this->db->get();
        $res = $query->result_array();

        $this->db->select('*')->from('tblRound as t1')->where('id', $postdata['id'])
            ->where('interviewTime', $postdata['interviewTime'])
            ->where('interviewDate', $postdata['interviewDate'])
            ->where('interviewerId', $postdata['interviewerId']);
        $query = $this->db->get();
        $res2 = $query->result_array();

        if (empty($res2)) {

            $data['result'] = $postdata;
            $data['interviewer'] = $this->viewInterViewerData(array('id' => $postdata['interviewerId']));
            $data['ResumeUser'] = $this->getResumeDetails(array('id' => $res[0]['resumeId']));

            $subject = 'Techugo Interview Rescheduled, Round ' . $res2['round'] . 'Interview';
            $message = $this->load->view('EmailTemplate/RE_InterviewScheduleUser', $data, true);
            // $this->commonModel->sendEmail($data['ResumeUser']['email'], $message, $subject);
            $email = $data['ResumeUser']['email'];

            $from_email = 'career@techugo.com';
            $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
                <title>' . html_escape($subject) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
                font-size: 16px;}</style></head><body>' . $message . '</body></html>';
            $headers = 'From:' . $from_email . "\r\n" .
                'Reply-To: ' . $from_email . "\n" .
                'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            $this->send_mail($subject, $from_email, $email, $headers, $body);

            $subject2 = 'Interview Rescheduled for ' . $data['ResumeUser']['profile'];
            $message2 = $this->load->view('EmailTemplate/RE_InterviewScheduleInterviewer', $data, true);
            // $this->commonModel->sendEmail($data['interviewer'][0]['email'], $message2, $subject2);

            $email2 = $data['interviewer'][0]['email'];
            // $from_email = 'career@techugo.com';
            $body2 = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
                <title>' . html_escape($subject2) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
                font-size: 16px;}</style></head><body>' . $message2 . '</body></html>';

            $headers2 = 'From:' . $from_email . "\r\n" .
                'Reply-To: ' . $from_email . "\n" .
                'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            $this->send_mail($subject2, $from_email, $email2, $headers2, $body2);
        }

        $saveData = array(
            'updatedDate' => Date('Y-m-d h:i:s'),
            'interviewDate' => $postdata['interviewDate'],
            'interviewerId' => $postdata['interviewerId'],
            'interviewTime' => $postdata['interviewTime'],
            'mode' => $postdata['mode'],
        );

        $this->db->where('id', $postdata['id']);
        $this->db->update('tblRound', $saveData);

        return;
    }

    function getResumeDetails($data)
    {
        $this->db->select('t1.*,CONCAT(totalExperince," Yrs Experience") AS totalExperince,
        (SELECT title FROM tblProfile WHERE id =(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS profile');
        $this->db->from('tblResumes as t1');
        $this->db->where('t1.id', $data['id']);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0];
    }

    function scheduleInterviewDetails($postdata)
    {

        $postdata['createdBy'] = $this->session->userdata('adminId');
        $this->db->insert('tblRound', $postdata);

        $data['result'] = $postdata;
        $data['interviewer'] = $this->viewInterViewerData(array('id' => $postdata['interviewerId']));
        $data['ResumeUser'] = $this->getResumeDetails(array('id' => $postdata['resumeId']));

        // candidate mail
        $subject = 'Techugo Round ' . $postdata['round'] . ' Interview';
        $message = $this->load->view('EmailTemplate/InterviewScheduleUser', $data, true);
        // $this->commonModel->sendEmail($data['ResumeUser']['email'], $message, $subject);

        $email = $data['ResumeUser']['email'];
        $from_email = 'career@techugo.com';
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
            <title>' . html_escape($subject) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;}</style></head><body>' . $message . '</body></html>';
        $headers = 'From:' . $from_email . "\r\n" .
            'Reply-To: ' . $from_email . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $this->send_mail($subject, $from_email, $email, $headers, $body);


        // Interviewer mail
        $subject2 = 'Interview Planned for ' . $data['ResumeUser']['profile'] . ', ' . $postdata['interviewDate'] . ', ' . $postdata['interviewTime'];
        $message2 = $this->load->view('EmailTemplate/InterviewScheduleInterviewer', $data, true);
        // $this->commonModel->sendEmail($data['interviewer'][0]['email'], $message2, $subject2);

        $email2 = $data['interviewer'][0]['email'];
        $from_email = 'career@techugo.com';
        $body2 = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
            <title>' . html_escape($subject2) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;}</style></head><body>' . $message2 . '</body></html>';
        $headers2 = 'From:' . $from_email . "\r\n" .
            'Reply-To: ' . $from_email . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $this->send_mail($subject2, $from_email, $email2, $headers2, $body2);

        return;
    }

    function getRejectList()
    {
        $this->db->select('id,title');
        $this->db->from('tblResonToReject as t1');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    function rejectCandidate($postdata)
    {
        $this->db->where('id', $postdata['id']);
        $this->db->update('tblResumes', array('reject' => $postdata['reject'], 'updatedDate' => Date('Y-m-d h:i:s')));

        $data['ResumeUser'] = $this->getResumeDetails(array('id' => $postdata['id']));

        $subject = 'Techugo Interview Feedback';
        $message = $this->load->view('EmailTemplate/interviewReject', $data, true);
        // $this->commonModel->sendEmail($data['ResumeUser']['email'], $message2, $subject2);

        $email = $data['ResumeUser']['email'];
        $from_email = 'career@techugo.com';
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
            <title>' . html_escape($subject) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;}</style></head><body>' . $message . '</body></html>';
        $headers = 'From:' . $from_email . "\r\n" .
            'Reply-To: ' . $from_email . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $this->send_mail($subject, $from_email, $email, $headers, $body);

        return;
    }

    function giveOffer($postdata)
    {
        $this->db->select('*');
        $this->db->from('tblOffer as t1');
        $this->db->where('jobId', $postdata['jobId']);
        $this->db->where('resumeId', $postdata['resumeId']);
        $query = $this->db->get();
        $result = $query->result_array();

        if (empty($result)) {
            $postdata['createdBy'] = $this->session->userdata('adminId');
            $this->db->insert('tblOffer', $postdata);
        } else {
            $this->db->where('id', $result[0]['id']);
            $this->db->update('tblOffer', array(
                'offerCTC' => $postdata['offerCTC'],
                'updatedDate' => Date('Y-m-d h:i:s'),
                'joinDate' => $postdata['joinDate'],
                'updatedBy' => $this->session->userdata('adminId'),
            ));
        }

        $data['result'] = $postdata;
        $data['ResumeUser'] = $this->getResumeDetails(array('id' => $postdata['resumeId']));

        // $email2 = $this->getAdminEmail();
        $subject = 'Techugo : Congratulations for being Shortlisted';
        $message = $this->load->view('EmailTemplate/offer', $data, true);
        // $this->commonModel->sendEmail($data['ResumeUser']['email'], $message2, $subject2);

        $email = $data['ResumeUser']['email'];
        $from_email = 'career@techugo.com';
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
            <title>' . html_escape($subject) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;}</style></head><body>' . $message . '</body></html>';
        $headers = 'From:' . $from_email . "\r\n" .
            'Reply-To: ' . $from_email . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $this->send_mail($subject, $from_email, $email, $headers, $body);

        return;
    }

    function giveFinalOffer($postdata)
    {
        $this->db->select('*');
        $this->db->from('tblOffer as t1');
        $this->db->where('jobId', $postdata['jobId']);
        $this->db->where('resumeId', $postdata['resumeId']);
        $query = $this->db->get();
        $result = $query->result_array();

        if (empty($result)) {
            $postdata['createdBy'] = $this->session->userdata('adminId');
            $this->db->insert('tblOffer', $postdata);
            $this->db->where('id', $result[0]['resumeId']);
            $this->db->update('tblResumes', array('accept' => '1'));
        } else {
            $this->db->where('id', $result[0]['id']);
            $this->db->update('tblOffer', array(
                'finalCTC' => $postdata['finalCTC'],
                'updatedDate' => Date('Y-m-d h:i:s'),
                'confirmJoinDate' => $postdata['confirmJoinDate'],
                'updatedBy' => $this->session->userdata('adminId'),
            ));

            $this->db->where('id', $result[0]['resumeId']);
            $this->db->update('tblResumes', array('accept' => '1'));
        }

        $data['result'] = $postdata;
        $data['ResumeUser'] = $this->getResumeDetails(array('id' => $postdata['resumeId']));

        // $email2 = $this->getAdminEmail();
        $subject = 'Techugo : Congratulations for getting Selected in Techugo.';
        $message = $this->load->view('EmailTemplate/join', $data, true);
        // $this->commonModel->sendEmail($data['ResumeUser']['email'], $message2, $subject2);

        $email = $data['ResumeUser']['email'];
        $from_email = 'career@techugo.com';
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
            <title>' . html_escape($subject) . '</title><style type="text/css">body {font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;}</style></head><body>' . $message . '</body></html>';
        $headers = 'From:' . $from_email . "\r\n" .
            'Reply-To: ' . $from_email . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $this->send_mail($subject, $from_email, $email, $headers, $body);


        return;
    }

    function getRejetedList($postData)
    {

        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length'];
        // Rows display per page
        $columnIndex = $postData['order'][0]['column'];
        // Column index
        $columnName = $postData['columns'][$columnIndex]['data'];

        $columnSortOrder = $postData['order'][0]['dir'];
        // asc or desc
        $searchValue = $postData['search']['value'];
        // Search value
        $search_arr = array();
        $searchQuery = '';
        if ($searchValue != '') {
            $search_arr[] = "(t1.email like '%" . $searchValue . "%' or
      t1.name like '%" . $searchValue . "%' or
      t1.mobile like'%" . $searchValue . "%' ) ";
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(' and ', $search_arr);
        }

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $select = $this->db->select("t1.*,
        CONCAT(DATE_FORMAT(createdDate,'%d %M  %Y'),' / ',TIME_FORMAT(createdDate,'%h:%i %p')) AS createdDate,
        (SELECT title FROM tblProfile WHERE deleted='1' AND id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,
        (SELECT max(round) FROM tblRound WHERE deleted='1' AND resumeId=t1.id) as round")
            ->where('t1.deleted', '1')
            ->where('reject IS NOT NULL')
            ->get('tblResumes as t1');

        $records = $select->result();
        $totalRecords = $select->num_rows();

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        ## Total number of record with filtering
        $select1 = $this->db->select("t1.*,
        CONCAT(DATE_FORMAT(createdDate,'%d %M  %Y'),' / ',TIME_FORMAT(createdDate,'%h:%i %p')) AS createdDate,
        (SELECT title FROM tblProfile WHERE deleted='1' AND
                      id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,
        (SELECT max(round) FROM tblRound WHERE deleted='1' AND resumeId=t1.id) as round")
            ->where('t1.deleted', '1')
            ->where('reject IS NOT NULL')
            ->get('tblResumes as t1');

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $records = $select1->result();
        $totalRecordwithFilter = $select1->num_rows();

        ## Fetch records
        $this->db->select("t1.*,
            CONCAT(DATE_FORMAT(createdDate,'%d %M  %Y'),' / ',TIME_FORMAT(createdDate,'%h:%i %p')) AS createdDate,
            (SELECT title FROM tblProfile WHERE deleted='1' AND id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,
            (SELECT max(round) FROM tblRound WHERE deleted='1' AND resumeId=t1.id) as round,
            IFNULL(DATE_FORMAT((SELECT interviewDate FROM `tblRound` where resumeId=t1.id
            ORDER BY id DESC  LIMIT 1), '%d %M %Y'),DATE_FORMAT(t1.createdDate, '%d %M %Y')) AS lastactivity")
            ->where('t1.deleted', '1')
            ->where('reject IS NOT NULL');

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $select2 = $this->db->get('tblResumes as t1');
        // echo $this->db->last_query();
        // die;
        $records = $select2->result();

        $data = array();
        $no = $_POST['start'];
        foreach ($records as $record) {
            $no++;
            $name = '<a href="' . base_url() . 'Recruiter/viewResume/' . $record->id . '/' . $record->id . '">' . $record->name . '</button>';
            $data[] = array(
                'id' => $no,
                'jobId' => $record->jobId,
                'name' => $name,
                'mobile' => $record->mobile,
                'lastCompany' => $record->lastCompany,
                'totalExperince' => $record->totalExperince,
                'round' => $record->round,
                'interViewDateTime' => $record->lastactivity,
            );
        }

        // print_r($data);
        // die;

        ## Response
        $response = array(
            'draw' => intval($draw),
            'iTotalRecords' => $totalRecords,
            'iTotalDisplayRecords' => $totalRecordwithFilter,
            'aaData' => $data
        );

        return $response;
    }

    function getHiredList($postData)
    {

        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length'];
        // Rows display per page
        $columnIndex = $postData['order'][0]['column'];
        // Column index
        $columnName = $postData['columns'][$columnIndex]['data'];

        $columnSortOrder = $postData['order'][0]['dir'];
        // asc or desc
        $searchValue = $postData['search']['value'];
        // Search value
        $search_arr = array();
        $searchQuery = '';
        if ($searchValue != '') {
            $search_arr[] = "(t1.email like '%" . $searchValue . "%' or
      t1.name like '%" . $searchValue . "%' or
      t1.mobile like'%" . $searchValue . "%' ) ";
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(' and ', $search_arr);
        }

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $select = $this->db->select("t1.*,
        CONCAT(DATE_FORMAT(createdDate,'%d %M  %Y'),' / ',TIME_FORMAT(createdDate,'%h:%i %p')) AS createdDate,
        (SELECT title FROM tblProfile WHERE deleted='1' AND id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,
        (SELECT max(round) FROM tblRound WHERE deleted='1' AND resumeId=t1.id) as round")
            ->where('t1.deleted', '1')
            ->where('reject IS  NULL')
            ->where('accept IS NOT NULL')
            ->get('tblResumes as t1');

        $records = $select->result();
        $totalRecords = $select->num_rows();

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        ## Total number of record with filtering
        $select1 = $this->db->select("t1.*,
        CONCAT(DATE_FORMAT(createdDate,'%d %M  %Y'),' / ',TIME_FORMAT(createdDate,'%h:%i %p')) AS createdDate,
        (SELECT title FROM tblProfile WHERE deleted='1' AND
                      id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,
        (SELECT max(round) FROM tblRound WHERE deleted='1' AND resumeId=t1.id) as round")
            ->where('t1.deleted', '1')
            ->where('reject IS  NULL')
            ->where('accept IS NOT NULL')
            ->get('tblResumes as t1');

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $records = $select1->result();
        $totalRecordwithFilter = $select1->num_rows();

        ## Fetch records
        $this->db->select("t1.*,
            CONCAT(DATE_FORMAT(createdDate,'%d %M  %Y'),' / ',TIME_FORMAT(createdDate,'%h:%i %p')) AS createdDate,
            (SELECT title FROM tblProfile WHERE deleted='1' AND id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,
            (SELECT max(round) FROM tblRound WHERE deleted='1' AND resumeId=t1.id) as round,
            IFNULL(DATE_FORMAT((SELECT interviewDate FROM `tblRound` where resumeId=t1.id
            ORDER BY id DESC  LIMIT 1), '%d %M %Y'),DATE_FORMAT(t1.createdDate, '%d %M %Y')) AS lastactivity")
            ->where('t1.deleted', '1')
            ->where('reject IS  NULL')
            ->where('accept IS NOT NULL');

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $select2 = $this->db->get('tblResumes as t1');
        // echo $this->db->last_query();
        // die;
        $records = $select2->result();

        $data = array();
        $no = $_POST['start'];
        foreach ($records as $record) {
            $no++;
            $name = '<a href="' . base_url() . 'Recruiter/viewResume/' . $record->id . '/' . $record->id . '">' . $record->name . '</button>';
            $data[] = array(
                'id' => $no,
                'jobId' => $record->jobId,
                'name' => $name,
                'mobile' => $record->mobile,
                'lastCompany' => $record->lastCompany,
                'totalExperince' => $record->totalExperince,
                'round' => $record->round,
                'interViewDateTime' => $record->lastactivity,
            );
        }

        // print_r($data);
        // die;

        ## Response
        $response = array(
            'draw' => intval($draw),
            'iTotalRecords' => $totalRecords,
            'iTotalDisplayRecords' => $totalRecordwithFilter,
            'aaData' => $data
        );

        return $response;
    }
    //
    public function viewInterViewerData($postdata)
    {
        $this->db->select('*,(SELECT title FROM `tblDesignation` WHERE id=t1.designatin) AS design');
        $this->db->from('tblUser as t1');
        $this->db->where('t1.id', $postdata['id']);
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    function viewIntervierDetailsAjaxList($postData)
    {

        // print_r($postdata);
        // die;
        $response = array();
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length'];
        // Rows display per page
        $columnIndex = $postData['order'][0]['column'];
        // Column index
        $columnName = $postData['columns'][$columnIndex]['data'];

        $columnSortOrder = $postData['order'][0]['dir'];
        // asc or desc
        $searchValue = $postData['search']['value'];
        // Search value
        $search_arr = array();
        $searchQuery = '';
        if ($searchValue != '') {
            $search_arr[] = "(t1.email like '%" . $searchValue . "%' or
      t1.name like '%" . $searchValue . "%' or
      t1.mobile like'%" . $searchValue . "%' ) ";
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(' and ', $search_arr);
        }

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $select = $this->db->select("t1.*,
        (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END )AS recommendation,
        CONCAT(DATE_FORMAT(t1.createdDate,'%d %M  %Y'),' / ',TIME_FORMAT(t1.createdDate,'%h:%i %p')) AS createdDate,
        (SELECT title FROM tblProfile WHERE deleted='1' AND id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,
        (SELECT max(round) FROM tblRound WHERE deleted='1' AND resumeId=t1.id AND interviewerId=t2.createdBy) as round,
        (CASE WHEN accept IS NOT NULL THEN 'Hire' WHEN reject IS NOT NULL THEN 'Reject'  ELSE 'Pending' END )AS finalStatus")
            ->join('tblFeedback as t2', 't1.id=t2.resumeId')
            ->where('t1.deleted', '1')
            ->where('t2.createdBy', $postData['userId'])
            ->get('tblResumes as t1');

        $records = $select->result();
        $totalRecords = $select->num_rows();

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        ## Total number of record with filtering
        $select1 = $this->db->select("t1.*,
        (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END )AS recommendation,
        CONCAT(DATE_FORMAT(t1.createdDate,'%d %M  %Y'),' / ',TIME_FORMAT(t1.createdDate,'%h:%i %p')) AS createdDate,
        (SELECT title FROM tblProfile WHERE deleted='1' AND id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,
        (SELECT max(round) FROM tblRound WHERE deleted='1' AND resumeId=t1.id AND interviewerId=t2.createdBy) as round,
        (CASE WHEN accept IS NOT NULL THEN 'Hire' WHEN reject IS NOT NULL THEN 'Reject'  ELSE 'Pending' END )AS finalStatus")
            ->join('tblFeedback as t2', 't1.id=t2.resumeId')
            ->where('t1.deleted', '1')
            ->where('t2.createdBy', $postData['userId'])
            ->get('tblResumes as t1');

        // echo $this->db->last_query();
        // die;

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $records = $select1->result();
        $totalRecordwithFilter = $select1->num_rows();

        ## Fetch records
        $this->db->select("t1.*,
        (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END )AS recommendation,
        CONCAT(DATE_FORMAT(t1.createdDate,'%d %M  %Y'),' / ',TIME_FORMAT(t1.createdDate,'%h:%i %p')) AS createdDate,
        (SELECT title FROM tblProfile WHERE deleted='1' AND id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,
        (SELECT max(round) FROM tblRound WHERE deleted='1' AND resumeId=t1.id AND interviewerId=t2.createdBy) as round,
        (CASE WHEN accept IS NOT NULL THEN 'Hire' WHEN reject IS NOT NULL THEN 'Reject'  ELSE 'Pending' END )AS finalStatus")
            ->join('tblFeedback as t2', 't1.id=t2.resumeId')
            ->where('t1.deleted', '1')
            ->where('t2.createdBy', $postData['userId']);

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $select2 = $this->db->get('tblResumes as t1');
        // echo $this->db->last_query();
        // die;
        $records = $select2->result();

        $data = array();
        $no = $_POST['start'];
        foreach ($records as $record) {
            $no++;
            $name = '<a href="' . base_url() . 'Recruiter/viewResume/' . $record->id . '/' . $record->id . '">' . $record->name . '</button>';
            $data[] = array(
                'id' => $no,
                'jobId' => $record->jobId,
                'name' => $name,
                'mobile' => $record->mobile,
                'lastCompany' => $record->lastCompany,
                // 'totalExperince' => $record->totalExperince,
                // 'round' => $record->round,
                'interViewDateTime' => $record->createdDate,
                'status' => $record->recommendation,
                'finalStatus' => $record->finalStatus,
            );
        }

        // print_r($data);
        // die;

        ## Response
        $response = array(
            'draw' => intval($draw),
            'iTotalRecords' => $totalRecords,
            'iTotalDisplayRecords' => $totalRecordwithFilter,
            'aaData' => $data
        );

        return $response;
    }

    public function getTotalInterview()
    {
        $sql = "SELECT jobId, (SELECT  title FROM tblProfile WHERE id=jobId) AS profile, COUNT(id) AS totalInterview FROM tblResumes WHERE jobId>0  GROUP BY jobId";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function getTotalInterviewT()
    {
        $sql = "SELECT COUNT(id) AS total FROM tblResumes WHERE jobId>0";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result[0]['total'];
    }

    public function getTotalPendingInterview()
    {
        $sql = "SELECT  COUNT(id) AS total, interviewDate FROM `tblRound`  WHERE interviewTaken='0' GROUP BY interviewDate";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();    die;
        return $result;
    }

    public function getTotalPendingInterviewT()
    {
        $sql = "SELECT COUNT(id) AS total FROM tblRound WHERE interviewTaken='0'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result[0]['total'];
    }

    public function getTotalHireInterview()
    {
        $sql = "SELECT jobId, (SELECT  title FROM tblProfile WHERE id=jobId) AS profile, COUNT(id) AS totalInterview FROM tblResumes WHERE jobId>0 AND accept IS NOT NULL GROUP BY jobId";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function getTotalHireInterviewT()
    {
        $sql = "SELECT COUNT(id) AS total FROM tblResumes WHERE jobId>0 AND accept IS NOT NULL";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result[0]['total'];
    }

    public function getTotalRejectedInterview()
    {
        $sql = "SELECT jobId, (SELECT  title FROM tblProfile WHERE id=jobId) AS profile, COUNT(id) AS totalInterview FROM tblResumes WHERE jobId>0 AND reject IS NOT NULL GROUP BY jobId";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function getTotalRejectedInterviewT()
    {
        $sql = "SELECT COUNT(id) AS total FROM tblResumes WHERE jobId>0 AND reject IS NOT NULL";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result[0]['total'];
    }

    public function getTotalStronglyHireInterview()
    {
        $sql = "SELECT (SELECT  title FROM tblProfile WHERE id=t2.jobId) AS profile, COUNT(t1.id) AS totalInterview FROM `tblFeedback` AS t1 JOIN tblResumes AS t2 ON  t1.resumeId=t2.id WHERE jobId>0 and recommendation='4'  GROUP BY jobId";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function getTotalStronglyHireInterviewT()
    {
        $sql = "SELECT COUNT(t1.id) AS total FROM `tblFeedback` AS t1 JOIN tblResumes AS t2 ON  t1.resumeId=t2.id WHERE jobId>0 and recommendation='4' ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result[0]['total'];
    }

    public function getTotalHoldInterview()
    {
        $sql = "SELECT (SELECT  title FROM tblProfile WHERE id=t2.jobId) AS profile, COUNT(t1.id) AS totalInterview FROM `tblFeedback` AS t1 JOIN tblResumes AS t2 ON  t1.resumeId=t2.id WHERE jobId>0 and recommendation='3' GROUP BY jobId";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function getTotalHoldInterviewT()
    {
        $sql = "SELECT COUNT(t1.id) AS total FROM `tblFeedback` AS t1 JOIN tblResumes AS t2 ON  t1.resumeId=t2.id WHERE jobId>0 and recommendation='3' ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result[0]['total'];
    }
}
