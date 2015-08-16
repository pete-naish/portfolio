$(function(){
			$('.mainNav li').on('hover', function(){
				$(this).prev().toggleClass('noBorder');
			});
			$('.mainNav li.active').prev().addClass('noBorder');
		});

		$("#imageCarousel").carouFredSel({
			width: "100%",
			height: 350,
			items: {
				visible: 3,
				width: 920,
				height: 350
			},
			scroll: {
				items: 1,
				duration: 750
			},
			auto: false,
			prev: {
				button: "#imageCarouselWrapper #prev",
				key: "left"
			},
			next: {
				button: "#imageCarouselWrapper #next",
				key: "right"
			}
		});


		$(".textImageCarousel").carouFredSel({
			width: "100%",
			height: 83,
			items: {
				visible: 3
			},
			scroll: {
				items: 3,
				duration: 750
			},
			auto: false,
			prev: {
				button: ".textImageCarouselWrapper #prev",
				key: "left"
			},
			next: {
				button: ".textImageCarouselWrapper #next",
				key: "right"
			}
		});

		$(function(){
			$('.tweetContent').jTweetsAnywhere({
				username: 'the_mdu',
				count:1

			});
		});



		// Fix navigation horizontal position
			$(function(){
				var $sideNav = $('.sideNav'),
					$sideNav_Left1 = $sideNav.css('left').replace(/[^-\d\.]/g,''), // get current sidenav left position without px
					$windowWidth = $(window).innerWidth()-960, // get width of window (minus scrollbars), then subtracts main content width to give the gap either side
					$windowWidthGap = $windowWidth/2, // divide gap by two to give single side gap
					$sideNav_Left = $windowWidthGap; // duplicate variable so both can be manipulated
					


					// if window is greater than 960 wide, adjust left position to fix in place, else keep in place
					if($windowWidth+960 > 960){
						$sideNav.css('left', $sideNav_Left+20);	
					} else {
						$sideNav.css('left', 20);	
					}

				$(window).resize(function(){
					var $windowWidth = $(window).innerWidth()-960,
						$windowWidthGap = $windowWidth/2,						
						$sideNav_Left = $windowWidthGap;
						
						if($windowWidth+960 > 960){
							$sideNav.css('left', $sideNav_Left+20);	
						}
						
				});
			});


			// work out height of sidenav, and increase the height of the last wrapper div to extend past the bottom of the sidenav
			$(function(){
				var totalHeight = 0,
					sideNavHeight = $('.sideNav ul').height(), // sidenav ul height
					wrappers = $('.sideNavWrapper > .wrapper'),
					countWrappers = wrappers.length;

				wrappers.each(function(){ // get height of each main wrapper within .sidenavWrapper, add it to totalHeight
					var $this = $(this),
						height = $this.height();
						totalHeight += height;
				});

				$('.sideNav').height(totalHeight - 60 );
				
				// console.log(totalHeight);
				
				var perc = 0.1 * sideNavHeight; // get 10% of sideNav Height just to add a bit of space at the end
				var totalHeight2 = totalHeight - wrappers.last().height(); // subtract height of the last wrapper div (the one we'll be extending) from the total height. That way, when we extend the last wrapper div, we'll only extend it by the height of the previous wrapper divs (which should be all that needs to be added)



				if (totalHeight < sideNavHeight + 60 ) {
					wrappers.last().height(sideNavHeight - totalHeight2 + perc);
					var newTotalHeight = 0;
					var newWrapperHeights = wrappers.each(function(){ // get height of each main wrapper within .sidenavWrapper, add it to totalHeight
						var $this = $(this),
							newHeight = $this.height();
							newTotalHeight += newHeight;
					});

					// console.log(newTotalHeight);

					$('.sideNav').height(newTotalHeight - 60 );
				}
			});