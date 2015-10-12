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

  
  //turn off effects
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
  
  
  //on load make logos dance
 $(".sliders").hide().each(function(i) {
    var target = $(this);
    setTimeout(function() {
        target.show().effect("bounce", { times: 1 }, "slow");
    }, 400 * i);
});



  //make logos bounce on hover
  $(".sliders").mouseenter(function() {
  $(this).effect( "bounce", { times: 1 }, "slow" );
  });


}); // end of ready function