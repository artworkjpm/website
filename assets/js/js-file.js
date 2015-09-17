
/*drop down menus, arrows*/
var arrow = $("i .fa.fa-chevron-right");

$(".dropdown").on("click", function (event) {
  $(this).children(arrow).toggleClass("arrow-down");
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