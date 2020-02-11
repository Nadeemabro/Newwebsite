<?php
// error_reporting(1);
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $mesg = $_POST['message'];
    if (!empty($_POST['services'])) 
    {
        $serv = implode(', ', $_POST['services']);
    }
    
    $errors = array();

    if ($_POST['name']=='') {
       $msg = "Please Fill All the Fields";
    }
    else if ($_POST['email']=='') {
    	$msg = "Please Fill All the Fields";
    }
    else if ($_POST['contact']=='') {
        $msg = "Please Fill All the Fields";
    }
    else if ($_POST['message']=='') {
        $msg = "Please Fill All the Fields";
    }
    else if (empty($_POST['services'])) {
        $msg = "Please select any one service";
    }
    if (isset($msg)) 
    { 
        echo "<div class='alert alert-danger' role='alert'>".$msg."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    }
    else 
    {
        $to_email = 'anisha@golive.com.pk,saadulhaque@mulphilog.com';
    	$subject = 'M&P Logistics | Lead Form';
    	$message = 'Name : '.$name .'<br>Email : '.$email .'<br>Contact Number : '.$contact .'<br>Message : '.$mesg .'<br>Services : '.$serv;
    	
    	$header = "From: noreply@example.com\r\n";
    	$header.= "MIME-Version: 1.0\r\n";
    	$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    	$header.= "X-Priority: 1\r\n";

    	$status = mail($to_email, $subject, $message, $header);

    	if($status)
      	{
        	echo "<div class='alert alert-success' role='alert'>Request Successfully submitted <br>will contact you shortly.</div>";
      	} 
      	else 
      	{
        	echo "<div class='alert alert-danger' role='alert'>There is some problem in sending email</div>";
      	}
	}
    // return json_data;
}

?>