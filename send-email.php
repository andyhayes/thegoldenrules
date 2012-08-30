<?php

error_reporting(E_ALL);

$error = "";
$data = array();

// Contact subject
$ruleName=$_POST['rule-name']; 

// Details
$ruleText=$_POST['rule-text'];

// Mail of sender
$ruleEmail=$_POST['rule-email'];

// subject
$subject='New golden rule!';

// Enter your email address
$to ='ayub.malik@gmail.com';

$from='From: info@www.thegoldenrules.co.uk';

$message="Rule name: $ruleName \n Rule text: $ruleText \n\n Email: $ruleEmail";

$method = $_SERVER['REQUEST_METHOD'];
$referrer = str_replace('http:', '', $_SERVER['HTTP_REFERER']);
$referrer = str_replace('/', '', $referrer);

$data['method'] = $method;
$data['referrer'] = $referrer;

if ($method == 'GET' || $referrer != 'www.thegoldenrules.co.uk') {
    $data['status'] = "error";
    $data['error'] = "GET not supported/Invalid referrer";
} else {
    if (!isset($ruleName) || empty($ruleName) || !isset($ruleText) || empty($ruleText)) { 
        $data['status'] = "error";
        $data['error'] = 'You must enter rule name and rule text';
    }
}

if (array_key_exists('error', $data)) {
    $sendResult=false;
} else {
    $sendResult=mail($to, $subject, $message, $from);
}

// Check, if message sent to your email display message "We've recived your information"
if($sendResult) {
    $data['status'] = "success";
} else {
    $data['status'] = "error";
    $data['error'] = "Sorry, there was an error sending mail. Try laterz";
}

echo json_encode($data);
?>