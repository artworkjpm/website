var $fly = $('.fly');
$(document).ready(function () {
  setInterval(function () {
    $(".dance").effect("bounce", {
      distance: 20
    });
  }, 1500);

  setInterval(function () {
    $(".slide-in").effect("slide", {
      distance: 500,
      direction: "left"
    });
  }, 2000);

  setInterval(function () {
    $(".highlight").effect("highlight", {
      color: 'yellow'
    }, 3000);
  }, 3000);

  

  $(".toggle-effects").on("click", function () {
    $(this).text(function (i, text) {
      return text === "Turn off effects" ? "Turn on effects" : "Turn off effects";
    })

    $("#spin").toggleClass("spin");
    $("#dance").toggleClass("dance");
    $("#slide-in").toggleClass("slide-in");
    $("#film").toggleClass("highlight");
    $("#travel").toggleClass("fly");

  }); //end of button click



}); // end of ready function