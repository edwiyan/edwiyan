<?php
// Get the JSON data sent from the JavaScript
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON);

if ($input) {
    // Extract the email and email body
    $email = $input->email;
    $emailBody = $input->body;

    // Create email headers
    $headers = "From: your_email@example.com"; // Replace with your email address
    $headers .= "\r\n";
    $headers .= "Reply-To: $email";

    // Send the email
    $subject = "Guitar Repair Services"; // Replace with your subject
    if (mail("edrianreyes.basc@gmail.com", $subject, $emailBody, $headers)) {
        // Email sent successfully
        $response = array('message' => 'Email sent successfully');
    } else {
        // Email sending failed
        $response = array('error' => 'Email sending failed');
    }

    // Return a response to the JavaScript
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // JSON data not received
    $response = array('error' => 'Invalid input data');
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>