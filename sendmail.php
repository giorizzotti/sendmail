<?php

	/*
	This script will send an email with the PHP mail function.
	It needs a working sendmail configuration.
	*/

	function escape($value)
	{
    	$search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
    	$replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");

    	return str_replace($search, $replace, $value);
	}

    $name = escape($_POST['name']);
    $mailFrom = escape($_POST['emailFrom']);
    $subject = escape($_POST['subject']);
    $message = escape($_POST['message']);
    $emailTo = 'yourdesiredaddress@gmail.com';

    $header = "From:" . $mailFrom;
    $error = !mail($emailTo, $subject, $message, $header);

    $result = array('error' => $error); 
    echo json_encode($result);
?>