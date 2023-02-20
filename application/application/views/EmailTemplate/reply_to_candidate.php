<!doctype html>
<html>

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Techugo</title>
</head>
<style>
    @font-face {
        font-family: 'Montserrat-Regular';
        src: url('<?php echo base_url('panel_assets/fonts/Montserrat-Regular.eot?#iefix') ?>' format('embedded-opentype'), 
			 url('<?php echo base_url('panel_assets/fonts/Montserrat-Regular.woff') ?>' format('woff'), 
			 url('<?php echo base_url('panel_assets/fonts/Montserrat-Regular.ttf') ?>' format('truetype'), 
			 url('<?php echo base_url('panel_assets/fonts/Montserrat-Regular.svg#Montserrat-Regular') ?>'format('svg');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-Bold';
        src: url('<?php echo base_url('panel_assets/fonts/Montserrat-Bold.eot?#iefix'); ?>') format('embedded-opentype'),
            url(' <?php echo base_url('panel_assets/fonts/Montserrat-Bold.woff'); ?>') format('woff'),
            url('<?php echo base_url('panel_assets/fonts/Montserrat-Bold.ttf'); ?>') format('truetype'),
            url('<?php echo base_url('panel_assets/fonts/Montserrat-Bold.svg#Montserrat-Bold'); ?>') format('svg');
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
				<table width="100%"  style="background:url('https://www.techugo.com/panel_assets/banner2.jpg'); background-repeat:no-repeat; background-size:cover; background-position:center; padding:65px 20px 135px 20px;" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				<td style="font-size:16px; font-family: 'Montserrat-Bold'; text-align:center; color:#000;line-height:24px;padding:5px 15px;">Thanks for Application</td>
				</tr>
				<tr>
				<td style="font-size:15px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;line-height:50px;padding:15px;">Hello <?php echo $job_data['name'] ?>,</td>
				</tr>
				<tr>
				<td style="font-size:14px; font-family: 'Montserrat-Bold'; text-align:left; color:#000;line-height:28px;padding:0px 15px;">We have received your application for the position of <?php echo$job_data['0']['title']?> under the experience range of <?php echo$job_data['0']['minExp'] ?> - <?php echo $job_data['0']['maxExp'] ?>  years. We thank you for applying for being a part of Techugo. </td>
				</tr>
				<tr>
				<td style="font-size:14px; font-family: 'Montserrat-Regular'; text-align:left; color:#000;line-height:28px;padding:7px 15px;">Techugo is a multinational firm headquartered in Toronto and specializes in bespoke mobile and web application development which runs on beautiful UI/UX. </td>
				</tr>
				<tr>
				<td style="font-size:14px; font-family: 'Montserrat-Regular'; text-align:left; color:#000;line-height:28px;padding:7px 15px;">There can be 4-7 interview rounds for the profile of <?php echo $job_data['0']['title'] ?> and we expect that towards the end, we have you as a colleague in Techugo. </td>
				</tr>
				<tr>
				<td style="font-size:14px; font-family: 'Montserrat-Regular'; text-align:left; color:#000;line-height:28px;padding:7px 15px;">We will begin the interview process and you will be notified via email/phone call soon.  </td>
				</tr>
				<tr>
				<td style="font-size:15px; font-family: 'Montserrat-Regular'; text-align:left; color:#000;line-height:24px;padding:15px 15px 5px 15px">Best Regards</td>
				</tr>
				<tr>
				<td style="font-size:15px; font-family: 'Montserrat-Regular'; text-align:left; color:#000;line-height:24px;padding:5px 15px;">HR Team Techugo</td>
				</tr>
				</table>
				</div>
</body>

</html>
