<?php

$firstName = $lastName = $email = $phone = $inquiryType = $iAm = NULL;

if (isset($_POST['submit'])) {
  $firstName   = $_POST[firstName];
  $lastName    = $_POST[lastName];
  $email       = $_POST[email];
  $phone       = $_POST[phone];
  $inquiryType = $_POST[inquiryType];
  $iAm         = $_POST[iAm];

  $subject  = 'Contact Form Phenomix'
  $message  = 'Contact Form Phenomix <br><br>';
  $message .= '<strong>First Name: </strong>' . $firstName . '<br><br>';
  $message .= '<strong>Last Name: </strong>' . $lastName . '<br><br>';
  $message .= '<strong>Email Address: </strong>' . $email . '<br><br>';
  $message .= '<strong>Phone Number: </strong>' . $phone . '<br><br>';
  $message .= '<strong>Inquiry Type: </strong>' . $inquiryType . '<br><br>';
  $message .= '<strong>I am a: </strong>' . $iAm . '<br><br>';

  // if (mail("miguel@creainteractivo.com",$subject,$message)) {
  //   echo "<script language='javascript'>
  //           alert('Mensaje enviado, muchas gracias.');
  //         </script>";
  // } else {
  //   echo "<script language='javascript'>
  //           alert('fallado');
  //         </script>";
  // }
 mail("miguel@creainteractivo.com",$subject,$message);
}

?>

<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Phenomix</title>
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <!-- librerias -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/dist/animate/animate.css">

  <!-- css -->
  <link rel="stylesheet" href="assets/css/font.css">
  <link rel="stylesheet" href="assets/css/loader.css">
  <link rel="stylesheet" href="assets/css/main.css">

  <link rel="stylesheet" href="assets/css/nav.css">
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="stylesheet" href="assets/css/footer.css">

  <script src="scripts/vendor/modernizr.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <style>
    .page-send-mail {
      min-height: calc(100vh - 50px);
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- preloader -->
  <?php include 'index/preloader.php'; ?>

  <main>
    <?php include 'index/nav_2.php'; ?>

    <div id="contact" class="pt-5">
      <section class="container page-send-mail pt-5">
        <h2>Your message has been sent</h2>
      </section>
    </div>

    <?php include 'index/footer.php'; ?>
  </main>

  <script src="scripts/vendor.js"></script>
  <script src="scripts/main.js"></script>
</body>
</html>