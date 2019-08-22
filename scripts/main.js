$(document).ready(function(){
  var i = new Swiper(".swiper-container", {
    direction: "vertical",
    mousewheel: !0,
    simulateTouch: false,
    speed: 1200,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    hashNavigation: {
      watchState: true,
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

  $("#slick-licences").slick({
    slidesToShow: 4,
    autoplay: !0,
    prevArrow: $("#slick-licences-prev"),
    nextArrow: $("#slick-licences-next"),
    infinite: !0,
    responsive: [{
      breakpoint: 990,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }]
  });

  $("#slick-phenotype").slick({
    slidesToShow: 1,
    prevArrow: $("#slick-phenotype-prev"),
    nextArrow: $("#slick-phenotype-next"),
    infinite: !0,
  });

  $("#slick-publications").slick({
    slidesToShow: 3,
    prevArrow: $("#slick-publications-prev"),
    nextArrow: $("#slick-publications-next"),
    infinite: !0,
    responsive: [{
      breakpoint: 990,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

  $("#slick-affiliations").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $("#slick-affiliations-prev"),
    nextArrow: $("#slick-affiliations-next"),
    infinite: !0,
    responsive: [{
      breakpoint: 990,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

  if (null != Cookies.get("gpdr")){
    $(".GPDR-white").fadeOut(function () {
      $('[data-toggle="appear"]').each(function () {
        var e = $(this);
        e.appear(function () {
          e.addClass("animated slow " + e.data("appearClass"))
        })
      })
    });
  }else{
    $("#modalGPDR").modal({
      backdrop: "static",
      keyboard: !1
    });
  }

  $("#modalGPDR").on("hidden.bs.modal", function (e) {
    window.scrollTo(0, 0);
    Cookies.set("gpdr", !0);
    $(".GPDR-white").fadeOut(function () {
      $('[data-toggle="appear"]').each(function () {
        var e = $(this);
        e.appear(function () {
          e.addClass("animated slow " + e.data("appearClass"))
        })
      })
    })
  });

  $(".slick-saying").slick({
    arrows: !1,
    dots: !0,
    fade: !0,
    appendDots: $("#what-others-are-saying .slick-dots-container")
  });

  $("#what-others-are-saying .slick-dots-container button").on("click", function (e) {
    e.preventDefault();
    var s = $(this);
    return $(".slick-saying .slick-slide.slick-active").removeClass("slick-active"), setTimeout(function () {
      $(".slick-saying").slick("slickGoTo", parseInt(s.text()) - 1)
    }, 1000), !1
  });

  $("#what-others-are-saying .arrow-left").on("click", function (e) {
    e.preventDefault(), $(".slick-saying .slick-slide.slick-active").removeClass("slick-active"), setTimeout(function () {
      $(".slick-saying").slick("slickPrev")
    }, 1000)
  });

  $("#what-others-are-saying .arrow-right").on("click", function (e) {
    e.preventDefault(), $(".slick-saying .slick-slide.slick-active").removeClass("slick-active"), setTimeout(function () {
      $(".slick-saying").slick("slickNext")
    }, 1000)
  });

  $("#how-it-works .slick").slick({
    dots: !0,
    appendDots: $("#how-it-works .slick-dots-container"),
    prevArrow: $("#how-it-works .arrow-left"),
    nextArrow: $("#how-it-works .arrow-right"),
    adaptiveHeight: !0
  });

  $("#how-it-works .slick").on("afterChange", function (e, s, i) {
    $(".slick-paginator-lg div:eq(" + i + ")").addClass("active");
    $("nav").removeClass("active");
  });

  $("#how-it-works .slick").on("beforeChange", function (e, s, i) {
    $(".slick-paginator-lg div.active").removeClass("active");
  });

  $(".slick-paginator-lg div").each(function (s, e) {
    $(this).click(function (e) {
      e.preventDefault(), $(".slick-paginator-lg div.active").removeClass("active"), $(".slick").slick("slickGoTo", s), $(this).addClass("active")
    })
  });

  $("#four-phenotypes .slick-phenotypes").slick({
    prevArrow: $("#four-phenotypes .arrow-left"),
    nextArrow: $("#four-phenotypes .arrow-right"),
    responsive: [{
      breakpoint: 1990,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        dots: !0,
        appendDots: $("#four-phenotypes .slick-dots-container")
      }
    }]
  });

  $("[data-close]").click(function (e) {
    e.preventDefault(), $("nav, footer").fadeIn(), $($(this).data("close")).removeClass("show")
  });

  $("[data-modall]").click(function (e) {
    e.preventDefault(), $("nav, footer").fadeOut(), $($(this).data("modall")).addClass("show")
  });

  if ($(window).width() < 992) {
    $(".im").addClass("item-mobile")
    $(".item-mobile").slideUp(1000);
  }

  $(window).resize(function(){
    if ($(window).width() < 992) {
      $(".im").addClass("item-mobile")
      $(".item-mobile").slideUp(1000);
    } else {
      $(".item-mobile").slideDown(1000);
      $(".im").removeClass("item-mobile")
    }
  })

  $(window).on("load", function() {
    // 1. preloader
    $("#preloader").fadeOut(600);
    $(".preloader-bg").delay(400).fadeOut(600);

    // 2. fadeIn.element
    setTimeout(function() {
      $(".fadeIn-element").delay(600).css({
        display: "none"
      }).fadeIn(800);
    }, 0);
  });

  // MOBILE
  $(".opener").click(function (e) {
    e.preventDefault();
    if ($(this).hasClass("active")){
      $("nav").removeClass("active");
      $(".opener").removeClass("active");
      $(".item-mobile").slideUp(1000);
    } else {
      $("nav").addClass("active");
      $(".opener").addClass("active");
      $(".item-mobile").slideDown(1000);
    }
  });

  $("a.logo").click(function(){
    $("nav").removeClass("active");
    $(".opener").removeClass("active");
    $(".item-mobile").slideUp(1000);
  })

  $(".item-mobile").click(function(){
    $("nav").removeClass("active");
    $(".opener").removeClass("active");
    $(".item-mobile").slideUp(1000);
  });
})
