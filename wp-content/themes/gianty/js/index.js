;(function($, win){
  "use strict";
  var
    $win,
    slider,
    $slider,
    $itemSlider,
    $itemCommuni,
    $itemLean,
    $itemHRT,
    $itemApuri,
    $itemMVP,
    winHeight,
    winWidth,
    timer,
    itemLength,

    current = 0,
    interval = 9000,

  init = function(){
    $win = $(win);
    $slider = $(".slider_main");
    $itemSlider = $slider.find("li");
    itemLength = $itemSlider.length;
    $itemCommuni = $slider.find(".communication");
    $itemLean = $slider.find(".lean")
    $itemHRT = $slider.find(".hrt")
    $itemApuri = $slider.find(".apuri");
    $itemMVP = $slider.find(".mvp");

    $itemSlider.find("img").hide();

    $win.on({
      "load resize": resize
    }).trigger("load");

    slideFade();
    timer = setTimeout(autoSlide, interval);
  },

  resize = function(){
    winWidth = $win.width();
    winHeight = $win.height();

    var sliderMainWidth = $slider.width();

    var eachHeight = sliderMainWidth * 0.25104 * 0.6556;
    var bothHeight = eachHeight + sliderMainWidth * 0.25104 * 0.639;

    $slider.css({"height":  eachHeight + bothHeight + "px"});
    // Communication
    $itemCommuni.find(".communi_4, .communi_8, .communi_9").css({"top": eachHeight + "px"});
    $itemCommuni.find(".communi_5, .communi_6, .communi_7").css({"top": bothHeight + "px"});
    // Lean
    $itemLean.find(".lean_4").css({"top": bothHeight + "px"});
    $itemLean.find(".lean_5, .lean_6").css({"top": eachHeight + "px"});
    // HRT
    $itemHRT.find(".hrt_4, .hrt_5").css({"top": bothHeight + "px"});
    $itemHRT.find(".hrt_6, .hrt_7").css({"top": eachHeight + "px"});
    // Apuri
    $itemApuri.find(".apuri_4, .apuri_5").css({"top": bothHeight + "px"});
    $itemApuri.find(".apuri_6, .apuri_7").css({"top": eachHeight + "px"});
    // MVP
    $itemMVP.find(".mvp_4, .mvp_7").css({"top": eachHeight + "px"});
    $itemMVP.find(".mvp_5, .mvp_6").css({"top": bothHeight + "px"});

    //set equal height TOP page
    var 
        $section = $('.section'),
        $news = $('#news_box'),
        $faq = $('#faq_box'),
        equalHeight = $news.height() > $faq.height() ? $news.height() : $faq.height() ;
    if($win.width()>640) {
      $section.css({
        'height' : equalHeight + 'px'
      });  
    } else {
      $section.removeAttr('style');
    }
    

  },

  slideFade = function(){

    $itemSlider.hide(function(){
      $(this).find("img").hide();
    }).removeClass("active");

    $itemSlider.eq(current).show(function(){
      var
      delay = 0,
      $thisImg = $(this).find("img");

      $thisImg.each(function(index){
        $(this).delay(delay).fadeIn();
        delay += 300;
      });

    }).addClass("active");

  },

  autoSlide = function(){
    clearTimeout(timer);
    current = current + 1 > itemLength - 1 ? 0 : current + 1;
    slideFade();
    timer = setTimeout(autoSlide, interval);
  };

  //document.ready
  $(function(){
    init();
  });

})(jQuery, window);