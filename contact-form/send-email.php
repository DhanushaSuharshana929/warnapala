<?php

//----------------------Company Information---------------------
require_once "Mail.php";

date_default_timezone_set('Asia/Colombo');
$todayis = date("l, F j, Y, g:i a");
$site_link = "https://www." . $_SERVER['HTTP_HOST'];

//Display Strings 
$comany_name = "Sri Lanka Peter Tours";
$website_name = "www.srilankapetertours.com";
$comConNumber = "+94 77 621 6932";
$comEmail = "info@srilankapetertours.com";
$comOwner = "Peter";

// Post Variables
$visitor_name = $_POST['visitor_name'];
$visitor_email = $_POST['visitor_email'];
$visitor_subject = "";
$message = $_POST['message'];

$host = "sg1-ls7.a2hosting.com";
$username = "info@srilankapetertours.com";
// $password = "Peter@7027";
$password = "(yq5,xL*HVoV";

$webmail = "info@srilankapetertours.com";
$visitorSubject = "Thank You " . $visitor_name . " - Sri Lanka Peter Tours";
$companySubject = "Contact Inquiry - " . $visitor_name;

//----------------------CAPTCHACODE---------------------

session_start();

$response = array();

if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {

    $response['status'] = 'incorrect';

    $response['msg'] = 'Security Code is invalid';

    echo json_encode($response);

    exit();
}

include("mail-template.php");


$visitorHeaders = array('MIME-Version' => '1.0', 'Content-Type' => "text/html; charset=ISO-8859-1", 'From' => $webmail,
    'To' => $visitor_email,
    'Reply-To' => $comEmail,
    'Subject' => $visitorSubject);

$companyHeaders = array('MIME-Version' => '1.0', 'Content-Type' => "text/html; charset=ISO-8859-1", 'From' => $webmail,
    'To' => $webmail,
    'Reply-To' => $visitor_email,
    'Subject' => $companySubject);


$smtp = Mail::factory('smtp', array('host' => $host,
            'auth' => true,
            'username' => $username,
            'password' => $password));

$visitorMail = $smtp->send($visitor_email, $visitorHeaders, $visitor_message);
$companyMail = $smtp->send($webmail, $companyHeaders, $company_message);

if (PEAR::isError($visitorMail && $companyMail)) {

    $response['status'] = 'correct';

    $response['msg'] = $mail->getMessage();

//"Your message has not been sent"

    echo json_encode($response);

    exit();
} else {
    $response['status'] = 'correct';

    $response['msg'] = "Your message has been sent successfully";

//"Your message has been sent successfully"

    echo json_encode($response);

    exit();
}









// $comany_name = "Galle Cabs & Tours";
// $website_name = "www.gallecabsandtours.com";
// $comConNumber = "+94 (77) 810 0726";

// $comEmail = "gallecabsandtours@gmail.com";
// //$from = 'galletourssrilanka@gmail.com';

// $comEmail2 = "info@gallecabsandtours.com";

// $from = 'info@gallecabsandtours.com';

// //----------------------CAPTCHACODE---------------------

// session_start();





// $response = array();

// if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {

//     $response['status'] = 'incorrect';

//     $response['msg'] = 'Security Code is invalid';

//     echo json_encode($response);

//     exit();
// }



// //----------------------Visitor Information---------------------





// $visitor_name = $_POST['visitor_name'];

// $visitor_email = $_POST['visitor_email'];

// $visitor_phone = $_POST['visitor_phone'];
// //
// //$visitor_country = $_POST['visitor_country'];
// //$find_us = $_POST['subject'];

// $subject = 'Contact Message - Galle Cabs & Tours' ;
// $subject2 = 'Thank you - Galle Cabs & Tours';

// $message = $_POST['message'];





// date_default_timezone_set('Asia/Colombo');



// $todayis = date("l, F j, Y, g:i a");



// $site_link = "http://" . $_SERVER['HTTP_HOST'];



// include("mail-template.php");



// // mandatory headers for email message, change if you need something different in your setting.

// $headers = "From: " . $from . "\r\n";

// $headers .= "Reply-To: " . $visitor_email . "\r\n";

// $headers .= "MIME-Version: 1.0\r\n";

// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



// $headers1 = "From: " . $from . "\r\n";

// $headers1 .= "Reply-To: " . $comEmail2 . "\r\n";

// $headers1 .= "MIME-Version: 1.0\r\n";

// $headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



// Sending mail



// if (
//         mail($comEmail2, $subject, $company_message, $headers) &&
//         mail($visitor_email, $subject2, $visitor_message, $headers1)
// ) {

//     $response['status'] = 'correct';

//     $response['msg'] = "Your message has been sent successfully";

// //"Your message has been sent successfully"

//     echo json_encode($response);

//     exit();
// } else {

//     $response['status'] = 'correct';

//     $response['msg'] = "Could not be sent your message";

//     echo json_encode($response);

//     exit();
// } 

