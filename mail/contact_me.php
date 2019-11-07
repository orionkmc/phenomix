<?php
var_dump($_POST);
  // Check for empty fields
  if(empty($_POST['firstName'])        ||
 empty($_POST['lastName'])       ||
 empty($_POST['iAm'])     ||
 empty($_POST['phone'])     ||
 empty($_POST['inquiryType'])        ||
 !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
 {
  echo "Sin datos encontrados!";
  return false;
 }

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $inquiryType = $_POST['inquiryType'];
  $iAm = $_POST['iAm'];


  // Create the email and send the message
  // $to = 'jonathan@neex.com.ar';
  // $to = 'miguel@creainteractivo.com';

  $to = 'miguel@creainteractivo.com';
  $email_subject = "Contacto desde el Sitio Web - Phenomix Sciences";
  $email_body = "Has recibido un nuevo correo desde el sitio web Phenomix Sciences.\n\n"."
  First Name: $firstName\n
  Last Name: $lastName\n
  Email: $email\n
  Phone: $phone\n
  Inquiry Type: $inquiryType\n
  I Am: $iAm\n";

  $headers = "From: web@phenomixsciences.com\n";
  $headers .= "Reply-To: $email";

  $a = mail($to,$email_subject,$email_body,$headers);
  var_dump($a);
  return true;
?>