	jQuery(function ($) {
		"use strict";

		jQuery(document).ready(function() {
  		// Detect device and suggest app link
      var ua = navigator.userAgent.toLowerCase();
      // if((ua.match(/iphone/i)) || (ua.match(/ipod/i)) || (ua.match(/ipad/i))) {
      //  jQuery("#download-app").prop("href","itms://itunes.apple.com/us/app/dance-marathon-at-uf/id955595609")
      //} else if((ua.match(/android/i))) {
      if((ua.match(/android/i))) {
        jQuery("#download-app").prop("href","http://play.google.com/store/apps/details?id=com.uf.dancemarathon")
      }

      // Animate number counters
			jQuery("#student-counter").delay(200).animateNumbers(6861, true, 4000);

			// Make nav bar "sticky"
			jQuery('#nav-wrapper').height(jQuery("#nav").height());
			// var navOffset = jQuery('#nav').offset().top;
			var navOffset = jQuery('#top-carousel').height();

			// Initialize nav menu
      var sf, body, breakpoint;
      breakpoint = 768;
      body = jQuery("body");
      sf = jQuery('ul.sf-menu');
      if( jQuery(window).width() >= breakpoint) {
        // enable superfish when the page first loads if we're on desktop
        sf.superfish({
			  	delay: 200,
			  	animation: {opacity:'show'},
			  	animationOut: {opacity:'hide'},
			  	speed: 0,
			  	speedOut: 0,
			  	cssArrows: false,
			  	disableHI: true
			  });
      }
      jQuery(window).resize(function() {
        if(body.width() >= breakpoint && !sf.hasClass('sf-js-enabled')) {
            // you only want SuperFish to be re-enabled once (sf.hasClass)
            sf.superfish({
              delay: 200,
              animation: {opacity:'show'},
              animationOut: {opacity:'hide'},
              speed: 0,
              speedOut: 0,
              cssArrows: false,
              disableHI: true
            });
        } else if(body.width() < breakpoint) {
            // smaller screen, disable SuperFish
            sf.superfish('destroy');
        }
      });

			// Parallax all the things
			jQuery('.parallax').parallax("50%", 0.2);

			// Homepage Carousel
			jQuery('#top-carousel').carousel({
        interval: 5000,
        pause: "hover"
      });

			// Homepage DM countdown
      var currentDate = new Date();
			var futureDate  = new Date("March 15, 2015 14:15:00");
			var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

			if (futureDate.getTime() > currentDate.getTime()) {
			  jQuery('#countdown').FlipClock(diff, {
			    clockFace: 'DailyCounter',
			    countdown: true
			  });
			} else {
        jQuery('#countdown').FlipClock(0, {
			    clockFace: 'DailyCounter',
			    countdown: true,
			    autoStart: false
			  });
			}

			jQuery('#countdown').find('a').removeAttr("href");

			// Update active tab based on URL
			var hash = window.location.hash;
			hash && jQuery('ul.nav a[href="' + hash + '"]').tab('show');

			// Element Animations:
			// Elements appear from top
			jQuery('.animate_top').each(function() {
				jQuery(this).appear(function() {
					jQuery(this).delay(100).animate({
						opacity : 1,
						top : "0px"
					}, 800);
				});
			});
			// Elements appear from bottom
			jQuery('.animate_bottom').each(function() {
				jQuery(this).appear(function() {
					jQuery(this).delay(100).animate({
						opacity : 1,
						bottom : "0px"
					}, 800);
				});
			});
			// Elements appear from left
			jQuery('.animate_left').each(function() {
				jQuery(this).appear(function() {
					jQuery(this).delay(100).animate({
						opacity : 1,
						left : "0px"
					}, 800);
				});
			});
			// Elements appear from right
			jQuery('.animate_right').each(function() {
				jQuery(this).appear(function() {
					jQuery(this).delay(100).animate({
						opacity : 1,
						right : "0px"
					}, 800);
				});
			});
			// Elements appear in fadeIn effect
			jQuery('.animate_fade_in').each(function() {
				jQuery(this).appear(function() {
					jQuery(this).delay(100).animate({
						opacity : 1,
						right : "0px"
					}, 800);
				});
			});
		});

		(function() {
			fakewaffle.responsiveTabs(['xs', 'sm']);
		})(jQuery);

	}());
