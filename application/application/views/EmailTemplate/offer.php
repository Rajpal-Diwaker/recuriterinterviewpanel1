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
                line-height:30px;padding:15px;"> Hello <?php echo $ResumeUser['name']; ?>,<br>
                    We are pleased to let you know that your interview rounds are completed and <br>
                    we have selected your profile as a potential candidate for the job.<br>
                    We are happy to offer you the position of <?php echo $ResumeUser['profile']; ?>
                    <br><br>
                    Joining Date: <?php echo $result['joinDate']; ?><br>
                    Offered Annual CTC: <?php echo $result['offerCTC']; ?>
                    <br>
                </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;">
                    We will send a formal offer letter once you have accepted the offer.<br>
                    We will expect a reply to the email within 2 days,<br>
                    we have limited seats and this offer shall be withdrawn once we have <br>
                    confirmation from other shortlisted candidates.<br></td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;">
                    Congratulations again, and we believe that your knowledge,<br>
                    skills and experience would be an ideal fit for our team <br>
                    and we can grow in an inclusive and growth oriented environment of Techugo. </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;">We look forward to welcoming you to Team Techugo. </td>
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