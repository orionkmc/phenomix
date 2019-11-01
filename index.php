<!doctype html>
<html class="no-js">
<head>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-53655719-1']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
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
	<link rel="stylesheet" href="assets/css/obesity-phenotyping.css">
	<link rel="stylesheet" href="assets/css/obesity-phenotyping-2.css">
	<link rel="stylesheet" href="assets/css/maximize-your-weight-loss.css">
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
			<!-- Obesity Phenotyping -->
			<?php include 'index/seccion2.php'; ?>
			<!-- Obesity Phenotyping 2 -->
			<?php include 'index/seccion3.php'; ?>
			<!-- Maximize Your Weight Loss -->
			<?php include 'index/seccion4.php'; ?>
			<!-- Maximize Your Weight Loss 2 -->
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
		let obesity = document.getElementById("obesity-phenotyping-2");
		let obesity_padre = obesity.parentNode;
		let obesity_padre2 = obesity_padre.parentNode
		obesity_padre2.removeChild(obesity_padre);

		let maximize = document.getElementById("maximize-your-weight-loss-2");
		let maximize_padre = maximize.parentNode;
		let maximize_padre2 = maximize_padre.parentNode
		maximize_padre2.removeChild(maximize_padre);

		let licences2 = document.getElementById("licences2");
		let licences2_padre = licences2.parentNode;
		let licences2_padre2 = licences2_padre.parentNode
		licences2_padre2.removeChild(licences2_padre);
	}

</script>
<script src="scripts/vendor.js"></script>
<script src="https://rawgit.com/Promo/wheel-indicator/master/lib/wheel-indicator.js"></script>

<!--popup legales-->
<script type="text/javascript" src="js/jquery.fullpage.js"></script>
<script type="text/javascript" src="js/flowtype.js"></script>
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<script src="js/lightbox.js"></script>
<script src="scripts/main.js" async="async"></script>
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

	var i = new Swiper(".swiper-container", {
		direction: "vertical",
		mousewheel: false,
		simulateTouch: false,
		speed: 1200,
		keyboard: {
			enabled: true,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		hashNavigation: {
			watchState: true,
		}
	});
	var indicator = new WheelIndicator({
		elem: document.querySelector('.swiper-container'),
		callback: function(e){
			if(e.direction == 'up') i.slidePrev();
			else i.slideNext();
		}
	});

	$(".scroll-down").click(function (e) {
		e.preventDefault();
		i.slideNext();
	});

	i.on("slideChangeTransitionEnd", function (e, s) {
		0 < i.activeIndex ? $("nav").addClass("collapsed") : $("nav").removeClass("collapsed");
		6 == i.activeIndex ? $(".scroll-down").removeClass("show") : $(".scroll-down").addClass("show");
		$('.swiper-slide-active [data-toggle="appear"]').each(function () {
			var e = $(this);
			e.addClass("animated slow " + e.data("appearClass"))
		})
	});

	$(".swiper-container").length && (0 < i.activeIndex ? $("nav").addClass("collapsed") : $("nav").removeClass("collapsed"));

	$("*[data-slide]").click(function (e) {
		e.preventDefault();
		let a = $(this).attr("href").includes(window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1))
		if (a) {
			i.slideTo($(this).data("slide"));
			$(".menu").hasClass("open") && $(".menu").removeClass("open")
		} else{
			window.location = $(this).attr("href")
		}
	})
});
	setTimeout(function(){
		$("#preloader").fadeOut(600);
		$(".preloader-bg").delay(400).fadeOut(600);
	}, 6000);
</script>

</body>
</html>