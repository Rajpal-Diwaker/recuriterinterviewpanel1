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
                line-height:30px;padding:15px;"> Hello <?php echo $ResumeUser['name']; ?> ,<br>
                    This is to notify that your interview has been rescheduled. <br>
                    Your Round <?php echo $result['round']; ?> interview has been scheduled for <br>
                </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;">
                    <b>Date :- </b><?php echo $result['interviewDate']; ?><br>
                    <b>Time :- </b><?php echo $result['interviewTime']; ?><br>
                    <b>Mode :- </b><?php echo $result['mode']; ?>
                </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;">
                    <b>Interviewer :- </b><?php echo $interviewer[0]['name']; ?><br>
                    <b>Designation :- </b><?php echo $interviewer[0]['design']; ?>
                </td>
            </tr>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:24px;padding:15px 15px 5px 15px">
                    You can reply to this email within 3 hours for any change in schedule.<br>
                    To know more about Techugo visit: </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:24px;padding:15px 15px 5px 15px">
                    Website Link : <a href="https://www.techugo.com/">Techugo</a><br>
                    Facebook :<a href="https://www.facebook.com/techugo.apps">Techugo</a> <br>
                    Linkedin :<a href="https://www.linkedin.com/company/techugo-private-limited/">Techugo</a> <br>
                    Instagram :<a href="https://www.instagram.com/techugo">Techugo</a> <br>
                </td>
            </tr>
            <tr>
                <td style=" font-size:15px; font-family: 'Montserrat-Bold' ; text-align:left; color:#000; line-height:24px;padding:15px 15px 5px 15px">
                    ps: No show at the time of interview may lead to 6 Months ban from further applying to Techugo <br>
                    <br>
                    <br>
                    All the best for your interview.
                </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;"><b>Best Regards</b><br><b>HR Team Techugo</b></td>
            </tr>
        </table>
    </div>
</body>

</html>