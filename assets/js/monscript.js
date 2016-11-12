$(document).ready(function (){
  $("#arrow").click(function (){
    $('html, body').animate({
      scrollTop: $("#news").offset().top
    }, 1000);
  });
});
