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
            // map();
            $("#loading").remove();
            $("#container").removeClass('hide');

            setTimeout(function(){
                $(".back").addClass('down');
            },600);

            $(".pager").on('click', '.page', function(event) {
                event.preventDefault();

                var getTarget = $(this).attr("href");

                $("body,html").animate({
                    scrollTop: $(getTarget).offset().top,
                }, 600, function() {
             
                });
            });

            $("#ursArea").on('click', 'a', function(event) {
                event.preventDefault();

                $(this).toggleClass('unactive');

                var target = $(this).data("target");
                var bg = $(this).data("color");

                if($(this).hasClass('unactive')){
                    $(".ursmap").find(target).css("fill","#FFFFFF");
                }else{
                    $(".ursmap").find(target).css("fill",bg);
                }
                //$(".ursmap").find(".rect").css("fill","#FFFFFF");
                //$(".ursmap").find(target).css("fill",bg);
            });

            var urslist = $(".cycle").cycle({
                timeout: 10000
            });

            $(".ursButton").on('click', 'a', function(event) {
                event.preventDefault();

                $(".ursButton").find(".active").removeClass('active');
                $(this).addClass('active');

                var listItem = $(this);
                urslist.cycle($(".ursButton a").index(listItem));
            });

            isotopeResize();
            $grid = $(".isotope").isotope();
            var filter = [".public", ".private", ".open"];
            var filterStr;

            $(".filter").on('click', 'a', function(event) {
                event.preventDefault();

                $(this).toggleClass('unactive');

                var getItem = $(this).data("filter");
                // $grid.isotope({ filter: getItem});

                if($(this).hasClass('unactive')){
                    filter.deleteOf(getItem);
                    filterStr = filter.join();
    
                    // $grid.isotope({ filter: ":not(" + getItem + ")"});
                    $grid.isotope({ filter: filterStr });
                }else{
                    filter.push(getItem);
                    filterStr = filter.join();
                    $grid.isotope({ filter: filterStr});
                }
            });
        //},600);
	}); /* end iamgesloaded */
});

Array.prototype.deleteOf = function(a) { 
    for(var i=this.length; i-- && this[i] !== a;); 
    if (i >= 0) this.splice(i,1);
};

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

    if(isScrolled("#section4") && sectionRun[0]){
        sectionRun[0] = false;

        $(".isotope").find(".item").each(function(index, el) {
            $(this).delay(index * 200).fadeIn(600);
        });
    }

    $(".section").each(function(index, el) {
        var getID = $(this).attr("id");
        if(isScrolled("#" + getID)){
            changePager(index);
        }
    });
});

$(window).resize(function() {
    isotopeResize();
});

function isScrolled(elem){
    var docViewTop = $(window).scrollTop();
    var elemTop = $(elem).offset().top - 80;
    
    return (docViewTop >= elemTop)
}

function changePager(index){
    $(".pager").find(".active").removeClass('active');
    $(".pager").find("a:eq(" + index + ")").addClass('active');
}

function isotopeResize(){
    var w = $(window).width();

    //980
    if(w <= 1024){
        $(".isotope").width(864);
    }
}

