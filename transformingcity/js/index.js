var sectionRun = new Array();
$(function(){
    var loading = "<div class='ajax-spinner-bars'>" + 
      "<div class='bar-1'></div>" + 
      "<div class='bar-2'></div>" + 
      "<div class='bar-3'></div>" + 
      "<div class='bar-4'></div>" + 
      "<div class='bar-5'></div>" + 
      "<div class='bar-6'></div>" + 
      "<div class='bar-7'></div>" + 
      "<div class='bar-8'></div>" + 
      "<div class='bar-9'></div>" + 
      "<div class='bar-10'></div>" + 
      "<div class='bar-11'></div>" + 
      "<div class='bar-12'></div></div>";

    $("#loading").html(loading);

    $(".section").each(function(index, el) {
        sectionRun[index] = true;
    });

	$(document).imagesLoaded(function() {
        //setTimeout(function(){
            svgimg();
            $("#loading").remove();
            $("#container").removeClass('hide');
            
            // intro
            var end = {
                "logoText1":{ 'top': 130, 'left': 37},
                "logoText2":{ 'top': 167, 'left': 97},
                "logoText3":{ 'top': 114, 'left': 187},
                "logoText4":{ 'top': 122, 'left': 326},
                "logoText5":{ 'top': 224, 'left': 343},
                "logoText6":{ 'top': 243, 'left': 431},
                "logoText7":{ 'top': 416, 'left': 40},
                "logoText8":{ 'top': 388, 'left': 118},
                "logoText9":{ 'top': 437, 'left': 137},
                "logoText10":{ 'top':  391, 'left': 383},
                "logoText11":{ 'top': 407, 'left': 310},
                "logoText12":{ 'top': 495, 'left': 313},
                "logoText13":{ 'top': 525, 'left': 406}
            }

            $("#logos").find("img").each(function(index, el) {
                var v = $(this).attr("class");

                $(this).delay(600).animate({
                    "top": end[v]["top"],
                    "left": end[v]["left"],
                    "opacity": 1
                }, 800, function() {
                    
                });
            });

            setTimeout(function(){
                $(".cloud").each(function(index, el) {
                    $(this).removeClass("fadeInUp").removeClass('alpha');
                    if(index == 0){
                        $(this).addClass('cloudMove');
                    }else{
                        $(this).addClass('cloudMove2');
                    }
                });
            },3500);

            $(".godown").on('click', function(event) {
                event.preventDefault();
                if($(this).parent("#intro").length > 0){
                    var nextSection = $(this).parents("#intro").next();
                }else{
                    var nextSection = $(this).parents(".section").next();
                }

                $("body,html").animate({
                    scrollTop: nextSection.offset().top,
                }, 600, function() {
             
                });
            });

            // radar chat
            var radarOpts = {
                labels: ["社區連結", "在地活動", "空間分享", "空間改造", "空間經營", "公共空間", "城市行動", "社群連結"],
                labelFontSize: 24, 
                drawLabels: true, 
                armFill: 'none', 
                armStroke: '#000000',
                armStrokeWidth: 1, 
                drawArms: true, 
                max: 5, 
                pathFill: 'rgba(248, 235, 77, .8)', 
                pathStroke: 'none',  
                pathCircleOuterRadius: 8,
                pathCircleInnerRadius: 4, 
                drawPathCircles: true,
                meshStroke: "#000000",
                meshStrokeWidth: 3
            };

            if($("#radar").length > 0){
                var r = Raphael('radar', 614, 498);
                r.radar(307, 249, 180, [0,0,0,0,0,0,0,0],radarOpts);

                $(".switch").on('click', 'a', function(event) {
                    event.preventDefault();

                    var obj = $(this).attr("href");
                    if(obj == "#radar"){
                        $("#graph").find("#radar").removeClass('hide');
                        $("#graph").find("#table").addClass('hide');
                    }else if(obj == "#table"){
                        $("#graph").find("#radar").addClass('hide');
                        $("#graph").find("#table").removeClass('hide');
                    }

                    $(".switch").find(".active").removeClass('active');
                    $(this).find(".icon").addClass("active");
                });

            }
            // end radar

            $(".pager").on('click', '.page', function(event) {
                event.preventDefault();

                var getTarget = $(this).attr("href");

                $("body,html").animate({
                    scrollTop: $(getTarget).offset().top,
                }, 600, function() {
             
                });
            });
        //},600);
	}); /* end iamgesloaded */
})

function svgimg(){
	$('img.svgimg').each(function(){
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
    
        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');
    
            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
    
            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');
            
            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }
    
            // Replace image with new SVG
            $img.replaceWith($svg);
        }, 'xml');
    
    });	
}

function createSVG(item){
    var $img = $(item);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');
        
        // Check if the viewport is set, else we gonna set it if we can.
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);
    }, 'xml');
}

$(window).scroll(function(event) {
    // console.log(sectionRun[0]);

    if(isScrolled("#section1") && sectionRun[0]){
        sectionRun[0] = false;
        
        createSVG(".what img");
    }else if(isScrolled("#section2") && sectionRun[1]){
        sectionRun[1] = false;

        createSVG(".station");
    }else if(isScrolled("#section4") && sectionRun[3]){
        sectionRun[3] = false;

        createSVG(".support");

        $(".checks").find(".column").each(function(index, el) {
            $(this).delay(600 * index).fadeIn(1000);
        });
    }else if(isScrolled("#section5") && sectionRun[4]){
        sectionRun[4] = false;

        createSVG(".step5svg");
    }else if(isScrolled("#section6") && sectionRun[5]){
        sectionRun[5] = false;

        createSVG(".process");
    }else if(isScrolled2("#section7") && sectionRun[6]){
        sectionRun[6] = false;

        $(".links").find('a').each(function(index, el) {
            var linkItem = $(this);
            setTimeout(function(){
                linkItem.addClass('fadeInUp');
            }, index * 100);
        });
    }

    if($(window).scrollTop() > $("#intro").offset().top){
        $(".pager").removeClass('hide');
    }else{
        $(".pager").addClass('hide');
    }

    $(".section").each(function(index, el) {
        var getID = $(this).attr("id");
        if(isScrolled("#" + getID)){
            changePager(index + 1);
        }
    });
});

function isScrolled(elem){
    var docViewTop = $(window).scrollTop();
    var elemTop = $(elem).offset().top - 80;
    
    return (docViewTop >= elemTop)
}


function isScrolled2(elem){
    var docViewTop = $(window).scrollTop();
    var elemTop = $(elem).offset().top - $(window).height() + 455;
    
    return (docViewTop >= elemTop)
}

function changePager(index){
    $(".pager").find(".active").removeClass('active');
    $(".pager").find("a:eq(" + index + ")").addClass('active');
}


