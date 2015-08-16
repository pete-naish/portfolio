<?php
// srv: localhost
// db name:fscs_forms
// user: fscs_forms
// pass: yips4Avrady
// Christoph Lutz 11:18
// can I get to that via heidisql?
// James Horner 11:19
// you can connect directly to the db using the server 192.168.3.238 or 195.224.180.238

include "i_database_pdo.php";
$db	=	 new oDB();
$stmt = 'INSERT INTO  tblcontact (sName, sEmail, sQuery) VALUES (:sName, :sEmail, :sQuery)';
$stmt = $db->pdo->prepare($stmt);
$stmt->bindParam(':sName', $_POST['name']);
$stmt->bindParam(':sEmail', $_POST['email']);
$stmt->bindParam(':sQuery', $_POST['query']);
#if ($stmt->execute()){ 
#	echo '<p class="successMsg">Thank you for your query. We aim to respond within 7 working days.</p>';
#}

echo '<p class="successMsg">Thank you for your query. We aim to respond within 7 working days.</p>';

//send email
$from			=	"noreply@" . str_replace("www.", "", $_SERVER['SERVER_NAME']);
$to				= 	"enquiries@fscs.org.uk";
$subject		=	"FSCS consumer awareness";
$mime_boundary	=	"Multipart_Boundary_x".md5(mt_rand())."x";
$sHeaders 		= 	"From: $from\r\n" .
					"MIME-Version: 1.0\r\n" .
					"Content-Type:multipart/alternative; boundary=\"{$mime_boundary}\"\r\n";
$sBodyHTML		 =	"<html><head></head><body>";
$sBodyHTML 		.= 	"<p>A form has been submitted on your website. The details of the form are listed below:</p>\n\n";
$sBodyHTML 		.= 	"<table border=\"1\" cellpadding=\"5\">";
$sBodyHTML 		.= "<tr><td><strong>Name: </strong></td><td>" . $_POST['name'] . "</td></tr>\n";
$sBodyHTML 		.= "<tr><td><strong>Email: </strong></td><td>" . $_POST['email'] . "</td></tr>\n";
$sBodyHTML 		.= "<tr><td><strong>Query: </strong></td><td>" . $_POST['query'] . "</td></tr>\n";
$sBodyHTML 		.= 	"</table></body></html>";

$sBodyPlain 	= strip_tags($sBodyHTML);

$sBody = 	"This is a multi-part message in MIME format.\n\n" .
			"--{$mime_boundary}\n" .
			"Content-Type: text/plain; charset=\"utf-8\"\n" .
			"Content-Transfer-Encoding: 7bit\n\n" .
			"$sBodyPlain \r\n" .
			"--{$mime_boundary}\n" .
			"Content-Type: text/html; charset=\"utf-8\"\n" .
			"Content-Transfer-Encoding: 7bit\n\n" . $sBodyHTML;
mail($to, $subject, $sBody, $sHeaders)
?>
