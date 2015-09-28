<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$email_data.report_sujet}</title>
</head>

<body>
<p>Signale d'une erreur ou Omission a été effectué <br><br>
<strong>Produit:</strong> {$email_data.report_medoc}<br><br>
<strong>Lien sur le site:</strong> <a href="{$site_url}/{$email_data.report_linkmedoc}">{$site_url}/{$email_data.report_linkmedoc}</a><br><br>
<strong>Signalé Par:</strong> {$email_data.report_nom}<br><br>
<strong>Email:</strong> {$email_data.report_email}<br><br>
<strong>Message:</strong> {$email_data.report_message}<br><br>

</p>

	<p> <strong>Medicament.cd serveur</strong></p>
</body>
</html>
