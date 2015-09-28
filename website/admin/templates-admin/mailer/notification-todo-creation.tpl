<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>To Do Notificationt</title>
</head>

<body>
<h1 style="color:#F00">To Do Notification</h1>

<p>The following To Do item has been assigned to you:</p>

<table border="0">
	<tr>
		<td align="left" style="font-weight:bold; padding-right:15px;">To do date:</td>
        <td align="left">{$email_data[0].todo_date}</td>
	</tr>
	<tr>
	  <td align="left" style="font-weight:bold; padding-right:15px;">Client:</td>
        <td align="left">{$email_data[0].client_name}</td>
	</tr>
<tr>
		<td align="left" style="font-weight:bold; padding-right:15px;">Project:</td>
      <td align="left">{$email_data[0].project_name}</td>
	</tr>        
	<tr>
		<td align="left" style="font-weight:bold; padding-right:15px;">Description:</td>
        <td align="left">{$email_data[0].todo_description}</td>
	</tr>    
</table>            
        



<p><a href="{$siteUrl}/admin/todo-view.php?id={$email_data[0].id}" target="_blank">View To Do Entry</a></p>

</body>
</html>
