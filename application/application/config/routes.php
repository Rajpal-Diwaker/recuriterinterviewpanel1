<?php

defined('BASEPATH') OR exit('No direct script access allowed');



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

| URI contains no data. In the above example, the "welcome" class

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

$route['default_controller'] = 'welcome';



/* Mobile app development */

$route['mobile-app-development-company.php'] = 'welcome/mobile_app_development';



/* Android app development */

$route['android-application-development.php'] = 'welcome/android_application_development';

/*$route['android-games-development.php'] = 'welcome/android_application_development';

$route['android-tablet.php'] = 'welcome/android_application_development';

$route['android-ui-ux-design.php'] = 'welcome/android_application_development';
*/


/* ios app development */

$route['iphone-application-development.php'] = 'welcome/ios_application_development';

/*$route['iphone-games-development.php'] = 'welcome/ios_application_development';

$route['iphone-ui-ux-design.php'] = 'welcome/ios_application_development';

$route['ipad-games-development.php'] = 'welcome/ios_application_development';

$route['ipad-application-development.php'] = 'welcome/ios_application_development';
*/


/* Testing */

$route['qa-process-design.php'] = 'welcome/quality_assurance';

/*$route['test-case-development.php'] = 'welcome/quality_assurance';

$route['performance-load-testing.php'] = 'welcome/quality_assurance';

$route['manual-automated-testing.php'] = 'welcome/quality_assurance';*/



/* PHP */

$route['php-development.php'] = 'welcome/nodejs_development';

/*$route['angular-js-development.php'] = 'welcome/nodejs_development';

$route['node-js-development.php'] = 'welcome/nodejs_development';

$route['firebase-development.php'] = 'welcome/nodejs_development';  */



/* Portfolio */

$route['portfolio.php'] = 'welcome/portfolio';

$route['portfolio1'] = 'welcome/portfolio1';




/* About */

$route['about'] = 'welcome/about';



/* Contact Us */

$route['contact-us.php'] = 'contact';



/*Ionic */

$route['ionic-development'] = 'welcome/ionic_development';


/* UI/UX Development*/

$route['ui-ux-development'] = 'welcome/ui_ux_development';



/*React Development*/

$route['react-native-development'] = 'welcome/react_development';



/* Wearables */

$route['wearables'] = 'welcome/wearables';



/* blockchain */

$route['blockchain'] = 'welcome/blockchain';



/* vr_development */

$route['vr-development'] = 'welcome/vr_development';



/* augmented_reality */

$route['augmented-reality'] = 'welcome/augmented_reality';



/* internet_of_things */

$route['internet-of-things'] = 'welcome/internet_of_things';



/* artificial_intelliegence */

$route['artificial-intelliegence'] = 'welcome/artificial_intelliegence';



/* chatbots */

$route['chatbots'] = 'welcome/chatbots';



/* chatbots */

$route['sitemap.php'] = 'welcome/sitemap';



/* chatbots */

$route['policies'] = 'welcome/privacy_policy';



/* country pages */



$route['mobile-app-development-company-canada.php'] = 'welcome/canada';

$route['mobile-app-development-company-bahrain.php'] = 'welcome/bahrain';

$route['mobile-app-development-company-australia.php'] = 'welcome/australia';

$route['mobile-app-development-company-germany.php'] = 'welcome/germany';

$route['mobile-app-development-company-dubai.php'] = 'welcome/dubai';

$route['mobile-app-development-company-kuwait.php'] = 'welcome/kuwait';

$route['mobile-app-development-company-qatar.php'] = 'welcome/qatar';

$route['mobile-app-development-company-united-states.php'] = 'welcome/us';

$route['mobile-app-development-company-uae.php'] = 'welcome/uae';

$route['mobile-app-development-company-ireland.php'] = 'welcome/ireland';

$route['mobile-app-development-company-uk.php'] = 'welcome/uk';

$route['mobile-app-development-company-mauritius'] = 'welcome/mauritius';

$route['thankyou'] = 'welcome/thankyou';

$route['techtalks'] = 'welcome/techtalks';

$route['404_override'] = 'my404';

$route['translate_uri_dashes'] = FALSE;

$route['techtalks/(:any)'] = 'welcome/techtalks_detail';

$route['techtalks/(:any)'] = 'welcome/techtalks_detail';

$route['external/(:any)'] = 'welcome/external';

/*********admin routing start ************/

$route['Interview'] = "InterviewPanel/Interview";
$route['Interview/login'] = "InterviewPanel/Interview/login";
$route['Interview/otp'] = "InterviewPanel/Interview/OtpView";
$route['Interview/submitOTP'] = "InterviewPanel/Interview/CheckOTP";
$route['Interview/reSendOTP'] = "InterviewPanel/Interview/reSendOTP";
$route['Interview/interviewMenu'] = "InterviewPanel/Interview/interviewMenu";
$route['Interview/getInterviewMenu'] = "InterviewPanel/Interview/getInterviewMenu";
$route['Interview/submitInterview'] = "InterviewPanel/Interview/submitInterview";
$route['Interview/oldInterviewMenu'] = "InterviewPanel/Interview/oldInterviewMenu";
$route['Interview/getOldInterviewMenu'] = "InterviewPanel/Interview/getOldInterviewMenu";
$route['Interview/viewResumeDetails/:num/:num'] = "InterviewPanel/Interview/viewResumeDetails";
$route['Interview/viewResumeDetails2/:num/:num'] = "InterviewPanel/Interview/viewResumeDetails2";
$route['Interview/dashboard'] = "InterviewPanel/Interview/dashboard";
$route['Interview/logout'] = "InterviewPanel/Interview/logout";
$route['Interview/checkUserAccount'] = "InterviewPanel/Interview/checkUserAccount";


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



