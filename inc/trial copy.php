<?php

	// Configuration 
    $to = "daraclare@gmail.com"; // Your email address. 
    $subject = "Online Registration Form: Safer Discos & Socials for Galway Teens"; // Email subject line 
    
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $membership = $_REQUEST['membership'];
    $involvement = $_REQUEST['involvement-option1'];
    $involvement = $_REQUEST['involvement-option2'];
    $involvement = $_REQUEST['involvement-option3'];
    $involvement = $_REQUEST['involvement-option4'];
    $message = $_REQUEST['message'];
    $headers = "From: $from";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"phone"} = "Phone";
    $fields{"email"} = "Email";
    $fields{"membership"} = "Membership";
    $fields{"involvement-option1"} = "Involvement Option 1";
    $fields{"involvement-option2"} = "Involvement Option 2";
    $fields{"involvement-option3"} = "Involvement Option 3";
    $fields{"involvement-option4"} = "Involvement Option 4";
    $fields{"message"} = "Comments";

    $body = "REGISTRATION FORM:\n\n";
    foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);


?>
