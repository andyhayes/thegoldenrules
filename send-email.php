<?php

error_reporting(E_ALL ^ E_NOTICE);


$errors = array();

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


if ($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['HTTP_REFERER'] != 'www.thegoldenrules.co.uk') {
    $errors[]= "GET not supported/Invalide referrer";
} else {
    if (empty($ruleName) || empty($ruleText)) { 
        $errors[] = 'You must enter rule name and rule text';
    }
}

if (!$errors) {
    $sendResult=mail($to, $subject, $message);
} else {
    $sendResult=false;
}

// Check, if message sent to your email display message "We've recived your information"
if($sendResult) {
    $data = "{status:'success'}";
} else {
    $data = "{status:'error', message:'" . $errors[0] . "'}";
}

echo $data;
?>