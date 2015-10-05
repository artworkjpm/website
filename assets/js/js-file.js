
/*drop down menus, arrows*/
var arrow = $("i.fa.fa-chevron-right");

$(".dropdown").on("click", function (event) {
  $(this).find(arrow).toggleClass("arrow-down");
  $(this).parent().next("ul.hidden").toggleClass("hidden-block");
  event.preventDefault();
});


/*menu bar resposive*/
var bar = $(".hidden-bar");
var logo = $(".logo");
var left = $(".main-container-left");
var right = $(".main-container-right");

bar.on("click", function () {
  logo.toggleClass("hiddenDiv");
  left.toggleClass("show");
  right.toggleClass("hiddenDiv");

});

/*menu change color*/

$('ul[class="NoDots"] > li, ul[class="hidden"] > li').on("click", function () {
  $('ul[class="NoDots"]').find("li.colorIt").removeClass("colorIt");
  $(this).toggleClass("colorIt");

  if ($('ul[class="NoDots"] > li.green').hasClass("colorIt")) {

    $('ul[class="NoDots"] > li.green').removeClass("colorIt");
  }

});

//remove previous page button

  if ($.trim ($('div.btn.alignleft').text() ).length === 0){
    $('div.btn.alignleft').hide()
  } else{
    $('div.btn.alignleft').show();
  };

if ($.trim ($('div.btn.alignright').text() ).length === 0){
    $('div.btn.alignright').hide()
  } else{
    $('div.btn.alignright').show();
  };

//open linkedIn in new tab

$(".linkedin .profile #cartouche").find("a").attr("target", "_blank");

//Tob banner slider
//make divs slide from right to left
/*(function(){
$("div.home-banner").children().first().show('slide', {
        'direction' : 'right',
        'distance' : '1000px'
    }, 1000).delay("1000").next().show(); 
})();*/

$("div.home-banner").children().hide().each(function(i) {
    var target = $(this);
    setTimeout(function() {
        target.show('bounce', 'slow');
    }, 400 * i);
});

