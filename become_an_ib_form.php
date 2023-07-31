<?php
if(isset($_POST['email'])) {
    $email_to = "rama.prixim@priximglobal.com";
    $email_subject = "PriximGlobal contact form";
    function died($error) {
       
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    if(!isset($_POST['name']) ||
		!isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['skype']) ||
		!isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; 
	$email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $skype = $_POST['skype']; 
	$subject = $_POST['subject']; 
    $message = $_POST['message']; 
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone No.: ".clean_string($phone)."\n";
    $email_message .= "Skype: ".clean_string($skype)."\n";
	$email_message .= "Subject: ".clean_string($subject )."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 

$headers = 'From: rama.prixim@priximglobal.com'."\r\n";
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

if (@mail($email_to, $email_subject, $email_message, $headers))
	  {
         ?>
    	<script language="javascript" type="text/javascript">
    		alert('Thank you for the message. We will contact you shortly.');
    		window.location = history.back();
    	</script>
    <?php
    }
    else { ?>
    	<script language="javascript" type="text/javascript">
    		alert('Message failed. Please, send an email to support@priximglobal.com');
    		window.location = 'contact-us.html';
    	</script>
    <?php
    }
   }
?>