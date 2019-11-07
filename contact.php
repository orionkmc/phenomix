<!doctype html>
<html class="no-js">
<head>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-151332690-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
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

</head>
<body id="page-contact">
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- cookies -->
<?php include 'index/cookies.php'; ?>
<!-- preloader -->
<?php include 'index/preloader.php'; ?>


<main>
	<?php include 'index/nav_2.php'; ?>

	<div id="contact" class="pt-5">
		<section class="container contact-form pt-5">
			<form method="post" action="contact-mail.php" data-toggle="appear" data-appear-class="fadeInDownTwo" class="appear" onsubmit="_gaq.push(['_trackEvent', 'desktop', 'contact', 'contact'])">
       <div class="row">
        <div class="col-12">
         <h1>We're Here to Help</h1>
       </div>
     </div>
     <div class="row">
      <div class="col-lg-4 contact-form-phone">
        <div class="row pb-0 pb-lg-3">
          <div class="col-3 d-flex align-items-center">
            <img src="assets/images/icon-mail.png" class="img-fluid">
          </div>
          <div class="col-9 p-0 text-center text-direction">
            <strong>info@phenomixsciences.com</strong><br>
            1000 Westgate Drive<br>
            Suite 1002-1003<br>
            St. Paul, MN 55114<br>
          </div>
        </div>
        <div class="row">
          <div class="col-3 d-flex align-items-center">
            <img src="assets/images/icon-phone.png" class="img-fluid">
          </div>
          <div class="col-9 p-0 text-direction text-center d-flex align-items-center justify-content-center">
            <p class="m-0">
              <strong>1-877-673-0981</strong>
              <br>
            (Toll Free)</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group mb-0 mb-lg-3">
          <input type="text" class="form-input" id="firstName" name="firstName" placeholder="First Name">
        </div>
        <div class="form-group mb-0 mb-lg-3">
          <input type="text" class="form-input" id="lastName" name="lastName" placeholder="Last Name">
        </div>
        <div class="form-group mb-0 mb-lg-3 required">
          <div class="as"></div>
          <input type="email" class="form-input" id="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="form-group mb-0 mb-lg-3 ">
          <p class="d-none p-0 d-lg-block">(*) Required fields</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group mb-0 mb-lg-3 required">
          <div class="as"></div>
          <input type="text" class="form-input" id="phone" name="phone" placeholder="Phone Number" required>
        </div>
        <div class="form-group mb-0 mb-lg-3 form-group-select">
          <select class="form-select" id="inquiryType" name="inquiryType">
            <option class="d-none">Inquiry Type</option>
            <option>Questions about testing</option>
            <option>Billing inquiries</option>
            <option>Media inquiry</option>
            <option>Investment inquiries</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group mb-0 mb-lg-3 form-group-select required">
          <select class="form-select" id="iAm" name="iAm">
            <option class="d-none">I am a...</option>
            <option>Patient</option>
            <option>Healthcare Provider</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group mb-0 mb-lg-3 ">
          <p class="d-block d-lg-none">(*) Required fields</p>
        </div>
        <div class="form-group mb-0 mb-lg-3 mb-3">
          <label class="container-label text-right" for="customRadioInline1">
            <input type="checkbox" id="customRadioInline1" name="customRadioInline1" class="checkmark" required>
            <span class="checkmark"></span>
            Accept Terms & Conditions
          </label>
        </div>  
        <div class="style-submit col-lg-9 offset-lg-3 px-lg-0">
          <input type="submit" id="submit" name="submit" class="btn-block" value="SEND">
        </div>
      </div>
    </div>
  </form>
</section>
</div>

<!-- Modall Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-login" role="document">
   <div class="modal-content modal-content-login">
    <div class="modal-body">
     <form action="">
      <div class="form-group required border-form-input row mx-2">
       <label for="username" class="col-2 col-form-label"><i class="fas fa-user"></i></label>
       <div class="col-10">
        <input type="text" class="form-control form-input text-center" id="username" placeholder="USERNAME">
      </div>
    </div>
    <div class="form-group required border-form-input row mx-2">
     <label for="password" class="col-2 col-form-label"><i class="fas fa-lock"></i></label>
     <div class="col-10">
      <input type="text" class="form-control form-input text-center" id="password" placeholder="PASSWORD">
    </div>
  </div>
  <div class="form-group">
   <button type="submit" class="form-submit">LOGIN</button>
 </div>
 <input type="checkbox" id="rememberLogin" name="rememberLogin" class="input-login">
 <label class="label-login" for="rememberLogin">REMEMBER ME</label>
 <a href="#">FORGOT PASSWORD?</a>
</form>
</div>
</div>
</div>
</div>

<!-- Footer -->
<?php include 'index/footer.php'; ?>
</main>

<script src="scripts/vendor.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>