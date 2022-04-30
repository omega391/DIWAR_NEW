var swiper = new Swiper(".mySwiper", {
  direction: "vertical",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

//dashboard
$(document).ready(function () {
  $(".dashboard-pages .page").hide();
  $(".dashboard-pages .page:first-child").show();

  $(".verticalMenu ul li").click(function () {
    $(".verticalMenu ul li").removeClass("active");
    $(this).addClass("active");

    var current_tab = $(this).attr("data-list");
    $(".dashboard-pages .page").hide();
    $("." + current_tab).show();
  });
});
