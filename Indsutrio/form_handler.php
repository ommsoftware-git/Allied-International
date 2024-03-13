<?php
$field_name = $_POST['namef'];
$field_email = $_POST['emailf'];
$field_phone = $_POST['phonef'];
$field_message = $_POST['msgf'];

$mail_to = 'jaidshaikh0@gmail.com';
//$mail_to = 'swapb693@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";
$headers .= 'Return-Path: '.$field_email."\r\n";
$headers .= "Organization: Sender Organization\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    
$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the feedback.');
        window.location = 'index.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Something went wrong. Please try again or contact at experts@strgtech.in');
        window.location = 'index.html';
    </script>
<?php
}

?>