<!doctype html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
  	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<title>Phenomix</title>
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- librerias -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/dist/swiper/dist/css/swiper.css">
	<link rel="stylesheet" href="assets/dist/slick-1.8.1/slick/slick.css">
	<link rel="stylesheet" href="assets/dist/animate/animate.css">

	<!-- css -->
	<link rel="stylesheet" href="assets/css/font.css">
	<link rel="stylesheet" href="assets/css/loader.css">
	<link rel="stylesheet" href="assets/css/main.css">

	<link rel="stylesheet" href="assets/css/nav.css">

	<link rel="stylesheet" href="assets/css/home.css">
	<link rel="stylesheet" href="assets/css/maximizin-weight-loss.css">
	<link rel="stylesheet" href="assets/css/maximizin-weight-loss-2.css">
	<link rel="stylesheet" href="assets/css/why-it-works.css">
	<link rel="stylesheet" href="assets/css/how-it-works.css">
	<link rel="stylesheet" href="assets/css/what-others-are-saying.css">
	<link rel="stylesheet" href="assets/css/licences.css">
	<link rel="stylesheet" href="assets/css/contact.css">

	<link rel="stylesheet" href="assets/css/footer.css">
	
	<link rel="stylesheet" href="assets/css/affiliations.css">
	<link rel="stylesheet" href="assets/css/four-phenotypes.css">
	<link rel="stylesheet" href="assets/css/publications.css">
	<script src="scripts/vendor/modernizr.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!--Popup Legales-->
	<script type="text/javascript" src="js/jquery.2.2.0.js"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<style>
		nav .menu ul.menu-center li{
			padding: 0 10px;
		}
		nav .menu ul.menu-center li:after{
			display: none !important;
		}
	</style>
</head>
<body id="page-" onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- cookies -->
<?php include 'index/cookies.php'; ?>
<!-- preloader -->
<?php include 'index/preloader.php'; ?>

<main>
	<!-- Barra Nav -->
	<?php include 'index/nav.php'; ?>

	<div class="swiper-container">
		<div class="swiper-wrapper">
			<!-- Home -->
			<?php include 'index/seccion1.php'; ?>
			<!-- Maximizing Weight Loss -->
			<?php include 'index/seccion2.php'; ?>
<!-- Maximizing Weight Loss 2 -->
<?php include 'index/seccion3.php'; ?>
			<!-- Why It Works -->
			<?php include 'index/seccion4.php'; ?>
<!-- Why It Works 2 -->
<?php include 'index/seccion5.php'; ?>
			<!-- How It Works -->
			<?php include 'index/seccion6.php'; ?>			
			<!-- What Others Are Saying -->
			<?php include 'index/seccion7.php'; ?>
			<!-- Licences -->
			<?php include 'index/seccion8.php'; ?>
<!-- Licences 2 -->
<?php include 'index/seccion9.php'; ?>
			<!-- Contact -->
			<?php include 'index/seccion10.php'; ?>
		</div>
		<div class="swiper-pagination"></div>

		<!-- Modales -->
		<?php include 'index/modales.php'; ?>
	</div>
	<!-- Footer -->
	<?php include 'index/footer-index.php'; ?>
	
</main>
<!-- desconocidas -->
<script>
if (window.matchMedia("(min-width: 992px)").matches) {
  /* La pantalla tiene al menos 992 píxeles de ancho */
  let maximizin = document.getElementById("maximizin-weight-loss-2");
	let maximizin_padre = maximizin.parentNode;
	let maximizin_padre2 = maximizin_padre.parentNode
	maximizin_padre2.removeChild(maximizin_padre);

	let why = document.getElementById("why-it-works-2");
	let why_padre = why.parentNode;
	let why_padre2 = why_padre.parentNode
	why_padre2.removeChild(why_padre);

	let licences2 = document.getElementById("licences2");
	let licences2_padre = licences2.parentNode;
	let licences2_padre2 = licences2_padre.parentNode
	licences2_padre2.removeChild(licences2_padre);
}

</script>
<script src="scripts/vendor.js"></script>
<script src="scripts/main.js"></script>

<!--popup legales-->
<script type="text/javascript" src="js/jquery.fullpage.js"></script>
<script type="text/javascript" src="js/flowtype.js"></script>
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<script src="js/lightbox.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	// iOS web app full screen hacks.
	if(window.navigator.standalone == true) {
		// make all link remain in web app mode.
		$('a').click(function() {
			window.location = $(this).attr('href');
			return false;
		});
	}
});
</script>

</body>
</html>