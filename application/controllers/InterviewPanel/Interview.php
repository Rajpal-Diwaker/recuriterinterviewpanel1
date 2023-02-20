<?php
defined('BASEPATH') or exit('No direct script access allowed');

ini_set('max_execution_time', 0);

ini_set('memory_limit', '2048M');

class Interview extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('InterviewPanel/InterviewModel', 'Interview');

        $this->load->model('Common_model', 'commonModel');

        $this->success = array('error_code' => '200');
        $this->failed = array('error_code' => '0');
    }

    public function index()
    {
        if (!empty($this->session->userdata('userId'))) {
            redirect('Interview/interviewMenu');
        } else {
            $this->load->view('InterviewPanel/login');
        }
    }


    public function login()
    {
        $postData['email'] = $this->security->xss_clean($_POST['email']);
        $checkUser = $this->commonModel->getSingle(
            'tblUser',
            ['email' => $postData['email'], 'role' => '1']
        );

        if (!empty($checkUser)) {

            $checkUser2 = $this->commonModel->getSingle(
                'tblUser',
                ['email' => $postData['email'], 'deleted' => '1', 'role' => '1']
            );
            if (!empty($checkUser2)) {
                $this->Interview->saveOtp($postData['email']);
                $userdata = ['email' => $postData['email']];
                $this->session->set_userdata($userdata);
                Redirect('Interview/otp');
            } else {
                $this->session->set_flashdata('error_msg', 'Your account is deactivated by admin');
                Redirect('Interview');
            }
        } else {
            $this->session->set_flashdata('error_msg', 'Invalid Email Id');
            Redirect('Interview');
        }
    }

    public function OtpView()
    {
        $this->load->view('InterviewPanel/otp');
    }

    public function CheckOTP()
    {

        if (!empty($_POST)) {
            $postdata['otp'] = sprintf("%d%d%d%d", $_POST['one'], $_POST['two'], $_POST['three'], $_POST['four']);
            $postdata['email'] = $_POST['email'];
        }

        $checkOtp = $this->Interview->CheckOTP($postdata);
        if ($checkOtp == 1) {
            Redirect('Interview/dashboard');
        } else {
            $this->session->set_flashdata('error_msg', 'Invalid OTP');
            Redirect('Interview/otp');
        }
    }

    public function reSendOTP()
    {
        $this->Interview->saveOtp($_POST['email']);
        $this->success['error_string'] = 'OTP Re-send successfully';
        $responce = $this->success;
        echo json_encode($responce);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Interview', 'refresh');
    }

    public function interviewMenu()
    {
        if (!empty($this->session->userdata('userId'))) {
            $this->load->view('InterviewPanel/header');
            $this->load->view('InterviewPanel/interview');
        } else {
            redirect('Interview', 'refresh');
        }
    }

    function getInterviewMenu()
    {
        if (!empty($this->session->userdata('userId'))) {
            $postData = $this->input->post();
            $data = $this->Interview->getInterviewMenu($postData);
            echo json_encode($data);
        } else {
            redirect('Interview');
        }
    }

    function submitInterview()
    {
        if (!empty($this->session->userdata('userId'))) {
            $postData = $this->input->post();
            $this->Interview->submitInterview($postData);
            $this->success['error_string'] = 'Interview Submit Successfully';
            $responce = $this->success;
            echo json_encode($responce);
        } else {
            redirect('Interview');
        }
    }


    function submitInterview2()
    {
        if (!empty($this->session->userdata('userId'))) {
            $postData = $this->input->post();
            $this->Interview->submitInterview2($postData);
            $this->success['error_string'] = 'Interview Edit Successfully';
            $responce = $this->success;
            echo json_encode($responce);
        } else {
            redirect('Interview');
        }
    }
    public function oldInterviewMenu()
    {
        if (!empty($this->session->userdata('userId'))) {
            $this->load->view('InterviewPanel/header');
            $this->load->view('InterviewPanel/oldInterview');
        } else {
            redirect('Interview');
        }
    }

    function getOldInterviewMenu()
    {
        if (!empty($this->session->userdata('userId'))) {
            $postData = $this->input->post();
            $data = $this->Interview->getOldInterviewMenu($postData);
            echo json_encode($data);
        } else {
            redirect('Interview');
        }
    }

    function viewResumeDetails()
    {
        if (!empty($this->session->userdata('userId'))) {

            $resumeId = $this->uri->segment(3);
            $data['resumeData'] = $this->Interview->resumeData($resumeId);
            $data['resumeQuestion'] = $this->Interview->resumeQuestion($resumeId);
            $data['Round1'] = $this->Interview->Round1($resumeId);
            $data['Round2'] = $this->Interview->Round2($resumeId);
            $data['Round3'] = $this->Interview->Round3($resumeId);
            $data['Round4'] = $this->Interview->Round4($resumeId);
            $data['Round5'] = $this->Interview->Round5($resumeId);

            // echo '<pre>';
            // print_r($data);
            // die;

            $this->load->view('InterviewPanel/header');
            $this->load->view('InterviewPanel/interviewerdetail', $data);
        } else {
            redirect('Interview');
        }
    }

    function viewResumeDetails2()
    {

        if (!empty($this->session->userdata('userId'))) {
            $data['roundId'] = $this->uri->segment(3);
            $data['resumeId'] = $this->uri->segment(4);

            $data['resumeData'] = $this->Interview->resumeData($data['resumeId']);
            $data['resumeQuestion'] = $this->Interview->resumeQuestion($data['resumeId']);
            $data['Round1'] = $this->Interview->Round1($data['resumeId']);
            $data['Round2'] = $this->Interview->Round2($data['resumeId']);
            $data['Round3'] = $this->Interview->Round3($data['resumeId']);
            $data['Round4'] = $this->Interview->Round4($data['resumeId']);
            $data['Round5'] = $this->Interview->Round5($data['resumeId']);
            // $data['Round5'] = $this->Interview->Round5($resumeId);

            $this->load->view('InterviewPanel/header');
            $this->load->view('InterviewPanel/interviewerdetail2', $data);
        } else {
            redirect('Interview');
        }
    }

    public function dashboard()
    {
        if (!empty($this->session->userdata('userId'))) {

            $totalInterview = array();
            $totalPendingInterview = array();
            $totalHireInterview = array();
            $totalRejectedInterview = array();
            $totalStronglyInterview = array();
            $totalHoldInterview = array();

            $data['totalInterview'] = $this->Interview->getTotalInterview();
            $data['totalInterviewT'] = $this->Interview->getTotalInterviewT();

            for ($i = 0; $i < count($data['totalInterview']); $i++) {
                $totalInterview[$i]['indexLabel'] =  $data['totalInterview'][$i]['createdDate'];
                $totalInterview[$i]['y'] =  $data['totalInterview'][$i]['totalInterview'];
            }

            $data['totalPendingInterview'] = $this->Interview->getTotalPendingInterview();
            $data['totalPendingInterviewT'] = $this->Interview->getTotalPendingInterviewT();

            for ($i = 0; $i < count($data['totalPendingInterview']); $i++) {
                $totalPendingInterview[$i]['x'] =  $data['totalPendingInterview'][$i]['total'];
                $totalPendingInterview[$i]['y'] =  $data['totalPendingInterview'][$i]['interviewDate'];
            }

            $data['totalHireInterview'] = $this->Interview->getTotalHireInterview();
            $data['totalHireInterviewT'] = $this->Interview->getTotalHireInterviewT();

            for ($i = 0; $i < count($data['totalHireInterview']); $i++) {
                $totalHireInterview[$i]['x'] =  $data['totalHireInterview'][$i]['total'];
                $totalHireInterview[$i]['y'] =  $data['totalHireInterview'][$i]['createdDate'];
            }

            $data['totalRejectedInterview'] = $this->Interview->getTotalRejectedInterview();
            $data['totalRejectedInterviewT'] = $this->Interview->getTotalRejectedInterviewT();

            for ($i = 0; $i < count($data['totalRejectedInterview']); $i++) {
                $totalRejectedInterview[$i]['indexLabel'] =  $data['totalRejectedInterview'][$i]['createdDate'];
                $totalRejectedInterview[$i]['y'] =  $data['totalRejectedInterview'][$i]['total'];
            }

            $data['totalStronglyInterview'] = $this->Interview->getTotalStronglyHireInterview();
            $data['totalStronglyInterviewT'] = $this->Interview->getTotalStronglyHireInterviewT();

            for ($i = 0; $i < count($data['totalStronglyInterview']); $i++) {
                $totalStronglyInterview[$i]['indexLabel'] =  $data['totalStronglyInterview'][$i]['createdDate'];
                $totalStronglyInterview[$i]['y'] =  $data['totalStronglyInterview'][$i]['total'];
            }

            $data['totalHoldInterview'] = $this->Interview->getTotalHoldInterview();
            $data['totalHoldInterviewT'] = $this->Interview->getTotalHoldInterviewT();

            for ($i = 0; $i < count($data['totalHoldInterview']); $i++) {
                $totalHoldInterview[$i]['indexLabel'] =  $data['totalHoldInterview'][$i]['createdDate'];
                $totalHoldInterview[$i]['y'] =  $data['totalHoldInterview'][$i]['total'];
            }

            $data['dataPoints'] = $totalInterview;
            $data['dataPoints2'] = $totalPendingInterview;
            $data['dataPoints3'] = $totalHireInterview;
            $data['dataPoints4'] = $totalRejectedInterview;
            $data['dataPoints5'] = $totalStronglyInterview;
            $data['dataPoints6'] = $totalHoldInterview;

            // echo '<pre>';
            // print_r($data['dataPoints4']);
            // die;


            $this->load->view('InterviewPanel/header');
            $this->load->view('InterviewPanel/dashboard', $data);
        } else {
            redirect('Interview');
        }
    }

    public function getfeedback()
    {
        if (!empty($this->session->userdata('userId'))) {
            $data = $this->Interview->getfeedback($_POST['feedbackId']);
            echo json_encode($data);
        } else {
            redirect('Interview');
        }
    }


    public function checkUserAccount()
    {
        $checkUser = $this->commonModel->getSingle(
            'tblUser',
            ['id' => $this->session->userdata('userId'), 'deleted' => '1']
        );
        if (!empty($checkUser)) {
            $data =  $this->success = array('error_code' => '200');
            echo json_encode($data);
        } else {
            $data =  $this->failed = array('error_code' => '0');;
            echo json_encode($data);
        }
    }
}
