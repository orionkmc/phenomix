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
<body id="page-">
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
	<?php include 'index/footer.php'; ?>
	
</main>

<script>!function(e,a,t,n,g,c){e.GoogleAnalyticsObject=n,e.ga||(e.ga=function(){(e.ga.q=e.ga.q||[]).push(arguments)}),e.ga.l=+new Date,g=a.createElement(t),c=a.getElementsByTagName(t)[0],g.src="https://www.google-analytics.com/analytics.js",c.parentNode.insertBefore(g,c)}(window,document,"script","ga"),ga("create","UA-XXXXX-X"),ga("send","pageview");</script>
<!-- desconocidas -->
<script src="scripts/vendor.js"></script>
<script src="scripts/main.js"></script>

<!--popup legales-->
<script type="text/javascript" src="js/jquery.fullpage.js"></script>
<script type="text/javascript" src="js/flowtype.js"></script>
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<script src="js/lightbox.js"></script>
</body>
</html>