//SP用メニューボタンクリック
$(".menu-trigger").on('click', function(e) {
  e.preventDefault();
  $(this).toggleClass("active");
  $(".header_menu_wrap").toggleClass("active");
});


//TOP FV アンカーリンク
$("#top_fv_anchor").on('click', function(e) {
  e.preventDefault();
  var target = $(".top_service_sec");
  var position = (target.offset().top) - 50;
  $("html, body").animate({scrollTop:position}, 500, "swing");
});


// ------------ ある程度スクロールしたら Header を少し小さく  ------------

var wWidth = $(window).width();
var wHeight = $(window).height();
var wHeightBorder = wHeight * 0.2;
$(window).scroll(function (){

  var scroll = $(window).scrollTop();
  if(scroll > wHeightBorder){
    $(".header").addClass("minimize");
    $(".menu_button").addClass("minimize");
    if(wWidth > 768){
      $(".header_menu_wrap").addClass("minimize");
    }
  }else{
    $(".header").removeClass("minimize");
    $(".header_menu_wrap").removeClass("minimize");
    $(".menu_button").removeClass("minimize");
  }

});



$(function(){
});
