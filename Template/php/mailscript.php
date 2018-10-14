<?php 

if(isset($_POST['submit'])) {

	$to = 'your.website@site.com'; // PUT YOUR EMAIL ADRESS INSTEAD your.website@site.com
	$subject = $_POST['subject'];
	$message = '<b>Email from your website.</b><br><br>
				First name: '.$_POST['first_name'].'<br>'.'
				Last name: '.$_POST['last_name'].'<br>'.'
				Email: '.$_POST['email'].'<br>'.'
				Message: '.$_POST['massage'].'<br>';
	$mheaders  = "Content-type: text/html; charset=utf-8 \r\n"; 
	$mheaders .= "From: Your website <your.website@site.com>\r\n"; 
	mail($to, $subject, $message, $mheaders);
	header("Location: ../emailsent.html");

} else { header("Location: ../emailsent.html"); }

?>