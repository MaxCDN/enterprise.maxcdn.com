// jQuery cookie plugin
// https://raw.github.com/carhartl/jquery-cookie/master/jquery.cookie.js
(function(factory){if(typeof define==="function"&&define.amd)define(["jquery"],factory);else factory(jQuery)})(function($){var pluses=/\+/g;function encode(s){return config.raw?s:encodeURIComponent(s)}function decode(s){return config.raw?s:decodeURIComponent(s)}function stringifyCookieValue(value){return encode(config.json?JSON.stringify(value):String(value))}function parseCookieValue(s){if(s.indexOf('"')===0)s=s.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\");try{s=decodeURIComponent(s.replace(pluses, " "));return config.json?JSON.parse(s):s}catch(e){}}function read(s,converter){var value=config.raw?s:parseCookieValue(s);return $.isFunction(converter)?converter(value):value}var config=$.cookie=function(key,value,options){if(value!==undefined&&!$.isFunction(value)){options=$.extend({},config.defaults,options);if(typeof options.expires==="number"){var days=options.expires,t=options.expires=new Date;t.setDate(t.getDate()+days)}return document.cookie=[encode(key),"=",stringifyCookieValue(value),options.expires? "; expires="+options.expires.toUTCString():"",options.path?"; path="+options.path:"",options.domain?"; domain="+options.domain:"",options.secure?"; secure":""].join("")}var result=key?undefined:{};var cookies=document.cookie?document.cookie.split("; "):[];for(var i=0,l=cookies.length;i<l;i++){var parts=cookies[i].split("=");var name=decode(parts.shift());var cookie=parts.join("=");if(key&&key===name){result=read(cookie,value);break}if(!key&&(cookie=read(cookie))!==undefined)result[name]=cookie}return result}; config.defaults={};$.removeCookie=function(key,options){if($.cookie(key)===undefined)return false;$.cookie(key,"",$.extend({},options,{expires:-1}));return!$.cookie(key)}});

// set up the bandwidth tiers
// if you want the tier to never end, use NaN
var bandwidthTiers = [
	{
		'start': 0,
		'end': 50,
		'price': .05
	},
	{
		'start': 51,
		'end': 150,
		'price': .040
	},
	{
		'start': 151,
		'end': 350,
		'price': .035
	},
	{
		'start': 351,
		'end': 1023,
		'price': .030
	},
	{
		'start': 1024,
		'end': 3071,
		'price': .020
	},
	{
		'start': 3072,
		'end': 5120,
		'price': .020
	},
	{
		'start': 5121,
		'end': NaN,
		'price': .020
	},
];

// function used for sorting numbers
function sortArrayByInt(a, b){
	//set the element to the beginning tier number
	var a = a.start;
	var b = b.start;

	// return whether it is greator or smaller
	return ((a < b) ? -1 : ((a > b) ? 1 : 0));
}

function calculateBandwidthPrice(usage) {
	// see what first tier it falls into
	var tierIndex = 0;
	for (var i=0; i<bandwidthTiers.length; i++) {
		if (bandwidthTiers[i].end >= usage) {
			tierIndex = i;
			break;
		} else if (usage > bandwidthTiers[bandwidthTiers.length-1].start) {
			tierIndex = bandwidthTiers.length-1;
			break;
		}
	}

	// set the selected tier
	var firstTier = bandwidthTiers[tierIndex];
	var nextTier = null;
	if (tierIndex+1 < bandwidthTiers.length) {
		nextTier = bandwidthTiers[tierIndex+1];
	}

	// check what value to return
	var bwPrice = 0.0;
	// if (nextTier == null || firstTier.start == usage) {
		// there's no tier next up, so just use the first tier price
		bwPrice = firstTier.price;
	// } else {
	// 	// there is a tier above it, so calclaute the bw price based on the two tiers

	// 	// get the percentage of how in between the bandwidth amount is between the two tiers
	// 	var percentInBetween = (usage - firstTier.start) / (nextTier.start - firstTier.start);

	// 	// see how much we need to add to the price to give them discounts
	// 	var priceAddition = (firstTier.price - nextTier.price) * percentInBetween;


	// 	// give them their final bw price
	// 	bwPrice = firstTier.price - priceAddition;
	// }

	// final bw price
	// var finalPrice = bwPrice * (usage * 1024) * 1.1;
	var finalPrice = bwPrice;

	// if bw cost is less than 800, make it 800
	// if (finalPrice < 800) {
	// 	finalPrice = 800;
	// }

	return finalPrice;
}

// sort the array of tiers so we can iterate on them properly
bandwidthTiers.sort(sortArrayByInt);

Number.prototype.formatMoney = function(c, d, t){
var n = this, 
    c = isNaN(c = Math.abs(c)) ? 2 : c, 
    d = d == undefined ? "." : d, 
    t = t == undefined ? "," : t, 
    s = n < 0 ? "-" : "", 
    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 };

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// nicereply popup after live chat
function nicereplyPopup(agentName) {
	if (agentName != null) {
		var url = 'http://feedback.netdna.com/netdna/' + agentName.replace(' ', '-');
		$.fancybox(url, {
			'padding': 0,
			'margin':10,
			'width': 554,
			'height': 680,
			'type': 'iframe',
			'wrapCSS': 'fancybox-nicereply'
		});
	}
}

// form validation
function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function validateURL(textval) {
	var urlregex = new RegExp("^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
	return urlregex.test(textval);
}

function checkRequiredFields(form) {
	//attack to all form submit buttons
	$(form + ' input, ' + form + ' textarea ,' + form + ' select').click(function(e) {
		if ($(this).hasClass('red-border')) $(this).removeClass('red-border');
	}).change( function() {
		if ($(this).hasClass('red-border')) $(this).removeClass('red-border');
	});

	$(form).submit(function(e) {
		//keep track of fails
		var counter = 0;

		//required fields
		var fields = $(this).find('.required');

		//remove required border
		fields.each(function() { $(this).removeClass('red-border'); });
		$('.select-area',this).removeClass('red-border');

		//check required fields
		fields.each( function() {
			//check input, textarea, and select
			if ($(this).is("input") || $(this).is("textarea")) {
				if ($(this).val() === "" || $(this).val() == null) {
					counter++;
					$(this).addClass('red-border');
				}

				if ($(this).data('value') === $(this).val()) {
					counter++;
					$(this).addClass('red-border');
				}

				if ($(this).attr('type') === "email") {
					if (!validateEmail($(this).val())) {
						counter++;
						$(this).addClass('red-border');
					}
				} else if ($(this).attr('type') === "url") {
					if (!validateURL($(this).val())) {
						counter++;
						$(this).addClass('red-border');
					}
				}

				} else if ($(this).is("select")) {
					if ($(this)[0].selectedIndex <= 0) {
						counter++;
						$(this).addClass('red-border');
						$(this).prev().addClass('red-border');
					}
				}
		});

		//don't submit the form :(
		if (counter > 0) {
			return false;
		} else {
			//fill out content__c field in form
			$("input[name='content__c']", $(this)).val('TjMWJFGCrZsrgkTiumWainoraTaYandAd8bapL8Xdks');
		}
	});
}

//for the orange thingy on the right side...
function sliderEvents() {
	$(".orange-slider .icons a").click(function() {

		//check vars
		var isSliderActive = $(".orange-slider").hasClass("active");
		var isIconInactive = $(this).hasClass("inactive");

		//user is closing slider
		if (isSliderActive && !isIconInactive) {
			//restore all icons
			$(".orange-slider .icons a").removeClass("inactive");

			//make slider inactive
			$(".orange-slider").removeClass("active");

			//hide active content slider
			$(".slider-content > div.active").removeClass("active").addClass("hidden");

			//hide slider content container
			$(".slider-content").addClass("hidden").removeClass("active");
		}

		//open new tab or user is switching tabs
		if ((isSliderActive && isIconInactive) || !isSliderActive) {
			//make slider active
			$(".orange-slider").addClass("active");

			//default all icons to their original status and then apply the inactive class
			$(".orange-slider .icons a").removeClass("inactive").not($(this)).addClass("inactive");

			//hide any sliders
			$(".slider-content > div.active").removeClass("active").addClass("hidden");

			//show slider for clicked button
			$(".slider-content > div.slider-" + $(this).attr("href").substr(1)).addClass("active").removeClass("hidden");

			//hide slider content container
			$(".slider-content").removeClass("hidden").addClass("active");

			//if they clicked on the live chat, set the cookie to disable autopopup
			if ($(this).attr("href").substr(1) === "chat") {
				$.cookie("livechat_autopopup", true, {expires: 1, path: '/'});
			}
		}
	});
	
	$(".slider-content > div").append("<a href='#' class='slider-close'>");
	$(".slider-content").on('click', '.slider-close', function(e) {
		e.preventDefault();
		
		//restore all icons
		$(".orange-slider .icons a").removeClass("inactive");

		//make slider inactive
		$(".orange-slider").removeClass("active");

		//hide active content slider
		$(".slider-content > div.active").removeClass("active").addClass("hidden");

		//hide slider content container
		$(".slider-content").addClass("hidden").removeClass("active");

	});	
}

$(document).ready(function(){
	jQuery.fn.exists = function(){
		return this.length > 0;
	}

	if (window.location.search.indexOf("ref=netdna") != -1) {
		$(".top-notification").removeClass("hidden");
	}
	
	if (window.PIE) {
		$('.ie-fix').each(function() {
			PIE.attach(this);
		});
	}
	
	if ($('header').exists()) {
		$('header').sticky({ topSpacing: 0 });
	}
	
	if ($('#sidebar').exists()) {
		$('#sidebar').sticky({
			topSpacing: 80,
			bottomSpacing: 432
		});
	}
	
	if ($('.testimonial').exists()) {
		$('.testimonial').parallax("50%", 0.1);
	}
	
	if ($('#tabs-1').exists()) {
		$('#tabs-1').tabs();
	}
	
	if ($('.side-menu').exists()) {
		
		// Cache selectors
			var lastId,
			    topMenu = $(".side-menu"),
			    topMenuHeight = 267,
			    // All list items
			    menuItems = topMenu.find("a"),
			    // Anchors corresponding to menu items
			    scrollItems = menuItems.map(function(){
			      var item = $($(this).attr("href"));
			      if (item.length) { return item; }
			    });
			
			// Bind click handler to menu items
			// so we can get a fancy scroll animation
			menuItems.click(function(e){
			  var href = $(this).attr("href"),
			      offsetTop = href === "#" ? 0 : $(href).offset().top-67+1;
			  $('html, body').stop().animate({ 
			      scrollTop: offsetTop
			  }, 300);
			  e.preventDefault();
			});
			
			// Bind to scroll
			$(window).scroll(function(){
			   // Get container scroll position
			   var fromTop = $(this).scrollTop()+topMenuHeight;
			   
			   // Get id of current scroll item
			   var cur = scrollItems.map(function(){
			     if ($(this).offset().top < fromTop)
			       return this;
			   });
			   // Get the id of the current element
			   cur = cur[cur.length-1];
			   var id = cur && cur.length ? cur[0].id : "";
			   
			   if (lastId !== id) {
			       lastId = id;
			       // Set/remove active class
			       menuItems
			         .parent().removeClass("active")
			         .end().filter("[href=#"+id+"]").parent().addClass("active");
			   }                   
			});
	}
	
	
	if ($('.data table').exists()) {
		$('.data table').each(function() {
			$(this).find('tr').each(function() {
				$(this).children().eq(1).addClass('sec-child');
			});
		});
		$('.data tbody').each(function() {
			$(this).find('tr:even').addClass('odd');
		});
	}
	
	if ($('.custom-form').exists()) {
		customForm.lib.domReady(function(){
			customForm.customForms.replaceAll();
		});
	}
	
	if ($('.hidden-popup').exists()) {
		setTimeout(function() {
			$('.hidden-popup').hide();
		}, 600);
	}
	
	if ($('.fancybox').exists()) {
		$('.fancybox').each(function(){
			var width = ($(this).hasClass('small-box')) ? 300 : 400;
			console.log(width);
			$(this).fancybox({
				'padding': 0,
				'margin':10,
				'width': width
			});
		});
	}
	
	if ($('.price-form .btn.open-pricing').exists()) {
		$(".price-form .text-hold .unit").click(function() {
			$('.price-form .text-hold .text').focus();
		});

		$('.price-form .text-hold .text').keyup(function(e){
			e.preventDefault();
			if(e.keyCode == 13){
				$('.price-form .btn.open-pricing').click();
			}
		})

		$('.price-form form').submit(function(e) {
			e.preventDefault();
		});;

		$('.price-form .btn.open-pricing').click(function() {
			var enteredTB = $('.price-form .text-hold .text').val();
			if (!isNaN(enteredTB) && enteredTB !== "") {
				var priceSection = $(this).closest('.price-form').next('.price-section');
				priceSection.slideDown();
				$('div.total .value', priceSection).html(Math.round(calculateBandwidthPrice(enteredTB).formatMoney(4) * 100  * 10) / 10 + "&cent; per GB");
				$('div.total .name', priceSection).html(numberWithCommas(enteredTB) + "TB");

				// check to see if we need to show the special message
				$('.price-section .bw-tier-notice').hide();
				if (enteredTB >= 3000) {
					$('div.total .value', priceSection).addClass('strikethrough');
					$('.price-section .bw-tier-notice.over3pb').fadeIn(1454);
				} else if (enteredTB >= 1024 && enteredTB < 3000) {
					$('div.total .value', priceSection).removeClass('strikethrough');
					$('.price-section .bw-tier-notice.under3pb').fadeIn(1454);
				} else {
					$('div.total .value', priceSection).removeClass('strikethrough');
				}

				// fill in the bandwidth field in the form below
				var range = null;
				$('#bandwidth-pricing-hidden option').each(function() {
					// check if range is in
					if ($(this).data('range') !== "none") {
						var rangeArray = $(this).data('range').split('-');
						if (enteredTB >= parseInt(rangeArray[0]) && enteredTB <= parseInt(rangeArray[1]) && range == null) {
							// this is the range
							range = $(this);
						}
					}
				});
				if (range == null) {
					//at the end of the array 
					range = $('#bandwidth-pricing-hidden option').last();
				}

				// select range
				$('#bandwidth-pricing-hidden option').attr('selected', false);
				range.attr('selected', true);

				// remove stupid auto form field
				if ($("#bandwidth-pricing-hidden").length > 0) {
					$("#bandwidth-pricing-hidden").prev().remove();
				}
			}
			return false;
		});
	}

	if ($('.team-area').exists()) {
		var team_area = $('.team-area');
		var team_area_pos = $('.team-area').offset().top;
		$(window).scroll(function(){
			var pos = $(window).scrollTop();
			var win_height = $(window).height();
			if (team_area_pos > pos + win_height/10 && team_area_pos < pos + win_height*3/4 && !team_area.find('.holder img').hasClass("active")){
				team_area.find('.holder img').addClass('active');
			}
		});
	}

	if ($('#carousel-holder').exists()){

		var duration = 10;
		var curousel_ready_click = true
		var $carousel_holder = $('#carousel-holder');
		$('#carousel-holder .btn-prev').click(function(){
			slideCarousel('prev');
			return false;
		});

		$('#carousel-holder .btn-next').click(function(){
			slideCarousel('next');
			return false;
		});

		function slideCarousel(direction){
			if (curousel_ready_click) {
				curousel_ready_click = false;
				var classes_obj = {
					prev : {
						out_class: 'slide-prev',
						new_bid_class: 'slide-next'
					},
					next : {
						out_class: 'slide-next',
						new_bid_class: 'slide-prev'
					}
				}

				
				$('.' + classes_obj[direction].out_class).fadeOut(duration, function(){
					$(this).removeClass(classes_obj[direction].out_class);
				});
				var current_slide = $( ".slide-current" );
	//			current_slide.switchClass( "slide-current", classes_obj[direction].out_class, duration );
				if (direction == 'next') {
					current_slide.animate({left: '780px', top: 93, width: 156}, duration, function(){
						$(this).removeAttr('style');
						current_slide.removeClass( "slide-current").addClass(classes_obj[direction].out_class);
					});
				} else {
					current_slide.animate({left: '280px', top: 93, width: 156}, duration, function(){
						$(this).removeAttr('style');
						current_slide.removeClass( "slide-current").addClass(classes_obj[direction].out_class);
					});
				}
				current_slide.find('.img').css({
					'overflow': 'hidden',
					borderTopLeftRadius: 83, 
				    borderTopRightRadius: 83, 
				    borderBottomLeftRadius: 83, 
				    borderBottomRightRadius: 83,
				    WebkitBorderTopLeftRadius: 83, 
				    WebkitBorderTopRightRadius: 83, 
				    WebkitBorderBottomLeftRadius: 83, 
				    WebkitBorderBottomRightRadius: 83, 
				    MozBorderRadius: 83
					
				}).animate({width:'83px', height:'83px', backgroundColor: "#fff",
													borderTopLeftRadius: 42, 
												    borderTopRightRadius: 42, 
												    borderBottomLeftRadius: 42, 
												    borderBottomRightRadius: 42,
												    WebkitBorderTopLeftRadius: 42, 
												    WebkitBorderTopRightRadius: 42, 
												    WebkitBorderBottomLeftRadius: 42, 
												    WebkitBorderBottomRightRadius: 42, 
												    MozBorderRadius: 42
												}, duration, function(){
					$(this).removeAttr('style');
				});
				current_slide.find('.img img').animate({width:'83px', height:'83px', opacity: 0}, duration, function(){
					$(this).removeAttr('style');
				});
				current_slide.find('.name').fadeTo(duration, 0);
				current_slide.find('p').fadeOut( duration, function(){
					$(this).removeAttr('style');
					new_current_slide.find('p').fadeIn(duration, function(){
						$(this).removeAttr('style');
					});
					new_current_slide.find('.name').fadeTo(duration, 1,  function(){
						$(this).removeAttr('style');
					});
				});
				var new_current_slide = $( "." + classes_obj[direction].new_bid_class );
	//			new_current_slide.switchClass( classes_obj[direction].new_bid_class, "slide-current", duration );
				if (direction == 'prev') {
					new_current_slide.css('left', '600px').animate({left: '90px', top: 48, width: 510}, duration, function(){
						$(this).removeAttr('style');
						new_current_slide.removeClass( classes_obj[direction].new_bid_class).addClass("slide-current");
					});
				} else {
					new_current_slide.animate({left: '90px', top: 48, width: 510}, duration, function(){
						$(this).removeAttr('style');
						new_current_slide.removeClass( classes_obj[direction].new_bid_class).addClass("slide-current");
					});
				}
				new_current_slide.find('.img').css({background:'none'}).animate({width:'173px', height:'173px'}, duration, function(){
					$(this).removeAttr('style');
				});
				new_current_slide.find('.img img').css({width:'73px', height:'73px'}).animate({width:'173px', height:'173px', opacity: 1}, duration, function(){
					$(this).removeAttr('style');
				});
				var next_slide;
				if (direction == 'prev') {
					next_slide = new_current_slide.next();
				} else {
					next_slide = new_current_slide.prev();
				}
				if (!next_slide.exists() || !next_slide.hasClass('slide')){
					if (direction == 'prev') {
						next_slide = $('.slide').first();
					} else {
						next_slide = $('.slide').last();
					}
				}
				next_slide.addClass(classes_obj[direction].new_bid_class).fadeIn(duration, function(){
					curousel_ready_click = true;
				});
			}
		}
	}
	
	if ($('.carousel').exists()) {
		var top_wrap_carousel = $('.carousel').offset().top,
			carousel_visible_ = false;
		$('.carousel .slide').hide();
		$(window).scroll(function(){
			if (!carousel_visible_){
				 if (top_wrap_carousel < ($(window).scrollTop() + ($(window).height() / 2))) {
				 	$('.carousel .slide-current').fadeIn().promise().done(function(){
						$('.carousel .slide-prev, .carousel .slide-next').fadeIn();
						carousel_visible_ = true;
					})
				 }
			}
		})
	}

	setTimeout(function() {
		if (window.location.hash) {
			if ($('a[name='+window.location.hash.substr(1)+']') > 0) {
				$(window).scrollTop($('a[name='+window.location.hash.substr(1)+']').offset().top-$("header").outerHeight());
			}
		}
	}, 54);

	$('a[href^=#]').click(function(e){
		var name = $(this).attr('href').substr(1);
		if (name !== "" && name !== null && $('a[name='+name+']') > 0) {
			var pos = $('a[name='+name+']').offset().top-$("header").outerHeight();
			$('body').scrollTop(pos);
			e.preventDefault();
		}
	});

	//replace phone number in nav dropdown if not US/CAN
	var language = window.navigator.userLanguage || window.navigator.language;
	if (!(language.toLowerCase() === "en-us" || language.toLowerCase() === "en-ca")) {
		$("span.phone-number").text("+1 (323) 313-1206");
	}

	checkRequiredFields('form');
	sliderEvents();

});