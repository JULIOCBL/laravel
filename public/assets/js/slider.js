/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/slider.js ***!
  \********************************/
$(document).ready(function () {
  $("#autoWidth").lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function onSliderLoad() {
      $("#autoWidth").removeClass("cS-hidden");
    }
  });
});
/******/ })()
;