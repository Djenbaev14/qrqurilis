/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

document.getElementById("spec-btn").addEventListener("click", (e) => {
  e.target.parentNode.classList.toggle("active");
});

jQuery(document).ready(function ($) {
  $(".SpecialWindow").click(function () {
    $(".OpenSpecialWindow").slideToggle(200);
    return false;
  });

  $("#a1").click(function () {
    parent.$("body *").css("fontSize", "+=0.5");
    $.cookie("fontSize", parent.$("body *").css("fontSize"));
  });
  $("#a2").click(function () {
    parent.$("body *").css("fontSize", "-=0.5");
    $.cookie("fontSize", parent.$("body *").css("fontSize"));
  });
  $("#a0").click(function () {
    parent.$("body *").css("fontSize", "");
    $.cookie("fontSize", parent.$("body *").css("fontSize"));
  });
  $("#c0").click(function () {
    parent.$("body *").css("background", "");
    parent.$("body *").css("color", "");
    parent.$("img").css("-webkit-filter", "");
    $.cookie("background", "");
    $.cookie("color", "");
    $.cookie("img-color", "");
  });
  $("#c1").click(function () {
    parent.$("body *").css("background", "#fff");
    parent.$("body *").css("color", "#000");
    parent.$("img").css("-webkit-filter", "grayscale(100%)");
    $.cookie("background", "#fff");
    $.cookie("color", "#000");
    $.cookie("img-color", "grayscale(100%)");
  });
  $("#c2").click(function () {
    parent.$("body *").css("background", "#000");
    parent.$("body *").css("color", "#fff");
    parent.$("img").css("-webkit-filter", "grayscale(1)");
    $.cookie("background", "#000");
    $.cookie("color", "#fff");
    $.cookie("img-color", "grayscale(1)");
  });
  $("#c3").click(function () {
    parent.$("body *").css("background", "#6699FF");
    parent.$("body *").css("color", "#fff");
    parent.$("img").css("-webkit-filter", "grayscale(100%)");
    $.cookie("background", "#6699FF");
    $.cookie("color", "#fff");
    $.cookie("img-color", "grayscale(100%)");
  });
  $("#c4").click(function () {
    parent.$("body *").css("background", "#f7f3d6");
    parent.$("body *").css("color", "#4d4b43");
    parent.$("img").css("-webkit-filter", "sepia(100%)");
    $.cookie("background", "#f7f3d6");
    $.cookie("color", "#4d4b43");
    $.cookie("img-color", "sepia(100%)");
  });
  $("#c5").click(function () {
    parent.$("body *").css("background", "#3b2716");
    parent.$("body *").css("color", "#a9e44d");
    parent.$("img").css("-webkit-filter", "hue-rotate(240deg)");
    $.cookie("background", "#3b2716");
    $.cookie("color", "#a9e44d");
    $.cookie("img-color", "hue-rotate(240deg)");
  });

  $("#reset").click(function () {
    $.cookie("inter", "");
    $.cookie("fontSize", "");
    $.cookie("letter-spacing", "");
    $.cookie("font-family", "");
    $.cookie("img", "");
    $.cookie("img-color", "");
    $.cookie("color", "");
    $.cookie("background", "");
    $.cookie("font-family", "");
    return false;
  });
});