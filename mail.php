<?php 
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$email=$_POST['email'];
	$message=$_POST['comment'];
	
    $to ='cheezytechnologies@gmail.com';
	
	
	$from = $email;
	
	$subject = "Contact Us";		

	$message ="<table cellspacing='5' cellpadding='5' style='border: 10px solid rgb(204, 204, 204);border-radius: 10px 10px 10px 10px;margin-left: 150px; width: 800px;color:  #3A6434;font-family (stack): Arial,Helvetica,sans-serif;Font being rendered: Arial;font-size: 14px;line-height: 1.43em (20px);vertical-align: baseline;letter-spacing: normal;'>
	
	<tr>
	<td style='padding:5px;'>
		<table border='0' cellspacing='7' cellpadding='7'>
			<tr><td colspan='2'  style='vertical-align: top; padding:5px;'><b>Dear Administrator</b>,<br/><br/>Following user contact query from Seo Expert Website. His/her details are mentioned below:<br/></td></tr>
			<tr><td><b>Name:</b></td><td>$name</td></tr>
			<tr><td><b>Subject:</b></td><td>$subject</td></tr>
			<tr><td><b>E-mail:</b></td><td>$email</td></tr>
			<tr><td><b>Message:</b></td><td>$message</td></tr>
			<tr><td colspan='2'>Thank You.</td></tr>
			<tr><td colspan='2'>$name.</td></tr>
		</table>
	</td>
	</tr>
	</table>";
			  
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= "From: $from" . "\r\n";
	
	$mail = mail($to,$subject,$message,$headers);
	if($mail){
		header("location:thank_you.php?msg=success");
		exit;
	}
	else{
		header("location:thank_you.php?msg=error");
		exit;
	}
?>