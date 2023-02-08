<?php


// if (
//     !isset($_POST['name']) ||
//     !isset($_POST['studentName']) ||
//     !isset($_POST['selectClass']) ||
//     !isset($_POST['phoneNumber'])
// ) {
//     problem('We are sorry, please enter all the required feilds');
// }
// Get data from form 
$name = $_POST['name'];
$studentname = $_POST['studentName'];
$classSeclected= $_POST['selectClass'];
$phoneNumber= $_POST['phoneNumber'];
 
$emailFrom= 'jasprashar30@gmail.com';
$to = "nitishprashar89@gmail.com";
$subject = "Admission INQUIRY";

 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$emailBody ="Name = ". $name . "\r\n  studentName = "
    . $studentName . "\r\n ClassSelected =" . $classSeclected . "\r\n phoneNumber =" . $phoneNumber;
 
$headers = 'From: ' . $emailFrom . "\r\n" .
'Reply-To: ' . $to . "\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($to, $subject, $emailBody, $headers);
header("location: index.html");
?>

<!-- include your success message below -->

Thank you for contacting us. We will be in touch with you very soon.

<?php

?>