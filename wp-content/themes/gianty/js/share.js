;(function($){
  "use strict";

  var
    $win, 
    $widthInner,
    $menuHeader,
    $btnMenu,
    $subMenu,
    $btnClose,
    $btnPlus,

    winHeight,
    winWidth,
    heightMenu,
    heightSub,

    spWidth = 640,
    originWidth = 1024,

  init = function(){
    $win = $(window);
    $btnMenu = $("#header .btn_menu");
    $menuHeader = $("#global_nav .inner");
    $btnPlus = $("#global_nav .have_sub");
    $btnClose = $(".btn_close span");

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      menuHeader();
      subMenu();
      if($win.width()<640){
        toggleMenu();
      }
    };
    
    topScroll();
  },

  menuHeader = function(){
    $btnMenu.on({
      "tap click": function(event){
        event.preventDefault();
        if ( $(this).hasClass("open") ) {
          $(this).removeClass("open");
          $(this).find("img").attr("src", $(this).find("img").attr("src").replace("_on","_off") );
          $menuHeader.css("display","none");
        } else {
          $(this).addClass("open");
          $(this).find("img").attr("src", $(this).find("img").attr("src").replace("_off","_on") );
          $menuHeader.css("display","block");
          $btnClose.click(function(event){
            event.preventDefault();
            $btnMenu.removeClass("open");
            $btnMenu.find("img").attr("src", $btnMenu.find("img").attr("src").replace("_on","_off") );
            $menuHeader.css("display","none");
          });
        }
      },
    });
  },

  subMenu = function(){
    $btnPlus.on("tap click", function(event){
      event.preventDefault();
      if ( $(this).hasClass("open") ) {
        $(this).removeClass("open");
        $(this).next().css("display","none");
      } else {
        $(this).addClass("open");
        $(this).next().css("display","block");
      }
    });
  },

  toggleMenu = function(){
    var selectTag = $("#footer .top_menu h5");
    selectTag.off().on("click tap", function(event){
      var $this = $(this);
      $this.toggleClass('active');
      if($this.hasClass('active')) {
        $this.next("ul").slideDown('300');
      } else {
        $this.next("ul").slideUp('300');  
      }
      
      event.preventDefault();
    });
  },

  topScroll = function(){

    $("#backtop a").on("tap click", function(event){
      event.preventDefault();
      var h = $(this).attr("href");
      var t = $(h == "#" || h == "" ? 'body' : h);
      var p = t.offset().top;
      $('html, body').animate({
          scrollTop: p
      }, 500 , "swing");
      return false;
    });

    $win.on({
      "scroll": function(){
        if ( $win.scrollTop() > 300 ) {
          $("#backtop").fadeIn(500);
        } else {
          $("#backtop").fadeOut(500);
        }
      },
    });

  };

  // max height on pc
  var $item,
      itemLen = 0,
      rows,
      $list,
      $text;

  $(window).on("load resize",function(){
    $list = $(".details_box");
    if($(window).width() - 640 > 0) {
      rows = 2;
      sizing(rows);
    } else {
      $list.find('.inner_box').removeAttr("style");
    }
  }).trigger("resize");

  function sizing(rows) {
    $list = $(".details_box");
    $list.each(function(index, el) {
      $item = $(this).find('.inner_box');
      itemLen = $item.length;
      
      $item.css({
        "height": "auto"
      }); 
      
      for( var i = -1, len = Math.ceil( itemLen / rows); ++ i < len; ){
        var itemArray = [];
        for(var j = -1; ++ j < rows;){
          itemArray.push( i * rows + j );
        }
        setItemColumn(itemArray);
      }
    });
  }

  function setItemColumn( itemNum ){
    var txtMaxHeight = 0;
    for( var i = 0; i < itemNum.length; i++){
      txtMaxHeight = $item.eq(itemNum[i]).height() > txtMaxHeight ? $item.eq(itemNum[i]).height() : txtMaxHeight;
    }
    for(i = 0; i < itemNum.length; i++){
      $item.eq(itemNum[i]).css({
        "height": txtMaxHeight + "px"
      });
    }
      
  }

  //document.ready
  $(function(){
    init();
  });

})(jQuery);











