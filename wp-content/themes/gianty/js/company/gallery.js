;(function($){
  "use strict";

  var
    $smallImg,
    $mainImg,
    $mainGallery,

    current = 0,

  init = function(){
    $mainGallery = $("#gallery .main_gallery")
    hoverImg();
  },

  hoverImg = function(){
    $mainGallery.each(function(index){
      $smallImg = $(this).find(".small_gallery li");
      $smallImg.on({
        "mouseover": function(){
          current = $(this).index();
          $mainImg = $(this).parents(".main_gallery").find(".big_image");
          $mainImg.find("li").removeClass("current").hide();
          $mainImg.find("li").eq(current).addClass("current").stop().fadeIn(500);
        }
      })
    });
  };

  //document.ready
  $(function(){
    init();
  });

})(jQuery);