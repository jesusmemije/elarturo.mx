/*Initialize Slick*/
const $left = $(".left");
const $gl   = $(".gallery");
const $gl2  = $(".gallery2");
const $photosCounterFirstSpan = $(".photos-counter span:nth-child(1)");

$gl2.on("init", (event, slick) => {
  $photosCounterFirstSpan.text(`${slick.currentSlide + 1}/`);
  $(".photos-counter span:nth-child(2)").text(slick.slideCount);
});

$gl.slick({
  rows: 0,
  slidesToShow: 2,
  arrows: false,
  draggable: false,
  useTransform: false,
  mobileFirst: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 1023,
      settings: {
        slidesToShow: 1,
        vertical: true,
      },
    },
  ],
});

$gl2.slick({
  rows: 0,
  useTransform: false,
  prevArrow: ".arrow-left",
  nextArrow: ".arrow-right",
  fade: true,
  asNavFor: $gl,
});

function handleCarouselsHeight() {
  if (window.matchMedia("(min-width: 1024px)").matches) {
    const gl2H = $(".gallery2").height();
    $left.css("height", gl2H);
  } else {
    $left.css("height", "auto");
  }
}

$(window).on("load", () => {
  handleCarouselsHeight();
  setTimeout(() => {
    $(".loading").fadeOut();
    $("body").addClass("over-visible");
  }, 300);
});

$(window).on(
  "resize",
  _.debounce(() => {
    handleCarouselsHeight();
    /*You might need this code in your projects*/
    //$gl1.slick("resize");
    //$gl2.slick("resize");
  }, 200)
);

$(".gallery .item").on("click", function () {
  const index = $(this).attr("data-slick-index");
  $gl2.slick("slickGoTo", index);
});

$gl2.on("afterChange", (event, slick, currentSlide) => {
  $photosCounterFirstSpan.text(`${slick.currentSlide + 1}/`);
});
