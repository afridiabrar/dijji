// Pre Loader Js
$(window).on("load", function () {
  console.log("test");
  $("#preloader").fadeOut(1000);
});
// Pre Loader Js

// On Scroll Add Class
// $(window).scroll(function () {
//   if ($(this).scrollTop() > 100) {
//     $("header").addClass("active");
//   } else {
//     $("header").removeClass("active");
//   }
// });
// On Scroll Add Class

// Mobile Header Js
$("header .canvas_btn").click(function () {
  $(".mobile_header").addClass("show");
});

$(".mobile_header .cancel").click(function () {
  $(".mobile_header").removeClass("show");
});
// Mobile Header Js

// Mobile screen Animation
document.addEventListener("mousemove", parallax);
function parallax(e) {
  this.querySelectorAll(".layer").forEach((layer) => {
    const speed = layer.getAttribute("data-speed");

    const x = (window.innerWidth - e.pageX * speed) / 100;
    const y = (window.innerHeight - e.pageY * speed) / 100;

    layer.style.transform = `translateX(${x}px) translateY(${y}px)`;
  });
}
jQuery(document).ready(function ($) {
  var alterClass = function () {
    var ww = document.body.clientWidth;
    if (ww < 991) {
      $(".banner_sec .center-mobile img").removeClass("layer");
    } else {
      $(".banner_sec .center-mobile img").addClass("layer");
    }
  };
  $(window).resize(function () {
    alterClass();
  });
  //Fire it when the page first loads:
  alterClass();
});
// Mobile screen Animation

// Menu Active Js
// const CurrentLocation = location.href;
// const menuItem = document.querySelectorAll(".navs-menu li a");
// const menuLength = menuItem.length;
// for (let i = 0; i < menuLength; i++) {
//   if (menuItem[i].href === CurrentLocation) {
//     menuItem[i].className = "active_tab";
//   }
// }
// Menu Active Js
