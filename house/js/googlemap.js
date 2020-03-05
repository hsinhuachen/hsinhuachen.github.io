$.fn.googlemap = function(settings){
	var settings = $.extend({}, $.fn.googlemap.defaults, settings);
	var mapID = $(this).attr("id");	
	var styles = [{"featureType":"administrative.province","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffe4e4"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffd5db"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#bddcff"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#eef5fd"}]}];
	
	//出租中公共住宅
	var locations = [
      ['大龍峒公營住宅', '110', 25.07118, 121.51841, 10],
      ['敦煌公宅', '3', 25.07584, 121.51718, 11],
      ['行天宮站公宅', '30', 25.05992, 121.53354, 8],
      ['龍山寺開宅', '11', 25.03538, 121.50151, 7],
      ['萬隆站公宅', '41', 25.00257, 121.53858, 6],
      ['景文公宅', '39', 24.9999, 121.54001, 5],
      ['興隆公共住宅1區', '272', 24.98861, 121.55775, 4],
      ['永平公宅', '51', 25.08884, 121.5035, 12],
      ['港墘聯開宅', '14', 25.0803, 121.57534, 1],
      ['臺北橋聯開宅', '327', 25.06304, 121.50093, 9],
      ['新店機廠聯開宅', '218', 24.973, 121.52997, 3]
    ];

    //105年推動中基地
    var locations2 = [
      ['明倫國小中繼住宅', '456', 25.07351, 121.51967, 1],
      ['健康公共住宅', '507', 25.05455, 121.5662, 1],
      ['六張犁營區 (AB街廓)', '972', 25.0273, 121.55985, 1],
      ['三興段公共住宅', '731', 25.02604, 121.55571, 1],
      ['廣慈博愛院園區', '2800', 25.03857, 121.58264, 1],
      ['忠義國小中繼住宅', '526', 25.02964, 121.50624, 1],
      ['青年公共住宅', '273', 25.02002, 121.50359, 1],
      ['青年營區', '640', 25.02035, 121.50292, 1],
      ['原中興國小校地', '270', 25.04694, 121.50639, 1],
      ['莒光段基地', '248', 25.03202, 121.50009, 1],
      ['興隆公共住宅2區', '526', 24.98812, 121.56259, 1],
      ['華興段基地', '529', 24.98477, 121.54906, 1],
      ['木柵段漆高儒基地', '166', 24.98917, 121.56649, 1],
      ['景美女中調車場', '373', 24.97752, 121.55627, 1],
      ['奇岩新社區基地', '319', 25.12568, 121.50396, 1],
      ['中南段公共住宅', '171', 25.04281, 121.61902, 1],
      ['小彎基地', '340', 25.05777, 121.59343, 1],
      ['東明公共住宅', '700', 25.05466, 121.60429, 1],
      ['瑞光市場基地', '423', 25.07323, 121.57906, 1]
    ];

    //105年規劃中基地 
    var locations3 = [
      ['大橋頭站連開案基地', '47', 25.06349, 121.5117, 1],
      ['培英市場基地', '202', 25.07978, 121.54856, 1],
      ['六張犁營區基地 (CDE街廓)', '2031', 25.02629, 121.55942, 1],
      ['犁和段都更案', '80', 25.02361, 121.5553, 1],
      ['南海段都更案', '212', 25.03037, 121.5144, 1],
      ['華光社區基地', '412', 25.03054, 121.52522, 1],
      ['興德里營區基地', '1000', 25.00326, 121.55657, 1],
      ['文山區樟新市場基地', '102', 24.97977, 121.55678, 1],
      ['景美運動公園南側一二期基地', '293', 25.00147, 121.54432, 1],
      ['興隆公共住宅二三期基地', '2000', 24.98794, 121.56248, 1],
      ['北士科機1、R21-1基地', '862', 25.10085, 121.51317, 1],
      ['北投區士北科專案住宅', '151', 25.10231, 121.51577, 1],
      ['臺電中心倉庫基地', '1393', 25.04625, 121.58291, 1],
      ['南港機廠案', '282', 25.05015, 121.59709, 1],
      ['舊宗段基地', '131', 25.06681, 121.57499, 1]
    ];

	var zoom = 12;
	var options = {
	center: new google.maps.LatLng(25.033153, 121.525122),
	zoom: zoom,
	scrollwheel: true,
	draggable: true,
	panControl: false,
	zoomControl: true,
	zoomControlOptions: {
		position: google.maps.ControlPosition.RIGHT_BOTTOM
	},
	mapTypeControl: false,
	scaleControl: false,
	streetViewControl: false,
	overviewMapControl: false,
	mapTypeId: 'Styled'
	};

	var div = document.getElementById(mapID);
	var map = new google.maps.Map(div, options);
	var styledMapType = new google.maps.StyledMapType(styles);
	map.mapTypes.set('Styled', styledMapType);
	var geocoder = new google.maps.Geocoder();
	var marker;

	var image = new google.maps.MarkerImage('imgs/pin-red.png',
		new google.maps.Size(16,23),
		new google.maps.Point(0,0)
	);

	var image2 = new google.maps.MarkerImage('imgs/pin-gray.png',
		new google.maps.Size(16,23),
		new google.maps.Point(0,0)
	);

	var image3 = new google.maps.MarkerImage('imgs/pin-blue.png',
		new google.maps.Size(16,23),
		new google.maps.Point(0,0)
	);

	var infowindow = new google.maps.InfoWindow();
	var marker1, marker2, marker3;
  var markers1 = [];
  var markers2 = [];
  var markers3 = [];

	for (i = 0; i < locations.length; i++) { 
    marker1 = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][2], locations[i][3]),
      map: map,
      icon: image,
      zIndex: locations[i][4]
    });

    google.maps.event.addListener(marker1, 'mouseover', (function(marker, i) {
        return function() {
        	var contentStr = '<div class="mapinfo bgred">' + 
                              '<h2>' + locations[i][0] + '</h2>' + 
                              '<p>' + locations[i][1] + '戶</p>' + 
                              '<div class="arrow"></div>' + 
                            '</div>';
         	infowindow.setContent(contentStr);
        	infowindow.open(map, marker);
        	hideInfo();
        }
    })(marker1, i));
    markers1.push(marker1);
  }

  for (i = 0; i < locations2.length; i++) { 
    marker2 = new google.maps.Marker({
      position: new google.maps.LatLng(locations2[i][2], locations2[i][3]),
      map: map,
      icon: image2,
      zIndex: locations2[i][4]
    });

    google.maps.event.addListener(marker2, 'mouseover', (function(marker, i) {
      return function() {
        	var contentStr = '<div class="mapinfo bggray">' + 
                              '<h2>' + locations2[i][0] + '</h2>' + 
                              '<p>' + locations2[i][1] + '戶</p>' + 
                              '<div class="arrow"></div>' + 
                            '</div>';
         	infowindow.setContent(contentStr);
        	infowindow.open(map, marker);
        	hideInfo();
        }
    })(marker2, i));
    markers2.push(marker2);
  }

  for (i = 0; i < locations3.length; i++) { 
    marker3 = new google.maps.Marker({
      position: new google.maps.LatLng(locations3[i][2], locations3[i][3]),
      map: map,
      icon: image3,
      zIndex: locations3[i][4]
    });

    google.maps.event.addListener(marker3, 'mouseover', (function(marker, i) {
      return function() {
        var contentStr = '<div class="mapinfo bgblue">' + 
                            '<h2>' + locations3[i][0] + '</h2>' + 
                            '<p>' + locations3[i][1] + '戶</p>' + 
                            '<div class="arrow"></div>' + 
                          '</div>';
        infowindow.setContent(contentStr);
        infowindow.open(map, marker);
        hideInfo();
      }
    })(marker3, i));
    markers3.push(marker3);
  }

  var contentStr = '<div class="mapinfo bgred">' + 
                      '<h2>' + locations[2][0] + '</h2>' + 
                      '<p>' + locations[2][1] + '戶</p>' + 
                      '<div class="arrow"></div>' + 
                    '</div>';
  infowindow.setContent(contentStr);
  infowindow.open(map,markers1[2]);
  google.maps.event.addListener(infowindow, 'domready', function() {
    hideInfo();
  });

  map.addListener('click', function() {
    infowindow.close();
  });

	center = map.getCenter();
	google.maps.event.addDomListener(window, 'resize', function() {
		map.setCenter(center);
	});

  $(".tab").on('click', 'a', function(event) {
    event.preventDefault();
    
    var getMarker = $(this).attr("href");
    $(".tab").find(".active").removeClass('active');
    $(this).addClass('active');
    infowindow.close(map);
    for (i = 0; i < locations.length; i++) {
      if(getMarker == "#marker1" || getMarker == "#all"){
        markers1[i].setVisible(true);
      }else{
        markers1[i].setVisible(false);
      }
    } 

    for (i = 0; i < locations2.length; i++) {
      if(getMarker == "#marker2" || getMarker == "#all"){
        markers2[i].setVisible(true);
      }else{
        markers2[i].setVisible(false);
      }
    } 

    for (i = 0; i < locations3.length; i++) {
      if(getMarker == "#marker3" || getMarker == "#all"){
        markers3[i].setVisible(true);
      }else{
        markers3[i].setVisible(false);
      }
    } 

    if(getMarker == "#marker1"){
      var contentStr = '<div class="mapinfo bgred">' + 
                      '<h2>' + locations[0][0] + '</h2>' + 
                      '<p>' + locations[0][1] + '戶</p>' + 
                      '<div class="arrow"></div>' + 
                    '</div>';
      infowindow.setContent(contentStr);
      infowindow.open(map,markers1[0]);
      hideInfo();
    }else if(getMarker == "#marker2"){
      var contentStr = '<div class="mapinfo bggray">' + 
                      '<h2>' + locations2[0][0] + '</h2>' + 
                      '<p>' + locations2[0][1] + '戶</p>' + 
                      '<div class="arrow"></div>' + 
                    '</div>';
      infowindow.setContent(contentStr);
      infowindow.open(map,markers2[0]);
      hideInfo();
    }else if(getMarker == "#marker3"){
      var contentStr = '<div class="mapinfo bgblue">' + 
                      '<h2>' + locations3[0][0] + '</h2>' + 
                      '<p>' + locations3[0][1] + '戶</p>' + 
                      '<div class="arrow"></div>' + 
                    '</div>';
      infowindow.setContent(contentStr);
      infowindow.open(map,markers3[0]);
      hideInfo();
    }

  });

};

$.fn.googlemap.defaults = {
};

function hideInfo(){
	var iwOuter = $('.gm-style-iw');
	var iwBackground = iwOuter.prev();

   // Remove the background shadow DIV
   iwBackground.children(':nth-child(2)').hide();

   // Remove the white background DIV
   iwBackground.children(':nth-child(4)').hide();

   // close setting
   iwOuter.next("div").hide();

   // arrow
   iwOuter.prev("div").hide();
   // iwOuter.prev("div").find("div:nth-child(1)").find("div").hide();
   // iwOuter.prev("div").find("div:nth-child(2)").find("div").hide();
	
   var infoW = iwOuter.innerWidth()
   var infoH = iwOuter.innerHeight();
   var posX = Math.ceil(infoW/2) + 31;
   var posY = Math.ceil(infoH/2) + 50;

   // console.log(iwOuter.innerWidth() + "," + iwOuter.find("div:eq(0)").width());
   iwOuter.css({"left": posX, "top": posY });
}
