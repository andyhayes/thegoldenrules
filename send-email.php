<?php

error_reporting(E_ALL ^ E_NOTICE);

$error = "";
$data = array();

// Contact subject
$ruleName ="$rule-name"; 

// Details
$ruleText="$rule-text";

// Mail of sender
$ruleEmail="$rule-email"; 

// subject
$subject='New golden rule!';

// Enter your email address
$to ='ayub.malik@gmail.com';

$message="Rule name: $ruleName \n Rule text: $ruleText \n\n Email: $ruleEmail";

$method = $_SERVER['REQUEST_METHOD'];
$referrer =  $_SERVER['HTTP_REFERER'];

$data['method'] = $method;
$data['referrer'] = $referrer;

if ($method == 'GET' || $referrer != 'www.thegoldenrules.co.uk') {
    $data['status'] = "error";
    $data['error'] = "GET not supported/Invalid referrer";
} else {
    if (empty($ruleName) || empty($ruleText)) { 
        $data['status'] = "error";
        $data['error']  = 'You must enter rule name and rule text';
    }
}

if (!$data['error']) {
    $sendResult=mail($to, $subject, $message);
} else {
    $sendResult=false;
}

// Check, if message sent to your email display message "We've recived your information"
if($sendResult) {
    $data['status'] = "error";
    $data['error'] = "Send mail error";
} else {
     $data['status'] = "succes";
}

echo json_encode($data);
?>