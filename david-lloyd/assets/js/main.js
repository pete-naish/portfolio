$(function(){

	// function on_resize(c,t){onresize=function(){clearTimeout(t);t=setTimeout(c,100)};return c};

	// on_resize(function() {
	// 	navMainPos();
	// 	navPagePos();
	// })();


	$('html').removeClass('no-js');

	// Add main menu items to mobile dropdown
	function navMainPos() {
		var	$windowWidth = $(window).width(), 
			$navMainContainer = $('ul.nav-main'),
			$navMainMenu = $('li.icon-menu'),
			$navTop = $('ul.nav-top');

		$($navMainMenu).appendTo($windowWidth < 569 ? $navTop : $navMainContainer);

	}

	function navPagePos() {
		var	$windowWidth = $(window).width(), 
			$navPageContainer = $('ul.nav-page'),
			$navPageMenuItems = $navPageContainer.find('li'),
			$navTop = $('li.icon-menu ul');

		$navPageMenuItems.addClass('page-nav-item');
		$('.page-nav-item').appendTo($windowWidth < 569 ? $navTop : $navPageContainer);

	}

	$(window).resize(function() {
		navMainPos();
		navPagePos();
	});

	navMainPos();
	navPagePos();

	// Flyout menus
	$(function(){
		var $flyouts = $('li.flyout');
		$($flyouts).on('click', '> a', function(e){
			var $this = $(this),
				$windowWidth = $(window).width();
			$this.parent().toggleClass('open').siblings().removeClass('open');

			if ($windowWidth > 569) {
				$this.parent().find('input[type=text]').focus();
			}

			e.preventDefault();
		});
	});


	// Disable submit buttons on click
	$('input[type=submit]').on('click', function(){
		var $this = $(this);
			$this.attr('disabled', 'disabled');
	});


	// Cross-browser placeholders
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


	// Tabbed content areas
	$('ul.tabs').each(function(){
		// which tab is active and its associated content
		var $active, $content, $links = $(this).find('a');

		// If the location.hash matches one of the links, use that as the active tab.
		// If no match is found, use the first link as the initial active tab.
		$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
		$active.addClass('active');
		$content = $($active.attr('href'));

		// Hide the remaining content
		$links.not($active).each(function () {
			$($(this).attr('href')).hide();
		});

		// Bind the click event handler
		$(this).on('click', 'a', function(e){
			// Make the old tab inactive.
			$links.removeClass('active');

			// Update the variables with the new link and content
			$active = $(this);
			$option = $active.attr('href');
			$content = $($option);

			// Make the tab active.
			$active.addClass('active');
			$content.show().siblings('div').not('.container').hide();

			// Set matching select option to selected
			$('option[value=' + '"' + $option + '"' + ']').prop('selected', true).siblings().prop('selected', false);

			// Prevent the anchor's default click action
			e.preventDefault();
		});
	});

	//Convert ul's to dropdown for mobile
	convertUL("ul.tabs", ".tabbed-content", "mobile-only");

	function convertUL(ulID, selectLocation, selectClass) {
		// Create the dropdown base
		$("<div class='container'><div class='container-grid'><div class='grid-8'><select class='" + selectClass + ' ' + 'nav-page-mobile' + "' /></div></div></div>").prependTo(selectLocation);
		var select = "select." + selectClass;

		// Populate dropdown with menu items
		$(ulID + " > li").each(function() {
			var el = $(this).find("a");
				$("<option />", {
					"value": el.attr("href"),
					"text": el.text()
				}).appendTo(select);
		});

		$(select).change(function() {
			var $this = $(this),
				$val = $this.find("option:selected").val(),
				$target = $('ul.tabs li').find('a[href=' + $val + ']'),
				$targethref = $target.attr('href');

			// add active class to selected content only
			$('ul.tabs a').removeClass('active');

			$target.addClass('active');
			$this.find("option:selected").prop('selected', true).siblings().prop('selected', false);

			// only show selected content
			$($targethref).show().siblings('div').not('.container').hide();

		});


		var $options = $(select).find('option'),
			$activeOption;

			if (location.hash != '') {
				$activeOption = $($options.filter('option[value=' + location.hash +']'));
			} else {
				$activeOption = $($options[0]);
			}

		$activeOption.prop('selected', true);
	}

	function slideOverlay() {
		$('div.slide-in').on('click', function() {
			var $overlays = $('div.slide-in .overlay.shown'),
				$this = $(this),
				$thisoverlay = $this.find('div.overlay');

			$overlays.stop().animate({top:'100%'}, 300, 'swing').removeClass('shown');
			$thisoverlay.stop().animate({top:0}, 300, 'swing').addClass('shown');
			
		});	
	}

	$('div.slide-in').on('click', '.front a', function(e){
		e.preventDefault();
	})

	slideOverlay();

	if ($(window).width() < 590) {
		var $fixedSlider = $('.slider-panel.fixed'),
			$slidePanels = $('div.slider-panel'),
			$slides = $('div.slide-in'),
			$slideWrapper = $('div.slide-wrapper');
		$fixedSlider.insertAfter('.slider');
		$slidePanels.not($fixedSlider).replaceWith(function() {
			var $this = $(this);
			return $this.contents(); 
		});
		$slides.wrap('<div class="slider-panel l"/>');
		$slideWrapper.width($slides.length * $slides.width());
	} else {
		$('.slide-wrapper').bxSlider({
			pager: false,
			moveSlides: 1,
			maxSlides: 1000,
			slideWidth: 300,
			onSlideAfter: function() {
				slideOverlay()
			},
			onSlideNext: function() {
				$('.bx-prev').fadeIn(300);
			}
		});
	}


	$('.icon-error, .icon-help').on('click', function(e){
		e.preventDefault();
	}).tooltipster({
		position: 'right',
		trigger: 'click',
		offsetX: -20
	});
	
	if ($('blockquote').length > 1) {
		$('.quote-slider').bxSlider({
			mode: 'fade',
			pager: false,
			controls: false,
			auto: true,
			autoHover: true,
			adaptiveHeight: true
		});
	}

});