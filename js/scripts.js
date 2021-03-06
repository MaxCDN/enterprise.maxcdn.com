// jQuery cookie plugin
// jQuery cookie plugin
// https://raw.github.com/carhartl/jquery-cookie/master/jquery.cookie.js
(function(factory){if(typeof define==="function"&&define.amd)define(["jquery"],factory);else factory(jQuery)})(function($){var pluses=/\+/g;function encode(s){return config.raw?s:encodeURIComponent(s)}function decode(s){return config.raw?s:decodeURIComponent(s)}function stringifyCookieValue(value){return encode(config.json?JSON.stringify(value):String(value))}function parseCookieValue(s){if(s.indexOf('"')===0)s=s.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\");try{s=decodeURIComponent(s.replace(pluses, " "));return config.json?JSON.parse(s):s}catch(e){}}function read(s,converter){var value=config.raw?s:parseCookieValue(s);return $.isFunction(converter)?converter(value):value}var config=$.cookie=function(key,value,options){if(value!==undefined&&!$.isFunction(value)){options=$.extend({},config.defaults,options);if(typeof options.expires==="number"){var days=options.expires,t=options.expires=new Date;t.setDate(t.getDate()+days)}return document.cookie=[encode(key),"=",stringifyCookieValue(value),options.expires? "; expires="+options.expires.toUTCString():"",options.path?"; path="+options.path:"",options.domain?"; domain="+options.domain:"",options.secure?"; secure":""].join("")}var result=key?undefined:{};var cookies=document.cookie?document.cookie.split("; "):[];for(var i=0,l=cookies.length;i<l;i++){var parts=cookies[i].split("=");var name=decode(parts.shift());var cookie=parts.join("=");if(key&&key===name){result=read(cookie,value);break}if(!key&&(cookie=read(cookie))!==undefined)result[name]=cookie}return result}; config.defaults={};$.removeCookie=function(key,options){if($.cookie(key)===undefined)return false;$.cookie(key,"",$.extend({},options,{expires:-1}));return!$.cookie(key)}});
$.cookie.raw = true;

// browser detection
(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

// ouibounce

!function(e,o){"function"==typeof define&&define.amd?define(o):"object"==typeof exports?module.exports=o(require,exports,module):e.ouibounce=o()}(this,function(){return function(e,o){function i(e,o){return"undefined"==typeof e?o:e}function n(e){var o=24*e*60*60*1e3,i=new Date;return i.setTime(i.getTime()+o),"; expires="+i.toGMTString()}function t(){y.addEventListener("mouseout",u),y.addEventListener("keydown",r)}function u(e){e.clientY>s||c("viewedOuibounceModal","true")&&!f||(d(),p())}function r(e){b||c("viewedOuibounceModal","true")&&!f||e.metaKey&&76==e.keyCode&&(b=!0,d(),p())}function c(e,o){var i=document.cookie.split("; ").reduce(function(e,o){var i=o.split("=");return e[i[0]]=i[1],e},{});return i[e]===o}function d(){e&&(e.style.display="block"),a()}function a(e){var e=e||{};"undefined"!=typeof e.cookieExpire&&(v=n(e.cookieExpire)),e.sitewide===!0&&(k=";path=/"),"undefined"!=typeof e.cookieDomain&&(l=";domain="+e.cookieDomain),document.cookie="viewedOuibounceModal=true"+v+l+k,y.removeEventListener("mouseout",u),y.removeEventListener("keydown",r)}var o=o||{},f=o.aggressive||!1,s=i(o.sensitivity,20),m=i(o.timer,1e3),p=o.callback||function(){},v=n(o.cookieExpire)||"",l=o.cookieDomain?";domain="+o.cookieDomain:"",k=o.sitewide===!0?";path=/":"",y=document.getElementsByTagName("html")[0];setTimeout(t,m);var b=!1;return{fire:d,disable:a}}});

// query string array
// http://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
(function($) {
    $.QueryString = (function(a) {
        if (a == "") return {};
        var b = {};
        for (var i = 0; i < a.length; ++i) {
            var p=a[i].split('=');
            if (p.length != 2) continue;
            b[p[0]] = decodeURIComponent(p[1].replace('+', " ").replace(/\+/g, " "));
        }
        return b;
    })(window.location.search.substr(1).split('&'))
})(jQuery);

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

// Trial Form Labels

/* function entTrialFormLabels() {
        $('.enterprise-trial-form label').hide();

    $('.enterprise-trial-form input[name="firstname"').focus(function() {
        $('#fnl').show();
    });

    $('.enterprise-trial-form input[name="firstname"').blur(function() {
        $('#fnl').hide();
    });

    $('.enterprise-trial-form input[name="lastname"').focus(function() {
        $('#lnl').show();
    });

    $('.enterprise-trial-form input[name="lastname"').blur(function() {
        $('#lnl').hide();
    });

    $('.enterprise-trial-form input[name="email"').focus(function() {
        $('#eml').show();
    });

    $('.enterprise-trial-form input[name="email"').blur(function() {
        $('#eml').hide();
    });

    $('.enterprise-trial-form input[name="phone"').focus(function() {
        $('#pnl').show();
    });

    $('.enterprise-trial-form input[name="phone"').blur(function() {
        $('#pnl').hide();
    });

    $('.enterprise-trial-form input[name="website"').focus(function() {
        $('#wsl').show();
    });

    $('.enterprise-trial-form input[name="website"').blur(function() {
        $('#wsl').hide();
    });

    $('.enterprise-trial-form select').focus(function() {
        $('#bwl').show();
    });

     $('.enterprise-trial-form select').blur(function() {
        $('#bwl').hide();
    });
} */

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
				if ($(this).val() === "" || $(this).val() == null || $(this).val() == $(this).prop('defaultValue')) {
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
			//fill out content__c field in x
			$("input[name='content__c']", $(this)).val('TjMWJFGCrZsrgkTiumWainoraTaYandAd8bapL8Xdks');

			// pass through needed utm details
			if (typeof $.cookie("custom_utm_source") !== 'undefined') {
				$("<input type='hidden' value='" + $.cookie("custom_utm_source") + "' />").attr("name", "utm_source__c").appendTo($(this));
			}
			if (typeof $.cookie("custom_utm_medium") !== 'undefined') {
				$("<input type='hidden' value='" + $.cookie("custom_utm_medium") + "' />").attr("name", "utm_medium__c").appendTo($(this));
			}
			if (typeof $.cookie("custom_utm_term") !== 'undefined') {
				$("<input type='hidden' value='" + $.cookie("custom_utm_term") + "' />").attr("name", "utm_term__c").appendTo($(this));
			}
			if (typeof $.cookie("custom_utm_campaign") !== 'undefined') {
				$("<input type='hidden' value='" + $.cookie("custom_utm_campaign") + "' />").attr("name", "utm_campaign__c").appendTo($(this));
			}
			if (typeof $.cookie("custom_utm_content") !== 'undefined') {
				$("<input type='hidden' value='" + $.cookie("custom_utm_content") + "' />").attr("name", "utm_content__c").appendTo($(this));
			}
			if (typeof $.cookie("first_visit") !== 'undefined') {
				$("<input type='hidden' value='" + $.cookie("first_visit") + "' />").attr("name", "ppc_entrance_date__c").appendTo($(this));
			}
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

// store utm values in cookies if the exist
function googleUTMSources() {

	var utm_source = (typeof $.cookie("utm_source") === 'undefined');
	var utm_medium = (typeof $.cookie("utm_medium") === 'undefined');
	var utm_term = (typeof $.cookie("utm_term") === 'undefined');
	var utm_campaign = (typeof $.cookie("utm_campaign") === 'undefined');
	var utm_content = (typeof $.cookie("utm_content") === 'undefined');

	var first_visit = (typeof $.cookie("first_visit") === 'undefined');

	if (utm_source && typeof $.QueryString["utm_source"] !== 'undefined') {
			$.cookie("custom_utm_source", $.QueryString["utm_source"], {expires: 183, path: '/',  domain: '.maxcdn.com'});
	}
	if (utm_medium && typeof $.QueryString["utm_medium"] !== 'undefined') {
			$.cookie("custom_utm_medium", $.QueryString["utm_medium"], {expires: 183, path: '/',  domain: '.maxcdn.com'});
	}
	if (utm_term && typeof $.QueryString["utm_term"] !== 'undefined') {
			$.cookie("custom_utm_term", $.QueryString["utm_term"], {expires: 183, path: '/', domain: '.maxcdn.com'});
	}
	if (utm_campaign && typeof $.QueryString["utm_campaign"] !== 'undefined') {
			$.cookie("custom_utm_campaign", $.QueryString["utm_campaign"], {expires: 183, path: '/',  domain: '.maxcdn.com'});
	}
	if (utm_content && typeof $.QueryString["utm_content"] !== 'undefined') {
			$.cookie("custom_utm_content", $.QueryString["utm_content"], {expires: 183, path: '/',  domain: '.maxcdn.com'});
	}
	if (first_visit && typeof $.cookie("custom_utm_source") !== 'undefined') {
			var now = new Date();
			var first_date =  now.getDate();
			var first_month = now.getMonth();
			var first_year = now.getFullYear();
			var first_hour = now.getHours();
			var first_minutes = now.getMinutes();
			var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
			var visit_date = first_date + ' ' + months[first_month] + ' ' + first_year + ' ' + first_hour + ':' + first_minutes;

			$.cookie("first_visit", visit_date, {expires: 100000, path: '/',  domain: '.maxcdn.com'});
	}
}

$(document).ready(function(){
	jQuery.fn.exists = function(){
		return this.length > 0;
	}

	if (window.location.search.indexOf("ref=netdna") != -1) {
		$(".top-notification").removeClass("hidden");
		if (!jQuery.browser.mobile) {
			$("header").css("marginTop", "35px");
			$("header .top").css("top", "35px");
			$("aside#sidebar").css("marginTop", "28px");
		}
	}

	// onclick chat cookie set

	$('[onclick="return startWidget(\'chat\');"]').click(function() {
		$.cookie("livechat_autopopup",true,{expires:1,path:'/'});
	})

	// automatic chat bubble
	if(typeof $.cookie("livechat_autopopup")==='undefined' && window.location.href.indexOf("pricing") == -1){
		var $chatNow=$('.chat-now-popup');
		$chatNow.hide().delay(30000).queue(function() {
    		if(typeof $.cookie("livechat_autopopup")==='undefined') {
    			$('.chat-now-popup').fadeIn(600, function() {
    				_kmq.push(['record', 'Proactive Chat Displayed', {'Version_Number':'01'}]);
    			});
    		}
    		$(this).dequeue();
    		});
		$chatNow.click(function(){
			$chatNow.hide();
			_kmq.push(['trackClick', '#new-chat-popup', 'Proactive Chat Initiated']);
			$.cookie("livechat_autopopup",true,{expires:1,path:'/'});
			startWidget('chat');
		});
		$('#image-maps area').click(function(e){
			e.preventDefault();
			_kmq.push(['trackClick', '#new-area', 'Proactive Chat Closed']);
			$chatNow.hide();
			$.cookie("livechat_autopopup",true,{expires:1,path:'/'});
		});
	}

	if (jQuery.browser.mobile) {
		$("header .top,.top-notification").css("position", "relative");
		$('.top-area').css('marginTop','0px');
	}

	// make sure not clickable subnav works right
	$("header .top ul li.not-clickable > a").click(function(e) {
		e.preventDefault();
	});

	// add in utm details
	googleUTMSources();

	if (window.PIE) {
		$('.ie-fix').each(function() {
			PIE.attach(this);
		});
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

	/* if ($('.custom-form').exists()) {
		customForm.lib.domReady(function(){
			customForm.customForms.replaceAll();
		});
	} */

	if ($('.hidden-popup').exists()) {
		setTimeout(function() {
			$('.hidden-popup').hide();
		}, 600);
	}

	if ($('.fancybox').exists()) {
		$('.fancybox').each(function(){
			var width = ($(this).hasClass('small-box')) ? 300 : 400;
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

	$("a#mainbtntryusfree").click(function(e) {
		e.preventDefault();
		var freetrial = $('#freetrialholder');
		$("html, body").animate({ scrollTop: freetrial.offset().top-45 }, {
			duration: 145,
			complete: function() {
				setTimeout(function(){
					var pos = freetrial.position();
					freetrial
						.animate({'left':-14+'px'},54)
						.animate({'left':+14+'px'},54)
						.animate({'left':-14+'px'},54)
						.animate({'left':0+'px'},54);
				}, 100);
			}
		});
	});

/* entTrialFormLabels(); */

$(".initial-value-form input[type='text']").each(function() {
    var default_value = this.value;
  $(this).focus(function(){
     if(this.value == default_value) {this.value = '';}
    });
    $(this).blur(function(){
       if(this.value == '') {this.value = default_value;}
    });
});

$(".initial-value-form input[type='email']").each(function() {
    var default_value = this.value;
  $(this).focus(function(){
     if(this.value == default_value) {this.value = '';}
    });
    $(this).blur(function(){
       if(this.value == '') {this.value = default_value;}
    });
});

$(".initial-value-form input[type='phone']").each(function() {
    var default_value = this.value;
  $(this).focus(function(){
     if(this.value == default_value) {this.value = '';}
    });
    $(this).blur(function(){
       if(this.value == '') {this.value = default_value;}
    });
});

$(".initial-value-form input[type='website']").each(function() {
    var default_value = this.value;
  $(this).focus(function(){
     if(this.value == default_value) {this.value = '';}
    });
    $(this).blur(function(){
       if(this.value == '') {this.value = default_value;}
    });
});

ouibounce(document.getElementById('main-exit-popup'), {
        callback: function() {
             _kmq.push(['record', 'On Exit Popup Displayed']);
        },
        sitewide: true
    });

    $('body').on('click', function() {
        $('#main-exit-popup').hide();
        _kmq.push(['record', 'On Exit Popup Closed']);
      });

      $('#main-exit-popup .fancybox-close').on('click', function() {
        $('#main-exit-popup').hide();
        _kmq.push(['record', 'On Exit Popup Closed']);
      });

      $('#main-exit-popup #modal-chatnowbutton').on('click', function() {
         _kmq.push(['record', 'On Exit Popup - LiveChat Initiated']);
        $('#main-exit-popup').hide();
      });

      $('#main-exit-popup .modal-bubble').on('click', function(e) {
        e.stopPropagation();
      });

	checkRequiredFields('form');
	sliderEvents();

});