<?php
// Get the form data
$question = $_POST['question'];

// Set the email recipient and subject
$to = 'maysam.moradi1370@gmail.com';
$subject = 'New question from website';

// Set the email message
$message = "A new question has been submitted:\n\n";
$message .= $question;

// Send the email
mail($to, $subject, $message);

// Redirect the user back to the form page
header('Location: x.html');
exit;
?>
