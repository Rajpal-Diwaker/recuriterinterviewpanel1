<?php $currntrl = $this->uri->segment(2);
?>
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Techugo Interviewer Panel</title>
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no;' />
    <link href='<?php echo base_url(); ?>panel_assets/css/bootstrap.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url(); ?>panel_assets/css/font-awesome.min.css' media='screen' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url(); ?>panel_assets/css/bootstrap-select.min.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url(); ?>panel_assets/css/jquery.dataTables.min.css' media='screen' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url(); ?>panel_assets/css/style.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url(); ?>panel_assets/css/media.css' rel='stylesheet' type='text/css'>
    <script src='<?php echo base_url(); ?>panel_assets/js/jquery-2.1.1.js'></script>
    <script src='<?php echo base_url(); ?>panel_assets/js/bootstrap.js'></script>
    <script src='<?php echo base_url(); ?>panel_assets/js/bootstrap-select.js'></script>
    <script src='<?php echo base_url(); ?>panel_assets/js/jquery.dataTables.min.js'></script>
    <script src='<?php echo base_url(); ?>panel_assets/js/script.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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
                            <a href='<?php echo base_url(); ?>Interview/dashboard'>
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/dashboard.png' width='20' height='20' class='img1' alt='' />
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/dashboardnew.png' width='20' height='20' class='img2' alt='' />
                                Dashboard
                            </a>
                        </li>

                        <li class="<?php if ($currntrl == 'interviewMenu'  || $currntrl == 'viewResumeDetails2') echo 'active';
                                    else echo ''; ?>">
                            <a href='<?php echo base_url();
                                        ?>Interview/interviewMenu'>
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/interview.png' width='29' height='20' class='img1' alt='' />
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/interviewnew.png' width='29' height='20' class='img2' alt='' />
                                Interview
                            </a>
                        </li>

                        <li class="<?php if ($currntrl == 'oldInterviewMenu' || $currntrl == 'viewResumeDetails') echo 'active';
                                    else echo ''; ?>">
                            <a href='<?php echo base_url();
                                        ?>Interview/oldInterviewMenu'>
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/interview1.png' width='20' height='20' class='img1' alt='' />
                                <img src='<?php echo base_url();
                                            ?>panel_assets/images/interview1new.png' width='20' height='20' class='img2' alt='' />
                                Old Interviews
                            </a>
                        </li>

                        <li class="<?php if ($currntrl == 'logout') echo 'active';
                                    else echo ''; ?>">
                            <a class='logout'>
                                <img src='<?php echo base_url();
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

            <script>
                $('.logout').click(function() {
                    var id = 1;
                    if (confirm("You want to logout")) {
                        $.ajax({
                            url: "<?php echo base_url() ?>Interview/logout",
                            method: 'post',
                            data: {
                                id: id
                            },
                            success: function() {
                                window.location.href = "<?php echo base_url(); ?>Interview";
                            }
                        })
                    }
                });

                setInterval(function() {
                    checkUserAccount()
                }, 3000);


                function checkUserAccount() {
                    $.ajax({
                        url: "<?php echo base_url() ?>Interview/checkUserAccount",
                        method: 'get',
                        success: function(res) {
                            responce = JSON.parse(res);
                            console.log("res==", responce)
                            if (responce.error_code == '200')
                                console.log("succss", responce.error_code)
                            else
                                window.location.href = "<?php echo base_url(); ?>Interview/logout";
                        }
                    })
                }
            </script>
