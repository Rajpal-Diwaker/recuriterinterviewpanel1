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
    <br><br> <br><br>
    <div style="max-width:650px; margin:auto; font-family:Arial, Helvetica, sans-serif;">
        <table width="100%" style="background:url('https://lal10bucketiam.s3-ap-south-1.amazonaws.com/LAL10_1602617816514.jpg'); background-repeat:no-repeat; background-size:cover; background-position:center; padding:65px 20px 135px 20px;" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td style="font-size:16px; font-family: 'Montserrat-Bold'; text-align:center; color:#000;
                line-height:50px;padding:5px 15px;">Interview Feedback </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;"> Dear Hr<br><br>
                    <?php echo $interviewerData[0]['name']; ?> has given feedback on interview.
                    <br>
                    <b>Details are Below </b>
                </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;">
                    <b>Profile :- </b><?php echo $resumeData[0]['position']; ?><br>
                    <b>Candidate Name :- </b><?php echo $resumeData[0]['name']; ?><br>
                    <b>Candidate Email :- </b><?php echo $resumeData[0]['email']; ?><br>
                    <b>Resume:- </b><a href="<?php echo $resumeData[0]['resume']; ?>" ?>link</a> <br>
                    <b>Date :- </b><?php echo $roundData[0]['interviewDate']; ?> <br>
                    <b>Time :- </b><?php echo $roundData[0]['interviewTime']; ?> <br>
                    <b>Round :- </b><?php echo $roundData[0]['round']; ?> <br>
                </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;">
                    <b>Profile Skills :- </b><?php echo $roundData[0]['profileSkills']; ?><br>
                    <b>Communication :- </b><?php echo $roundData[0]['communication']; ?><br>
                    <b>Behaviour :- </b><?php echo $roundData[0]['behaviour']; ?><br>
                    <b>Attitude towards Position :- </b><?php echo $roundData[0]['attiToWordPostion']; ?><br>
                    <b>Work Experience :- </b><?php echo $roundData[0]['workExperience']; ?><br>
                    <b>Team Player :- </b><?php echo $roundData[0]['teamPlayer']; ?><br>
                    <b>Strength :- </b><?php echo $roundData[0]['strength']; ?><br>
                    <b>Weekness :- </b><?php echo $roundData[0]['weekness']; ?><br>
                    <b>Additional Comments :- </b><?php echo $roundData[0]['additionalComment']; ?><br>
                    <b>Total time taken for the interview :- </b><?php echo $roundData[0]['totalTime']; ?><br>
                    <b>Recommendation :- </b><?php echo $roundData[0]['recommendation']; ?><br>
                </td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;"> <b>Interviewer :- </b><?php echo $interviewerData[0]['name']; ?></td>
            </tr>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:24px;padding:15px 15px 5px 15px"></td>
            </tr>
            <tr>
                <td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;
                line-height:30px;padding:15px;"><b>Best Regards</b><br><b>HR Team Techugo</b></td>
            </tr>
        </table>
    </div>
</body>

</html>