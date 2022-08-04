$(window).scroll(() => {
  if ($(this).scrollTop() >= 120) {
    $(".general-header").addClass("header-fixed");
  } else {
    $(".general-header").removeClass("header-fixed");
  }
});
$(window).scroll(() => {
  $(this).scrollTop() >= 120
    ? $(".scroll-btn").addClass("show")
    : $(".scroll-btn").removeClass("show");
});
$(".scroll-btn").on("click", () => {
  $("html").scrollTop(0);
});
const done = () => {
  $(".preloader-content").hide();
};
$(".nav-menu-button").on("click", () => {
  $(".mobile-nav-menu").toggleClass("active");
  $(".nav-menu-button i").toggleClass("fa-times")
  $(".nav-menu-button i").toggleClass("fa-bars")
});
$(".close-btn").on("click", () => {
  $(".sub-menu-container").removeClass("active");

});
$(".banner-carousel").owlCarousel({
  loop: true,
  singleItem: true,
  navs: false,
  dots: true,
  responsive: {
    0: {
      items: 1,
    },
    1200: {
      items: 1,
    },
  },
});
$(".category-carousel").owlCarousel({
  loop: true,
  singleItem: true,
  navs: false,
  dots: false,
  margin: 10,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 2,
    },
    900: {
      items: 3,
    },
    1200: {
      items: 4,
    },
  },
});
$(".partners-carousel").owlCarousel({
  loop: true,
  singleItem: true,
  dots: false,
  margin: 20,
  responsive: {
    0: {
      items: 2,
    },
    800: {
      items: 3,
    },
    1200: {
      items: 4,
    },
  },
});
$(".testimonial-carousel").owlCarousel({
  loop: true,
  singleItem: true,
  dots: false,
  margin: 20,
  responsive: {
    0: {
      items: 1,
    },
    800: {
      items: 2,
    },
    1200: {
      items: 2,
    },
  },
});
$(".gallery-carousel").owlCarousel({
  loop: true,
  singleItem: true,
  dots: false,
  nav: true,
  navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
  responsive: {
    0: {
      items: 1,
    },

    576: {
      items: 2,
    },
    768: {
      items: 3,
    },
    998: {
      items: 4,
    },
    1200: {
      items: 5,
    },
  },
});

$(".video-carousel").owlCarousel({
  loop: true,
  singleItem: true,
  dots: false,
  margin:10,
  navs: true,
  responsive: {
    0: {
      items: 1,
    },
    700: {
      items: 2,
    },
    1100: {
      items: 3,
    },
  },
});



