/* Script Modal Claim */
setTimeout(function () {
  $("#modalclaim").modal("show");
}, 1000);

/* ImageMapResponsive */
$("map").imageMapResize();

/* Abrir modal para evitar text-decoration */
$("#id_modal_cabeza").click(function () {
  $("#modalYqueCabeza").modal("show");
});

$("#id_modal_manos").click(function () {
  $("#modalYqueManos").modal("show");
});

/* Initialize Swiper */
var swiper = new Swiper(".swiper-container", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: false,
  /*autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },*/
  effect: "slide",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

/* Initialize Slick */
$(".gallery").slick({
  prevArrow:
    "<svg class='slick-prev' style='cursor:pointer' width='24' height='24' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd'><path d='M2.117 12l7.527 6.235-.644.765-9-7.521 9-7.479.645.764-7.529 6.236h21.884v1h-21.883z'/></svg>",
  nextArrow:
    "<svg class='slick-next' style='cursor:pointer' width='24' height='24' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd'><path d='M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z'/></svg>",
  centerMode: true,
  centerPadding: "160px",
  arrows: true,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 1,
      },
    },
  ],
});

$(".carousel-content").slick({
  prevArrow:
    "<svg width='24' height='24' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' clip-rule='evenodd'><path d='M2.117 12l7.527 6.235-.644.765-9-7.521 9-7.479.645.764-7.529 6.236h21.884v1h-21.883z'/></svg>",
  nextArrow:
    "<img class='a-right control-c next slick-next' src='../images/shoe_story/arrow-right.png'>",
});

//Suscription to newsletter
$("#subscribe-button").on("click", function (event) {
  event.preventDefault();
  $("#subscribe-button").prop("disabled", true);

  if ($("#email").val() == "") {
    Swal.fire({
      icon: "warning",
      title: "Upps!",
      text: "El campo email es requerido",
    });
    $("#subscribe-button").prop("disabled", false);
  } else {
    jsSubscribe();
  }
});

function jsSubscribe() {
  let params = $("#subscribe-form").serialize();
  let url = "api/newsletter.php";

  $.post(url, params, function (data) {
    if (data == "ok") {
      Swal.fire({
        icon: "success",
        title: "¡Bien!",
        text: "Se ha suscrito al newsletter exitosamente",
      }).then((result) => {
        $("#modalNewsletter").modal('hide');
      });
    } else {
      Swal.fire({
        icon: "error",
        title: "Upps!",
        text: data,
      });
    }
    $("#subscribe-form")[0].reset();
    $("#subscribe-button").prop("disabled", false);

  });
}
