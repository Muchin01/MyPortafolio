<?php 
if(isset($_POST['submit'])){
    $to = "marlonmuchin01@gmail.com"; // this is your Email address
    // $from = $_POST['email']; // this is the sender's Email address
    // $first_name = $_POST['first_name'];
    // $last_name = $_POST['last_name'];

    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $messages= $_POST['message'];
    
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $from_name  . " " . $from_email . " wrote the following:" . "\n\n" . $_POST['subject'];
    $message2 = "Here is a copy of your message " . $from_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $from_name . ", we will contact you shortly.";
  
    }
?>
