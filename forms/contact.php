<?php
//  require './assets/vendor/php-email-form/php-email-form.php';

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'marlonmuchin01@gmail.com';

// $php_email_form = '../assets/vendor/php-email-form/php-email-form.php';

// $php_email_form = '/assets/vendor/php-email-form/';
// if( file_exists( $php_email_form)) {
//   include($php_email_form);
// } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
// }

// $php_email_form = '/assets/vendor/php-email-form/php-email-form';
// $php_email_form = '../assets/vendor/php-email-form/php-email-form.php';
// if(file_exists($php_email_form)) {
//     include($php_email_form);
// } else {
//     die('Coming Soonee!');
// }



  
//   $php_email_form = './assets/vendor/php-email-form/php-email-form.php';
//   if(file_exists($php_email_form)) {
//       include($php_email_form);
//   } else {
//       die('Coming Soon!');
//   }


//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];
//   $contact->message = $_POST['message'];

//   // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials

//   $contact->smtp = array(
//     'host' => 'marlonmuchin01@gmail.com',
//     'username' => 'Marlon Muchin',
//     'password' => 'Marlon__01!',
//     'port' => '587'
//   );
  

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['subject'], 'Subject');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
//

$receiving_email_address = 'contact@example.com';

if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  include('../assets/vendor/php-email-form/php-email-form.php');
} else {
die( 'Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
/*
$contact->smtp = array(
'host' => 'example.com',
'username' => 'example',
'password' => 'pass',
'port' => '587'
);
*/

$contact->add_message( $_POST['name'], 'From');
$contact->add_message( $_POST['email'], 'Email');
$contact->add_message( $_POST['message'], 'Message', 10);

echo $contact->send();
?>

?>

// $name = $_POST['name'];
// $email= $_POST['email'];
// $message= $_POST['message'];
// $to = "youremail@mail.com";
// $subject = "Mail From website";
// $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
// $headers = "From: noreply@yoursite.com" . "\r\n" .
// "CC: somebodyelse@example.com";
// if($email!=NULL){
//     mail($to,$subject,$txt,$headers);
// }

// header("Location:thankyou.html");
