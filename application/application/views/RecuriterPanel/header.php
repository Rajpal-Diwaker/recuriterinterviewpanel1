<?php $currntrl = $this->uri->segment(2);
?>
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Techugo Recruiter Panel</title>
    <meta name='viewport' content='width=device-width,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0,user-scalable=no' />
    <link href="<?php echo base_url(); ?>panel_assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>panel_assets/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>panel_assets/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>panel_assets/css/jquery.dataTables.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>panel_assets/css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>panel_assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>panel_assets/css/media.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>panel_assets/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>panel_assets/css/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="<?php echo base_url(); ?>panel_assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>panel_assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>panel_assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>panel_assets/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url(); ?>panel_assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>panel_assets/js/script.js"></script>
    <script src="<?php echo base_url(); ?>panel_assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>panel_assets/js/bootstrap-clockpicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script> -->

</head>

<body>
    <div id='wrapper'>
        <nav class='navbar navbar-fixed-top' role='navigation'>
            <div class='navbar-header'>
                <div class='navicon'></div>
                <a class='navbar-brand' href='javascript:void(0);'>logo</a>
            </div>
            <div class='navicon-right'>
                <ul class='nav navbar-right'>
                    <li><a href='#'><i class='fa fa-bell'></i></a></li>
                    <li><a href='#'><img src='<?php echo base_url(); ?>panel_assets/images/admin.png' width='40' height='40' alt='' /></a></li>
                </ul>
            </div>
        </nav>

        <div id='page-wrapper' class='clearfix'>
            <div class='side-nav'>
                <div class='menuBox'>
                    <ul class='nav navbar-nav'>
                        <li class="<?php if ($currntrl == 'dashboard') echo 'active';
                                    else echo ''; ?>">
                            <a href='<?php echo base_url(); ?>Recruiter/dashboard'>
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/dashboard.png' width='20' height='20' class='img1' alt='' />
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/dashboardnew.png' width='20' height='20' class='img2' alt='' />
                                Dashboard
                            </a>
                        </li>

                        <li class="<?php if ($currntrl == 'hire'  || $currntrl == 'interviewr' || $currntrl == 'viewResume') echo 'active';
                                    else echo ''; ?>">
                            <a href='<?php echo base_url();
                                        ?>Recruiter/hire'>
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/hire.png' width='29' height='20' class='img1' alt='' />
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/hirenew.png' width='29' height='20' class='img2' alt='' />
                                Hire
                            </a>
                        </li>

                        <li class="<?php if ($currntrl == 'interviewr2' || $currntrl == "viewIntervierDetailsList") echo 'active';
                                    else echo ''; ?>">
                            <a href='<?php echo base_url();
                                        ?>Recruiter/interviewr2'>
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/interview.png' width='20' height='20' class='img1' alt='' />
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/interviewnew.png' width='20' height='20' class='img2' alt='' />
                                Interviewer
                            </a>
                        </li>

                        <li class="<?php if ($currntrl == 'scheduleInterview') echo 'active';
                                    else echo ''; ?>">
                            <a href='<?php echo base_url();
                                        ?>Recruiter/scheduleInterview'>
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/schedule-interview.png' width='20' height='20' class='img1' alt='' />
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/schedule-interviewnew.png' width='20' height='20' class='img2' alt='' />
                                Scheduled Interviews
                            </a>
                        </li>

                        <li class="<?php if ($currntrl == 'getRejetedView') echo 'active';
                                    else echo ''; ?>">
                            <a href='<?php echo base_url();
                                        ?>Recruiter/getRejetedView'>
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/interview1.png' width='20' height='20' class='img1' alt='' />
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/interview1new.png' width='20' height='20' class='img2' alt='' />
                                Rejeted Candidate
                            </a>
                        </li>

                        <li class="<?php if ($currntrl == 'getHiredView') echo 'active';
                                    else echo ''; ?>">
                            <a href='<?php echo base_url();
                                        ?>Recruiter/getHiredView'>
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/mail.png' width='20' height='20' class='img1' alt='' />
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/mailnew.png' width='20' height='20' class='img2' alt='' />
                                Hired Candidate
                            </a>
                        </li>


                        <li class="<?php if ($currntrl == 'logout') echo 'active';
                                    else echo ''; ?>">
                            <a href='' class="logout">
                                <img src=' <?php echo base_url();
                                            ?>panel_assets/images/logout.png' width='20' height='20' class='img1' alt='' />
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/logoutnew.png' width='20' height='20' class='img2' alt='' />
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
                <div class='overlay'></div>
            </div>
        </div>
    </div>

    <script>
        $('.logout').click(function() {
            var id = 1;
            if (confirm("You want to logout")) {
                $.ajax({
                    url: "<?php echo base_url() ?>Recruiter/logout",
                    method: 'post',
                    data: {
                        id: id
                    },
                    success: function() {
                        window.location.href = "<?php echo base_url(); ?>Recruiter";
                    }
                })
            }
        });
    </script>