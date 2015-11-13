;(function($){
  "use strict";

  var

  init = function(){
    vietnam_Map();
    japan_Map();
  },

  vietnam_Map = function() {
    var initialize = function() {
      var myLatlng = new google.maps.LatLng(10.7836011,106.7040019);
      var mapOptions = {
        zoom: 15,
        center: myLatlng
      };
      var map = new google.maps.Map(document.getElementById('vietnam_map'), mapOptions);
      var contentString = '<p>GNT</p>'+
          '<p>35 Tôn Đức Thắng, Bến Nghé, Hồ Chí Minh, Quận 1, Việt Nam</p>';
      var infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 200,
          pixelOffset: new google.maps.Size(0, 10),
          color:"#000000"
      });
      var marker = new google.maps.Marker({
          position: myLatlng,
          map: map
      });
      infowindow.open(map,marker);
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  },

  japan_Map = function() {
    var initialize = function() {
      var myLatlng = new google.maps.LatLng(35.6569075,139.7058312);
      var mapOptions = {
        zoom: 15,
        center: myLatlng
      };
      var map = new google.maps.Map(document.getElementById('japan_map'), mapOptions);
      var contentString = '<p>GNT</p>'+
          '<p>〒150-0002 東京都渋谷区渋谷3-11-2 渋谷パインビル5・6F</p>';
      var infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 200,
          pixelOffset: new google.maps.Size(0, 10),
          color:"#000000"
      });
      var marker = new google.maps.Marker({
          position: myLatlng,
          map: map
      });
      infowindow.open(map,marker);
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  };

  //document.ready
  $(function(){
    init();
  });

})(jQuery);