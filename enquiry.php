
<?php
    $product_name = $_POST['product_name'];
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
	$tel = $_POST['number'];
    $services = $_POST['message'];
	

	$email_from = 'vishal01singh03@gmail.com';
	$email_subject = "Business Enquiry From Infobiz World Trade";
	$email_body = "Name: $name.\n".
					" Email: $visitor_email.\n".
					"Phone Number: $tel.\n".
					"Product Name: $product_name.\n".
					"Message: $services.\n";
	$to = "vishal01singh03@gmail.com";
	$headers = "From: $email_from\r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	mail($to,$email_subject,$email_body,$headers);
	echo "<script>
alert('your message sent successfully');
window.location.href='index.php';
</script>";

?>