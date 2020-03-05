addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

$(function(){
	graphic1 = graphic2 = graphic3 = graphic4 = graphic5 = graphic6 = graphic7 = graphic8 = graphic9 = false;
	graphicMap = false;
	$("#container").imagesLoaded( function( $images, $proper, $broken ) {
		$("#loadWrap").remove();
		$('#container').show();

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

		$("body").removeClass('hidebar');

		setTimeout(function(){
			$(".valgin").addClass('show');
		    $(".valgin").find("*").addClass('fadeInUp');
		},2400);
	
		$(document).on('click', '.go', function (event) {
			$('body, html').animate({
				scrollTop: $(window).height()
			},600);

			return false;
		});	
		
		$(document).on('click', '.gotop', function (event) {
			$('body, html').animate({
				scrollTop: 0
			},600);
			
			return false;
		});	
		
		$(document).on('click', '.scrollDown', function (event) {
			goto = $(this).attr('href');
			
			if($(goto).length > 0){
				$('body, html').animate({
					scrollTop: $(goto).offset().top
				},600);
			}
			
			return false;
		});	
		
		if($.fn.cycle){
			$(".cycle").cycle({ 
				speed: 2000,
				timeout: 0,
				next:   '#nextBtn', 
				prev:   '#prevBtn',
				slideExpr: ".item",
				before:   function(){
					$('.item .down').removeClass('open');
					$('.slideDown').hide();
				},
				pager:  '#pager' 
			});
			
			$(document).on('click', '.item .down', function (event) {
				if($(this).hasClass('open')){
					$(this).removeClass('open');
				}else{
					$(this).addClass('open');
				}
				
				$('.slideDown').slideToggle();
				
				return false;
			});	
		} // end cycle

		if($("#googlemap").length > 0){
			$("#googlemap").googlemap();
		}
		
		graphic1 = graphic2 = graphic3 = graphic4 = graphic5 = graphic6 = graphic7 = graphic8 = graphic9 = true;
		graphicMap = true;
	}) // imagesLoaded
	
});

function videoClick() {
    button = $('.video').html();
    $('.video').html('<div id="player"></div>');
    player = new YT.Player('player', {
        width: '960',
        height: '540',
        videoId: 'PRY3dhYf5j0',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerStateChange(event) {
	if (event.data == YT.PlayerState.ENDED){
		$('.video').html(button);
	}
}

function onPlayerReady(event) {
	event.target.playVideo();
}


$(window).scroll(function(){
	scrollTop = $(window).scrollTop();
	cutH = $(window).height() / 2;
	comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');

	if(scrollTop > 60){
		$('.gotop').fadeIn();
	}else{
		$('.gotop').fadeOut()
	}
	
	// statistics	
	if(scrollTop >= ($('#graphic1').offset().top - cutH)){
		if(graphic1) run("#graphic1","true",1);
		graphic1 = false;
	}
	
	if(scrollTop >= ($('#graphic3').offset().top - cutH)){
		if(graphic3) run("#graphic3","false",1);
		graphic3 = false;
	}
	
	if(scrollTop >= ($('#graphic4').offset().top - cutH)){
		if(graphic4) run("#graphic4","true",1);
		graphic4 = false;
	}
	
	if(scrollTop >= ($('#graphic5').offset().top - cutH)){
		if(graphic5) {
			$('#graphic5').find('li').each(function(index, element) {
               $(this).addClass('animate');
            });
		};
		graphic5 = false;
	}
	
	if(scrollTop >= ($('#graphic6').offset().top - cutH)){
		if(graphic6) {
			$('#graphic6').find('li').each(function(index, element) {
               $(this).addClass('animate');
            });
		};
		graphic6 = false;
	}
	
	if(scrollTop >= ($('#graphic7').offset().top - cutH)){
		if(graphic7) run("#graphic7","true",2);
		graphic7 = false;
	}
	
	if(scrollTop >= ($('#graphic8').offset().top - cutH)){
		if(graphic8){
			$('#graphic8').find('p.runNum').each(function(index, element) {
				var runNumber = $(this).attr('data-number');
				$(this).animateNumber({
					number: runNumber,
					numberStep: comma_separator_number_step
				  }, 1500
				);
			});
			
			graphic8 = false;
		}
	}

	if(scrollTop >= ($('#map').offset().top - cutH)){
		if(graphicMap) {
			$('.count').find('strong').each(function(index, element) {
               var runNumber = $(this).attr('data-number');
				$(this).animateNumber({
					number: runNumber,
					numberStep: comma_separator_number_step
				  }, 1500
				);
            });
		};
		graphicMap = false;
	}
	
	if(scrollTop >= ($('#graphic9').offset().top - cutH)){
		if(graphic9){
			$('#graphic9').find('p.runNum').each(function(index, element) {
				var runNumber = $(this).attr('data-number');
				$(this).animateNumber({
					number: runNumber,
					numberStep: comma_separator_number_step
				  }, 1500
				);
			});	
			
			$('#graphic9').find('.bar').each(function(index, element) {
				w = $(this).attr('data-width');
				$(this).animate({
					'width': w
				},1500, 'easeOutSine');
			});
			
			graphic9 = false;
		}
	}
	
});

function run(id, sign, fix){
	$(id).find('li').each(function(index, element) {
		var runNumber = $(this).find('p').attr('data-number');
		if($(this).find('.housebar').length > 0){
			var bar = '.housebar';
		}else{
			var bar = '.bar';
		}

		var h = $(this).find(bar).attr('data-height');
		var timer = 120 * index;
		
		$(this).find(bar).delay(timer).animate({
			'height': h
		},1500, 'easeOutSine');
		
		$(this).find('.head').delay(timer).animate({
			'bottom': h
		},1500, 'easeOutSine');
		
		$(this).find('p.runNum').delay(timer).animateNumber({
			number: runNumber,
			numberStep: function(now, tween) {
				target = $(tween.elem);
				floored_number = now.toFixed(fix);
				
				if(sign == "true"){
					target.text(floored_number + '%');
				}else{
					target.text(floored_number);
				}
			}
		  }, 1500
		);
	});
}

function hideURLbar(){
	window.scrollTo(0,1);
}