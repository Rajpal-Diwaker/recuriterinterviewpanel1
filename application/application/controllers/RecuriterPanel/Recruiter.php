<?php
defined('BASEPATH') or exit('No direct script access allowed');

ini_set('max_execution_time', 0);
ini_set('memory_limit', '2048M');

class Recruiter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('RecuriterPanel/RecuriterModel', 'Recuriter');
        $this->load->model('Common_model', 'commonModel');
        $this->success = array('error_code' => '200');
        $this->failed = array('error_code' => '0');
    }

    public function index()
    {
        if (!empty($this->session->userdata('adminId'))) {
            redirect('Recruiter/dashboard');
        } else {
            $this->load->view('RecuriterPanel/login');
        }
    }

    public function login()
    {
        $postData['email'] = $this->security->xss_clean($_POST['email']);
        if (!empty($postData)) {

            $checkUser2 = $this->commonModel->getSingle(
                'tblUser',
                ['email' => $postData['email'], 'deleted' => '1', 'role' => '0']
            );

            if (!empty($checkUser2)) {
                $this->Recuriter->saveOtp($postData['email']);
                $userdata = ['adminEmail' => $postData['email']];
                $this->session->set_userdata($userdata);
                Redirect('Recruiter/otp');
            } else {
                $this->session->set_flashdata('error_msg', 'Invalid Email Id');
                Redirect('Recruiter');
            }
        } else {

            $this->session->set_flashdata('error_msg', 'Invalid Email Id');
            Redirect('Recruiter');
        }
    }
    public function OtpView()
    {
        $this->load->view('RecuriterPanel/otp');
    }

    public function CheckOTP()
    {
        if (!empty($_POST)) {
            $postdata['otp'] = sprintf("%d%d%d%d", $_POST['one'], $_POST['two'], $_POST['three'], $_POST['four']);
            $postdata['email'] = $_POST['email'];
        }

        $checkOtp = $this->Recuriter->CheckOTP($postdata);
        if ($checkOtp == 1) {
            Redirect('Recruiter/dashboard');
        } else {
            $this->session->set_flashdata('error_msg', 'Invalid OTP');
            Redirect('Recruiter/otp');
        }
    }

    public function reSendOTP()
    {
        $this->Recuriter->saveOtp($_POST['email']);
        $this->success['error_string'] = 'OTP Re-send successfully';
        $responce = $this->success;
        echo json_encode($responce);
    }

    public function dashboard()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/dashboard');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Recruiter', 'refresh');
    }

    public function interviewrView()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $data['result'] = $this->Recuriter->getInterviewerList();
            $data['result2'] = $this->Recuriter->getRejectList();
            $data['jobData'] = $this->Recuriter->getJobDetails($this->uri->segment(3));

            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/interviewr', $data);
        }
    }

    public function getjobInterviewerList()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->getjobInterviewerList($postData);
            echo json_encode($data);
        }
    }

    public function hireView()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/hire');
        }
    }

    public function getjobOpeningList()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->getjobOpeningList($postData);
            echo json_encode($data);
        }
    }

    public function disableJob()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->disableJob($postData['id']);
            echo json_encode($data);
        }
    }

    public function disableUser()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->disableUser($postData['id']);
            echo json_encode($data);
        }
    }

    public function deleteRound()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->deleteRound($postData['id']);
            echo json_encode($data);
        }
    }

    public function addPositionView()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $data['result'] = $this->Recuriter->getProfile();
            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/addPosition', $data);
        }
    }

    public function saveJob()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $this->Recuriter->saveJob($this->input->post());
            $this->success['error_string'] = 'Profile Added Successfully';
            $responce = $this->success;
            echo json_encode($responce);
        }
    }


    public function viewResume()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $data['resumeId'] = $this->uri->segment(4);
            $data['resumeData'] = $this->Recuriter->resumeData($data['resumeId']);
            $data['resumeQuestion'] = $this->Recuriter->resumeQuestion($data['resumeId']);
            $data['Round1'] = $this->Recuriter->roundDetails1($data['resumeId']);
            $data['Round2'] = $this->Recuriter->roundDetails2($data['resumeId']);
            $data['Round3'] = $this->Recuriter->roundDetails3($data['resumeId']);
            $data['Round4'] = $this->Recuriter->roundDetails4($data['resumeId']);
            $data['Round5'] = $this->Recuriter->roundDetails5($data['resumeId']);

            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/viewResume', $data);
        }
    }

    public function interviewrView2()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $data['result'] = $this->Recuriter->getDesignation();
            $data['result2'] = $this->Recuriter->getDepartment();
            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/interviewr2', $data);
        }
    }


    public function scheduleInterview()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $data['result'] = $this->Recuriter->getInterviewerList();
            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/scheduleInterview', $data);
        }
    }

    function getInterviewrList()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->getInterviewrList($postData);
            echo json_encode($data);
        }
    }

    function getscheduleInterview()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->getscheduleInterview($postData);
            echo json_encode($data);
        }
    }

    function saveInterViewer()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $this->Recuriter->saveInterViewer($postData);
            $this->success['error_string'] = 'Interviwer Added Successfully';
            $responce = $this->success;
            echo json_encode($responce);
        }
    }

    function saveInterViewer2()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $this->Recuriter->saveInterViewer2($postData);
            $this->success['error_string'] = 'Interviewer has been updated successfully';
            $responce = $this->success;
            echo json_encode($responce);
        }
    }

    function deleteInterviewr()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $this->Recuriter->deleteInterviewr($postData);
            echo json_encode($postData);
        }
    }

    function getRecuriterMenu()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->getRecuriterMenu($postData);
            echo json_encode($data);
        }
    }


    function submitRecuriter()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $this->Recuriter->submitRecuriter($postData);

            $this->success['error_string'] = 'Recuriter Submit Successfully';
            $responce = $this->success;
            echo json_encode($responce);
        }
    }

    public function getRoundDetails()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $data = $this->Recuriter->getRoundDetails($_POST);
            echo json_encode($data);
        }
    }

    function editRound()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->editRound($postData);
            echo json_encode($data);
        }
    }

    function viewResumeDetails()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $resumeId = $this->uri->segment(3);
            $data['resumeData'] = $this->Recuriter->resumeData($resumeId);
            $data['resumeQuestion'] = $this->Recuriter->resumeQuestion($resumeId);
            $data['Round1'] = $this->Recuriter->Round1($resumeId);
            $data['Round2'] = $this->Recuriter->Round2($resumeId);
            $data['Round3'] = $this->Recuriter->Round3($resumeId);
            $data['Round4'] = $this->Recuriter->Round4($resumeId);

            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/Recuritererdetail', $data);
        }
    }

    function viewResumeDetails2()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $data['roundId'] = $this->uri->segment(3);
            $data['resumeId'] = $this->uri->segment(4);

            $data['resumeData'] = $this->Recuriter->resumeData($data['resumeId']);
            $data['resumeQuestion'] = $this->Recuriter->resumeQuestion($data['resumeId']);

            $data['Round1'] = $this->Recuriter->Round1($data['resumeId']);
            $data['Round2'] = $this->Recuriter->Round2($data['resumeId']);
            $data['Round3'] = $this->Recuriter->Round3($data['resumeId']);
            $data['Round4'] = $this->Recuriter->Round4($data['resumeId']);

            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/Recuritererdetail2', $data);
        }
    }

    function getResumeDetails()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->getResumeDetails($postData);
            echo json_encode($data);
        }
    }



    function scheduleInterviewDetails()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->scheduleInterviewDetails($postData);
            echo json_encode($data);
        }
    }

    function rejectCandidate()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $this->Recuriter->rejectCandidate($postData);
            echo json_encode($postData);
        }
    }


    function giveOffer()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $this->Recuriter->giveOffer($postData);
            echo json_encode($postData);
        }
    }

    function giveFinalOffer()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $this->Recuriter->giveFinalOffer($postData);
            echo json_encode($postData);
        }
    }

    function getRejetedView()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/rejectedList');
        }
    }

    function getRejetedList()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->getRejetedList($postData);
            echo json_encode($data);
        }
    }

    function getHiredView()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/hireList');
        }
    }

    function getHiredList()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->getHiredList($postData);
            echo json_encode($data);
        }
    }

    function viewIntervierDetailsList()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $data['userId'] = $this->uri->segment(3);
            $this->load->view('RecuriterPanel/header');
            $this->load->view('RecuriterPanel/interviewrDetails', $data);
        }
    }

    function viewIntervierDetailsAjaxList()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->viewIntervierDetailsAjaxList($postData);
            echo json_encode($data);
        }
    }

    function viewInterViewerData()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData = $this->input->post();
            $data = $this->Recuriter->viewInterViewerData($postData);
            echo json_encode($data);
        }
    }



    public function checkEmail()
    {
        if (empty($this->session->userdata('adminId'))) {
            redirect('Recruiter');
        } else {
            $postData['email'] = $this->security->xss_clean($_POST['email']);
            $checkUser = $this->commonModel->getSingle(
                'tblUser',
                ['email' => $postData['email']]
            );

            if (empty($checkUser)) {
                $this->success['error_string'] = 'success';
                $responce = $this->success;
            } else {

                $this->failed['error_string'] = 'This email already exist';
                $responce = $this->failed;
            }
            echo json_encode($responce);
        }
    }
}
