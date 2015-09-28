<?php
ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "ddiderson@gmail.com");

if (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'form') {
	if (isset($_REQUEST['formname'])) {
		
	}
} elseif (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'widget') {
	if (isset($_REQUEST['formname'])) {
		$formname = $_REQUEST['formname'];
		$field_003 = $_REQUEST['field_003'];
		$field_004 = $_REQUEST['field_004'];
		
		$mailAddress = 'diderson@diderson.com';
		$subject = 'Subject';
		$msg = "Message $field_003\r\n $field_004";
		$headers = "MIME-Version: 1.0\r\n Content-type: text/plain; charset=utf-8\r\n From: " . $_REQUEST[$result->slug] . "\r\n Reply...-To: " . $_REQUEST[$result->slug] . "\r\n X-Mailer: PHP/" . phpversion();
		
		mail($mailAddress, $subject, $msg, $headers);
	}
} elseif (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'contactf') {
	if (isset($_REQUEST['formname'])) {
		$formname = $_REQUEST['formname'];
		$contact_name = $_REQUEST['contact_name'];
		$contact_email = $_REQUEST['contact_email'];
		$contact_subject = $_REQUEST['contact_subject'];
		$contact_message = $_REQUEST['contact_message'];
		
		$mailAddress = 'diderson@diderson.com';
		$subject = 'Subject';
		$msg = "$contact_name\r\n $contact_email\r\n $contact_subject\r\n $contact_message";
		$headers = "MIME-Version: 1.0\r\n Content-type: text/plain; charset=utf-8\r\n From: " . $_REQUEST[$result->slug] . "\r\n Reply...-To: " . $_REQUEST[$result->slug] . "\r\n X-Mailer: PHP/" . phpversion();
		
		mail($mailAddress, $subject, $msg, $headers);
	}
} elseif (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'signal_erreur') {
	if (isset($_REQUEST['formname'])) {
		//print_r($_REQUEST);
		$formname = $_REQUEST['formname'];
		$contact_name = $_REQUEST['field_59177913141667540'];
		$contact_email = $_REQUEST['name_contacts_821698888378616800_697396431272861200'];
		$contact_subject = $_REQUEST['field_619607586107771500'];
		$contact_message = $_REQUEST['field_344203287173695550'];
		
		$mailAddress = 'ddiderson@gmail.com';
		$subject = 'Subject';
		$msg = "$contact_name\r\n $contact_email\r\n $contact_subject\r\n $contact_message";
		$headers = "MIME-Version: 1.0\r\n Content-type: text/plain; charset=utf-8\r\n From: " . $_REQUEST['name_contacts_821698888378616800_697396431272861200'] . "\r\n Reply...-To: " . $mailAddress. "\r\n X-Mailer: PHP/" . phpversion();
		
		mail($mailAddress, $subject, $msg, $headers);
	}
}
?>