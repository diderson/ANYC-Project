<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>Request password</title>
</head>

<body>
<p>{$email_data.first_name} {$email_data.last_name},<br><br>
	We confirm the opening of your ANC research account at ANC research System and we thank you. <br><br>
	Please click on the link below to confirm your email address and complete the registration process: <br><br>

<strong><a href="{$email_data.activationlink}">{$email_data.activationlink}</a><br><br></strong>
P.S: if the link doesn't open please copy and paste into your browser<br><br>
</p>
<p>=======================================================================================</p>

<p><strong>ANC Research Staff</strong></p>
</body>
</html>

