<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the 'welcome' class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// /*********admin routing start ************/

$route['Interview'] = "InterviewPanel/Interview";
$route['Interview/login'] = "InterviewPanel/Interview/login";
$route['Interview/otp'] = "InterviewPanel/Interview/OtpView";
$route['Interview/submitOTP'] = "InterviewPanel/Interview/CheckOTP";
$route['Interview/reSendOTP'] = "InterviewPanel/Interview/reSendOTP";
$route['Interview/interviewMenu'] = "InterviewPanel/Interview/interviewMenu";
$route['Interview/getInterviewMenu'] = "InterviewPanel/Interview/getInterviewMenu";
$route['Interview/submitInterview'] = "InterviewPanel/Interview/submitInterview";
$route['Interview/submitInterview2'] = "InterviewPanel/Interview/submitInterview2";
$route['Interview/oldInterviewMenu'] = "InterviewPanel/Interview/oldInterviewMenu";
$route['Interview/getOldInterviewMenu'] = "InterviewPanel/Interview/getOldInterviewMenu";
$route['Interview/viewResumeDetails/:num/:num'] = "InterviewPanel/Interview/viewResumeDetails";
$route['Interview/viewResumeDetails2/:num/:num'] = "InterviewPanel/Interview/viewResumeDetails2";
$route['Interview/dashboard'] = "InterviewPanel/Interview/dashboard";
$route['Interview/logout'] = "InterviewPanel/Interview/logout";
$route['Interview/checkUserAccount'] = "InterviewPanel/Interview/checkUserAccount";
$route['Interview/getfeedback'] = "InterviewPanel/Interview/getfeedback";

$route['Recruiter'] = "RecuriterPanel/Recruiter";
$route['Recruiter/login'] = "RecuriterPanel/Recruiter/login";
$route['Recruiter/otp'] = "RecuriterPanel/Recruiter/OtpView";
$route['Recruiter/submitOTP'] = "RecuriterPanel/Recruiter/CheckOTP";
$route['Recruiter/reSendOTP'] = "RecuriterPanel/Recruiter/reSendOTP";
$route['Recruiter/dashboard'] = "RecuriterPanel/Recruiter/dashboard";
$route['Recruiter/interviewr/:num'] = "RecuriterPanel/Recruiter/interviewrView";
$route['Recruiter/hire'] = "RecuriterPanel/Recruiter/hireView";
$route['Recruiter/addPosition'] = "RecuriterPanel/Recruiter/addPositionView";
$route['Recruiter/viewResume/:num/:num'] = "RecuriterPanel/Recruiter/viewResume";
$route['Recruiter/interviewr2'] = "RecuriterPanel/Recruiter/interviewrView2";
$route['Recruiter/scheduleInterview'] = "RecuriterPanel/Recruiter/scheduleInterview";
$route['Recruiter/saveJob'] = "RecuriterPanel/Recruiter/saveJob";
$route['Recruiter/getjobOpeningList'] = "RecuriterPanel/Recruiter/getjobOpeningList";
$route['Recruiter/disableJob'] = "RecuriterPanel/Recruiter/disableJob";
$route['Recruiter/getjobInterviewerList'] = "RecuriterPanel/Recruiter/getjobInterviewerList";
$route['Recruiter/getInterviewrList'] = "RecuriterPanel/Recruiter/getInterviewrList";
$route['Recruiter/saveInterViewer'] = "RecuriterPanel/Recruiter/saveInterViewer";
$route['Recruiter/saveInterViewer2'] = "RecuriterPanel/Recruiter/saveInterViewer2";
$route['Recruiter/deleteInterviewr'] = "RecuriterPanel/Recruiter/deleteInterviewr";
$route['Recruiter/disableUser'] = "RecuriterPanel/Recruiter/disableUser";
$route['Recruiter/getscheduleInterview'] = "RecuriterPanel/Recruiter/getscheduleInterview";
$route['Recruiter/deleteRound'] = "RecuriterPanel/Recruiter/deleteRound";
$route['Recruiter/logout'] = "RecuriterPanel/Recruiter/logout";
$route['Recruiter/getRoundDetails'] = "RecuriterPanel/Recruiter/getRoundDetails";
$route['Recruiter/editRound'] = "RecuriterPanel/Recruiter/editRound";
$route['Recruiter/getResumeDetails'] = "RecuriterPanel/Recruiter/getResumeDetails";
$route['Recruiter/scheduleInterviewDetails'] = "RecuriterPanel/Recruiter/scheduleInterviewDetails";
$route['Recruiter/rejectCandidate'] = "RecuriterPanel/Recruiter/rejectCandidate";
$route['Recruiter/giveOffer'] = "RecuriterPanel/Recruiter/giveOffer";
$route['Recruiter/giveFinalOffer'] = "RecuriterPanel/Recruiter/giveFinalOffer";
$route['Recruiter/getRejetedView'] = "RecuriterPanel/Recruiter/getRejetedView";
$route['Recruiter/getRejetedList'] = "RecuriterPanel/Recruiter/getRejetedList";
$route['Recruiter/getHiredView'] = "RecuriterPanel/Recruiter/getHiredView";
$route['Recruiter/getHiredList'] = "RecuriterPanel/Recruiter/getHiredList";
$route['Recruiter/viewIntervierDetailsList/:num'] = "RecuriterPanel/Recruiter/viewIntervierDetailsList";
$route['Recruiter/viewInterViewerData'] = "RecuriterPanel/Recruiter/viewInterViewerData";
$route['Recruiter/viewIntervierDetailsAjaxList'] = "RecuriterPanel/Recruiter/viewIntervierDetailsAjaxList";
$route['Recruiter/checkEmail'] = "RecuriterPanel/Recruiter/checkEmail";



// /*********admin routing End ************/

// SET FOREIGN_KEY_CHECKS=0;
// TRUNCATE TABLE `tblProfile`;
// TRUNCATE TABLE `tblDepartment`
// TRUNCATE TABLE `tblDesignation`
// SET FOREIGN_KEY_CHECKS=1;
// INSERT INTO `tblProfile` (title) SELECT a FROM `profiles`
// INSERT INTO `tblDepartment` (title) SELECT a FROM `depart`
// INSERT INTO `tblDesignation` (title) SELECT a FROM `desig`