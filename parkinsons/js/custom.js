$(function() {
	// CUFON FONT REPLACEMENT
	Cufon.replace('h1, h2, .labelLinks a, .tabNavigation a, .localSupport label, .iconBigText a, .heroPanelInner > .heroLink, .heroLink span, .donateByPhone h3, .cufon', {
		hover: true
	});
	// END CUFON FONT REPLACEMENT
	

	// NAVIGATION HELPER LINKS
	$(function(){
		var posts = $("body > *:not(#breadcrumbs)"),
			next = $(".navLinks .next"),
			prev = $(".navLinks .prev");

		findFirstVisible().addClass('current');

		next.click(function(e){
			e.preventDefault();
			prev.show();
			var nextEle;
			if(!$('.current').isOnScreen()){
				nextEle = findFirstVisible().next(posts);
			} else {
				if(!findFirstVisible().hasClass('current')){
					nextEle = findFirstVisible().next(posts);
				} else{
					nextEle = $('.current').next(posts);
				}
			}
			moveOn(nextEle);
		});

		prev.click(function(e){
			e.preventDefault();
			var prevEle;
			if(!$('.current').isOnScreen()){
				prevEle = findFirstVisible().prev(posts);

			} else{
				prevEle = $('.current').prev(posts);
			}
			moveOn(prevEle);
		});

		function hideFirstLast() {
			// Hide prev arrow if at top
			$('header > div:first').isOnScreen() ? prev.addClass('hidden') : prev.removeClass('hidden');

			// Hide next arrow if at bottom
			$('body > footer *:last').isOnScreen() ? (next.addClass('hidden'), prev.addClass('alone')) : (next.removeClass('hidden'), prev.removeClass('alone'));
		};

		hideFirstLast();

		$(window).scroll(function(){
			hideFirstLast();
		});

		function scrollToPosition(ele){
			if(ele !== undefined) {
				$("html, body").stop().scrollTo(ele, 200);
			}
		}

		function findFirstVisible(){
			var element;
			posts.each(function(){
				if($(this).isOnScreen()){
					element = $(this);
					return false;
				}
			});
			return element;
		}

		function moveOn(target){
			$('.current').removeClass('current');
			target.addClass('current');
			var pos = target.position().top + 1
			scrollToPosition(pos);
		}
	});

	// Check if element is on screen - for NAVIGATION HELPER LINKS
	$.fn.isOnScreen = function(){
		var win = $(window),
			viewport = {
				top : win.scrollTop(),
				left : win.scrollLeft()
			};
		
		viewport.right = viewport.left + win.width();
		viewport.bottom = viewport.top + win.height();

		var bounds = this.offset();

		bounds.right = bounds.left + this.outerWidth();
		bounds.bottom = bounds.top + this.outerHeight();

		return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
	};
	// END NAVIGATION HELPER LINKS

	
	// ACCORDION MODULES
	$(function(){
		$('div.accordionContent').hide();
		$('div.accordion').on('click', '> h3', function(){
			var $this = $(this);
			if ($this.hasClass('open')) {
				$this.removeClass('open').next('div.accordionContent').stop().slideUp(500, function(){
					sideElementFix();
				});	
			} else {
				$('div.accordionContent').slideUp(500);
				$('div.accordion h3').removeClass('open');
				$this.addClass('open').next('div.accordionContent').stop().slideDown(500, function(){
					sideElementFix();	
				});
			}
		});
	});
	// END ACCORDION MODULES


	// CAROUSELS
	// Home page hero module carousel
	if($('.tabs').length){
		$('.tabs').carouFredSel({
			circular: false,
			items: 1,
			width: '745px',
			auto: false,
			direction: 'down',
			scroll: {
				fx: 'directscroll'
			},			
			pagination: {
				container: '.tabNavigation',
				anchorBuilder: function(nr) {
					var $tabTitle = $(this).find('.tabTitle').text();
					return '<a href="#" title="'+$tabTitle+'">' + $tabTitle + '</a>';
				}
			}
		});
	};

	// Main content story (quote) module carousel
	if($('.storyGallery').length){
		$('.storyGallery .boxGalleryInner').carouFredSel({
			circular: true,
			items: 1,
			width: '495px',
			auto: false,
			height: "variable",
			scroll: {
				fx: 'fade'
			},
			prev: {
				button: '.storyGallery .prev'
			},
			next: {
				button: '.storyGallery .next'
			},
			pagination: '.storyGallery .boxPagination'
		});
	};

	// Main content image gallery carousel
	if($('.boxCarousel').length){
		$('.boxCarousel .boxGalleryInner').carouFredSel({
			circular: true,
			items: 3,
			width: '495px',
			auto: false,
			scroll: {
				fx: 'directscroll'
			},
			prev: {
				button: '.boxCarousel .prev'
			},
			next: {
				button: '.boxCarousel .next'
			},
			pagination: '.boxCarousel .boxPagination'
		});
	};
	
	// Shop item image carousel
	if($('.galleryImages').length){
		$('.galleryImages').carouFredSel({
			auto:false,
			scroll: {
				fx: 'crossfade'
			}
		});
		$('.galleryThumbs').carouFredSel({
			auto: false
		});
		$('.galleryThumbs img').click(function() {
			$('.galleryThumbs img').removeClass('active');
			$(this).addClass('active');
			$('.galleryImages').trigger( 'slideTo', [ $('.galleryImages img[alt='+ $(this).attr( 'alt' ) +']') ] );
		}).css( 'cursor', 'pointer' );
	};
	// END CAROUSELS


	// SIDEBAR SUBCATEGORIES
	$('li.subCategory').hide();

	$('ul.shopCategories').on('click', '> li > a', function(e) {
		var $this = $(this),
			$parent = $this.parent();
		if ($parent.next().hasClass('subCategory')) {
			e.preventDefault();
		};
		if ($parent.next().hasClass('subCategory') && !$parent.hasClass('open')) {
			$('.shopCategories li').removeClass('open');
			$('.subCategory').slideUp();
			$parent.addClass('open').next().stop().slideDown(function(){
				sideElementFix();
			});
		} else if ($parent.hasClass('open')) {
			$parent.removeClass('open').next().stop().slideUp();
		};
	});
	// END SIDEBAR SUBCATEGORIES


	// FANCYBOXES
	// Add special widths to set location fancybox for ie7
	if ($.browser.msie && $.browser.version == 7) {
		$('.iframe').fancybox({
			width: 390,
			height: 160
		});
	} else {
		$('.iframe').fancybox({
			width: 375,
			height: 140
		});
	};

	// Video fancybox
	$('.video').fancybox({
		type: 'iframe',
		showCloseButton: false
	});

	// Main content image gallery carousel fancybox
	$('.boxCarousel .boxGalleryInner a').fancybox();
	// END FANCYBOXES


	// SIDEBAR / SIDENAV HEIGHT SCRIPT
	// work out height of sidenav/sidebar, and increase the height of the last wrapper so it fits
	var sideElementFix = function() {
		var totalHeight = 0,
			sideNavHeight = $('.sideNav').outerHeight() + 20,
			sideBarHeight = $('.sideBar').outerHeight() + 20,
			wrappers = $('body > .wrapper'),
			lastWrapper = wrappers.last(),
			countWrappers = wrappers.length;

		// Find out height of all wrappers together
		wrappers.each(function() {
			var $this = $(this),
				height = $this.outerHeight();
				totalHeight += height;
				// For the events page, or pages where the sidebar is in a wrapper that isn't the first, (and a sidenav is present in a different wrapper), extend the height of the sidebar wrapper to fit the sidebar, if the sidebar is longer than its wrapper
				if (!$this.find('.sideNav').length && $this.find('.sideBar').length && $('body').find('.sideNav').length && height < sideBarHeight) {
					$this.height(sideBarHeight + 20);
				}
		});

		var totalHeight2 = totalHeight - lastWrapper.height(); 

		// If the sidebar is longer than the total height of the content wrappers (and longer than the sidenav), extend the last wrapper to a little more than the height of the sidebar
		if (sideBarHeight > sideNavHeight && sideBarHeight > totalHeight) {
			(countWrappers < 3) ? lastWrapper.height(sideBarHeight +50) : lastWrapper.height(sideBarHeight - totalHeight2 +50)
			// same again, but for the sidenav
		} else if (sideNavHeight > sideBarHeight && sideNavHeight > totalHeight) {
			(countWrappers < 3) ? lastWrapper.height(sideNavHeight +50) : lastWrapper.height(sideNavHeight - totalHeight2 +30)
		}

	};

	// Run SIDEBAR / SIDENAV HEIGHT SCRIPT on page load
	sideElementFix();
	// END SIDEBAR / SIDENAV HEIGHT SCRIPT


	// DATEPICKER / CUSTOM SELECT SCRIPTS
	$(".datePicker").datepicker();

	$('select:enabled').attr('autocomplete','off'); //fixes Firefox bug  
	
	$('.sideBar select').ufd({
		moveAttrs: ["autocomplete"],
		manualWidth: 157
	});

	$('.itemAction select, #messageActions').ufd({
		moveAttrs: ["autocomplete"],
		manualWidth: 195
	});

	$('#searchTopics, #searchOrder').ufd({
		moveAttrs: ["autocomplete"],
		manualWidth: 221
	});
	// END DATEPICKER / CUSTOM SELECT SCRIPTS


	// CROSS-BROWSER PLACEHOLDER TEXT
	$('[placeholder]').focus(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		}
	}).blur(function() {
		var input = $(this);
		if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		}
	}).blur().parents('form').submit(function() {
		$(this).find('[placeholder]').each(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
	 		 input.val('');
			}
		})
	});
	// END CROSS-BROWSER PLACEHOLDER TEXT


	// FANCY CAROUSEL INDICATOR FOR HERO IMAGES - Taken from heroku.com
	Home = {
		animationSpeed : 500,

		handlerOffset : function(handler){
			var handlerHalfHeight = handler.outerHeight() / 2,
				firstNavLink = $('.tabNavigation a').first(),
				handlerLeftBorder = firstNavLink.position().top,
				firstNavLinkMargin = firstNavLink.outerHeight() - firstNavLink.innerHeight();
			return (handler.outerHeight() / 2) + handlerLeftBorder + firstNavLinkMargin
		},

		animateToLink : function(link){
			var handler = $('.heroPanelInner .indicator'),
				elem = $(link),
				x = (elem.outerHeight() / 2) + elem.position().top - this.handlerOffset(handler);
			handler.animate({ top: x }, Home.animationSpeed);
		},

		setEvents : function(){
			$('.tabNavigation a').click( function(e){
				Home.animateToLink(this)
				return false
			})
		}

	};

	// Initialise indicator on page load
	$(function(){
		Home.setEvents()
	});
	// END FANCY CAROUSEL INDICATOR FOR HERO IMAGES


	// TABBED CONTENT
	$('.tabbedContentLinks').each(function(){
		var $this = $(this),
			$active, $content, $links = $this.find('a');

		$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
		$active.addClass('active');
		$content = $($active.attr('href'));

		$links.not($active).each(function () {
			var $this = $(this);
			$($this.attr('href')).hide();
		});

		$this.on('click', 'a', function(e){
			$active.removeClass('active');
			$content.hide();
			$active = $(this);
			$content = $($active.attr('href'));
			$active.addClass('active');
			$content.show();
			e.preventDefault();
			sideElementFix();
		});
	});
	// END TABBED CONTENT


	// LOGIN FLYOUT
	$('.flyoutToggle').click(function(e){
		var $this = $(this);
		e.preventDefault();
		$this.toggleClass('open').next('.flyoutForm').toggle();
		$('.flyoutForm input[type=text]').first().focus();
	});
	// END LOGIN FLYOUT


	// HIDE HELPER ARROWS ON MOBILE
	navigator.userAgent.match(/Android|webOS|iPhone|iPod|iPad/i) ? $('.navLinks').hide() : $('.navLinks').show();
	// END HIDE HELPER ARROWS ON MOBILE


	// COOKIE INFORMATION
	// If cookie isn't set, show cookie info
	if (!$.cookie('cookiePrefs')) {
		$('.cookies').show();
		setTimeout(function(){
			$('.cookieInfo').fadeIn(250);	
		}, 1000);	
	};

	// When cookie info is closed, set cookie for a year
	$('.cookieInfo .close, .cookieLink').on('click', function(e){
		$.cookie('cookiePrefs', '1', {
			expires: 365,
			path: '/'
		});
		e.preventDefault();
		$('.cookieInfo').fadeOut(250, function(){
			$('.cookies').fadeOut(250);
		});
	});
	// END COOKIE INFORMATION


	// ADD CLASSES TO BODY - to fix mac search icon and ie10 main nav since you can't target without js
	if (navigator.appVersion.indexOf("Mac")!=-1) { 
		$('body').addClass('mac');
	} else if ($.browser.msie && $.browser.version == 10) {
			$('body').addClass('ie10');
	};
	// END ADD CLASSES TO BODY

	// FIX IE7 PEEKABOO BUG
	if ($.browser.msie && $.browser.version == 7) {
		$('.sideBar').wrap('<div/>')
	};
	// END FIX IE7 PEEKABOO BUG

	// ADD SHIFTSHADOW CLASS TO BODY - if there's a sidenav, so shadow can be repositioned
	if($('.sideNav').length && !$('.sideBar').length) {
		$('body').addClass('shiftShadow');
	};
	// END ADD SHIFSHADOW CLASS TO BODY
	
	Cufon.now();
});