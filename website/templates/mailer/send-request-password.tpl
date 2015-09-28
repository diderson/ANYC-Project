<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>Request password</title>
</head>

<body>
<p>{$email_data[0].first_name} {$email_data[0].last_name},<br><br>This is a request concerning your password at ANC research System <br><br>

<strong>Password:</strong> {$email_data[0].password}<br><br>

<strong>Link to login :</strong> <a href="{$email_data[0].loginlink}">{$email_data[0].loginlink}</a><br><br>
</p>
<p>=======================================================================================</p>

<p><strong>ANC Research Staff</strong></p>
</body>
</html>

