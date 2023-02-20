<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Techugo</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<style>
    @font-face {
        font-family: 'Montserrat-Regular';
        src: url('fonts/Montserrat-Regular.eot?#iefix') format('embedded-opentype'), url('fonts/Montserrat-Regular.woff') format('woff'), url('fonts/Montserrat-Regular.ttf') format('truetype'), url('fonts/Montserrat-Regular.svg#Montserrat-Regular') format('svg');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-Bold';
        src: url('<?php echo base_url('assets/fonts/Montserrat-Bold.eot?#iefix'); ?>') format('embedded-opentype'),
            url(' <?php echo base_url('assets/fonts/Montserrat-Bold.woff'); ?>') format('woff'),
            url('<?php echo base_url('assets/fonts/Montserrat-Bold.ttf'); ?>') format('truetype'),
            url('<?php echo base_url('assets/fonts/Montserrat-Bold.svg#Montserrat-Bold'); ?>') format('svg');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'BookAntiqua-Bold';
        src: url('<?php echo base_url('assets/fonts/BookAntiqua-Bold.eot?#iefix'); ?>') format('embedded-opentype'),
            url('<?php echo base_url('assets/fonts/BookAntiqua-Bold.woff'); ?>') format('woff'),
            url('<?php echo base_url('assets/fonts/BookAntiqua-Bold.ttf'); ?>') format('truetype'),
            url('<?php echo base_url('assets/fonts/BookAntiqua-Bold.svg#BookAntiqua-Bold'); ?>') format('svg');
        font-weight: normal;
        font-style: normal;
    }
</style>

<body style="margin:0; padding:0;">
    <br><br>
    <div style="max-width:650px; margin:auto; font-family:Arial, Helvetica, sans-serif;">
        <table width="100%" style="background:url('https://lal10bucketiam.s3-ap-south-1.amazonaws.com/LAL10_1602617816514.jpg'); background-repeat:no-repeat; background-size:cover; background-position:center; padding:65px 20px 135px 20px;" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td style="font-size:16px; font-family: 'Montserrat-Bold'; text-align:center; color:#000;
                line-height:50px;padding:5px 15px;"> </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;"> Dear <?php echo $ResumeUser['name']; ?><br><br>
                    We are glad to let you know that upon acceptance of your offer, we are happy to have you as a part of Techugo.<br><br>
                    We are happy to offer you the position of <?php echo $ResumeUser['profile']; ?><br></td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;"> <b> Joining Date :- </b><?php echo $result['confirmJoinDate']; ?></td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;"><b>Offered Annual CTC:- </b><?php echo $result['finalCTC']; ?> </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;">Congratulations again, we look forward to a great journey together on the path of success and growth along
                    with Techugo. </td>
            </tr>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;"><b>Best Regards</b><br><b>HR Team Techugo</b></td>
            </tr>
        </table>
    </div>
</body>

</html>