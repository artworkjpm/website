var $fly = $('.fly');
$(document).ready(function () {
  setInterval(function () {
    $(".dance").effect("bounce", {
      distance: 20
    });
  }, 1500);

  setInterval(function () {
    $(".slide-in").effect("slide", {
      distance: 200,
      direction: "left"
    });
  }, 1500);

  setInterval(function () {
    $(".highlight").effect("highlight", {
      color: 'yellow'
    }, 2000);
  }, 1000);

  //fly
  
  

    var flyplane = function(){
      setInterval(function() {
        $fly.animate({
            right: '-=50',
            bottom: '+=50'
        }, 2000, function() {
            $fly.removeAttr("style");
        });
    }, 2000);
 
};
  
  flyplane();
  

  $(".toggle-effects").on("click", function () {
    $(this).text(function (i, text) {
      return text === "Turn off effects" ? "Turn on effects" : "Turn off effects";
    })

    $("#spin").toggleClass("spin");
    $("#dance").toggleClass("dance");
    $("#slide-in").toggleClass("slide-in");
    $("#film").toggleClass("highlight");
   

  }); //end of button click



}); // end of ready function