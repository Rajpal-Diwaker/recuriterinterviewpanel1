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
                line-height:24px;padding:5px 15px;"><br><br>
                </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:50px;padding:15px;"> Hello <?php echo $result['name']; ?>,</td>
            </tr>
            <tr>
                <td style="font-size:14px; font-family: 'Montserrat-Regular'; text-align:left; color:#000;
                line-height:28px;padding:0px 15px;">
                    We are delighted to let you know that we trust you
                    and your hiring capabilities to select the best candidate to be a part of Team Techugo. <br>
                    Hiring is one of the most important part of a company and we believe you would give your best <br>
                    in selecting the appropriate candidate.<br>
                    You can login to your Interviewer Panel from the link below:<br><br>
                </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:10px;padding:15px;">
                    <b>Interview Panel Link:- </b>
                    <a href="<?php echo base_url('Interview'); ?>" ?>Techugo Interview Panel</a>
                </td>
            </tr>
            <tr>
                <td style="font-size:14px; font-family: 'Montserrat-Regular'; text-align:left; color:#000;
                line-height:28px;padding:0px 15px;">
                    Filling of the feedback form on the panel is mandatory to log your feedback.<br>
                    Thank you for the continued cooperation and all the best.<br><br></td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:24px;padding:15px 15px 5px 15px"><b>Best Regards</b></td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:24px;padding:5px 15px;"><b>HR Team Techugo</b></td>
            </tr>
        </table>
    </div>
</body>

</html>