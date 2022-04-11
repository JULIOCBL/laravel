/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/scripts.js ***!
  \*********************************/
$(document).ready(function () {
  $("#autoWidth").lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function onSliderLoad() {
      $("#autoWidth").removeClass("cS-hidden");
    }
  });
});

function menu() {
  var menu = document.getElementById("menu");

  if (document.querySelector("#menu.activo")) {
    $("#menu").removeClass("activo");
    /*      $(".linea1").removeClass("background", "#000"); */

    $(".color").css("background", "#175dd4");
    $(".linea2").css("transform", "rotate(45deg)");
    $(".linea3").css("margin", "-1px");
    $(".linea3").css("transform", "rotate(-45deg)");
  } else {
    $("#menu").addClass("activo");
    $(".color").css("background", "white");
    $(".linea2").css("margin", "0px");
    $(".linea2").css("transform", "rotate(1deg)");
    $(".linea3").css("margin", "0px");
    $(".linea3").css("transform", "rotate(0deg)");
  }
}
/******/ })()
;