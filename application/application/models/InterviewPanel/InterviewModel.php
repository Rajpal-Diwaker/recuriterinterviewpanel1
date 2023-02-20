<?php

class InterviewModel extends CI_Model
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
        $fromemail = 'career@techugo.com';
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

    // public function saveOtp($email)
    // {

    //     $otp = rand(1000, 9999);
    //     // $otp = '1234';
    //     $this->db->where('email', $email);
    //     $this->db->update('tblUser', array('otp' => $otp));

    //     // $subject = 'Techugo Interview';
    //     // $message = 'Your Techugo OTP :' . $otp;
    //     // $this->commonModel->sendEmail($email, $message, $subject);

    //     $subject = 'Techugo Login OTP for Interview Panel';
    //     $data['otp'] = "Please use OTP - $otp to login to you interview panel.";
    //     $data['adminName'] = "Hello User,";
    //     $message = $this->load->view('EmailTemplate/otp', $data, true);
    //     $this->commonModel->sendEmail($email, $message, $subject);

    //     return true;
    // }


    public function saveOtp($email)
    {
        $otp = rand(1000, 9999);
        // $otp = '1234';
        $this->db->where('email', $email);
        $this->db->update('tblUser', array('otp' => $otp));

        // $subject = 'Techugo Interview';
        // $message = 'Your Techugo OTP :' . $otp;
        // $this->commonModel->sendEmail($email, $message, $subject);

        $subject = 'Techugo Login OTP for Interview Panel';
        $data['otp'] = "Please use OTP - $otp to login to Your interview panel.";
        $data['adminName'] = "Hello User,";
        $message = $this->load->view('EmailTemplate/otp', $data, true);
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
        $this->db->where('email', $postdata['email']);
        $this->db->where('otp', $postdata['otp']);
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $this->db->last_query();

        if (!empty($result)) {

            $userdata = ['email' => $result[0]['email'], 'userId' => $result[0]['id']];

            $this->session->set_userdata($userdata);

            return '1';
        } else {

            return '0';
        }
    }

    function getInterviewMenu($postData)
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

        $select = $this->db->select("t1.*,CONCAT(DATE_FORMAT(interviewDate,'%d %M  %Y'),' / ',interviewTime) AS createdDate,(SELECT title FROM tblProfile WHERE deleted='1' AND
                        id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,t2.round")
            ->join('tblRound as t2', 't1.id=t2.resumeId ')
            ->where('t1.deleted', '1')
            ->where('t2.deleted', '1')
            ->where('t2.interviewTaken', '0')
            ->where('t2.interviewerId', $this->session->userdata('userId'))
            ->get('tblResumes as t1');

        $records = $select->result();
        $totalRecords = $select->num_rows();

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        ## Total number of record with filtering
        $select1 = $this->db->select("t1.*,CONCAT(DATE_FORMAT(interviewDate,'%d %M  %Y'),' / ',interviewTime) AS
        createdDate,(SELECT title FROM tblProfile WHERE deleted='1' AND
                      id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,t2.round")
            ->join('tblRound as t2', 't1.id=t2.resumeId ')
            ->where('t1.deleted', '1')
            ->where('t2.deleted', '1')
            ->where('t2.interviewTaken', '0')
            ->where('t2.interviewerId', $this->session->userdata('userId'))
            ->get('tblResumes as t1');

        // echo $this->db->last_query();
        // die;
        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $records = $select1->result();
        $totalRecordwithFilter = $select1->num_rows();

        ## Fetch records
        $this->db->select("t1.*,CONCAT(DATE_FORMAT(interviewDate,'%d %M  %Y'),' / ',interviewTime) AS createdDate,(SELECT title FROM tblProfile WHERE deleted='1' AND
                id=(SELECT profile FROM tblJob WHERE id=t1.jobId)) AS jobId,t2.round,t2.id as roundId")
            ->join('tblRound as t2', 't1.id=t2.resumeId ')
            ->where('t1.deleted', '1')
            ->where('t2.deleted', '1')
            ->where('t2.interviewTaken', '0')
            ->where('t2.interviewerId', $this->session->userdata('userId'));

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
            $startInterView = '<button type="button" onClick="startInterview(' . $record->roundId . ',' . $record->id . ');">Start Interview</button>';

            $name = '<a href="' . base_url() . 'Interview/viewResumeDetails2/' . $record->roundId . '/' . $record->id . '">' . $record->name . '</button>';

            $data[] = array(
                'id' => $no,
                'jobId' => $record->jobId,
                'name' => $name,
                'mobile' => $record->mobile,
                'lastCompany' => $record->lastCompany,
                'totalExperince' => $record->totalExperince,
                'round' => $record->round,
                'interViewDateTime' => $record->createdDate,
                'status' => $startInterView,
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

    function getInterviewerDetails($id)
    {
        $this->db->select('*');
        $this->db->from('tblUser as t1');
        $this->db->where('t1.id', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        // echo $this->db->last_query();
        // die;
        return $result;
    }

    public function getRoundData($roundId)
    {
        $sql = "SELECT t2.*,t1.interviewDate,t1.interviewTime,t1.round, ( SELECT name FROM tblUser WHERE id = t1.interviewerId ) AS interviewerName,
            ( SELECT title FROM tblDesignation WHERE deleted = '1' AND id = ( SELECT  designatin FROM tblUser WHERE id = t1.interviewerId ) )AS designation,
            ( CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2' THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4' THEN 'Strongly Hire'  END )AS recommendation
            FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE t1.id = '$roundId' AND interviewTaken = '1'";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        // die;
        return $result;
    }


    public function submitInterview($postdata)
    {
        $postdata['createdBy'] = $this->session->userdata('userId');
        $this->db->insert('tblFeedback', $postdata);

        $this->db->where('id', $postdata['roundId']);
        $this->db->update('tblRound', array(
            'interviewTaken' => '1',
            'updatedBy' => $this->session->userdata('userId'),
            'updatedDate' => date('Y-m-d h:i:s')
        ));

        $data['result'] = $postdata;
        $data['roundData'] =  $this->getRoundData($postdata['roundId']);
        $data['resumeData'] = $this->resumeData($postdata['resumeId']);
        $data['interviewerData'] = $this->getInterviewerDetails($postdata['createdBy']);
        $email = $this->getAdminEmail();

        $subject = 'Interview Feedback';
        $message = $this->load->view('EmailTemplate/interviewFeedback', $data, true);
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

    function getOldInterviewMenu($postData)
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
            $search_arr[] = "( t1.email like '%" . $searchValue . "%' or
            t1.name like '%" . $searchValue . "%' or
            t1.mobile like'%" . $searchValue . "%' ) ";
        }

        if (count($search_arr) > 0) {
            $searchQuery = implode(' and ', $search_arr);
        }

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $select = $this->db->select("t1.*, CONCAT( DATE_FORMAT( interviewDate, '%d %M  %Y' ), ' / ',interviewTime ) AS createdDate, ( SELECT title FROM tblProfile WHERE deleted = '1' AND
            id = ( SELECT profile FROM tblJob WHERE id = t1.jobId ) ) AS jobId, t2.round,
            (select (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END ) from tblFeedback where roundId=t2.id
        and resumeId=t1.id and createdBy=t2.interviewerId) AS recommendation ,
        (CASE WHEN accept IS NOT NULL THEN 'Hire' WHEN reject IS NOT NULL THEN 'Reject'  ELSE 'Pending' END )AS finalStatus")
            ->join('tblRound as t2', 't1.id=t2.resumeId ')
            ->where('t1.deleted', '1')
            ->where('t2.deleted', '1')
            ->where('t2.interviewTaken', '1')
            ->where('t2.interviewerId', $this->session->userdata('userId'))
            ->get('tblResumes as t1');

        $records = $select->result();
        $totalRecords = $select->num_rows();

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        ## Total number of record with filtering
        $select1 = $this->db->select("t1.*, CONCAT( DATE_FORMAT( interviewDate, '%d %M  %Y' ), ' / ', interviewTime) AS createdDate, ( SELECT title FROM tblProfile WHERE deleted = '1' AND
            id = ( SELECT profile FROM tblJob WHERE id = t1.jobId ) ) AS jobId, t2.round,
            (select (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END ) from tblFeedback where roundId=t2.id
        and resumeId=t1.id and createdBy=t2.interviewerId) AS recommendation ,
        (CASE WHEN accept IS NOT NULL THEN 'Hire' WHEN reject IS NOT NULL THEN 'Reject'  ELSE 'Pending' END )AS finalStatus")
            ->join('tblRound as t2', 't1.id=t2.resumeId ')
            ->where('t1.deleted', '1')
            ->where('t2.deleted', '1')
            ->where('t2.interviewTaken', '1')
            ->where('t2.interviewerId', $this->session->userdata('userId'))
            ->get('tblResumes as t1');

        if ($searchQuery != '')
            $this->db->where($searchQuery);

        $records = $select1->result();
        $totalRecordwithFilter = $select1->num_rows();

        ## Fetch records
        $this->db->select("t1.*, CONCAT( DATE_FORMAT( interviewDate, '%d %M  %Y' ) ) AS createdDate, ( SELECT title FROM tblProfile WHERE deleted = '1' AND
            id = ( SELECT profile FROM tblJob WHERE id = t1.jobId ) ) AS jobId, t2.round, t2.id as roundId,
            (select (CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2'
        THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4'
        THEN 'Strongly Hire'  END ) from tblFeedback where roundId=t2.id
        and resumeId=t1.id and createdBy=t2.interviewerId) AS recommendation ,
        (CASE WHEN accept IS NOT NULL THEN 'Hire' WHEN reject IS NOT NULL THEN 'Reject'  ELSE 'Pending' END )AS finalStatus")
            ->join('tblRound as t2', 't1.id=t2.resumeId ')
            ->where('t1.deleted', '1')
            ->where('t2.deleted', '1')
            ->where('t2.interviewTaken', '1')
            ->where('t2.interviewerId', $this->session->userdata('userId'));

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

            $startInterView = '<a href="' . base_url() . 'Interview/viewResumeDetails/' . $record->id . '/' . $record->roundId . '" ><button type="button">View</button></a>';

            $data[] = array(
                'id' => $no,
                'jobId' => $record->jobId,
                'name' => $record->name,
                'mobile' => $record->round,
                'lastCompany' => $record->lastCompany,
                'totalExperince' => $record->totalExperince,
                'myStatus' => $record->recommendation,
                'finalStatus' => $record->finalStatus,
                'interviewDate' => $record->createdDate,
                'status' => $startInterView,

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

    public function Round1($resumeId)
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

    public function Round2($resumeId)
    {
        $sql = "SELECT t2.*, ( SELECT name FROM tblUser WHERE id = t1.interviewerId ) AS interviewerName,
            ( SELECT title FROM tblDesignation WHERE deleted = '1' AND id = ( SELECT  designatin FROM tblUser WHERE id = t1.interviewerId ) )AS designation,
            ( CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2' THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4' THEN 'Strongly Hire'  END )AS recommendation
            FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE t2.resumeId = '$resumeId' AND round = '2' AND interviewTaken = '1'";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function Round3($resumeId)
    {
        $sql = "SELECT t2.*, ( SELECT name FROM tblUser WHERE id = t1.interviewerId ) AS interviewerName,
            ( SELECT title FROM tblDesignation WHERE deleted = '1' AND id = ( SELECT  designatin FROM tblUser WHERE id = t1.interviewerId ) )AS designation,
            ( CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2' THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4' THEN 'Strongly Hire'  END )AS recommendation
            FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE t2.resumeId = '$resumeId' AND round = '3' AND interviewTaken = '1'";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function Round4($resumeId)
    {
        $sql = "SELECT t2.*, ( SELECT name FROM tblUser WHERE id = t1.interviewerId ) AS interviewerName,
            ( SELECT title FROM tblDesignation WHERE deleted = '1' AND id = ( SELECT  designatin FROM tblUser WHERE id = t1.interviewerId ) )AS designation,
            ( CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2' THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4' THEN 'Strongly Hire'  END )AS recommendation
            FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE t2.resumeId = '$resumeId' AND round = '4' AND interviewTaken = '1'";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
        return $result;
    }

    public function Round5($resumeId)
    {
        $sql = "SELECT t2.*, ( SELECT name FROM tblUser WHERE id = t1.interviewerId ) AS interviewerName,
            ( SELECT title FROM tblDesignation WHERE deleted = '1' AND id = ( SELECT  designatin FROM tblUser WHERE id = t1.interviewerId ) )AS designation,
            ( CASE WHEN recommendation = '1' THEN 'Hire' WHEN recommendation = '2' THEN 'Reject'  WHEN recommendation = '3' THEN 'On Hold'  WHEN recommendation = '4' THEN 'Strongly Hire'  END )AS recommendation
            FROM tblRound AS t1 LEFT JOIN tblFeedback AS t2 ON t1.id = t2.roundId WHERE t2.resumeId = '$resumeId' AND round = '5' AND interviewTaken = '1'";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        // echo $this->db->last_query();
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
}
