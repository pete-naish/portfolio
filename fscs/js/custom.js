var iFrameCb	=	'';	//callback from iframe
$(function() {

	


	var coi_extended_data_new;
	// Page tracking 

	function coi_container_track_new(coi_extended_data_new) {
		try{
			coi_tag  = '<IFRAME WIDTH=1 HEIGHT=1 SRC="';
			coi_tag += (location.protocol == 'https:') ? 'https:' : 'http:';
			coi_tag += '//b3-uk.mookie1.com/2/';
			coi_tag += 'COI/'+location.hostname.toLowerCase();
			coi_tag = coi_tag.replace('www.','');
			try{coi_tag += location.pathname.toLowerCase().replace(/[^a-z0-9/\-_.]/g,'');}catch(e){coi_tag += 'error_caught_in_page_name';}
			if(coi_tag.slice(-1)!='/'){coi_tag+='/';}
			coi_tag += 'COI/1'+Math.floor(Math.random()*1000000000);
			coi_tag += '@x96?';
			try{
				for(name in coi_extended_data_new){
					coi_tag += '&_RM_HTML_'+escape(name)+'_='+escape(coi_extended_data_new[name]);
				}
			}catch(e){};
			coi_tag += '" ></IFRAME>';
			$('body').append(coi_tag);
		}catch(e){}
	}

	// Page sizing function
	var current_position="first",
		windowh = $(window).height(),
		offset = $("#underlayer").height(),
		speedoftransition = 500,
		topbgelements = $("#underlayer"),
		minHeight = $('.page').css('min-height');
	if(windowh > 808) {
		$(".page, .coins").css("height", windowh-offset+"px");
		$(".secondSecond, .secondThird").css("height", windowh-offset+"px");
		$("#first").css("height", windowh+"px");
	} else {
		$(".page, .coins").css("height", minHeight);
		$("#first").css("height", windowh+"px");
	}

	$("#first").css("height", windowh+"px");

	$(window).resize(function(){
		windowh = $(window).height(),
		minHeight = $('.page').css('min-height');
		if(windowh > 808) {
			$(".page, .coins").css("height", windowh-offset+"px");
			$(".secondSecond, .secondThird").css("height", windowh-offset+"px");
			$("#first").css("height", windowh+"px");	
		} else {
			$(".page, .coins").css("height", minHeight);
			$("#first").css("height", windowh+"px");
		}
	});
	
	$(window).scroll(function(){
		
		var scrollh = $(window).scrollTop();
		if(scrollh < windowh - offset && current_position!="first"){
			current_position="first";
			topbgelements.stop().animate({ backgroundColor: "#804c9c"}, speedoftransition);
			$('nav a').removeClass('active');
			$('.tab').fadeIn(500);
		}
		
		if(scrollh > windowh - offset && scrollh < windowh*2 - offset && current_position!="second"){
			current_position="second";
			topbgelements.stop().animate({ backgroundColor: "#de3b4a"}, speedoftransition);
			$('.tab').fadeIn(500);
			$('.second .tab').stop().fadeOut(500);
			$('nav a').removeClass('active');
			$('.navSecond a').addClass('active');
			coins();
		}
		
		if(scrollh > windowh*2 - offset*2 && scrollh < windowh*3 - offset*3 && current_position!="third"){
			current_position="third";
			topbgelements.stop().animate({ backgroundColor: "#33b2d9"}, speedoftransition);
			$('.tab').fadeIn(500);
			$('.third .tab').stop().fadeOut(500);
			$('nav a').removeClass('active');
			$('.navThird a').addClass('active');
			chain();
		}
		
		if(scrollh > windowh*3 - offset*3 && scrollh < windowh*4 - offset*4 && current_position!="fourth"){
			current_position="fourth";
			topbgelements.stop().animate({ backgroundColor: "#f08b51"}, speedoftransition);
			$('.tab').fadeIn(500);
			$('.fourth .tab').stop().fadeOut(500);
			$('nav a').removeClass('active');
			$('.navFourth a').addClass('active');
		}
		
		if(scrollh > windowh*4 - offset*4 && scrollh < windowh*5 - offset*5 && current_position!="fifth"){
			current_position="fifth";
			topbgelements.stop().animate({ backgroundColor: "#98ad46"}, speedoftransition);
			$('.tab').fadeIn(500);
			$('.fifth .tab').stop().fadeOut(500);
			$('nav a').removeClass('active');
			$('.navFifth a').addClass('active');
		}

		if(scrollh > windowh*5 - offset*5 && scrollh < windowh*6 - offset*6 && current_position!="sixth"){
			current_position="sixth";
			$('.tab').fadeIn(500);
			$('.sixth .tab').stop().fadeOut(500);
			$('nav a').removeClass('active');
		}

		if ($(window).width() < 990) {
		    $('header').css({ 'left': (0 - $(window).scrollLeft()) + 'px' });
		  }
		  else {
		    $('header').css({ 'left': '0' });
		  }
		
	});
	// end page sizing function


	// smooth scrolling
	$('nav a, .anchor, .anchorArrow, #logo_bg a, .footerLink').on('click', function(e){
		var	$this = $(this),
			$hash = $this.attr('href') ;// grab the href of the clicked link
		
		e.preventDefault();
		
		if ($this.parent().hasClass('sixth')) {
			$('#sixth').slideDown(500, function() {
				$('#name').focus();
			}); // slidedown contact form
		}
		
		$('html,body').stop().animate({scrollTop:$(this.hash).offset().top-107}, 500); // smooth scroll to the top of the linked section
		
	});
	// end smooth scrolling


	// fancy radios
	 function setupLabel() {
        if ($('.label_radio input').length) {
            $('.label_radio').each(function(){ 
                $(this).removeClass('c_on');
            });
            $('.label_radio input:checked').each(function(){ 
                $(this).parent('label').addClass('c_on');
            });                
        };
    };

    $('.label_radio').click(function(){
        setupLabel();
    });
    // end fancy radios
    

    // Bank Tool
    function bankTool(){
    	var banks = [],
    		rawData = [],
    		selected = [],
    		riskSharedTotal = 0,
    		riskTotal = 0;

    	var addBank = function() {
			var bFound = false;
			$(".secondQuestion #bankName").qtip('destroy');
			for (i = 0; i < banks.length; i++) {
				if ($('.secondQuestion #bankName').val().toLowerCase() == String(banks[i]).toLowerCase()) { // is entered value in list?
					bFound = true;
					log(banks[i]); // add value to box
					$('.secondQuestion #bankName').val(''); // clear field text
					$(".secondQuestion #bankName").qtip({
						content: "You can add more firms to the list",
						position: {
							my: 'right middle',
							at: 'middle left'
						},
						style: {
							classes: 'qtip-fscs'
						},
						show:{
							ready:true
						}
				});



					$(function() { // remove clicked bank from array so it can't be added twice
						var index = $.inArray(banks[i], banks);
						banks.splice(index, 1);
					});

				}

			}
			if (!bFound && $('.secondQuestion #bankName').val() != "") {
				$(".secondQuestion #bankName").qtip({
					content:{
						text: 'Sorry, this isn\'t a valid bank name. Please try typing it again. Alternatively, <a class="iframe" href="inc/cant_find.php">click here</a> if you can\'t find your bank or building society.</a>'	
					},
					position: {
						my: 'top middle',
						at: 'bottom middle'
					},
					style: {
						classes: 'qtip-fscs'
					},
					hide:{ //moved hide to here,
				        delay:400,
						fixed:true
				    },
				    events:{
				    		show: function(event, api){
				    			$('.iframe').fancybox();
				    			$('.iframe').on('click', function(){
				    				 $(".secondQuestion #bankName").qtip('hide');
				    			});
				    		}
				    }

				});
				$(".secondQuestion #bankName").qtip('show');
				$(".secondQuestion #bankName").focus();
				return false;
			}

			$('.bankList').jScrollPane(); //re-initiate scrollpane after adding a new item

			$('.bankList .remove').on('click', function() { //when remove button is clicked, remove that entry, and add the bank back to the array
				var $this = $(this),
					arrText = $this.prev('.bankName').text(),
					j = $('.bankEntry').index($this.parent());

				if ($.inArray(arrText, banks) == -1) { // only if not already in array, add it back in (this helps prevent weird duplicates)
				 	banks.push(arrText);
				}

				$this.parent().remove(); // remove entry itself
				$('.bankList').jScrollPane(); //re-initialize jscrollpane so scrollbar disappears if it's not needed
				if ($('.jspPane').is(':empty')) { // stick placeholder text back in
					$("<p class='infoText'>The names of your selected banks and building societies will appear here</p>").appendTo(".jspPane");
				}
			});

		};


    	// when restart button is clicked on results page, reload tool, reinitialize necessary scripts
		function restart() {
			$('.floatRight .button').on('click', function(e){
				e.preventDefault();
				
				$(".results").hide();
				$(".loadedContent").show();

				$('.tableWrapper').empty().removeAttr('style').append('<table border="0" cellspacing="0"><tbody></tbody></table>');

				reset();
				$(".secondQuestion #bankName").focus();
			});	
		};

		function reset() {
			$('.loadedContent .jspPane').empty();
			$("<p class='infoText'>The names of your selected banks and building societies will appear here</p>").appendTo( ".loadedContent .jspPane" );

			banks.length = 0;

			for (i = 0; i < rawData.length; i++) {
    			banks.push(rawData[i][0]);
    		};
			selected = [];
			$('.infoBox').hide();
			$('.bankList, .tableWrapper').jScrollPane();
		}

        function log(message) {
    		$('.bankList .infoText').remove(); // remove placeholder text

        	if ($('#OverEightyFive').is(':checked')) { // if they've checked over 85, adds bank entry with input field
				//get an index for the name
				var n = $(".bankEntry").length;
        		var str = "<div class='bankEntry withInput'><p class='bankName'>" + message + "</p><span class='remove'></span><div class='addValue'><p>&pound;</p><input class='savingsValue' type='text' name='savingsValue" + n + "' maxlength='3' id='savingsValue" + n + "'/><label for='savingsValue'>,000</label></div>" + "</div>";
				
            } else { // else adds basic bank entry
            	var str = "<div class='bankEntry'><p class='bankName'>" + message + "</p><span class='remove'></span>" + "</div>";
            }
        	
        	$(str).appendTo( ".bankList .jspPane" ); // places relevant markup in dom
			if ($('#OverEightyFive').is(':checked')) {
				$("#savingsValue" + n ).qtip({
					content: 'Please enter a value , e.g. for 50,000 enter 50',
					position: {
							my: 'top right',
							at: 'left bottom'
					},
					style: {
						classes: 'qtip-fscs'
					}
				});
				$("#savingsValue" + n).focus();
				$("#savingsValue" + n).bind("keyup paste", function(){
					setTimeout(jQuery.proxy(function() {
						this.val(this.val().replace(/[^0-9]/g, ''));
					}, $(this)), 0);
				});
				
			}
        };

        function checkBanks () {
        	riskSharedTotal = 0;
        	riskNonSharedTotal = 0;
        	var aSharedBanks = [];
        	var aLicenceHolders	=	[];
        	var bSharedGroupExists	=	false;
        	var bBankPushed	=	false;
    		$('.sharedBanks').empty();
    		var bShowInfo = false;
    		for (i = 0; i < selected.length; i++) {
    			bSharedGroupExists	=	false;
    			for (j = 0; j < selected.length; j++) {
    				if(i !== j && selected[i][1] == selected[j][1]) {
    					$('.bad').find('.tableWrapper .risk').eq(i).addClass('sharedLicense').parent().find('td').css({'background-color':'#f7ff3d'});
    					bShowInfo = true;
    					//check if this exists in any of the objects
    					for(aBank in aSharedBanks){
    						if(aBank == selected[i][1]){
    							bSharedGroupExists	=	true;
    							continue;
    						}
    					}
    					if(!bSharedGroupExists){
    						aSharedBanks[selected[i][1]]	=	[];
    						aSharedBanks[selected[i][1]].push(selected[i][0]);
    					}else{
    						for(var n in aSharedBanks){
    							for(var k in aSharedBanks[n]){
									if(selected[i][0] == aSharedBanks[n][k]){
										bBankPushed	=	true;
										continue;
									}
								}
    						}
    						if(!bBankPushed){
    							aSharedBanks[selected[i][1]].push(selected[i][0]);
    						}
    						bBankPushed	=	false;
    					}
    				}
	    		};
    		};
    		// now loop through the objects and add to individual groups of licence shares
    		for(var i in aSharedBanks){
    			if(aSharedBanks[i].length <= 2){
	    			var sglue = ' and ';
	    		}else{
	    			var sglue = ', ';
	    		}
    			aLicenceHolders.push(aSharedBanks[i].join(sglue) + ' share a <a href="http://www.bankofengland.co.uk/pra/Pages/authorisations/fscs/bankingandsavings.aspx " target="_blank">banking authorisation</a>.');
    			for(var k in aSharedBanks[i]){
    				$(".tableWrapper td").each(function(){
    					if($(this).text() == aSharedBanks[i][k]){
    						$(this).css({'background-color':'#f7ff3d'});
    					}
    				});
    				$(".sharedLicense").addClass("atRisk");
    			}
    		}
    		
    		//add names of banks to the text
    		$('.sharedBanks').append(aLicenceHolders.join(' '));


    		if($('.sharedLicense').is('.sharedLicense') || bShowInfo) {
    			$('.infoBox').show();
    		}
    		$('.tableWrapper .col2').each(function(){
    			if($(this).next().hasClass('sharedLicense')){

    			}else{
    				riskNonSharedTotal	=	riskNonSharedTotal + parseInt($(this).next().text().replace('£','').replace(',',''));
    			}
    		})  		
    		$('.sharedLicense').each(function(){
    			riskSharedTotal = riskSharedTotal +  parseInt($(this).parents('tr').find('.col2').text().replace('£','').replace(',',''));
    			$(this).html('See below<span class="icon"></span>');
    		});
    		//if there are no shared authorisations and all the values in the savings are not higher than £85k, show the good news
    		var nAtRisk = $('.atRisk').length;
    		if(!bShowInfo && nAtRisk == 0 && $('#OverEightyFive').is(':checked')){
    			// $(".results.bad .floatRight").html($(".good .floatRight").html());
    			$(".results.bad .floatRight").hide();
    			$(".results.bad").append('<div class="floatRight goodAdded">' + $(".good .floatRight").html() + '</div>').show();
				restart();
			}
			if(bShowInfo && nAtRisk > 0 && riskSharedTotal  < 85000 && $('#OverEightyFive').is(':checked') && riskNonSharedTotal == 0){
				$(".results.bad .floatRight").hide();
    			$(".results.bad").append('<div class="floatRight goodAdded">' + $(".good .good2").html()  + '</div>').show();
    			restart();
			}


		};

        // add bank to list when button is clicked
        $('.secondQuestion .button').on('click', function() {
			addBank();
		});

		// initialize autocomplete
        $( "#bankName" ).autocomplete({ 
            source: function(req, response) {
            		term = stripNonAlphaNumeric(req.term);
	        		var re = $.ui.autocomplete.escapeRegex(term);
	        		var matcher = new RegExp(re, "i" );
	        		response($.grep(banks, function(item){return matcher.test(stripNonAlphaNumeric(item)); }) );
        	},
            minLength: 2,
            close: function(event){
            	addBank();	
            },
            search: function(event){
            	$(".secondQuestion #bankName").qtip('destroy');
            }
        });

        function stripNonAlphaNumeric(s){
		  var r = String(s).toLowerCase();
		  r = r.replace(new RegExp("[^A-z0-9 ]", 'g'), "");
		  return r;
		  
		}

        $.ajax({
        	cache: false,
        	url: '../fscs/js/data.json',
        	dataType: 'json',
        	contentType: 'application/json',
        	success: function(data){
        		
        		for (i = 0; i < data.banks.length; i++) {
        			rawData.push([data.banks[i].name, data.banks[i].provider]);
        		};
        		rawData.sort();
        		reset();
        	},
        	error: (function() { alert("An error has occurred trying to retrieve data. Please try again later"); })
        });
		// 
        $('input[type="radio"]').click(function () {
        	reset();
        });

        $('#submitTool').on('click', function(e){
        	coi_extended_data_new = {stage:'desktop_tool_submit'};
        	coi_container_track_new(coi_extended_data_new);
			$(".goodAdded").remove();
			$(".good2").hide();
        	e.preventDefault();
			if($('.bankEntry').is('.bankEntry')) {
				if($('#OverEightyFive').is(':checked')) {
					var bMissingValue	=	false;
					$('.bankEntry').each(function(){
						var savings = $(this).find('.savingsValue');
						if(savings.val() == ""){
							savings.focus().qtip("show");
							bMissingValue = true;
							return false;
						};
						if(savings.val() > 85) {
							$('.bad').find('.tableWrapper tbody').append('<tr><td class="col1">' + $(this).find('.bankName').text() + '</td><td class="col2">&pound;' + savings.val() + ',000</td><td class="borderLeft risk atRisk col3">&pound;<span class="savingRisk">' + (savings.val() - 85) + '</span>,000</td>');
						} else {
							$('.bad').find('.tableWrapper tbody').append('<tr><td class="col1">' + $(this).find('.bankName').text() + '</td><td class="col2">&pound;' + savings.val() + ',000</td><td class="borderLeft risk col3">&pound;0</td>');
						}

						for (i = 0; i < rawData.length; i++) {
			    			if($(this).find('.bankName').text() == rawData[i][0]) {
			    				selected.push([rawData[i][0], rawData[i][1], false]);
			    			}
			    		};
					});
					if(bMissingValue){return};
					restart();
					$(".results.bad").show();
					$(".results.bad .floatRight").show();
					$(".loadedContent").hide();
					$('.tableWrapper').jScrollPane();

					checkBanks();
				} else {
					$('.bankEntry').each(function(){
						$('.good').find('.tableWrapper tbody').append('<tr><td class="col1">' + $(this).find('.bankName').text() + '</td><td class="covered">Covered</td></tr>');
					});
					restart();
					$(".results.good").show();
					$(".loadedContent").hide();
					$('.tableWrapper').jScrollPane();

					for (i = 0; i < rawData.length; i++) {
						$('.bankEntry').each(function(){
			    			if($(this).find('.bankName').text() == rawData[i][0]) {
			    				selected.push([rawData[i][0], rawData[i][1], false]);
			    			}
			    		})
		    		};

					checkBanks();
				}
			}
		});
    };
    // end bank tool

	var runOnce = false;

	function coins () {
		var stage = $('.coins'),
			coin,
			count = 0,
			timer;

		if (runOnce == false) {
			runOnce = true;
			timer = window.setInterval(function(){
				coin = document.createElement('img');
				coin.src = '../fscs/img/coin' + Math.floor(Math.random() * 5 + 1) + '.png';
				coin.className = 'coin';
				coin.style.left = '' + Math.floor(Math.random() * 340) + 'px';
				stage.append($(coin));
				animateCoin($(coin), Math.floor(Math.random() * 3 + 1));
				count++
				if (count >= 50) {
					window.clearInterval(timer);
					$('.coin').each(function(){
						var rotate = $(this).css('-webkit-transform');
						$(this).stop().removeClass('rotate');
						$(this).css({'transform':rotate});
					})
				}
			}, 100);
		}
	};

	function animateCoin($coin, layer) {
		if (layer == 1) $coin.css({'z-index': 3}).animate({'top': '100%'}, 3000, 'linear', function(){
			$(this).remove();
		}).addClass('rotate');
		if (layer == 2) $coin.css({'z-index': 2}).animate({'top': '100%'}, 4000, 'linear', function(){
			$(this).remove();
		}).addClass('rotate');
		if (layer == 3) $coin.css({'z-index': 1}).animate({'top': '100%'}, 5000, 'linear', function(){
			$(this).remove();
		}).addClass('rotate');
	};

	var runOnceChain = false;

	function chain () {

		if (runOnceChain == false) {
			$('img.hand').animate({'left':200}, 1000, function(){
				$(this).fadeOut(1000);
			});
			$('img.chain').animate({'left':206}, 1000);
			$('.blue-block').animate({'left':117}, 1000,function(){
				$(this).fadeOut(800);
			});
		}
	};


	 // Contact form
    var intervalId;
	$("#contact #submit-button").click(function(e){
		e.preventDefault();
		var bEmptyFields = false;
		$("#name, #email , #query").each(function(){
			if($(this).val() === ""){
				$(this).qtip('show').focus();
				bEmptyFields = true;
				return false;
			}
		});
		if(bEmptyFields){return false};
		
		var dataString = $("#contact").serialize();
		$.ajax(
			{
	          url : "/protected/inc/contact_process.php",
	          type: "POST",
	          data: dataString,
	          datatype:"json",
	          complete:function(data){
					$('#sixth .section_content form').fadeOut(500);
					setTimeout(function(){
				        $('#sixth .section_content').append(data.responseText).fadeIn();}, 500);
					setTimeout(function(){
				        $('#sixth').slideUp(500);}, 5000)
					}
	        });
	    return false;
    });

    // initialise stuff on page load
	
	$('.bankList, .tableWrapper').jScrollPane(); // custom scroll bars

	$('body').addClass('has-js'); // add has-js class to body

	//set up variable to get callback from iframes. Then check if need to scroll somewhere after iframe close
	
	$('.iframe').fancybox({
		hideOnOverlayClick:true,
		onClosed:function(){
            if(iFrameCb != ""){
            	$('html,body').stop().animate({scrollTop:$(iFrameCb).offset().top-107}, 500); // smooth scroll to the top of the linked section
            	iFrameCb = "";
            }
        }
		});

	bankTool(); // bank tool

	setupLabel(); // checkboxes

	$('#sixth').hide(); // hide contact form

	$('.bankFader img').shuffle();

	// bank logo slideshow
    $('.bankFader img:gt(0)').hide();
	setInterval(function(){
		$('.bankFader :first-child').fadeOut()
		.next('img').fadeIn(500)
		.end().appendTo('.bankFader');
	}, 3000);
	
});
