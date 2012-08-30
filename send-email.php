<?php

error_reporting(E_ALL);

$ruleName=trim($_POST['rule-name']); 
$ruleText=trim($_POST['rule-text']);
$ruleEmail=trim($_POST['rule-email']);

$subject='New golden rule!';
$to ='ayub.malik@gmail.com';
$from='From: info@www.thegoldenrules.co.uk';

$method = $_SERVER['REQUEST_METHOD'];
$referrer = str_replace('http:', '', $_SERVER['HTTP_REFERER']);
$referrer = str_replace('/', '', $referrer);

$message="Rule name: $ruleName\nRule text: $ruleText\n\nEmail: $ruleEmail\n$referrer";

$data = array();
$data['method'] = $method;
$data['referrer'] = $referrer;
$data['ruleName'] = $ruleName;
$data['ruleText'] = $ruleText;

$validationErrors=False;

if ($method == 'GET' || $referrer != 'www.thegoldenrules.co.uk') {
    $data['status'] = "error";
    $data['error'] = "GET not supported/Invalid referrer";
    $validationErrors = True;
} else {
    if (!isset($ruleName) || empty($ruleName) || !isset($ruleText) || empty($ruleText)) { 
        error_log("detected empty field");
        $data['status'] = "error";
        $data['error'] = 'You must enter rule name and rule text';
        $validationErrors = True;
    }
}
error_log("VALID 1= $validationErrors");
$sendResult = false;
if (!$validationErrors) {
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